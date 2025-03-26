<?php
session_start();
ob_start();
require_once('config/defines.php');
ini_set('error_log',BASE_LOG_PATH.'/portal_request_'.date('Y-m-d').'.log');
require_once('services/BillingFunctions.php');
$bp = BILLER_ID;
$publisher = PUBLISHER;
$objB=new BillingFunction();

function redirectTOSuccess($msgg, $redirectUrl){
  echo '<form id="autoForm" action="success-page.php" method="POST">
        <input type="hidden" name="msg" value="' . htmlspecialchars($msgg, ENT_QUOTES, 'UTF-8') . '">
        <input type="hidden" name="redirectUrl" value="' . htmlspecialchars($redirectUrl, ENT_QUOTES, 'UTF-8') . '">
      </form>
      <script>
          document.getElementById("autoForm").submit();
      </script>';
}

if (isset($_REQUEST['cmpid']) && !empty($_REQUEST['cmpid'])){
	error_log( "[pricing-plan.php] [".urldecode(http_build_query($_REQUEST,'|'))."]");

	$cmpid = trim($_REQUEST['cmpid']);
	$_SESSION['CMPID'] = $cmpid ;


			$campDetails = $objB->getCampById($cmpid);
			$campName = $campDetails['camaping_name'];
			$packId = $campDetails['pack_id'];
			//echo $packId;die;
			################ GET PACK DETAILS BY ID ###################
			$packDetails = $objB->getPackById($packId);
			$pack_price = $packDetails['price'];
			$product_id = $packDetails['product_id'];
			$pack_name = $packDetails['name'];
			$pack_description = $packDetails['pack_description'];
			$pack_validity = $packDetails['duration'];
			$cgUrl = $packDetails['message'];
			################ END PACK DETAILS BY ID ###################


					$msisdn = $_SESSION['MSISDN'] ;
					//setcookie('mobilenumber', $msisdn, time() + (60*60*24*365),'/');
					
					
					########################## START CHECK ALREADY SUBSCRIBE ############
					$reqArr = array();
					$reqArr['msisdn'] = $msisdn;
					$reqArr['tid'] = time().uniqid();
					//$isSubscribedUser = $objB->isSubscribedUser($bp, $msisdn,$publisher);
					//if($isSubscribedUser == 'subscribed'){
					$statusApi = $objB->statusApi($reqArr);
					if($statusApi->code == '0'){
						$_SESSION["sign_up"] = 1;
                       // $objB->setLastCookieId($msisdn);
					    setcookie('mobilenumber',$msisdn,  time() + (60*60),'/', '' );
					//  Header('Location: home-test.php');
                       header("Location: ADD_USER.php?msisdn=$msisdn");die;
						// header("location:index.php");die;
					}

				########################## END CHECK ALREADY SUBSCRIBE ############
				###################### START USER HIT ##############

							$hitip = $objB->getip();
							$userAgent ="";
							$usermobiledata ='GPRS';
							//$interface = "pheture_sa_lifepulse";
							//echo '3';

							$user_hit_id=$objB->setUsersHit($msisdn,$hitip, $campName,$cmpid, $packId, $userAgent, $bp,$publisher,$usermobiledata);
							$userAgent =$_SERVER['HTTP_USER_AGENT'];
							//echo '4';

							error_log("setUsersHit | plans.php |  CMPID = ".$cmpid." | msisdn=".$msisdn."| HIT IP =".$hitip." | Hit ID=".$user_hit_id."  | pack_id=".$packId." | bp=".$bp." | userAgent=".$userAgent." | firstHit=".@http_build_query($_GET));
							###################### END USER HIT ##############
							
				####################### START ADD TRANSACTION DATA ###########
				//$user_hit_id = $_SESSION['HIT_ID'];
				$hitip = $objB->getip();
				$billingInfo = array();
				$transaction_time = date("Y-m-d H:i:s");
				$pubId='NA';
				 $adnetworkid= 'NA';
				 $transaction_unique_id = time().uniqid();
				 $billingInfo['subscribed_user_id'] = 0;
				$billingInfo['msisdn'] = $msisdn;
				$billingInfo['pack_id'] = $packId;
				$billingInfo['biller_id'] = $bp;
				$billingInfo['product_id'] = $product_id;
				$billingInfo['transaction_time'] = $transaction_time;
				$billingInfo['transaction_unique_id'] =$transaction_unique_id;
				$billingInfo['requested_price'] = $pack_price;
				$billingInfo['interface'] = $campName;
				$billingInfo['adnetwork_id'] = $adnetworkid;
				$billingInfo['hit_id'] = $user_hit_id;
				$billingInfo['publisher'] = $publisher;
				$billingInfo['pub_id'] = $pubId;
				$billingInfo['ip_address'] = $hitip;
				$billingInfo['encryptedMdn'] =$msisdn;
				$billingInfo['cmpid'] =$cmpid;
				$billingInfo['param2'] ='';
				$billingInfo['param3'] ='';
				$TransData = $objB->addTransactionData($billingInfo);
				####################### END ADD TRANSACTION DATA ###########
				
				###################### SUBSCRIBE REQUEST ################
				$reqArr = array();
				$reqArr['msisdn'] = $msisdn;
				$reqArr['tid'] = $transaction_unique_id;
				$reqArr['pid'] = $product_id;
				$subscriptionApi = $objB->subscriptionApi($reqArr);
				$msgg = @$subscriptionApi->message;
				if($subscriptionApi->code == '0' && $subscriptionApi->message == 'ACCEPTED'){

					//$redirectUrl = $subscriptionApi->data->paymentUrl;
					//error_log("REDIRECT TO PAYMENT URL = ".$redirectUrl);
					//header("location:".$redirectUrl);
					/*
					sleep(5);
					$redirectUrl = SITE_URL;
					echo "<script>window.alert('Your request accepted succesfully.')
					window.location.href='$redirectUrl'</script>";
					exit();
					*/
					$_SESSION["sign_up"] = 1;
          $objB->setLastCookieId($msisdn);
					setcookie('mobilenumber',$msisdn,  time() + (60*60),'/', '' );
					$msgg = 'Your subscription request has been received and is being processed.';
					$redirectUrl = "ADD_USER.php?msisdn=$msisdn";

          redirectTOSuccess($msgg, $redirectUrl);
					// $redirectUrl = "home-test.php";
					// exit();
					
					
					// Header('Location: home-test.php');
                    //header("location:api.php?func=ADD_USER&msisdn=$msisdn");die;
					// header("location:".SITE_URL);die;
					
				}else{
					$msgg = @$subscriptionApi->error;
					if(empty($msgg)){
					$msgg = 'Sorry,Something went wrong.Please try later.';
					}
					$redirectUrl = SITE_URL;
          echo "<script>
                  alert(\"" . addslashes($msgg) . "\");
                </script>";

					// exit();
				}

}

?>
<?php
$msisdn = isset($_GET['msisdn']) ? $_GET['msisdn'] : null;
if(isset($msisdn)){
  setcookie(
    'mobilenumber', 
    $msisdn, 
    time() + (60*60),  // Cookie expiry
    '/',  // Path
    ''   // Domain
  );
//   Header('Location: home-test.php');
header("Location: ADD_USER.php?msisdn=$msisdn");die;
}
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from quizio-pwa-html-app.vercel.app/sign-in.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:49:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/letter-w.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css"
    />
    <link rel="manifest" href="manifest.json" />
    <title>Whiteboard</title>
  <link href="style.css" rel="stylesheet">
  <link href="pricing-plan.css" rel="stylesheet"></head>

  <body class="">
    <div
      class="container min-h-dvh relative overflow-hidden py-8 px-6 dark:text-white dark:bg-color1"
    >
      <!-- Absolute Items Start -->
      <img
        src="assets/images/header-bg-2.png"
        alt=""
        class="absolute top-0 left-0 right-0 -mt-6"
      />
      <div
        class="absolute top-0 left-0 bg-p3 blur-[145px] h-[174px] w-[149px]"
      ></div>
      <div
        class="absolute top-40 right-0 bg-[#0ABAC9] blur-[150px] h-[174px] w-[91px]"
      ></div>
      <div
        class="absolute top-80 right-40 bg-p2 blur-[235px] h-[205px] w-[176px]"
      ></div>
      <div
        class="absolute bottom-0 right-0 bg-p3 blur-[220px] h-[174px] w-[149px]"
      ></div>
      <!-- Absolute Items End -->
      <!-- Page Title Start -->
      <div class="flex justify-start items-center gap-4 relative z-10">
        <a
          href="home.php"
          class="bg-white p-2 rounded-full flex justify-center items-center text-xl dark:bg-color10"
        >
          <i class="ph ph-caret-left"></i>
        </a>
        <h2 class="text-2xl font-semibold text-white">Choose Your Plan</h2>
      </div>
      <!-- Page Title End -->

      <div class="pricing-wrap section-pb-60" id="main-container" style="margin-bottom: 80px; margin-top: 80px;">

        <div class="container d-flex">
          <div class="row row-cols-md-3 row-cols-1" id="pricing_plan_card_container" style="margin: auto; row-gap: 40px;">
              
              <div class="pricing-plan-card">
                <div>
                    <h2 class="text-center pt-3" style="color: white;">Daily</h2>
                </div>
                <h1 style="display: flex; justify-content: center;"><img src="assets/images/AFN-currency.png" style="width: 30px; height: 55px; margin-top: 15px;"><span>10</span></h1>
                <div style="min-height: 300px; background: whitesmoke; padding-top: 45px; padding-bottom: 10px; display: flex; flex-direction: column; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                  <ul class="pricing_plan_ul">
                      <li>Pay per day </li>
                      <li>No commitment </li>
                      <li>Ideal for trials </li>
                  </ul>
                  <center>
                    <a href="pricing-plan.php?cmpid=153">
                      <button >Choose plan</button>
                    </a>
                  </center>
                  <p style="font-size: 9px; line-height: 12px; text-align: center;">Cancel anytime, 24/7 customer support </p>
                </div>
              </div>

              <div class="pricing-plan-card">
                <div style="min-height: 140px;">
                    <h2 class="text-center pt-3" style="color: white;">Monthly</h2>
                </div>
                <div class="ribbon left">Best value deal </div>
                <h1 style="display: flex; justify-content: center;"><img src="assets/images/AFN-currency.png" style="width: 30px; height: 55px; margin-top: 15px;"><span>90</span></h1>
                <div style="min-height: 320px; background: whitesmoke; padding-top: 45px; padding-bottom: 10px; display: flex; flex-direction: column; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                    <ul class="pricing_plan_ul">
                        <li>Best value deal </li>
                        <li>Unlimited monthly access </li>
                        <li>Hassle-free subscription </li>
                    </ul>
                    <center>
                      <a href="pricing-plan.php?cmpid=155">
                        <button>Choose plan</button>
                      </a>
                    </center>
                    <p style="font-size: 9px; line-height: 12px; text-align: center;">Cancel anytime, 24/7 customer support </p>
                </div>
              </div>

              <div class="pricing-plan-card">
                <div>
                    <h2 class="text-center pt-3" style="color: white;">Weekly</h2>
                </div>
                <h1 style="display: flex; justify-content: center;"><img src="assets/images/AFN-currency.png" style="width: 30px; height: 55px; margin-top: 15px;"><span>20</span></h1>
                <div style="min-height: 300px; background: whitesmoke; padding-top: 45px; padding-bottom: 10px; display: flex; flex-direction: column; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                    <ul class="pricing_plan_ul">
                        <li>Affordable short-term option </li>
                        <li>Save on daily rates </li>
                        <li>Best for quick use </li>
                    </ul>
                    <center>
                      <a href="pricing-plan.php?cmpid=154">
                        <button >Choose plan</button>
                      </a>
                    </center>
                    <p style="font-size: 9px; line-height: 12px; text-align: center;">Cancel anytime, 24/7 customer support </p>
                </div>
              </div>
          </div>
        </div>
      </div>
  </div>

    <!-- Javascript Dependencies -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script>
</body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/sign-in.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:49:40 GMT -->
</html>
