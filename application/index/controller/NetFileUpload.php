<?php
namespace app\index\controller;
use think\Controller;

class NetFileUpload extends Controller {
    private $filepath = './upload/13720815215/'; //上传目录
    private $tmpPath; //PHP文件临时目录
    private $blobNum; //第几个文件块
    private $totalBlobNum; //文件块总数
    private $fileName; //文件名
    public function index(){
        $this->tmpPath = $_FILES['file']['tmp_name'];
        $this->blobNum = $_POST['blob_num'];
        $this->totalBlobNum = $_POST['total_blob_num'];
        $this->fileName = $_POST['file_name'];
        $FileUploadMod =new \app\index\model\FileUploadMod();
        $FileUploadMod->upload('13720815215', $_POST['file_name'], 'file', $_POST["filesize"], $_POST["filepath"], $_POST['mod_date'], 0);
        $this->moveFile();
        $this->fileMerge();
        $this->apiReturn();
    }
    //判断是否是最后一块，如果是则进行文件合成并且删除文件块
    private function fileMerge(){
//        echo "blob".$this->blobNum;
        if($this->blobNum >= $this->totalBlobNum){
            $blob = '';
            for($i=1; $i<= $this->totalBlobNum; $i++){
                $blob .= file_get_contents($this->filepath.'/'. $this->fileName.'__'.$i);
                // var_dump($blob);
            }
            file_put_contents($this->filepath.'/'. $this->fileName,$blob);
            $this->deleteFileBlob();
        }
//        chmod($this->fileName, 0777);
    }
    //删除文件块
    private function deleteFileBlob(){
        for($i=1; $i<= $this->totalBlobNum; $i++){
            @unlink($this->filepath.'/'. $this->fileName.'__'.$i);
        }
    }
    //移动文件
    private function moveFile(){
        $this->touchDir();
        $filename = $this->filepath.'/'. $this->fileName.'__'.$this->blobNum;
        move_uploaded_file($this->tmpPath,$filename);
        chmod($filename, 0777);
    }
    //API返回数据
    public function apiReturn(){
        $data['msg2']= $this->blobNum."total".$this->totalBlobNum;
        if($this->blobNum == $this->totalBlobNum){
            if(file_exists($this->filepath.'/'. $this->fileName)){
                $data['code'] = 2;
                $data['msg'] = 'success';
                $data['file_path'] = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['DOCUMENT_URI']).str_replace('.','',$this->filepath).'/'. $this->fileName;
//                $data['file_path'] = $this->filepath;
            }
        }else{
            if(file_exists($this->filepath.'/'. $this->fileName.'__'.$this->blobNum)){
                $data['code'] = 1;
                $data['msg'] = 'waiting for all';
                $data['file_path'] = '';
            }
        }
        header('Content-type: application/json');
        echo json_encode($data);
    }
    //建立上传文件夹
    private function touchDir(){
        if(!file_exists($this->filepath)){
            return mkdir($this->filepath);
        }
    }
}
//实例化并获取系统变量传参
//echo $_POST['file_name'];
//$upload = new NetFileUpload($_FILES['file']['tmp_name'],$_POST['blob_num'],$_POST['total_blob_num'],$_POST['file_name']);
$FileUploadMod =new \app\index\model\FileUploadMod();
//echo $this->filepath.$this->fileName;
//调用方法，返回结果
$FileUploadMod->upload('13720815215', $_POST['file_name'], 'file', $_POST["filesize"], $_POST["filepath"], $_POST['mod_date'], 0);
//$upload->apiReturn();