<?php
/**
 * Created by PhpStorm.
 * User: youkaiyu
 * Date: 2018-12-01
 * Time: 11:28
 */

namespace app\index\controller;


use app\index\model\NewFolderModller;
use think\Controller;

class NewFolder extends Controller
{
    public function newfolder(){
        $username = $_GET["username"];
        $newFolder = $_GET["newFolder"];
        $curdir=$_GET["curdir"];
        $pathname = "D:\\xampp\htdocs\\DistributedNetDisk\\public\\upload\\";
        $filetype="dir";
        //$pathname='/public/upload/';
        if( $curdir==""){
            $allpath= $pathname.$username."\\".$newFolder;
        }
        else{
            $allpath= $pathname.$username."\\". $curdir."\\".$newFolder;
        }
        if (file_exists($allpath))
        {
            echo "Folder already exists.";
        }
        else{
            mkdir($allpath);
            $mod_date = date("Y-M-D",time());
            $newFolderMod= new NewFolderModller();
            $newFolderMod->newfolder($username,$newFolder,$filetype,'0',"DistributedNetDisk/public/upload/". $username. "/". $curdir."/",$mod_date,1);
        }

        if(chmod($allpath, 0777)){
            return "权限修改成功";
        } // 十进制数，可能不对
    }

}