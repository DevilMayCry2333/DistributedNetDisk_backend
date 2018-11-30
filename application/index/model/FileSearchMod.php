<?php
/**
 * Created by PhpStorm.
 * User: youkaiyu
 * Date: 2018-11-30
 * Time: 18:25
 */

namespace app\index\model;


use think\db\exception\DataNotFoundException;
use think\db\exception\ModelNotFoundException;
use think\exception\DbException;
use think\Model;

class FileSearchMod extends Model
{
    protected $table = "netdisk_userfile";

    public function search($filename){
        try {
            $res = $this->where("filename","like", '%'.$filename.'%')->select();
        } catch (DataNotFoundException $e) {
        } catch (ModelNotFoundException $e) {
        } catch (DbException $e) {
        }
       $decode_res = json_decode($res,true);
//        var_dump($decode_res);
        $pageNum = count($decode_res,0);
        $pageId = 1;

        $array = [
            "username" => "awei",
            "pageNum" => $pageNum,
            "pageId" => $pageId,
            "directory"=>[],
        ];
        for ($i = 0 ; $i < count($decode_res,0) ; $i++){
            $array["directory"][$i] = $decode_res[$i];
        }
        echo json_encode($array);
    }

}