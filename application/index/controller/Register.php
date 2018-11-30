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
        $username = $_GET["username"];
        $password = $_GET["password"];
        $model = new \app\index\model\RegisterModller();
        if( $model->register($username,$password)){

            mkdir("upload/".$username);
            $this->redirect("http://localhost/DistributedNetDisk/public/static/login/page/login/index.html",302);
        }
        else{
           echo false;
        }
    }


}