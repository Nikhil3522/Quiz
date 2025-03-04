<?php
require_once("config.php");
$query_string = $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from quizio-pwa-html-app.vercel.app/quiz-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/letter-w.png"
      type="image/x-icon"
    />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
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
        class="absolute top-0 left-0 right-0 -mt-12"
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
              href="home.html"
              class="bg-white size-8 rounded-full flex justify-center items-center text-xl dark:bg-color10"
            >
              <i class="ph ph-caret-left"></i>
            </a>
            <!-- <h2 class="text-2xl font-semibold text-white">Details</h2> -->
          </div>
          <div class="flex justify-start items-center gap-2">
            <!-- <div
              class="text-white border border-color24 p-2 rounded-full flex justify-center items-center bg-color24"
            >
              <i class="ph ph-paper-plane-tilt"></i>
            </div> -->
            <div class="relative">
              <div
                class="absolute top-12 right-0 z-40 modalClose duration-500 bg-white dark:bg-color9 p-5 rounded-xl shadow6 quizDetailsMoreOptionsModal"
              >
                <div
                  class="flex justify-start items-center gap-3 pb-3 border-b border-dashed border-color21"
                >
                  <div
                    class="text-p2 border dark:text-white dark:bg-color24 dark:border-color18 border-color16 p-2 rounded-full flex justify-center items-center bg-color14 text-sm"
                  >
                    <i class="ph ph-paper-plane-tilt"></i>
                  </div>
                  <p class="text-sm">Share</p>
                </div>
                <a
                  href="generate-qr-code.html"
                  class="flex justify-start items-center gap-3 pt-3"
                >
                  <div
                    class="text-p2 border dark:text-white dark:bg-color24 dark:border-color18 border-color16 p-2 rounded-full flex justify-center items-center bg-color14 text-sm"
                  >
                    <i class="ph ph-paper-plane-tilt"></i>
                  </div>
                  <p class="text-sm text-nowrap">Generate PIN & QR Code</p>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div
          class="py-4 px-5 rounded-2xl border border-color21 bg-white mt-8 dark:bg-color11 "
        >
          <p
            class="font-semibold pb-3 border-b border-dashed border-color21 dark:border-color24"
          >
            General Instructions:
          </p>
          <div class="flex justify-start items-center gap-2 pt-3">
            <ul class="text-sm text-color5 dark:text-bgColor5">
                <li>✅ Answer all the questions.</li>
                <li>🤷🏽 If you don't know the answer, choose "I don't know."</li>
            </ul>
          </div>
        </div>

        <div
          class="py-4 px-5 rounded-2xl border border-color21 bg-white mt-8 dark:bg-color11 quiz-details"
        >
          <p
            class="font-semibold pb-3 border-b border-dashed border-color21 dark:border-color24"
          >
            Test Instructions:
          </p>
          <div class="flex justify-start items-center gap-2 pt-3">
            <ol class="text-sm text-color5 dark:text-bgColor5 detailsShort">
                <li class="pt-2">1. Answer all questions: There are 36 single-select questions in total</li>
                <li class="pt-2">2. Be honest: To get the most out of the test, make sure your answers are real. If you don’t know the answer, select “I don’t know”. No one is judging you!</li>
                <li class="pt-2">3. Be conscious of time: While you’re not limited in time, try not to overthink each answer. This will help you get a more precise result</li>
                <li class="pt-2">4. Read questions carefully: Don’t rush when you read the questions and make sure you understand them before answering</li>
                <li class="pt-2">5. Check your results: After the test, you’ll get an approximate evaluation of your current level</li>
              </ol>
          </div>
        </div>

        <div class="pt-12">
          <a
            class="py-3 text-center bg-p2 dark:bg-p1 rounded-full text-sm font-semibold text-white block confirmationModalOpenButton w-full cursor-pointer"
            href="quiz.php?<?= $query_string; ?>"
          >
            Start the Test
          </a>
        </div>
      </div>
    </div>

    <!-- <div class="hidden inset-0 z-40 confirmationModal">
      <div
        class="container bg-black dark:bg-white dark:bg-opacity-30 bg-opacity-40 flex justify-center items-center h-full px-6"
      >
        <div
          class="bg-white dark:bg-color10 p-5 rounded-xl w-full dark:text-white"
        >
          <div class="flex justify-between items-center pb-4">
            <p class="text-lg font-semibold">Confirmation</p>
            <button
              class="p-2 flex justify-center items-center rounded-full border border-color16 confirmationModalCloseButton dark:border-bgColor16"
            >
              <i class="ph ph-x"></i>
            </button>
          </div>
          <div
            class="py-4 border-y border-dashed border-color21 dark:border-color24"
          >
            <div class="flex justify-between items-center">
              <p class="text-color5 dark:text-bgColor5">Entry Fee :</p>
              <p class="font-semibold">Rs. 25.00</p>
            </div>
            <div class="flex justify-between items-center pt-3">
              <p class="text-color5 dark:text-bgColor5">Joining Offer :</p>
              <p class="font-semibold">Rs. 15.00</p>
            </div>
          </div>
          <div class="flex justify-between items-end py-4">
            <div class="">
              <p class="font-semibold">To Pay :</p>
              <p class="text-xs text-color5 dark:text-bgColor5">
                inclusive of taxes
              </p>
            </div>
            <p class="text-sm font-semibold text-p2 dark:text-p1">Rs. 15.00</p>
          </div>
          <a
            href="quiz-1.html"
            class="py-3 text-center bg-p2 rounded-full text-sm font-semibold text-white block w-full dark:bg-p1"
          >
            Join Now
          </a>
          <div class="flex justify-start items-start gap-2 pt-2">
            <div class="text-lg">
              <i class="ph ph-check-square"></i>
            </div>
            <p class="text-xs text-color5 dark:text-bgColor5">
              You agree to all terms & conditions and also agree to be contacted
              by company and their pertners
            </p>
          </div>
        </div>
      </div>
    </div> -->

    <div class="hidden inset-0 z-40 setReminderModal">
      <div
        class="container bg-black dark:bg-white dark:bg-opacity-30 bg-opacity-40 flex justify-center items-center h-full px-6"
      >
        <div
          class="bg-white dark:bg-color10 p-5 rounded-xl w-full dark:text-white"
        >
          <div
            class="flex justify-between items-center pb-4 border-b border-dashed border-color21 dark:border-color24"
          >
            <p class="text-lg font-semibold">Set Reminder</p>
            <button
              class="p-2 flex justify-center items-center rounded-full border border-color16 setReminderModalCloseButton dark:border-bgColor16"
            >
              <i class="ph ph-x"></i>
            </button>
          </div>

          <p class="text-xs text-color5 dark:text-bgColor5 py-4">
            You agree to all terms & conditions and also agree to be contacted
            by company and their pertners
          </p>

          <div class="flex justify-between items-center gap-3">
            <button
              class="py-3 text-center border-color16 bg-color14 rounded-full text-sm font-semibold text-p2 dark:text-p1 block w-full dark:border-bgColor16 dark:bg-bgColor14"
            >
              Later
            </button>
            <button
              class="py-3 text-center bg-p2 rounded-full text-sm font-semibold text-white block w-full dark:bg-p1"
            >
              Set Now
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Javascript Dependecies -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script></body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/quiz-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:06 GMT -->
</html>
