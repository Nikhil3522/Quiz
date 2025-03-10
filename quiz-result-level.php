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
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="manifest" href="manifest.json" />
    <title>Whiteboard</title>
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
              href="home.html"
              class="bg-white size-8 rounded-full flex justify-center items-center text-xl dark:bg-color10"
            >
              <i class="ph ph-x" style="color: #da1133;"></i>
            </a>
            <h2 class="text-2xl font-semibold text-white">Result Summary</h2>
          </div>
        </div>

        <?php
          $correct_ques = $_GET['correct'];
          $incorrect_ques = $_GET['incorrect'];
          $quiz_id = $_GET['quiz_id'];
          $index = $quiz_id - 1;

          $level_array = ['Beginner', 'Intermediate', 'Upper - Intermediate', 'Advanced', 'Proficient'];
          $incorrect_msg_array = ["<br> You can understand and use basic expressions and phrases.",
            "You can communicate in a simple way and perform routine tasks.",
            "You can understand and use sentences on familiar or personally interesting topics encountered in work, school or travel.",
            "You can interact with a degree of fluency and spontaneity with native speakers."
          ];
          $correct_msg_array= ["Let's get to the next round. You are amazing! Ready? GO!",
            "Stretch your arms, roll your shoulders, deep breath and off you go! The end is near. <br> Remember: If you don't know the answer, just click \"I don't know.\" 😉",
            "You are a rock star! 🤟🏼 You have just made it through some pretty difficult questions. <br> Don't give up now!",
            "You can use the language flexibly and effectively for social, academic and professional purposes."
          ];

          if(($quiz_id == 1 && $correct_ques >= 9) || ($quiz_id != 1 && $correct_ques >= 5)){
            $message = $correct_msg_array[$index];
            $level_name = $level_array[$index + 1];
          }else{
            $message = $incorrect_msg_array[$index];
            $level_name = $level_array[$index];
          }
        ?>
      
        <div
          class="bg-white border dark:bg-color9 border-color21 p-4 mt-8 rounded-2xl"
          style="margin-top: 90px;"
        >
        <div class="flex justify-start items-start gap-4 ">
            <div
                class="flex flex-col gap-2 pr-4 border-r border-dashed border-black dark:border-color24 border-opacity-10 "
                style="width: 45%;"
                >
                <div class="flex justify-start items-center gap-3 pt-5">
                    <!-- <img src="assets/images/badge.png" alt=""> -->
                    <div class="">
                    <p class="text-xs">Your level</p>
                    <p class="font-semibold text-p1"><?= $level_name ?></p>
                    </div>
                </div>
            </div>
            <div
                class="flex flex-col gap-5 pr-4 pt-2"
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
                <p class="font-semibold"><?= $correct_ques ?></p>
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
                <p class="font-semibold"><?= $incorrect_ques ?></p>
                </div>
                <!-- <div class="flex justify-between items-center gap-4">
                <div class="flex justify-start items-center gap-2">
                    <div
                    class="size-6 flex justify-center items-center rounded-full bg-p1"
                    >
                    <i class="ph ph-x text-white text-sm"></i>
                    </div>
                    <p class="text-xs">Unattempted :</p>
                </div>
                <p class="font-semibold"><?= 10 - $incorrect_ques - $correct_ques ?></p>
                </div> -->
            </div>
            </div>
            <p style="text-align: justify; margin-top: 15px; font-size: 14px; font-weight: 500; color: #d71235;"><?= $message; ?></p>
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
            id="test-enlgish-level-a"
            class="py-3 text-center bg-p2 dark:bg-p1 rounded-full text-sm font-semibold text-white block confirmationModalOpenButton w-full cursor-pointer"
            onclick="window.location.href='home.html'"
            style="background: #ff710f;"
            >
            <!-- onclick="window.location.href='quiz.php?quiz_id=2&quiz_name=Intermediate&quiz_level=Intermediate'" -->
            Go To Next
          </a>
        </div>
        <div class="pt-2" id="qwe">
          <a
            class="py-3 text-center bg-p2 dark:bg-p1 rounded-full text-sm font-semibold text-white block confirmationModalOpenButton w-full cursor-pointer"
            onclick="window.location.href='home.html'"
            style="background: #ff710f;"
            >
            <!-- onclick="window.location.href='quiz.php?quiz_id=2&quiz_name=Intermediate&quiz_level=Intermediate'" -->
            Home
          </a>
        </div>

      </div>
    </div>
    <!-- ==== js dependencies start ==== -->
    <script>
      document.addEventListener("DOMContentLoaded", () => {

        getLevelOfUser_local();
      });

      function getLevelOfUser_local(){
        fetch('api.php?function_name=get_level')
        .then(res => res.json())
        .then(data => {
          let englishLevel = data.english_level;
          let englishLevel_quizId = 1;

          if(data.english_level == "Intermediate"){
            englishLevel_quizId = 2;
          }else if(data.english_level == "Upper - Intermediate"){
            englishLevel_quizId = 3;
          }else if(data.english_level == "Advanced"){
            englishLevel_quizId = 4;
          }

          if(englishLevel_quizId === <?= $_GET['quiz_id']?> || <?= $_GET['quiz_id'] ?> == 4){
            return;
          }

          document.getElementById('test-enlgish-level-a').style.display = 'block';
          document.getElementById("test-enlgish-level-a").setAttribute("href", `quiz.php?quiz_id=${englishLevel_quizId}&quiz_name=${englishLevel}&quiz_level=${englishLevel}`);
        });
      }
    </script>
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script></body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/result-summary.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:36 GMT -->
</html>
