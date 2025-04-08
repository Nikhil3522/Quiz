<?php
session_start();
ob_start();
require_once('config/defines.php');
ini_set('error_log',BASE_LOG_PATH.'/portal_request_'.date('Y-m-d').'.log');
error_log( "[sign-in.php] [".urldecode(http_build_query($_REQUEST,'|'))."]");
require_once( 'services/NotificationFunctions.php' );
$objN=new NotificationFunction();
$bp = BILLER_ID;
$publisher = PUBLISHER;
if(isset($_REQUEST["msisdn"]) && !empty($_REQUEST["msisdn"]) ){
	$usermdn = trim($_REQUEST["msisdn"]);
	$msisdn = '93'.substr($usermdn, -9);
		$_SESSION['MSISDN'] = $msisdn;
		$otp = rand(1000, 9999);
		$_SESSION['OTP'] = $otp;
		$otpText = 'Your OTP number is: '.$otp;
		error_log("register.php | MSISDN = ".$msisdn." | SENT OTP = ".$otp);
		$sendSms = $objN->sendSms($msisdn,$otpText);
		
			if($sendSms->code == '0'){
				header("location:otp.php");die;
			}else{
				unset($_SESSION['OTP']);
				$redirectUrl = SITE_URL;
				echo "<script>window.alert('Unable to send otp on your mobile number.')
				window.location.href='$redirectUrl'</script>";
				exit();
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
          href="home.php"
          class="bg-white p-2 rounded-full flex justify-center items-center text-xl dark:bg-color10"
        >
          <i class="ph ph-caret-left"></i>
        </a>
        <h2 class="text-2xl font-semibold text-white">Sign up</h2>
      </div>
      <!-- Page Title End -->

      <!-- Sign In Form Start -->
      <form action="" method="post" class="relative z-10">
        <div class="bg-white py-8 px-6 rounded-xl mt-12 dark:bg-color10" style="margin-top: 150px;">
          <p>Please enter your Mobile Number</p>
          <div class="pt-8">
            <p class="text-sm font-semibold pb-2">Mobile Number</p>
            <div
              class="flex justify-between items-center py-3 px-4 border border-color21 rounded-xl dark:border-color18 gap-3"
            >
              <p style="color: gray; font-size: 16px;">+93</p>
              <input
                type="text"
                inputmode="numeric"
                pattern="\d{9}"
                maxlength="9"
                placeholder="XXX-XXX-XXX"
                name="msisdn"
                id="msisdn"
                style="padding: 10px 0px; font-size: 16px;"
                required
                class="outline-none bg-transparent text-n600 text-sm placeholder:text-sm w-full placeholder:text-bgColor18 dark:text-color18 dark:placeholder:text-color18"
              />
              <i
                class="ph ph-phone text-xl text-bgColor18 !leading-none"
              ></i>
            </div>
          </div>
        </div>

        <button class="bg-p2 rounded-full py-3 text-white text-sm font-semibold text-center block mt-12 dark:bg-p1 w-full">
          NEXT
        </button>
      </form>
      <!-- Sign In Form End -->
    </div>

    <!-- Javascript Dependencies -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script>
  <script>
    // document.getElementById('msisdn').addEventListener('input', function () {
    //     if (this.value.length > 9) {
    //         this.value = this.value.slice(0, 9);
    //     }
    // });

    document.getElementById('msisdn').addEventListener('input', function (e) {
    this.value = this.value.replace(/\D/g, '').slice(0, 9);
  });
  </script>
</body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/sign-in.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:49:40 GMT -->
</html>
