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
        $pathname = "/Library/WebServer/Documents/DistributedNetDisk/public/upload/";
        $allpath= $pathname.$username."/".$folder."/".$newFolder;
        mkdir($allpath);
        if(chmod($allpath, 0777)){
            return "SUCCESS";
        } // 十进制数，可能不对
    }

}