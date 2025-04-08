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
  
<!-- Mirrored from quizio-pwa-html-app.vercel.app/result-summary.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/letter-w.png"
      type="image/x-icon"
    />
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
      class="container min-h-dvh relative overflow-hidden py-8 dark:text-white dark:bg-color1"
    >
      <!-- Absolute Items Start -->
      <img
        src="assets/images/header-bg-1.png"
        alt=""
        class="absolute top-0 left-0 right-0"
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
      <div class="relative z-10 px-6">
        <div class="flex justify-between items-center gap-4">
          <div class="flex justify-start items-center gap-4">
            <a
              href="home.php"
              class="bg-white size-8 rounded-full flex justify-center items-center text-xl dark:bg-color10"
            >
              <i class="ph ph-x" style="color: #d61437;"></i>
            </a>
            <h2 class="text-2xl font-semibold text-white">Result Summary</h2>
          </div>
        </div>
        <?php
            $quiz_id = $_GET['quiz_id'];
            $query = "SELECT * FROM quiz_answer WHERE quiz_id = $quiz_id ORDER BY quiz_answer_id DESC LIMIT 1";
            $quiz_result = $conn->query($query);
            $row = $quiz_result->fetch_assoc();
        ?>
        <!-- <div class="flex justify-between items-center pt-12">
          <div class="flex justify-start items-center gap-3">
            <div
              class="flex justify-center items-center bg-white size-16 rounded-full dark:bg-color9"
            >
              <img src="assets/images/result-cup.svg" alt="" />
            </div>
            <div class="text-white font-semibold">
              <p><span class="text-2xl text-p1">4</span>/100</p>
              <p>Your Rank</p>
            </div>
          </div>
          <p class="text-white bg-p1 text-xs py-1 px-2 rounded-md">Complete</p>
        </div> -->
        <div
          class="flex justify-start items-start gap-4 bg-white border dark:bg-color9 border-color21 p-4 mt-8 rounded-2xl"
          style="margin-top: 90px;"
        >
        <div
            class="flex flex-col gap-2 pr-4 border-r border-dashed border-black dark:border-color24 border-opacity-10 "
            style="width: 45%;"
            >
            <div class="flex justify-start items-center gap-3 pt-5">
                <img src="assets/images/badge.png" alt="">
                <div class="">
                  <p class="text-xs">Points Earned</p>
                  <p class="font-semibold text-p1">
                    20
                  </p>
                </div>
              </div>
          </div>
          <div
            class="flex flex-col gap-5 pr-4"
          >
            <div class="flex justify-between items-center gap-4">
              <div class="flex justify-start items-center gap-2">
                <div
                  class="size-6 flex justify-center items-center rounded-full bg-p2"
                >
                  <i class="ph ph-check text-white text-sm"></i>
                </div>
                <p class="text-xs">Correct :</p>
              </div>
              <p class="font-semibold"><?= $row['correct_ques'] ?></p>
            </div>
            <div class="flex justify-between items-center gap-4">
              <div class="flex justify-start items-center gap-2">
                <div
                  class="size-6 flex justify-center items-center rounded-full bg-p1"
                >
                  <i class="ph ph-x text-white text-sm"></i>
                </div>
                <p class="text-xs">Incorrect :</p>
              </div>
              <p class="font-semibold"><?= $row['incorrect_ques'] ?></p>
            </div>
            <div class="flex justify-between items-center gap-4">
              <div class="flex justify-start items-center gap-2">
                <div
                  class="size-6 flex justify-center items-center rounded-full bg-p1"
                >
                  <i class="ph ph-x text-white text-sm"></i>
                </div>
                <p class="text-xs">Unattempted :</p>
              </div>
              <p class="font-semibold"><?= 10 - $row['incorrect_ques'] - $row['correct_ques'] ?></p>
            </div>
          </div>
        </div>
        <div class="pt-12">
          <a
            class="py-3 text-center bg-p2 dark:bg-p1 rounded-full text-sm font-semibold text-white block confirmationModalOpenButton w-full cursor-pointer"
            onclick="window.history.back();"
          >
            Re-take
          </a>
        </div>
        <div class="pt-2">
          <a
            class="py-3 text-center bg-p2 dark:bg-p1 rounded-full text-sm font-semibold text-white block confirmationModalOpenButton w-full cursor-pointer"
            onclick="window.history.back();"
            style="background: #ff710f;"
            >
            Unlock Next
          </a>
        </div>

        <p style="margin-top: 20px; font-size: 14px; text-align: center; font-family: 'Poppins';">You need to answer a minimum of 8 questions correctly, to unlock the next level.</p>

      </div>
    </div>
    <!-- ==== js dependencies start ==== -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script></body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/result-summary.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:36 GMT -->
</html>
