<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SysteminitController
 *
 * @author fanyouyong
 */
class SysteminitController extends CController {
    
    public function actionIndex() {
      
    }
    
        public function actionOutExcel(){  
                //echo  Yii::app()->request->baseUrl;  
                $danju = User::model()->findAll("type !='admin'");  
               
                  
                ob_end_clean();  
                ob_start();  
                  
                /** PHPExcel */  
                //Yii::import('application.vendors.*');  
//                include_once(dirname(dirname(__FILE__)).'\extensions\PHPExcel.php');  
//                include_once(dirname(dirname(__FILE__)).'\extensions\PHPExcel\Writer\Excel2007.php');  
                $objPHPExcel = new PHPExcel();  
                  
                $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")  
                                             ->setLastModifiedBy("Maarten Balliauw")  
                                             ->setTitle("Office 2007 XLSX Test Document")  
                                             ->setSubject("Office 2007 XLSX Test Document")  
                                             ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")  
                                             ->setKeywords("office 2007 openxml php")  
                                             ->setCategory("Test result file");  
                  
                $objPHPExcel->setActiveSheetIndex(0)  
                            ->setCellValue('A1', '用户名')  
                            ->setCellValue('B1', '电话号码')  
                            ->setCellValue('C1', '类别')  
                            ->setCellValue('D1', '地区')  
                           ;  
      
          
                if(!empty($danju)){  
                    $i =2;  
                    foreach ($danju as  $one){  
                        $leibie = '个人';  
                        if($one->type=="0")
                            $leibie="平台";
                        if($one->type=="2")
                            $leibie="代理商";
                          
                        $objPHPExcel->setActiveSheetIndex(0)  
                            ->setCellValue("A$i", $one->username)  
                            ->setCellValue("B$i", $one->login_id)  
                            ->setCellValue("C$i", "$leibie")  
                            ->setCellValue("D$i", $one->zone)  
                          ;  
                       $i++;          
                    }  
                }             
                $objPHPExcel->getActiveSheet()->setTitle('用户清单');  
                $objPHPExcel->setActiveSheetIndex(0);  
    //          $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
    //          $objWriter->save(str_replace('.php', '.xlsx', __FILE__));  
                $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);  
                  
                header("Pragma: public");  
                header("Expires: 0");  
                //header('Content-Type: application/vnd.ms-excel;charset=utf8');  
                header("Cache-Control:must-revalidate, post-check=0, pre-check=0");  
                header("Content-Type:application/force-download");  
                header("Content-Type:application/vnd.ms-execl");  
                header("Content-Type:application/octet-stream");  
                header("Content-Type:application/download");  
                $fireName = '用户单';  
                header("Content-Disposition:attachment;filename=$fireName.xls");  
                header("Content-Transfer-Encoding:binary");  
                $objWriter->save("php://output");  
      
