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


use app\index\model\NewFolderModller;
use think\Controller;
use think\process\pipes\Unix;
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
class NewFolder extends Controller
{
    /**
     * 新建文件夹的后端接口
     *
     * @return string
     */
    public function newfolder()
    {
        $username = $_GET["username"];
        $newFolder = $_GET["newFolder"];
        $curdir=$_GET["curdir"];
        $pathname = "/var/www/html/DistributedNetDisk/public/upload/";
        $filetype="dir";
        //$pathname='/public/upload/';
        if ($curdir=="") {
            $allpath= $pathname.$username."/".$newFolder;
        } else {
            $allpath= $pathname.$username."/". $curdir."/".$newFolder;
        }
        if (file_exists($allpath)) {
            echo "Folder already exists.";
        } else {
            mkdir($allpath);
            $mod_date = date("Y-m-d", time());
            $newFolderMod= new NewFolderModller();
            if ($curdir==null) {
                $datapath = "DistributedNetDisk/public/upload/". $username. "/";
            } else {
                $datapath = "DistributedNetDisk/public/upload/". $username. "/" .$curdir."/";
            }


            $newFolderMod->newfolder(
                $username,
                $newFolder, $filetype, '0',
                $datapath, $mod_date, 1
            );
        }

        if (chmod($allpath, 0777)) {
            return "权限修改成功";
        } // 十进制数，可能不对
    }

}