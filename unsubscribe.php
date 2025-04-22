<?php
require_once('config/defines.php');
ini_set('error_log',BASE_LOG_PATH.'/unsub_'.date('Y-m-d').'.log');
error_log( "[unsubscribe.php] [".urldecode(http_build_query($_REQUEST,'|'))."]");
require_once( 'services/NotificationFunctions.php' );
$objN=new NotificationFunction();

$bp = BILLER_ID;
$publisher = PUBLISHER;
if($_REQUEST['msisdn']){
$msisdn = $_REQUEST['msisdn'];	
$userDetails = $objN->userDetailsByMsisdn($msisdn,$bp,$publisher);
	$productId = $userDetails['product_id'];
	$unsubApi = $objN->unsubApi($msisdn,$productId);
		if($unsubApi->code == '0' && $unsubApi->message == 'ACCEPTED'){
			echo 'success';
		}else{
			echo 'fail';
		}
}else{
	
	echo 'fail';
}

die;

?>