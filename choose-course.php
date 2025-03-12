<?php
  require_once("config.php");
  if(!isset($user_id) || $user_id == 0 || !isset($_COOKIE['mobilenumber']) || empty($_COOKIE['mobilenumber'])){
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
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
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
          href="home.html"
          class="bg-white p-2 rounded-full flex justify-center items-center text-xl dark:bg-color10"
        >
          <i class="ph ph-caret-left"></i>
        </a>
        <h2 class="text-2xl font-semibold text-white">Learning Resources</h2>
      </div>
      <!-- Page Title End -->

      <div class="relative z-20 pt-32">
        <div class="grid grid-cols-2 gap-5 text-center">
          
          <?php $getInstitute = mysqli_query($conn, "select * from institute where active=1");
              while($fetchInstitute = mysqli_fetch_object($getInstitute)){
          ?>
          <a
            class="py-5 px-4 rounded-xl bg-white flex justify-center items-center flex-col relative dark:bg-color9"
          >
          <!-- href="medal-details.html" -->
            <div
              class="absolute top-2 right-2 flex justify-center items-center text-p2 rounded-full p-1.5 text-sm cursor-pointer"
              style="height: 17.05px;"
              onclick="window.location.href='course-details.php?iid=<?php echo $fetchInstitute->id; ?>'"
            >
                <img src="assets/images/info.png" alt="info" width="20px"/>
            </div>
            <img src="https://roshan1.b-cdn.net/<?php echo $fetchInstitute->instituteLogo; ?>" alt="" width="60px" style="min-height: 60px; min-width: 50px; background: #d1d0d0;"/>
            <p class="text-sm font-semibold pt-3"><?php echo $fetchInstitute->instituteName; ?></p>
            <button
                class="flex justify-center items-center gap-2 py-2 px-6 rounded-full mt-2 bg-p2 text-white text-sm dark:text-p1 dark:bg-bgColor14 dark:border-bgColor16 dark:border mt-5"
                onclick="window.location.href='lessons-view.php?iid=<?php echo $fetchInstitute->id; ?>'"
            >
            View
            </button>
            <p class="text-xs mt-2 cursor-pointer" onclick="window.location.href='course-details.php?iid=<?php echo $fetchInstitute->id; ?>'">Details</p>
          </a>
          <?php } ?>

          <!-- <a
            class="py-5 px-4 rounded-xl bg-white flex justify-center items-center flex-col relative dark:bg-color9"
          >
          <!-- href="medal-details.html" --
            <div
              class="absolute top-2 right-2 flex justify-center items-center text-p2 rounded-full p-1.5 text-sm cursor-pointer"
              style="height: 17.05px;"
              onclick="window.location.href='course-details.php'"
            >
                <img src="assets/images/info.png" alt="info" width="20px"/>
            </div>
            <img src="assets/images/insti1.png" alt="" width="60px"/>
            <p class="text-sm font-semibold pt-3">Forsat Language Institute</p>
            <button
                class="flex justify-center items-center gap-2 py-2 px-6 rounded-full mt-2 bg-p2 text-white text-sm dark:text-p1 dark:bg-bgColor14 dark:border-bgColor16 dark:border mt-5"
                onclick="window.location.href='course-view.php'"
            >
            View Courses
            </button>
            <p class="text-xs mt-2 cursor-pointer" onclick="window.location.href='course-details.php'">Details</p>
          </a>
          <a
            class="py-5 px-4 rounded-xl bg-white flex justify-center items-center flex-col relative dark:bg-color9"
          >
            <div
              class="absolute top-2 right-2 flex justify-center items-center text-p2 rounded-full p-1.5 text-sm cursor-pointer"
              style="height: 17.05px;"
              onclick="window.location.href='course-details.php'"
            >
                <img src="assets/images/info.png" alt="info" width="20px"/>
            </div>
            <img src="assets/images/insti2.png" alt="" width="60px"/>
            <p class="text-sm font-semibold pt-3">Sample Language Institute</p>
            <button
                class="flex justify-center items-center gap-2 py-2 px-6 rounded-full mt-2 bg-p2 text-white text-sm dark:text-p1 dark:bg-bgColor14 dark:border-bgColor16 dark:border mt-5"
                onclick="window.location.href='course-view.php'"
            >
            View Courses
            </button>
            <p class="text-xs mt-2 cursor-pointer" onclick="window.location.href='course-details.php'">Details</p>
          </a>
          <a
            class="py-5 px-4 rounded-xl bg-white flex justify-center items-center flex-col relative dark:bg-color9"
          >
            <div
              class="absolute top-2 right-2 flex justify-center items-center text-p2 rounded-full p-1.5 text-sm cursor-pointer"
              style="height: 17.05px;"
              onclick="window.location.href='course-details.php'"
            >
                <img src="assets/images/info.png" alt="info" width="20px"/>
            </div>
            <img src="assets/images/insti3.png" alt="" width="60px"/>
            <p class="text-sm font-semibold pt-3">Sample Language Institute</p>
            <button
                class="flex justify-center items-center gap-2 py-2 px-6 rounded-full mt-2 bg-p2 text-white text-sm dark:text-p1 dark:bg-bgColor14 dark:border-bgColor16 dark:border mt-5"
                onclick="window.location.href='course-view.php'"
            >
            View Courses
            </button>
            <p class="text-xs mt-2 cursor-pointer" onclick="window.location.href='course-details.php'">Details</p>
          </a>
          <a
            class="py-5 px-4 rounded-xl bg-white flex justify-center items-center flex-col relative dark:bg-color9"
          >
            <div
              class="absolute top-2 right-2 flex justify-center items-center text-p2 rounded-full p-1.5 text-sm cursor-pointer"
              style="height: 17.05px;"
              onclick="window.location.href='course-details.php'"
            >
                <img src="assets/images/info.png" alt="info" width="20px"/>
            </div>
            <img src="assets/images/insti1.png" alt="" width="60px"/>
            <p class="text-sm font-semibold pt-3">Sample Language Institute</p>
            <button
                class="flex justify-center items-center gap-2 py-2 px-6 rounded-full mt-2 bg-p2 text-white text-sm dark:text-p1 dark:bg-bgColor14 dark:border-bgColor16 dark:border mt-5"
                onclick="window.location.href='course-view.php'"
            >
            View Courses
            </button>
            <p class="text-xs mt-2 cursor-pointer" onclick="window.location.href='course-details.php'">Details</p>
          </a>
          <a
            class="py-5 px-4 rounded-xl bg-white flex justify-center items-center flex-col relative dark:bg-color9"
          >
            <div
              class="absolute top-2 right-2 flex justify-center items-center text-p2 rounded-full p-1.5 text-sm cursor-pointer"
              style="height: 17.05px;"
              onclick="window.location.href='course-details.php'"
            >
                <img src="assets/images/info.png" alt="info" width="20px"/>
            </div>
            <img src="assets/images/insti2.png" alt="" width="60px"/>
            <p class="text-sm font-semibold pt-3">E Language Institute</p>
            <button
                class="flex justify-center items-center gap-2 py-2 px-6 rounded-full mt-2 bg-p2 text-white text-sm dark:text-p1 dark:bg-bgColor14 dark:border-bgColor16 dark:border mt-5"
                onclick="window.location.href='course-view.php'"
            >
            View Courses
            </button>
            <p class="text-xs mt-2 cursor-pointer" onclick="window.location.href='course-details.php'">Details</p>
          </a>
          <a
            class="py-5 px-4 rounded-xl bg-white flex justify-center items-center flex-col relative dark:bg-color9"
          >
            <div
              class="absolute top-2 right-2 flex justify-center items-center text-p2 rounded-full p-1.5 text-sm cursor-pointer"
              style="height: 17.05px;"
              onclick="window.location.href='course-details.php'"
            >
                <img src="assets/images/info.png" alt="info" width="20px"/>
            </div>
            <img src="assets/images/insti3.png" alt="" width="60px"/>
            <p class="text-sm font-semibold pt-3">F Language Institute</p>
            <button
                class="flex justify-center items-center gap-2 py-2 px-6 rounded-full mt-2 bg-p2 text-white text-sm dark:text-p1 dark:bg-bgColor14 dark:border-bgColor16 dark:border mt-5"
                onclick="window.location.href='course-view.php'"
            >
            View Courses
            </button>
            <p class="text-xs mt-2 cursor-pointer" onclick="window.location.href='course-details.php'">Details</p>
          </a> -->
        </div>
      </div>
    </div>
    <!-- ==== js dependencies start ==== -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script></body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/master-medal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:13 GMT -->
</html>
