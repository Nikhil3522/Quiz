<?php
date_default_timezone_set("Asia/Calcutta"); 
define( 'SERVER', 'localhost' );
define( 'USERNAME', 'user111' );
define( 'PASSWORD', 'pass@12#' );
define( 'DATABASENAME', 'vas_dcb' );
define( 'PORT', 3306 );

$conn = mysqli_connect(SERVER, USERNAME, PASSWORD,DATABASENAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
GLOBAL $conn;



define('BASE_LOG_PATH','/var/www/html/dcblogs/whiteboardRoshanLogs');
define('SITE_URL','http://51.68.207.190/whiteboard/');
define('LOGIN_URL','http://51.68.207.190/whiteboard/sign-in.php');
define('BILLER_ID','wboardroshan');
define('PUBLISHER','whiteboard');
define('PRODUCT_NAME','Whiteboard');
define('PACKID',72); //72/73/74
define('CMPID',153); //153/154/155
define('OPERATOR','Roshan');
define('SP_ID','930009090300');
define('USR_NAME','pea');
define('USR_PWD','F7Omh!+a24L');
define('SRTCODE','662');
define('SERVICE_ID',"93000983003");
define('PRODUCT_ID',"930009830036621");//930009830036621/930009830036622/930009830036623 //D/W/M
define('CHANNELID','4');//WEB


define('SUBSCRIBE_API','http://191.101.113.4:6769/samsson/notify/subscribe/');
define('UNSUBSCRIBE_API','http://191.101.113.4:6769/samsson/notify/unsubscribe/');
define('SMS_API','http://191.101.113.4:6769/samsson/notify/sendsms/');
define('STATUS_API','http://191.101.113.4:6769/samsson/notify/status/');

define('TEXT_MSG','Thanks for subscribing Whiteboard. Enjoy your content by visiting '.LOGIN_URL);

define('LP_URL','http://51.68.207.190/whiteboard/pricing-plan.php');
define('DOWNLOAD_LIMIT_MONTHLY',1);
define('NOTIFI_END_POINT','http://51.68.207.190/whiteboard/callbackProcess.php');






 ?>
