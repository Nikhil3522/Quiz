<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from quizio-pwa-html-app.vercel.app/math-quiz.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:21 GMT -->
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
  <body class="relative -z-20">
    <?php
      include('cons.php');
    ?>
    <div
      class="container min-h-dvh relative overflow-hidden py-8 dark:text-white -z-10 dark:bg-color1"
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
      <div class="relative z-50 px-6">
        <div class="flex justify-between items-center gap-4">
          <div class="flex justify-start items-center gap-4">
          <a
            class="bg-white size-8 rounded-full flex justify-center items-center text-xl dark:bg-color10"
            href="javascript:void(0);" 
            onclick="window.history.back();"
          >
              <i class="ph ph-caret-left"></i>
            </a>
            <h2 class="text-2xl font-semibold text-white"><?= $_GET['sub_category_name'] ?></h2>
          </div>
        </div>
        <div class="mt-28">
          <div class="flex flex-col justify-center items-center text-center">
          </div>
          <div class="grid grid-cols-3 gap-3 levelItems">
            <?php
                $sub_category_id = $_GET['sub_category_id'];
                $query = "SELECT * FROM quiz_sub_categories_level WHERE sub_cat_id = $sub_category_id";
                $level_result = $conn->query($query);
                $level_count = 1;
                while($row = $level_result->fetch_assoc()){
                    $sub_cat_level_id = $row['sub_cat_level_id'];
                    $level_name = $row['name'];

                    ?>
                    <button
                    class="bg-white dark:bg-color9 shadow-sm text-center rounded-lg relative item cursor-pointer"
                      onclick="window.location.href='quiz.php?quiz_id=<?= $sub_cat_level_id ?>&quiz_name=<?= $level_name ?>'"
                      disabled
                    >
                      <div
                        class="flex justify-center items-center p-1 rounded-full text-p2 bg-color14 border dark:text-p1 dark:border-bgColor16 dark:bg-bgColor14 border-color16 absolute top-2 text-xs right-2"
                    >
                        <i class="ph ph-lock-simple-open"></i>
                    </div>
                    <div class="rounded-full">
                        <div
                        class="rounded-full flex justify-center items-center text-lg font-bold relative progress small"
                        >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
                            <circle
                            cx="16"
                            cy="16"
                            r="9.5155"
                            class="progress-bar__background small"
                            />

                            <circle
                            cx="16"
                            cy="16"
                            r="9.5155"
                            style="stroke-dashoffset: 80px"
                            class="progress-bar__progress js-progress-bar small"
                            />
                            <p
                            class="text-lg font-bold absolute top-[22px] left-[41px] bg-bgColor14 size-9 flex justify-center items-center rounded-full"
                            >
                            <?= $level_count++; ?>
                            </p>
                        </svg>
                        </div>
                    </div>
                    <p class="text-xs font-semibold pb-3"><?= $level_name; ?></p>
                    </button>

                    <?php
                }
            ?>

          </div>
        </div>
      </div>
    </div>
    <!-- <div class="hidden inset-0 z-40 hintModal">
      <div
        class="container bg-black dark:bg-white dark:bg-opacity-30 bg-opacity-40 flex justify-center items-center h-full px-6"
      >
        <div
          class="bg-white dark:bg-color10 p-5 rounded-xl w-full dark:text-white"
        >
          <div class="flex justify-center items-center">
            <div
              class="flex justify-center items-center text-4xl text-white !leading-none bg-p1 rounded-full p-5"
            >
              <i class="ph ph-check"></i>
            </div>
          </div>

          <p class="text-2xl font-semibold text-center pt-5">Use hint</p>

          <p class="text-xs text-color5 dark:text-bgColor5 py-4 text-center">
            Using this hint remove two wrong option and you loose
            <span class="font-semibold">3 coin</span>
          </p>

          <div class="flex flex-col justify-between items-center gap-3">
            <a
              href="quiz.php?quiz_id=31"
              class="py-3 text-center bg-p2 rounded-full text-sm font-semibold text-white block w-full dark:bg-p1"
            >
              Join Now
            </a>
            <button
              class="py-3 text-center border-color16 bg-color14 rounded-full text-sm font-semibold text-p2 dark:text-p1 block w-full dark:border-bgColor16 dark:bg-bgColor14 hintModalCloseButton"
            >
              Exit
            </button>
          </div>
        </div>
      </div>
    </div> -->
    <!-- ==== js dependencies start ==== -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script>
  <script src="assets/js/quiz_unlock_logic.js"></script>
</body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/math-quiz.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:21 GMT -->
</html>
