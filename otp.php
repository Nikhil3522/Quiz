<?php
session_start();
ob_start();
require_once('config/defines.php');
ini_set('error_log',BASE_LOG_PATH.'/portal_request_'.date('Y-m-d').'.log');
error_log( "[otp.php] [".urldecode(http_build_query($_REQUEST,'|'))."]");
require_once('services/BillingFunctions.php');
$objB=new BillingFunction();
$bp = BILLER_ID;
$publisher = PUBLISHER;
if(isset($_REQUEST["otp"]) && !empty($_REQUEST["otp"]) ){
	$msisdn = $_SESSION['MSISDN'];
	$userValOtp = $_REQUEST["otp"];
	$sendOtp = $_SESSION['OTP'] ;
	error_log("otp.php | MSISDN = ".$msisdn." | SENT OTP = ".$sendOtp." | User Submitted OTP = ".$userValOtp);
	
	if($userValOtp == $sendOtp ){
			
			$reqArr = array();
			$reqArr['msisdn'] = $msisdn;
			$reqArr['tid'] = time().uniqid();
			$statusApi = $objB->statusApi($reqArr);
			if($statusApi->code == '0'){
				unset($_SESSION['OTP']);
				$_SESSION["sign_up"] = 1;
				setcookie('mobilenumber', $_SESSION['MSISDN'], time() + (60*60*24*365),'/');
				$userDetails = $objB->getSubscribedUserDetails($bp, $msisdn,$publisher);
				$packId = $userDetails['pack_id'];
                $objB->setLastCookieId($msisdn);
                header("location: ADD_USER.php?msisdn=$msisdn");die;
				//  header("location:index.php");die;
			}else{
				header("location:pricing-plan.php");die;
			}
	}else{
    $wrongOtp = true;
		// header("location:otp.php");
	}
	
	
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
  <link href="style.css" rel="stylesheet"></head>
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
          href="sign-in.php"
          class="bg-white p-2 rounded-full flex justify-center items-center text-xl dark:bg-color10"
        >
          <i class="ph ph-caret-left"></i>
        </a>
        <h2 class="text-2xl font-semibold text-white">Verification</h2>
      </div>
      <!-- Page Title End -->

      <!-- Sign In Form Start -->
      <form action="#" class="relative z-10">
        <div class="bg-white py-8 px-6 rounded-xl mt-12 dark:bg-color10" style="margin-top: 150px;">
          <p>Please enter the OTP sent on your mobile number</p>
          <div class="pt-8">
            <p class="text-sm font-semibold pb-2">OTP</p>
            <div
              class="flex justify-between items-center py-3 px-4 border border-color21 rounded-xl dark:border-color18 gap-3"
            >
              <input
                type="number" name="otp" id="otp"  maxlength="4"  required
                class="outline-none bg-transparent text-n600 text-sm placeholder:text-sm w-full placeholder:text-bgColor18 dark:text-color18 dark:placeholder:text-color18"
              />
              <i
                class="ph ph-chat text-xl text-bgColor18 !leading-none"
              ></i>
            </div>
          </div>
          <?php
          if(isset($wrongOtp) && $wrongOtp == true){
            ?>
            <h3 style="text-align: center; color: red; margin-top: 10px; font-weight: 500;">Wrong Otp!</h3>
            <?php
          }
          ?>
          <!-- <div class="flex">
            <button style="text-align: center; font-size: 14px; color: #0000df; font-weight: 600; text-decoration: underline; margin: auto; margin-top: 25px;">
              Resend OTP <span id="resendOTPTimeSection">in 00:<span id="time_left">30</span></span>
            </button>
          </div> -->
        </div>

        <!-- <a
          href="pricing-plan.php"
          class="bg-p2 rounded-full py-3 text-white text-sm font-semibold text-center block mt-12 dark:bg-p1"
          >Submit</a> -->

        <button class="bg-p2 rounded-full py-3 text-white text-sm font-semibold text-center block mt-12 dark:bg-p1 w-full">SUBMIT</button>
        
      </form>
      <!-- Sign In Form End -->
    </div>

    <!-- Javascript Dependencies -->
    <script src="assets/js/main.js"></script>
    <script defer src="index.js"></script>
    <script>
      var timeDisplayEle = document.getElementById('time_left');
      var resendOTPTimeSectionEle = document.getElementById('resendOTPTimeSection');
      var time = 30;

      function startCountDown(){
        setInterval(() => {
          if(time === 0){
            resendOTPTimeSectionEle.style.display = 'none';
            return;
          }
          if(time < 10){
            timeDisplayEle.innerText = '0'+time;
          }else{
            timeDisplayEle.innerText = time;
          }
          time--;
        }, 1000)
      }

      document.addEventListener("DOMContentLoaded", startCountDown())
    </script>
</body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/sign-in.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:49:40 GMT -->
</html>
