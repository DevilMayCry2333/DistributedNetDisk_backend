<?php
/**
 * Created by PhpStorm.
 * User: youkaiyu
 * Date: 2018/11/26
 * Time: 01:45
 */

namespace app\index\controller;


use think\Controller;

class FileUpload extends Controller
{

    /**
     * @return bool
     */
    public function test2()
    {
        return "hello";
    }


    public function upload(){
        header("Content-Type: text/html;charset=utf-8");
        echo "Upload: " . $_FILES["file"]["name"] . "<br />";
        echo "Type: " . $_FILES["file"]["type"] . "<br />";
        echo "Size: " . ($_FILES["file"]["size"]) . " Bytes<br />";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
        $username = $_GET["username"];

        if (file_exists("upload/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],
                "upload/" . $username. "/".$_FILES["file"]["name"]);
            echo "Stored in: " . "upload/" . $username."/" .$_FILES["file"]["name"];
        }
        $FileUploadMod =new \app\index\model\FileUploadMod();

        $session_user =file_get_contents('test.txt');
        $mod_date = time();


        $FileUploadMod->upload($session_user,$_FILES["file"]["name"],$_FILES["file"]["type"],$_FILES["file"]["size"] / 1024,"DistributedNetDisk/public/upload",$mod_date);


        $this->redirect("http://localhost/DistributedNetDisk/public/static/login/page/netdisk/index.html?username=$username",302);

    }
}