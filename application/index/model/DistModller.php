<?php
/**
 * Created by PhpStorm.
 * User: SV
 * Date: 2018/11/28
 * Time: 19:41
 */

namespace app\index\model;

use think\Model;
class DistModller extends Model{

    protected $table = "netdisk_userfile";
    public function getUserFile($username,$pageid){

        $select_res=$this->where('username','=',$username)->select();


        $page_num=$this->page($select_res);
        //var_dump($page_num);
        $page_index=($pageid-1)*10;
        $page_file=$page_index+10;
        $res_array=array();
        $user_json=array();

        $res_array['username']=$username;
        $res_array['pageNum']=$page_num;
        $res_array['pageid']=$pageid;
       //
        for($i=0,$page_index;$page_index<$page_file;$page_index++)
        {

            $file_info_json=array();
            $file_info_json["name"]=$select_res[$page_index]->filename;
            $file_info_json["extension"]=$select_res[$page_index]->ext;
            $file_info_json["date"]=$select_res[$page_index]->mod_date;
            $file_info_json["type"]=$select_res[$page_index]->type;
            $file_info_json["id"]=$select_res[$page_index]->id;
            $file_info_json["size"]=$select_res[$page_index]->size;
            $file_info_json["crc"]=$select_res[$page_index]->crc;
            $file_info_json=json_encode($file_info_json);

            $user_json[$i]=$file_info_json;
            $i=$i+1;
            //var_dump($i);
            //$res_array[$page_index]['id']=$select_res[$page_index]->id;
            //echo $select_res[$page_index]->id;
        }
            $res_array['directory']=$user_json;
            //var_dump($res_array);
            $res_array=json_encode($res_array);
            return $res_array;

    }
    public function page($array){
        $page_num=count($array);
        if($page_num<=10){
            return 1;
        }
        else{
            if($page_num%10==0){
                return $page_num/10;
            }
            else{
                return (int)($page_num/10+1);
            }
        }
    }
}