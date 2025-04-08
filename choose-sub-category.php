<?php
  include('cons.php');
  if(!isset($user_id) || $user_id == 0 || !isset($sign_up) || $sign_up == 0 || !isset($_COOKIE['mobilenumber']) || empty($_COOKIE['mobilenumber'])){
    echo '<script type="text/javascript">
            window.location.href = "logout.php";
        </script>';
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from quizio-pwa-html-app.vercel.app/master-medal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:13 GMT -->
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
        class="absolute top-0 left-0 right-0 -mt-3"
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
          href="choose-category.php"
          class="bg-white p-2 rounded-full flex justify-center items-center text-xl dark:bg-color10"
        >
          <i class="ph ph-caret-left"></i>
        </a>
        <h2 class="text-2xl font-semibold text-white"><?= $_GET['category_name'] ?></h2>
      </div>
      <!-- Page Title End -->

      <div class="relative z-20 pt-20">

        <div class="grid grid-cols-2 gap-5 pt-5 text-center levelItems">
          <?php
            $category_id = $_GET['category_id'];
            $query = "SELECT * FROM quiz_sub_categories WHERE category_id = $category_id";
            $result = $conn->query($query);
            while($row = $result->fetch_assoc()){
              $sub_category_id = $row['sub_cat_id'];
              $sub_category_name = $row['name'];
          ?>
          <a
            class="py-5 px-4 rounded-xl bg-white flex justify-center items-center flex-col relative dark:bg-color9"
          >
          <!-- href="medal-details.html" -->
            <div
              class="absolute top-2 right-2 flex justify-center items-center bg-color14 text-p2 border border-color16 rounded-full p-1.5 text-sm dark:text-p1 dark:bg-bgColor14 dark:border-bgColor16"
            >
              <i class="ph ph-lock-simple"></i>
            </div>
            <span style=" background: rgba(240, 0, 40, 1); height: 55px; width: 55px; border-radius: 35px; text-align: center; line-height: 55px; font-size: 30px; color:rgb(255, 255, 255); font-weight: 600;"><?= substr($sub_category_name, 0, 1); ?></span>
            <p class="text-sm font-semibold pt-3"><?= $sub_category_name ?></p>
            <button
              onclick="window.location.href='choose-level.php?sub_category_id=<?= $sub_category_id ?>&sub_category_name=<?= $sub_category_name ?>'"
              class="flex justify-center items-center gap-2 py-2 px-6 rounded-full bg-p2 text-white text-sm dark:text-p1 dark:bg-bgColor14 dark:border-bgColor16 dark:border mt-2"
              <?php if($sub_category_id != 1){ ?>
              disabled
              <?php } ?>
            >
              Start
            </button>
          </a>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
    <!-- ==== js dependencies start ==== -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script>
  <script src="assets/js/quiz_unlock_logic.js"></script>
</body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/master-medal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:13 GMT -->
</html>
