<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2016/6/4
 * Time: 17:35
 */
class CenterController extends BaseController{
//    个人中心首页
    public function actionCenterIndex(){
        $this -> renderPartial('centerIndex');
    }
//    我的发布
    public function actionIssue(){
        $this -> renderPartial('issue');
    }
//    我的收藏
    public function actionCollect(){
        
        $this -> renderPartial('collect');
    }
//    我的预定
    public function actionReverse(){
        $this -> renderPartial('reverse');
    }
//    已租房源
    public function actionHasrent(){
        $this-> renderPartial('hasrent');
    }
//    我的租客
    public function actionMytenant(){
        $this -> renderPartial('mytenant');
    }
//    我的佣金
    public function actionMybroker(){
        $this -> renderPartial('mybroker');
    }
//    提现申请
    public function actionForward(){
        $this -> renderPartial('forward');
    }
//    我要佣金
    public function actionWmoney(){
        $jsapiTicket = $this->getJsApiTicket();
        $timestamp = time();
        $nonceStr = $this->createNonceStr(10);
        $url = Yii::app()->request->hostInfo.Yii::app()->request->getUrl();

        $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

        $signature = sha1($string);

        $signPackage = array(
            "appId"     => 'wx10b693027f09c60e',
            "nonceStr"  => $nonceStr,
            "timestamp" => $timestamp,
            "url"       => $url,
            "signature" => $signature
        );

        $nUid = $this->getUserId();
        $strBaseUri = 'Center/wmoney';
        $securityManager = Yii::app()->getSecurityManager();
        $arrUrlParam = array(
            'r' => $strBaseUri,
            'timestamp' => time(),
            'pid' => base64_encode($securityManager->encrypt($nUid, $this->key)),
        );
        $arrUrlParam['sign'] = $this->getAuthSignStr($arrUrlParam);
        $strshareUrl = Yii::app()->request->hostInfo.$this->createUrl($strBaseUri, $arrUrlParam);
        $this -> renderPartial('wmoney', array('package' => $signPackage, 'shareurl' => $strshareUrl));
    }

}