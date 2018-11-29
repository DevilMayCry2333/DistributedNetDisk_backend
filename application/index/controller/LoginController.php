<?php
/**
 * Created by PhpStorm.
 * User: youkaiyu
 * Date: 2018/11/23
 * Time: 20:36
 */

namespace app\index\controller;
use think\Controller;
header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Connection, User-Agent, Cookie,token');
header("Content-Type: text/html;charset=utf-8");

/**
 * 浏览器第一次在处理复杂请求的时候会先发起OPTIONS请求。路由在处理请求的时候会导致PUT请求失败。
 * 在检测到option请求的时候就停止继续执行
 */
if($_SERVER['REQUEST_METHOD'] == 'OPTIONS'){
    exit;
}


class LoginController extends Controller
{


    public function login(){
        header("Content-Type: text/html;charset=utf-8");
        header("Access-Control-Allow-Origin: * ");
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Connection, User-Agent, Cookie,token');
        header("Content-Type: text/html;charset=utf-8");

        $username = $_POST["username"];
        $password = $_POST["password"];
        if($username!=null && $password!=null){


            $user_res = new \app\index\model\LoginModller();
            if($user_res->login($username,$password))
                $this->redirect("http://localhost/netDisk_View/DistributedNetDisk_backend/View/page/netdisk/index.html?username=$username",302);
            else
               echo false;
        }

    }

}