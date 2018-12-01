<?php
/**
 * Created by PhpStorm.
 * User: SV
 * Date: 2018/11/28
 * Time: 19:41
 */

namespace app\index\model;

use think\Model;
header('Content-Type:text/html; charset=utf-8');
class DistModller extends Model{

    protected $table = "netdisk_userfile";

    public function arrayRecursive(&$array, $function, $apply_to_keys_also = false)
    {
        static $recursive_counter = 0;
        if (++$recursive_counter > 1000)
        {
            die('possible deep recursion attack');
        }
        foreach ($array as $key => $value)
        {
            if (is_array($value))
            {
                $this->arrayRecursive($array[$key], $function, $apply_to_keys_also);
            }
            else
            {
                $array[$key] = $function($value);
            }
            if ($apply_to_keys_also && is_string($key))
            {
                $new_key = $function($key);
                if ($new_key != $key)
                {
                    $array[$new_key] = $array[$key];
                    unset($array[$key]);
                }
            }
        }
        $recursive_counter--;
    }
    public function json1($array)
    {
        $this->arrayRecursive($array, 'urlencode', true);
        $json = json_encode($array);
        return urldecode($json);
    }

    public function getUserFile($username,$pageid){
        header("Content-Type: text/html;charset=utf-8");
        $this->execute('SET NAMES utf8');
        $select_res=$this->where('username',$username)->select();
        echo "!!!______________________!!!";
        var_dump($select_res[0]->filetype);
       // var_dump($file_num);
        echo "*******";
         var_dump($select_res);

        echo "*******";
        $page_num=$this->page($select_res);

        //var_dump($page_num);
        if($page_num==1){
            $page_index=0;
            $page_file=count($select_res);

        }
        else if($pageid==$page_num){
            $page_index=$pageid*10;
            $page_file=count($select_res);
        }
        else{
            $page_index=($pageid-1)*10;
            $page_file=$page_index+10;
        }

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
            echo "------------------------";
            var_dump($select_res[$page_index]->filename);
            $file_info_json["extension"]=$select_res[$page_index]->ext;
            $file_info_json["date"]=$select_res[$page_index]->mod_date;
            $file_info_json["type"]=$select_res[$page_index]->filetype;
            echo "------------------------";
            var_dump($select_res[$page_index]->filetype);
            $file_info_json["id"]=$select_res[$page_index]->id;
            $file_info_json["size"]=$select_res[$page_index]->size;
            $file_info_json["crc"]=$select_res[$page_index]->crc;
            //$file_info_json=json_encode($file_info_json);

            $user_json[$i]=$file_info_json;
            $i=$i+1;
            //var_dump($i);
            //$res_array[$page_index]['id']=$select_res[$page_index]->id;
            //echo $select_res[$page_index]->id;
        }

            $res_array['directory']=$user_json;


              // var_dump($this->json1($res_array));

            //var_dump($res_array);
//            $res_array=json_encode($res_array);

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