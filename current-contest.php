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

<!-- Mirrored from quizio-pwa-html-app.vercel.app/upcoming-contest.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:04 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/images/letter-w.png" type="image/x-icon" />
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
</head>

<body>
  <div class="container min-h-dvh relative overflow-hidden py-8 dark:text-white dark:bg-color1">
    <!-- Absolute Items Start -->
    <img src="assets/images/header-bg-1.png" alt="" class="absolute top-0 left-0 right-0 -mt-16" />
    <div class="absolute top-0 left-0 bg-p3 blur-[145px] h-[174px] w-[149px]"></div>
    <div class="absolute top-40 right-0 bg-[#0ABAC9] blur-[150px] h-[174px] w-[91px]"></div>
    <div class="absolute top-80 right-40 bg-p2 blur-[235px] h-[205px] w-[176px]"></div>
    <div class="absolute bottom-0 right-0 bg-p3 blur-[220px] h-[174px] w-[149px]"></div>
    <!-- Absolute Items End -->

    <!-- Page Title Start -->
    <div class="relative z-10">
      <div class="flex justify-between items-center gap-4 px-6">
        <div class="flex justify-start items-center gap-4">
          <a href="home.php"
            class="bg-white size-8 rounded-full flex justify-center items-center text-xl dark:bg-color10">
            <i class="ph ph-caret-left"></i>
          </a>
          <h2 class="text-2xl font-semibold text-white">Learn With Tests</h2>
        </div>
      </div>
      <!-- Page Title End -->

      <div class="px-6 mt-5" style="margin-top: 100px;">
        <div class="pt-5">
          <div class="flex flex-col gap-4">
            <a href="quiz-details.php?max_limit=5" class="rounded-2xl overflow-hidden shadow2 block">
              <div class="flex justify-between items-center py-3.5 px-5 bg-p2 dark:bg-bgColor16">
                <div class="flex justify-start items-center gap-3">
                  <p class="font-medium text-white">Comparing Adjectives Test
                  </p>
                </div>
              </div>
              <div class="p-5 bg-white dark:bg-color10">
                <div class="flex justify-between items-center text-xs">
                  <div class="flex gap-2">
                    <p>Max Time:</p>
                    <p class="font-semibold"> 5 min</p>
                  </div>
                  <div class="flex gap-3">
                    <p>Questions:</p>
                    <p class="font-semibold"> 10</p>
                  </div>
                </div>
                <div class="flex justify-between items-center gap-2 text-xs py-3 text-nowrap pt-5 pb-5">
                  <p>30 left</p>
                  <div
                    class="relative bg-p2 dark:bg-p1 dark:bg-opacity-10 bg-opacity-10 h-1 w-full rounded-full after:absolute after:h-1 after:w-[40%] after:bg-p2 after:dark:bg-p1 after:rounded-full">
                  </div>
                  <p>100 spots</p>
                </div>
                <div
                  class="border-b border-dashed border-black dark:border-color24 border-opacity-10 pb-5 flex justify-between items-center text-xs">
                  <div class="flex justify-start items-center gap-2"></div>
                  <div class="flex justify-start items-center gap-2">
                    <button class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1">
                      Join Now
                    </button>
                  </div>
                </div>
                <div class="pt-5 flex justify-between items-center">
                  <div class="flex justify-start items-center gap-1">
                    <i class="ph ph-brain text-p2"></i>
                    <p class="text-xs">Test Details</p>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <!-- <i class="ph ph-bell-ringing"></i> -->
                    <i class="ph ph-share-network"></i>
                  </div>
                </div>
              </div>
            </a>
            <a href="quiz-details.php?max_limit=10" class="rounded-2xl overflow-hidden shadow2 block">
              <div class="flex justify-between items-center py-3.5 px-5 bg-p2 dark:bg-bgColor16">
                <div class="flex justify-start items-center gap-3">
                  <p class="font-medium text-white">Present Continuous Test</p>
                </div>
              </div>
              <div class="p-5 bg-white dark:bg-color10">
                <div class="flex justify-between items-center text-xs">
                  <div class="flex gap-2">
                    <p>Max Time:</p>
                    <p class="font-semibold"> 10 min</p>
                  </div>
                  <div class="flex gap-3">
                    <p>Questions:</p>
                    <p class="font-semibold"> 10</p>
                  </div>
                </div>
                <div class="flex justify-between items-center gap-2 text-xs py-3 text-nowrap pt-5 pb-5">
                  <p>25 left</p>
                  <div
                    class="relative bg-p2 dark:bg-p1 dark:bg-opacity-10 bg-opacity-10 h-1 w-full rounded-full after:absolute after:h-1 after:w-[40%] after:bg-p2 after:dark:bg-p1 after:rounded-full">
                  </div>
                  <p>100 spots</p>
                </div>
                <div
                  class="border-b border-dashed border-black dark:border-color24 border-opacity-10 pb-5 flex justify-between items-center text-xs">
                  <div class="flex justify-start items-center gap-2"></div>
                  <div class="flex justify-start items-center gap-2">
                    <button class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1">
                      Join Now
                    </button>
                  </div>
                </div>
                <div class="pt-5 flex justify-between items-center">
                  <div class="flex justify-start items-center gap-1">
                    <i class="ph ph-brain text-p2"></i>
                    <p class="text-xs">Test Details</p>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <!-- <i class="ph ph-bell-ringing"></i> -->
                    <i class="ph ph-share-network"></i>
                  </div>
                </div>
              </div>
            </a>
            <a href="quiz-details.php?max_limit=5" class="rounded-2xl overflow-hidden shadow2 block">
              <div class="flex justify-between items-center py-3.5 px-5 bg-p2 dark:bg-bgColor16">
                <div class="flex justify-start items-center gap-3">
                  <p class="font-medium text-white">Daily Routine Vocabulary Test</p>
                </div>
              </div>
              <div class="p-5 bg-white dark:bg-color10">
                <div class="flex justify-between items-center text-xs">
                  <div class="flex gap-2">
                    <p>Max Time:</p>
                    <p class="font-semibold"> 5 min</p>
                  </div>
                  <div class="flex gap-3">
                    <p>Questions:</p>
                    <p class="font-semibold"> 10</p>
                  </div>
                </div>
                <div class="flex justify-between items-center gap-2 text-xs py-3 text-nowrap pt-5 pb-5">
                  <p>40 left</p>
                  <div
                    class="relative bg-p2 dark:bg-p1 dark:bg-opacity-10 bg-opacity-10 h-1 w-full rounded-full after:absolute after:h-1 after:w-[40%] after:bg-p2 after:dark:bg-p1 after:rounded-full">
                  </div>
                  <p>100 spots</p>
                </div>
                <div
                  class="border-b border-dashed border-black dark:border-color24 border-opacity-10 pb-5 flex justify-between items-center text-xs">
                  <div class="flex justify-start items-center gap-2"></div>
                  <div class="flex justify-start items-center gap-2">
                    <button class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1">
                      Join Now
                    </button>
                  </div>
                </div>
                <div class="pt-5 flex justify-between items-center">
                  <div class="flex justify-start items-center gap-1">
                    <i class="ph ph-brain text-p2"></i>
                    <p class="text-xs">Test Details</p>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <!-- <i class="ph ph-bell-ringing"></i> -->
                    <i class="ph ph-share-network"></i>
                  </div>
                </div>
              </div>
            </a>
            <a href="quiz-details.php?max_limit=10" class="rounded-2xl overflow-hidden shadow2 block">
              <div class="flex justify-between items-center py-3.5 px-5 bg-p2 dark:bg-bgColor16">
                <div class="flex justify-start items-center gap-3">
                  <p class="font-medium text-white">Everyday Expressions Test</p>
                </div>
              </div>
              <div class="p-5 bg-white dark:bg-color10">
                <div class="flex justify-between items-center text-xs">
                  <div class="flex gap-2">
                    <p>Max Time:</p>
                    <p class="font-semibold"> 10 min</p>
                  </div>
                  <div class="flex gap-3">
                    <p>Questions:</p>
                    <p class="font-semibold"> 10</p>
                  </div>
                </div>
                <div class="flex justify-between items-center gap-2 text-xs py-3 text-nowrap pt-5 pb-5">
                  <p>50 left</p>
                  <div
                    class="relative bg-p2 dark:bg-p1 dark:bg-opacity-10 bg-opacity-10 h-1 w-full rounded-full after:absolute after:h-1 after:w-[40%] after:bg-p2 after:dark:bg-p1 after:rounded-full">
                  </div>
                  <p>100 spots</p>
                </div>
                <div
                  class="border-b border-dashed border-black dark:border-color24 border-opacity-10 pb-5 flex justify-between items-center text-xs">
                  <div class="flex justify-start items-center gap-2"></div>
                  <div class="flex justify-start items-center gap-2">
                    <button class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1">
                      Join Now
                    </button>
                  </div>
                </div>
                <div class="pt-5 flex justify-between items-center">
                  <div class="flex justify-start items-center gap-1">
                    <i class="ph ph-brain text-p2"></i>
                    <p class="text-xs">Test Details</p>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <!-- <i class="ph ph-bell-ringing"></i> -->
                    <i class="ph ph-share-network"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==== js dependencies start ==== -->
  <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script>
</body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/upcoming-contest.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:05 GMT -->

</html>