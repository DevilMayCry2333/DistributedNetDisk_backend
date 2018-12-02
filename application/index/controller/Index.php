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
        header('Content-Type:text/html; charset=utf-8');
        $username=$_GET["username"];
        //var_dump($username);
        $user_file=new DistModller();
        return $user_file->getUserFile($username,1,null,"");
    }
    public function enterDir(){
        header('Content-Type:text/html; charset=utf-8');
        $username=$_GET["username"];
        $curdir=$_GET['curdir'];
        //var_dump($username);
        $user_file=new DistModller();
        return $user_file->getUserFile($username,1,null,$curdir);

    }
    public function showPic(){
        header('Content-Type:text/html; charset=utf-8');
        $username=$_GET["username"];
        $user_file=new DistModller();
        return $user_file->getUserFile($username,1,'pic');
    }
    public function showDoc(){
        header('Content-Type:text/html; charset=utf-8');
        $username=$_GET["username"];
        $user_file=new DistModller();
        return $user_file->getUserFile($username,1,'doc');
    }
    public function showMov(){
        header('Content-Type:text/html; charset=utf-8');
        $username=$_GET["username"];
        $user_file=new DistModller();
        return $user_file->getUserFile($username,1,'mov');
    }
    public function showMus(){
        header('Content-Type:text/html; charset=utf-8');
        $username=$_GET["username"];
        $user_file=new DistModller();
        return $user_file->getUserFile($username,1,'mus');
    }
    public function showOth(){
        header('Content-Type:text/html; charset=utf-8');
        $username=$_GET["username"];
        $user_file=new DistModller();
        return $user_file->getUserFile($username,1,'oth');
    }
}
