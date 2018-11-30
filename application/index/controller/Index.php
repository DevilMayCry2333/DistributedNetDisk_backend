<?php
namespace app\index\controller;
use app\index\model\DistModller;
use think\Controller;

header("Content-Type: text/html;charset=utf-8");
class Index extends Controller
{

    public function index()
    {
        return '<script>window.location.href = "http://localhost/DistributedNetDisk/public/static/login/index.html" </script>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    public function hey(){
        return 'test';
    }

    public function showPage(){

        return "OK";
    }

    public function yes(){
        
        if($_FILES){
            echo 1;

        }else{
            echo 2;
        }
    }
    public function showDefault(){
        $user_file=new DistModller();
        return $user_file->getUserFile("admin",2);
    }
    public function showPic(){

        return "OK";
    }
}