                Yii::app()->end();  
                spl_autoload_register(array('YiiBase','autoload'));  
        }  
        
        
        
          public function actionExportTixian(){
       
       $sql="select "
               . "t.* ,t1.zone "
               . "from cy_tixian t join cy_user t1 on(t1.id=t.user_id)  where 1=1 and t.status =1 " ;
       if(isset($_GET['bTime'])&&isset($_GET['eTime'])){
          $sql.=" and t.create_time >= ".$_GET['bTime']."  and t.create_time<=".$_GET['eTime']." "; 
       }
       $sql.=" and  t1.province='".$_GET['province']."' and t1.city='".$_GET['city']."' and t1.zone='".$_GET['zone']."'";
       $connection = Yii::app()->db;
        $command = $connection->createCommand($sql);
         $rows=$command->queryAll();
         
          ob_end_clean();  
                ob_start();  
                  
                /** PHPExcel */  
                //Yii::import('application.vendors.*');  
//                include_once(dirname(dirname(__FILE__)).'\extensions\PHPExcel.php');  
//                include_once(dirname(dirname(__FILE__)).'\extensions\PHPExcel\Writer\Excel2007.php');  
                $objPHPExcel = new PHPExcel();  
                  
                $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")  
                                             ->setLastModifiedBy("Maarten Balliauw")  
                                             ->setTitle("Office 2007 XLSX Test Document")  
                                             ->setSubject("Office 2007 XLSX Test Document")  
                                             ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")  
                                             ->setKeywords("office 2007 openxml php")  
                                             ->setCategory("Test result file");  
                  
                $objPHPExcel->setActiveSheetIndex(0)  
                            ->setCellValue('A1', '地区')  
                            ->setCellValue('B1', '状态')  
                            ->setCellValue('C1', '金额')  
                            ->setCellValue('D1', '时间')  
                           ;  
      
          
                if(!empty($rows)){  
                    $i =2;  
                    foreach ($rows as  $one){  
                        $objPHPExcel->setActiveSheetIndex(0)  
                            ->setCellValue("A$i", $one['zone'])  
                            ->setCellValue("B$i", '支出')  
                            ->setCellValue("C$i", $one['jine'])  
                            ->setCellValue("D$i", date("Y-m-d H:i:s", $one['create_time']) )  
                          ;  
                       $i++;          
                    }  
                }             
                $objPHPExcel->getActiveSheet()->setTitle('支出清单');  
                $objPHPExcel->setActiveSheetIndex(0);  
    //          $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
    //          $objWriter->save(str_replace('.php', '.xlsx', __FILE__));  
                $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);  
                  
                header("Pragma: public");  
                header("Expires: 0");  
                //header('Content-Type: application/vnd.ms-excel;charset=utf8');  
                header("Cache-Control:must-revalidate, post-check=0, pre-check=0");  
                header("Content-Type:application/force-download");  
                header("Content-Type:application/vnd.ms-execl");  
                header("Content-Type:application/octet-stream");  
                header("Content-Type:application/download");  
                $fireName = '支出清单';  
                header("Content-Disposition:attachment;filename=$fireName.xls");  
                header("Content-Transfer-Encoding:binary");  
                $objWriter->save("php://output");  
      
                Yii::app()->end();  
                spl_autoload_register(array('YiiBase','autoload'));  
      
    }
    
     public function actionExportOrder(){
       $sql="select "
               . "t.*,t1.zone "
               . "from cy_order t join cy_info t1 on(t1.id=t.info_id)  where 1=1 and t.audit_status in(4,1) " ;
       if(isset($_GET['bTime'])&&isset($_GET['eTime'])){
          $sql.=" and t.create_time >= ".$_GET['bTime']."  and t.create_time<=".$_GET['eTime']." "; 
       }
       $sql.=" and  t1.province='".$_GET['province']."' and t1.city='".$_GET['city']."' and t1.zone='".$_GET['zone']."'";
       $connection = Yii::app()->db;
        $command = $connection->createCommand($sql);
         $rows=$command->queryAll();
         
          ob_end_clean();  
                ob_start();  
                $objPHPExcel = new PHPExcel();  
                  
                $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")  
                                             ->setLastModifiedBy("Maarten Balliauw")  
                                             ->setTitle("Office 2007 XLSX Test Document")  
                                             ->setSubject("Office 2007 XLSX Test Document")  
                                             ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")  
                                             ->setKeywords("office 2007 openxml php")  
                                             ->setCategory("Test result file");  
                  
                $objPHPExcel->setActiveSheetIndex(0)  
                            ->setCellValue('A1', '地区')  
                            ->setCellValue('B1', '单号')  
                            ->setCellValue('C1', '金额')  
                            ->setCellValue('D1', '类别')  
                          ->setCellValue('E1', '状态')  
                            ->setCellValue('F1', '时间') 
                           ;  
      
          
                if(!empty($rows)){  
                    $i =2;  
                    foreach ($rows as  $one){  
                        $status='支付';
                        if($one['audit_status']=='4')
                            $status='退款';
                        
                        $objPHPExcel->setActiveSheetIndex(0)  
                            ->setCellValue("A$i", $one['zone'])  
                            ->setCellValue("B$i", $one['weidan'])  
                            ->setCellValue("C$i", $one['pay_price']) 
                                ->setCellValue("D$i", $one['order_type'])  
                                ->setCellValue("E$i", $status)  
                            ->setCellValue("F$i", date("Y-m-d H:i:s", $one['create_time']) )  
                          ;  
                       $i++;          
                    }  
                }             
                $objPHPExcel->getActiveSheet()->setTitle('订单清单');  
                $objPHPExcel->setActiveSheetIndex(0);  
    //          $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
    //          $objWriter->save(str_replace('.php', '.xlsx', __FILE__));  
                $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);  
                  
                header("Pragma: public");  
                header("Expires: 0");  
                //header('Content-Type: application/vnd.ms-excel;charset=utf8');  
                header("Cache-Control:must-revalidate, post-check=0, pre-check=0");  
                header("Content-Type:application/force-download");  
                header("Content-Type:application/vnd.ms-execl");  
                header("Content-Type:application/octet-stream");  
                header("Content-Type:application/download");  
                $fireName = '订单清单';  
                header("Content-Disposition:attachment;filename=$fireName.xls");  
                header("Content-Transfer-Encoding:binary");  
                $objWriter->save("php://output");  
      
                Yii::app()->end();  
                spl_autoload_register(array('YiiBase','autoload'));  
    
    }
            
    
}
