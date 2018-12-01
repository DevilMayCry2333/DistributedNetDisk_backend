<?php
/**
 * Created by PhpStorm.
 * User: youkaiyu
 * Date: 2018/11/26
 * Time: 01:45
 */

namespace app\index\controller;


use think\Controller;
header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Connection, User-Agent, Cookie,token');
header("Content-Type: text/html;charset=utf-8");
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
//        echo "Upload: " . $_FILES["file"]["name"] . "<br />";
//        echo "Type: " . $_FILES["file"]["type"] . "<br />";
//        echo "Size: " . ($_FILES["file"]["size"]) . " Bytes<br />";
//        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
        $username = $_POST["username"];
        $curdir = $_POST["curdir"];
        if($curdir==""){
            $allpath="upload/" . $username. "/".$_FILES["file"]["name"];
        }else{
            $allpath="upload/" . $username. "/". $curdir."/".$_FILES["file"]["name"];
        }
        if (file_exists($allpath))
        {
            echo "already exists.";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],$allpath);
            $FileUploadMod =new \app\index\model\FileUploadMod();

            $session_user =file_get_contents('test.txt');
            $mod_date = date("Y-M-D",time());


            $FileUploadMod->upload($username,$_FILES["file"]["name"],$_FILES["file"]["type"],$_FILES["file"]["size"] / 1024,"DistributedNetDisk/public/upload/". $username. "/". $curdir,$mod_date,0);
        }


        cookie('usercookie',$username);


    }
}