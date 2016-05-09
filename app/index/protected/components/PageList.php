<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageList
 *
 * @author fanyouyong
 */
class PageList {
 
    public $pageAjax;
  
    public $sql;
    
    public function __construct($sql, $page,$pageSize){
         $connection = Yii::app()->db;
       $count=$connection->createCommand("select count(*) from (".$sql.") tt where 1=1")->queryScalar();
       $pageaj=new PageAjax($count, $page, $pageSize);
       $command = $connection->createCommand($sql.$pageaj->limit);
       $rows=$command->queryAll();
       $pageaj->pageList=$rows;
       $this->pageAjax=$pageaj;
                         
		}
      
}
