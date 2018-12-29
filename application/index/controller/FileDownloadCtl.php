<?php
/**
 * Created by PhpStorm.
 * User: Joker
 * Date: 2018/11/29
 * Time: 20:52
 * * PHP version 7
 *
 * @category PHP_Class
 *
 * @package Default
 *
 * @author Joker <joker@jokerl.com>
 *
 * @license MIT https://www.baidu.com
 *
 * @link https://www.baidu.com
 */
namespace app\index\controller;


use think\Controller;
use ZipArchive;
/**
 * Class FileUpload
 * FileUpload控制器
 *
 * @category PHP_Class
 *
 * @package Default
 *
 * @author Joker <joker@jokerl.com>
 *
 * @license MIT https://www.baidu.com
 *
 * @link https://www.baidu.com
 */
class FileDownloadCtl extends Controller
{
    /**
     * 后端从前端接收文件列表参数，打包成test.zip后返回给前端
     *
     * @return void
     */
    public function Download_File()
    {
        $f_cnt = $_GET["cnt"];
        $username = $_GET["username"];
        for ($i = 1 ; $i <= $f_cnt ; $i++) {
            $filetmp[$i] = $_GET["userfile".$i];
            $zip = new ZipArchive;
            $zipname = "test.zip";
            $pathname = "/var/www/html/DistributedNetDisk/public/upload/";
            $relPathName = $pathname.$username."/".$filetmp[$i];
            $myfile = fopen($relPathName, "r") or die("Unable to open file!");
            $myfilecontent =  fread($myfile, filesize($relPathName));
            fclose($myfile);
            $res = $zip->open($zipname, ZipArchive::CREATE);
            if ($res === true) {

                $zip->addFromString($filetmp[$i], $myfilecontent);
                $zip->close();
            } else {
                echo 'failed';
            }
        }

        echo $zipname;
    }




}