<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from quizio-pwa-html-app.vercel.app/top-member.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/logo.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="manifest" href="manifest.json" />
    <title>Top Member - Quizio PWA HTML Template</title>
  <link href="style.css" rel="stylesheet"></head>
  <body class="">
    <div
      class="container min-h-dvh relative overflow-hidden py-8 dark:text-white dark:bg-black"
    >
      <!-- Absolute Items Start -->
      <img
        src="assets/images/header-bg-1.png"
        alt=""
        class="absolute top-0 left-0 right-0 -mt-16"
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
      <div class="relative z-10">
        <div class="flex justify-start items-center gap-4 px-6">
          <a
            href="home.html"
            class="bg-white p-1 rounded-full flex justify-center items-center text-xl text-color10"
          >
            <i class="ph ph-caret-left"></i>
          </a>
          <h2 class="text-2xl font-semibold text-white">Learning Stages</h2>
        </div>
        <!-- Page Title End -->

        <!-- Contest List Start -->
        <div class="px-6 flex flex-col gap-4 pt-20">
          <?php
            include('cons.php');

            $query = "SELECT * FROM quiz_categories";
            $categories_result = $conn->query($query);

            while($row = $categories_result->fetch_assoc()){
              $category_id = $row['category_id'];
              $category_name = $row['name'];
          ?>
          <div
            class="flex justify-between items-center bg-white py-4 px-5 rounded-xl border border-black border-opacity-20 dark:bg-color9 dark:border-color24 relative"
          >
            <?php
                if( $category_id  !== '1'){
              ?>
                <div
                  class="flex justify-center items-center p-1 rounded-full text-p2 bg-color14 border dark:text-p1 dark:border-bgColor16 dark:bg-bgColor14 border-color16 absolute top-2 text-xs right-2"
                  style="<?php if($category_id  !== '1'){echo "top: 35%;";} ?>"
              >
                  <i class="ph ph-lock-simple-open"></i>
              </div>
              <?php
                }
              ?>
            <div class="flex justify-start items-center gap-3">
              <div class="rounded-full overflow-hidden">
                <!-- <span style="display: block; background: #ffce85; height: 45px; width: 45px; border-radius: 35px; text-align: center; line-height: 45px; font-size: 25px; color: #5c46f6; font-weight: 600;"><?= substr($category_name, 0, 1); ?></span> -->
                <img src="assets/images/<?= $category_name ?>.png" style="width: 45px" alt="" class="" />
              </div>
              <div class="">
                <div class="flex justify-start items-center gap-1">
                  <p class="font-semibold"><?= $category_name ?></p>
                </div>
              </div>
            </div>
            <a 
              <?php
                if( $category_id  === '1'){
              ?>
                href="choose-sub-category.php?category_id=<?= $category_id; ?>&category_name=<?= $category_name; ?>"
              <?php
                }
              ?>
              
            >
              <button
                class="text-white bg-p2 py-1 px-4 rounded-full dark:bg-p1"
                style="font-size: 14px; left: 72%; top: 34%; position: absolute;"
              >
                  Start
              </button>
            </a>

            
          </div>
          <?php
            } 
            ?>
        </div>
        <!-- Contest List End -->
      </div>
    </div>
    <!-- ==== js dependencies start ==== -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script></body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/top-member.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:13 GMT -->
</html>
