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
class Register extends  Controller
{

    /**
     * 注册的控制器逻辑
     *
     * @return void
     */
    public function register()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $model = new \app\index\model\RegisterModller();
        $res = $model->register($username, $password);
        //        var_dump($res);
        if ($res==true) {
            mkdir("upload/".$username);
            chmod("upload/".$username, 0777);
            //            echo "<script>
            //                        window.location.href='https://hifafu' +
            //                         '.com/DistributedNetDisk/' +
            //                          'public/static/View/page/register/' +
            //                          'register.html';
            //                </script>";

            $this->redirect("https://hifafu.com/DistributedNetDisk/public/static/View/page/login/index.html", 302);
        } else {
            echo "<script>
                        alert('用户已存在！请重新注册');
                        window.location.href='https://hifafu.com/' +
                         'DistributedNetDisk/' +
                         'public/static/View/page/register/register.html';
                </script>";

        }
    }


}