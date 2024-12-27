<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from quizio-pwa-html-app.vercel.app/choose-category.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/logo.png"
      type="image/x-icon"
    />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="manifest" href="manifest.json" />
    <title>Choose Category - Quizio PWA HTML Template</title>
  <link href="style.css" rel="stylesheet"></head>
  <body class="">
    <?php
      include('cons.php');
    ?>
    <div
      class="container min-h-dvh relative overflow-hidden py-8 dark:text-white dark:bg-color1"
    >
      <!-- Absolute Items Start -->
      <img
        src="assets/images/header-bg-2.png"
        alt=""
        class="absolute top-0 left-0 right-0 -mt-32"
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
      <div class="relative z-20 px-6">
        <div class="flex justify-between items-center gap-4">
          <div class="flex justify-start items-center gap-4">
            <a
              href="choose-category.php"
              class="bg-white size-8 rounded-full flex justify-center items-center text-xl dark:bg-color10"
            >
              <i class="ph ph-caret-left"></i>
            </a>
            <h2 class="text-2xl font-semibold text-white"><?= $_GET['category_name']; ?></h2>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-5 pt-28">
          <!-- <a
            href="math-quiz.html"
            class="flex justify-start items-start gap-2 bg-white px-3 pt-3 pb-6 rounded-xl dark:bg-color9"
          >
            <img src="assets/images/icon1.png" alt="" class="size-12" />
            <div class="">
              <p class="text-sm font-semibold">Music Quiz</p>
              <p class="text-xs text-p2 pt-1 dark:text-p1">Que: 150</p>
            </div>
          </a>
          <a
            href="math-quiz.html"
            class="flex justify-start items-start gap-2 bg-white px-3 pt-3 pb-6 rounded-xl dark:bg-color9"
          >
            <img src="assets/images/icon2.png" alt="" class="size-12" />
            <div class="">
              <p class="text-sm font-semibold">Picture Quiz</p>
              <p class="text-xs text-p2 pt-1 dark:text-p1">Que: 150</p>
            </div>
          </a>
          <a
            href="math-quiz.html"
            class="flex justify-start items-start gap-2 bg-white px-3 pt-3 pb-6 rounded-xl dark:bg-color9"
          >
            <img src="assets/images/icon3.png" alt="" class="size-12" />
            <div class="">
              <p class="text-sm font-semibold">Music Quiz</p>
              <p class="text-xs text-p2 pt-1 dark:text-p1">Que: 150</p>
            </div>
          </a>
          <a
            href="math-quiz.html"
            class="flex justify-start items-start gap-2 bg-white px-3 pt-3 pb-6 rounded-xl dark:bg-color9"
          >
            <img src="assets/images/icon4.png" alt="" class="size-12" />
            <div class="">
              <p class="text-sm font-semibold">Science Quiz</p>
              <p class="text-xs text-p2 pt-1 dark:text-p1">Que: 150</p>
            </div>
          </a> -->
          <?php
            $category_id = $_GET['category_id'];
            $query = "SELECT * FROM quiz_sub_categories WHERE category_id = $category_id;";
            $categories_result = $conn->query($query);

            while($row = $categories_result->fetch_assoc()){
              $sub_category_id = $row['sub_cat_id'];
              $category_name = $row['name'];
              ?>
              <a
                href="choose-level.php?sub_category_id=<?= $sub_category_id; ?>"
                class="flex justify-start items-start gap-2 bg-white px-3 pt-3 pb-6 rounded-xl dark:bg-color9"
              >
                <!-- <img src="assets/images/icon4.png" alt="" class="size-12" /> -->
                <span style=" background: #ffce85; height: 45px; width: 45px; border-radius: 25px; text-align: center; line-height: 45px; font-size: 25px; color: #5c46f6; font-weight: 600;"><?= substr($category_name, 0, 1); ?></span>
                <div class="">
                  <p class="text-sm font-semibold"><?= $category_name; ?></p>
                  <p class="text-xs text-p2 pt-1 dark:text-p1">Que: 150</p>
                </div>
              </a>
              <?php
            }
          ?>
        </div>
      </div>
    </div>
    <!-- ==== js dependencies start ==== -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script></body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/choose-category.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:14 GMT -->
</html>
