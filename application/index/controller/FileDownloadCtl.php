<?php
/**
 * Created by PhpStorm.
 * User: youkaiyu
 * Date: 2018-11-27
 * Time: 19:10
 */

namespace app\index\controller;


use think\Controller;
use ZipArchive;

class FileDownloadCtl extends Controller
{
    public function download_file(){
       $f_cnt = $_GET["cnt"];
       $username = $_GET["username"];
        for ($i = 1 ; $i <= $f_cnt ; $i++){
            $filetmp[$i] = $_GET["userfile".$i];
            $zip = new ZipArchive;
            $zipname = "test.zip";
            $pathname = "/var/www/html/DistributedNetDisk/public/upload/";
            $relPathName = $pathname.$username."/".$filetmp[$i];
//            var_dump($pathname.$filetmp[$i]);
            $myfile = fopen($relPathName, "r") or die("Unable to open file!");
            $myfilecontent =  fread($myfile,filesize($relPathName));
            fclose($myfile);
            $res = $zip->open($zipname, ZipArchive::CREATE);
            if ($res === TRUE) {

                $zip->addFromString($filetmp[$i], $myfilecontent);
                $zip->close();
            } else {
                echo 'failed';
            }
        }

        echo $zipname;


    }




}