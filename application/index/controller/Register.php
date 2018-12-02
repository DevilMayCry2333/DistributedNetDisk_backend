<?php
/**
 * Created by PhpStorm.
 * User: SV
 * Date: 2018/11/29
 * Time: 20:52
 */

namespace app\index\controller;
use think\Controller;
header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Connection, User-Agent, Cookie,token');
header("Content-Type: text/html;charset=utf-8");
class Register extends  Controller
{

    public function register(){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $model = new \app\index\model\RegisterModller();
        if( $model->register($username,$password)){

            mkdir("upload/".$username);
            $this->redirect("http://localhost/netDisk_View/DistributedNetDisk_backend/View/page/login/index.html",302);
        }
        else{
           echo "<script>
                        alert('用户已存在！请重新注册');
                        window.location.href='http://localhost/netDisk_View/DistributedNetDisk_backend/View/page/register/register.html';
                </script>";
        }
    }


}