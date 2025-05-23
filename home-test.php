<?php
require_once("cons.php");

if(!isset($user_id) || $user_id == 0 || !isset($sign_up) || $sign_up == 0 || !isset($_COOKIE['mobilenumber']) || empty($_COOKIE['mobilenumber'])){
  echo '<script type="text/javascript">
          window.location.href = "logout.php";
      </script>';
  exit();
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
        <h2 class="text-2xl font-semibold text-white">Test Your English</h2>
      </div>
      <!-- Page Title End -->

      <!-- Sign In Form Start -->
      <form action="otp.php" class="relative z-10">
        <div class="bg-white py-8 px-6 rounded-xl mt-12 dark:bg-color10" style="margin-top: 150px;">
          <p class="text-xl font-semibold text-center">What's Your English Level?</p>
          <hr class="mt-2"></hr>
          <p style="text-align: justify; margin-top: 15px;">Find out your English Level with this easy 20-minute placement test.</p>
          <p class="mt-2">Knowing your level will help you identify strengths and areas for improvement, and reach your learning goals.</p>
        </div>

        <a
          href="english-test-instruction.php?quiz_id=1&quiz_name=Beginner&quiz_level=Beginner"
          class="bg-p2 rounded-full py-3 text-white text-sm font-semibold text-center block mt-12 dark:bg-p1"
          >Next</a
        >
        <a
          href="home.php"
          class="bg-p2 rounded-full py-3 text-white text-sm font-semibold text-center block mt-2 dark:bg-p1"
          style="background: #914d4d;"
          >SKIP</a
        >
      </form>
      <!-- Sign In Form End -->
    </div>
    <!-- Javascript Dependencies -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script></body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/sign-in.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:49:40 GMT -->
</html>
