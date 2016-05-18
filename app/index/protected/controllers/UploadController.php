<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UploadController
 *
 * @author fanyouyong
 */
class UploadController extends BaseController {
   
    public  function actionUpload(){
       $ar=new AjaxReturn (); 
       $ar->status=false;
  $picname = $_FILES['file']['name']; 
    $picsize = $_FILES['file']['size']; 
    if ($picname != "") { 
        if ($picsize > 51200000) { //限制上传大小 
            $ar->content='图片太大！！';
            echo json_encode($ar); 
            exit; 
        } 
        $type = strstr($picname, '.'); //限制上传格式 
        if ($type != ".gif" && $type != ".jpg") { 
             $ar->content='图片格式不对！！';
            echo json_encode($ar); 
            exit; 
        } 
        $rand = rand(100, 999); 
        $pics = date("YmdHis") . $rand .$picname. $type; //命名图片名称 
        //上传路径 
        $uploadDir='upload';
        if (!file_exists($uploadDir)) {
        @mkdir($uploadDir);
        }
        $pic_path = $uploadDir."/". $pics; 
        move_uploaded_file($_FILES['file']['tmp_name'], $pic_path); 
    } 
    $size = round($picsize/1024,2); //转换成kb 
    $arr = array( 
        'name'=>$picname, 
        'pic'=>$pics, 
        'size'=>$size,
        'pic_path'=> $pic_path 
    ); 
    $ar->status=true;
    $ar->params=$arr;
    echo json_encode($ar); //输出json数据 



    }
}
