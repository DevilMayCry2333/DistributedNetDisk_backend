<?php
/**
 * Created by PhpStorm.
 * User: youkaiyu
 * Date: 2018-11-30
 * Time: 12:21
 */

namespace app\index\controller;

use app\index\model\FileSearchMod;
use think\Controller;

class FileSearch extends Controller
{

//    public function test(){
//        return "hh";
//    }
    public function search(){
//        return "OK";
        $se_name = $_GET["se_name"];
        $fileSearch = new FileSearchMod();

        $fileSearch->search($se_name);

    }

}