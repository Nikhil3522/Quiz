<?php
require_once("config.php");
$instituteId = isset($_REQUEST['iid']) ? $_REQUEST['iid'] : '';
$getinstituteName = mysqli_query($conn, "select instituteName from institute where id='$instituteId'");
$fetchinstituteName = mysqli_fetch_object($getinstituteName);
$instituteName = $fetchinstituteName->instituteName;
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from quizio-pwa-html-app.vercel.app/top-member.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:13 GMT -->
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
            href="choose-course.php"
            class="bg-white p-1 rounded-full flex justify-center items-center text-xl text-color10"
          >
            <i class="ph ph-caret-left"></i>
          </a>
          <h2 class="text-2xl font-semibold text-white">Courses</h2>
        </div>
        <!-- Page Title End -->

        <!-- Contest List Start -->
        <div class="px-6 flex flex-col gap-4 pt-28">
          
          <?php $getCourses = mysqli_query($conn, "select * from courses where active=1 and instituteName='$instituteName'");
              while($fetchCourses = mysqli_fetch_object($getCourses)){
          ?>

          <div
            class=" bg-white py-4 px-5 rounded-xl border border-black border-opacity-20 dark:bg-color9 dark:border-color24"
          >
            <div class="flex justify-between items-center">
                <div class="flex justify-start items-center gap-3">
                <div class="rounded-full overflow-hidden">
                    <img
                    src="https://roshan1.b-cdn.net/<?php echo $fetchCourses->courseImage; ?>"
                    alt=""
                    class="size-12"
                    />
                </div>
                <div class="">
                    <div class="flex justify-start items-center gap-1">
                    <p class="font-semibold"><?php echo $fetchCourses->courseName; ?></p>
                    </div>
                    <p class="text-xs">Lessons: <?php echo $fetchCourses->totalLessons; ?></p>
                </div>
                </div>

                <button
                class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1"
                onclick="window.location.href='lessons-view.php?iid=<?php echo $instituteId; ?>&cid=<?php echo $fetchCourses->id; ?>'"
                >
                View
                </button>
            </div>
            <p class="text-xs mt-5" style="text-align: justify;"><?php echo $fetchCourses->description; ?></p>
          </div>

        <?php } ?>

          <!-- <div
            class=" bg-white py-4 px-5 rounded-xl border border-black border-opacity-20 dark:bg-color9 dark:border-color24"
          >
            <div class="flex justify-between items-center">
                <div class="flex justify-start items-center gap-3">
                <div class="rounded-full overflow-hidden">
                    <img
                    src="assets/images/course.png"
                    alt=""
                    class="size-12"
                    />
                </div>
                <div class="">
                    <div class="flex justify-start items-center gap-1">
                    <p class="font-semibold">Course 1</p>
                    </div>
                    <p class="text-xs">Lessons: 10</p>
                </div>
                </div>

                <button
                class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1"
                onclick="window.location.href='lessons-view.php'"
                >
                View
                </button>
            </div>
            <p class="text-xs mt-5" style="text-align: justify;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, iusto necessitatibus totam quae minima nemo, natus in porro earum, voluptas a. Perspiciatis cumque tempore nemo! Fuga recusandae nobis dolorum culpa!</p>
          </div>

          <div
            class=" bg-white py-4 px-5 rounded-xl border border-black border-opacity-20 dark:bg-color9 dark:border-color24"
          >
            <div class="flex justify-between items-center">
                <div class="flex justify-start items-center gap-3">
                <div class="rounded-full overflow-hidden">
                    <img
                    src="assets/images/course.png"
                    alt=""
                    class="size-12"
                    />
                </div>
                <div class="">
                    <div class="flex justify-start items-center gap-1">
                    <p class="font-semibold">Course 2</p>
                    </div>
                    <p class="text-xs">Lessons: 10</p>
                </div>
                </div>

                <button
                class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1"
                onclick="window.location.href='lessons-view.php'"
                >
                View
                </button>
            </div>
            <p class="text-xs mt-5" style="text-align: justify;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, iusto necessitatibus totam quae minima nemo, natus in porro earum, voluptas a. Perspiciatis cumque tempore nemo! Fuga recusandae nobis dolorum culpa!</p>
          </div>

          <div
            class=" bg-white py-4 px-5 rounded-xl border border-black border-opacity-20 dark:bg-color9 dark:border-color24"
          >
            <div class="flex justify-between items-center">
                <div class="flex justify-start items-center gap-3">
                <div class="rounded-full overflow-hidden">
                    <img
                    src="assets/images/course.png"
                    alt=""
                    class="size-12"
                    />
                </div>
                <div class="">
                    <div class="flex justify-start items-center gap-1">
                    <p class="font-semibold">Course 3</p>
                    </div>
                    <p class="text-xs">Lessons: 10</p>
                </div>
                </div>

                <button
                class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1"
                onclick="window.location.href='lessons-view.php'"
                >
                View
                </button>
            </div>
            <p class="text-xs mt-5" style="text-align: justify;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, iusto necessitatibus totam quae minima nemo, natus in porro earum, voluptas a. Perspiciatis cumque tempore nemo! Fuga recusandae nobis dolorum culpa!</p>
          </div>

          <div
            class=" bg-white py-4 px-5 rounded-xl border border-black border-opacity-20 dark:bg-color9 dark:border-color24"
          >
            <div class="flex justify-between items-center">
                <div class="flex justify-start items-center gap-3">
                <div class="rounded-full overflow-hidden">
                    <img
                    src="assets/images/course.png"
                    alt=""
                    class="size-12"
                    />
                </div>
                <div class="">
                    <div class="flex justify-start items-center gap-1">
                    <p class="font-semibold">Course 4</p>
                    </div>
                    <p class="text-xs">Lessons: 10</p>
                </div>
                </div>

                <button
                class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1"
                onclick="window.location.href='lessons-view.php'"
                >
                View
                </button>
            </div>
            <p class="text-xs mt-5" style="text-align: justify;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, iusto necessitatibus totam quae minima nemo, natus in porro earum, voluptas a. Perspiciatis cumque tempore nemo! Fuga recusandae nobis dolorum culpa!</p>
          </div> -->
        </div>
        <!-- Contest List End -->
      </div>
    </div>
    <!-- ==== js dependencies start ==== -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script></body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/top-member.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:13 GMT -->
</html>
