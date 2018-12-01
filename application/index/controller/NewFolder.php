<?php
/**
 * Created by PhpStorm.
 * User: youkaiyu
 * Date: 2018-12-01
 * Time: 11:28
 */

namespace app\index\controller;


use think\Controller;

class NewFolder extends Controller
{
    public function newfolder(){
        $username = $_GET["username"];
        $folder = $_GET["folder"];
        $newFolder = $_GET["newFolder"];
        $pathname = "D:\\xampp\htdocs\\DistributedNetDisk\\public\\upload\\";
        //$pathname='/public/upload/';
        if($folder==""){
            $allpath= $pathname.$username."\\".$newFolder;
        }
        else{
            $allpath= $pathname.$username."\\".$folder."\\".$newFolder;
        }
        mkdir($allpath);
        if(chmod($allpath, 0777)){
            return "SUCCESS";
        } // 十进制数，可能不对
    }

}