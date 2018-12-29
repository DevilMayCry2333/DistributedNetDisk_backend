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
header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Connection, User-Agent, Cookie,token');
header("Content-Type: text/html;charset=utf-8");
/**
 * Class Index
 * Index控制器
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
class FileUpload extends Controller
{

    /**
     * Index的控制器方法
     *
     * @return string null
     */
    public function test2()
    {
        return "hello";
    }

    /**
     * Index的控制器方法
     *
     * @return string null
     */
    public function upload()
    {
        header("Content-Type: text/html;charset=utf-8");
        $username = $_POST["username"];
        $curdir = $_POST["curdir"];
        cookie('usercookie', $username);
        if ($curdir=="") {
            $allpath="upload/" . $username. "/".$_FILES["file"]["name"];
        } else {
            $allpath="upload/" . $username. "/". $curdir."/".$_FILES["file"]["name"];
        }
        if (file_exists($allpath)) {
            echo "already exists.";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], $allpath);
            $FileUploadMod =new \app\index\model\FileUploadMod();

            $session_user =file_get_contents('test.txt');
            $mod_date = date("Y-m-d", time());
            if ($curdir=="") {
                $filepath="DistributedNetDisk/public/upload/".$username."/";
            } else {
                $filepath="DistributedNetDisk/public/upload/".$username."/".$curdir."/";
            }
            $FileUploadMod->upload($username, $_FILES["file"]["name"], $_FILES["file"]["type"], $_FILES["file"]["size"] / 1024, $filepath, $mod_date, 0);
        }
    }
}