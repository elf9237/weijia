<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageAjax
 *
 * @author fanyouyong
 */
class PageAjax {
     public  $totaPage;
    public  $currentPage;
    public $pageList = array();
    public  $header;
    public  $count=0;
    public $limit;
    public $pageSize=10;
   public function __construct($total, $currentPage,$pageSize){
			$this->count=$total;
			$this->pageSize=$pageSize;
			$this->currentPage=!empty($currentPage) ? (int)$currentPage : 1;
			$this->totaPage=ceil($this->count/$this->pageSize);
			$this->limit=$this->setLimit();
		}
    private function setLimit(){
			return "Limit ".($this->currentPage-1)*$this->pageSize.", {$this->pageSize}";
		}            
    
    //put your code here
}
