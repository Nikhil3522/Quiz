<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from quizio-pwa-html-app.vercel.app/quiz-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon" />
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel="manifest" href="manifest.json" />
  <title>Quiz 1 - Quizio PWA HTML Template</title>
  <link href="style.css" rel="stylesheet">
</head>

<body class="">
  <div class="container min-h-dvh relative overflow-hidden py-8 dark:text-white dark:bg-color1">
    <!-- Absolute Items Start -->
    <img src="assets/images/header-bg-1.png" alt="" class="absolute top-0 left-0 right-0 -mt-8" />
    <div class="absolute top-0 left-0 bg-p3 blur-[145px] h-[174px] w-[149px]"></div>
    <div class="absolute top-40 right-0 bg-[#0ABAC9] blur-[150px] h-[174px] w-[91px]"></div>
    <div class="absolute top-80 right-40 bg-p2 blur-[235px] h-[205px] w-[176px]"></div>
    <div class="absolute bottom-0 right-0 bg-p3 blur-[220px] h-[174px] w-[149px]"></div>
    <!-- Absolute Items End -->

    <div class="relative z-20 px-6">
      <div class="flex justify-between items-center gap-5">
        <div class="flex justify-center items-center gap-1 bg-white  py-2 px-4 rounded-xl dark:bg-color9">
          <i class="ph ph-user"></i>
          <p class="text-xs font-semibold text-nowrap"><span class="current_question_number"></span> of <span class="total_question_number"></span></p>
        </div>
        <div class="w-full bg-p1 bg-opacity-10 h-2 rounded-full relative">
          <span class="absolute top-0 left-0 bg-p1 h-2 rounded-full" style="width: 10%"></span>
        </div>
        <div class="flex justify-center items-center gap-1 bg-p1 text-white py-2 px-4 rounded-xl ">
          <i class="ph ph-puzzle-piece"></i>
          <p class="text-xs font-semibold text-nowrap">1 of <span class="total_question_number"></span></p>
        </div>
      </div>

      <div
        class="bg-white dark:bg-color11 p-4 rounded-xl mt-20 text-center flex flex-col justify-center items-center relative">
        <div
          class="flex justify-center items-center gap-1 bg-bgColor16 px-3 py-1 rounded-md font-semibold text-p2 dark:text-white text-xs absolute left-4 top-4">
          <i class="ph-fill ph-lightbulb-filament text-p1 text-sm"></i>
          <p>Hint</p>
        </div>
        <div class="h-24 w-24 rounded-full bg-p2 p-2 -mt-16">
          <div
            class="h-full w-full bg-white dark:bg-color9 rounded-full flex justify-center items-center text-lg font-bold p-1.5 relative progress">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
              <circle cx="16" cy="16" r="15.9155" class="progress-bar__background" />

              <circle cx="16" cy="16" r="15.9155" style="stroke-dashoffset: 90px"
                class="progress-bar__progress js-progress-bar" />
              <p class="text-lg font-bold absolute top-[26px] left-[30px]">
                10
              </p>
            </svg>
          </div>
        </div>
        <p class="text-2xl font-semibold pt-8">Question <span class="current_question_number"></span></p>
        <p class="text-sm text-color5 pt-5 pb-3 dark:text-bgColor5">Sports Quiz</p>
        <p class="text-lg font-semibold px-4 pt-3 border-t border-dashed border-color21 dark:border-color24" id="question_title"></p>
      </div>
      <div>
        
      </div>

      <div class="flex flex-col gap-4 pt-8">
        <div id="first_option" onclick="selectOption(event)" class="flex justify-between items-center bg-white py-4 px-5 rounded-2xl">
          <p class="text-sm font-semibold"></p>
          <div class="size-8 rounded-full text-white border border-color21 flex justify-center items-center"></div>
        </div>
        <div id="second_option" onclick="selectOption(event)" class="flex justify-between items-center bg-white dark:bg-color9 py-4 px-5 rounded-2xl">
          <p class=" text-sm font-semibold"></p>
          <div class="size-8 rounded-full text-white border border-color21 flex justify-center items-center"></div>
        </div>
        <div id="third_option" onclick="selectOption(event)" class="flex justify-between items-center bg-white dark:bg-color9 py-4 px-5 rounded-2xl">
          <p class=" text-sm font-semibold"></p>
          <div class="size-8 rounded-full text-white border border-color21 flex justify-center items-center"></div>
        </div>
        <div id="fourth_option" onclick="selectOption(event)" class="flex justify-between items-center bg-white dark:bg-color9 py-4 px-5 rounded-2xl">
          <p class="text-sm font-semibold"></p>
          <div class="size-8 rounded-full text-white border border-color21 flex justify-center items-center"></div>
        </div>
      </div>

      <div class="pt-12">
        <a
          class="py-3 text-center bg-p2 dark:bg-p1 rounded-full text-sm font-semibold text-white block confirmationModalOpenButton w-full"
          onclick="displayQuestion()"
          >
          Next
        </a>
      </div>
    </div>

    <!-- ==== js dependencies start ==== -->
    <script src="assets/js/main.js"></script>
    <script defer src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

      var resArray = null;
      var index = 0;
      var totalQuestionsCount = 0;

      $.ajax({
        url: 'api.php',
        method: 'GET',
        data: {function_name: "load_questions"},
        success: function(data) {
          resArray = JSON.parse(data); 
          totalQuestionsCount = resArray.length;
          $('.total_question_number').text(totalQuestionsCount);
          displayQuestion();
        },
        error: function(xhr, status, error) {
          console.error('Error:', error); 
        }
      });


      function displayQuestion(){
        resetOptions();

        let tempQuestion = resArray[index++];
        if(!tempQuestion){
          alert("test Sumitted");
        }
        $('.current_question_number').text(index);

        $('#question_title').text(tempQuestion.questions);
        $('#first_option p').text(tempQuestion.first_option);
        $('#second_option p').text(tempQuestion.second_option);
        if(tempQuestion.type === "TRUE_FALSE"){
          $('#third_option').hide();
          $('#fourth_option').hide();
        }else{
          $('#third_option').show();
          $('#fourth_option').show();
          $('#third_option p').text(tempQuestion.third_option);
          $('#fourth_option p').text(tempQuestion.fourth_option);
        }
      }

      // Function to reset the classes of options
      function resetOptions() {
        // Reset the classes of all options
        const options = ['#first_option', '#second_option', '#third_option', '#fourth_option'];
        options.forEach(option => {
          const optionElement = $(option);
          optionElement.removeClass('bg-color4');
          optionElement.addClass('bg-white');

          optionElement.find('p').removeClass('text-p2');
          optionElement.find('div').removeClass('border border-color21 bg-p3');
        });
      }

      function selectOption(event) {
        const element = event.target;
        element.classList.toggle('bg-white');
        element.classList.toggle('bg-color4');

        // Select the <p> element inside the clicked element
        let pTag = element.querySelector('p');  // This selects the first <p> inside the clicked element
        if (pTag) {
            pTag.classList.toggle('text-p2');
        }

        // Select the <div> element inside the clicked element
        let divTag = element.querySelector('div');
        if (divTag) {
            // Toggle classes separately
            divTag.classList.toggle('border');
            divTag.classList.toggle('border-color21');
            divTag.classList.toggle('bg-p3');
        }
      }

      function saveAnswer(){
        
      }



    </script>
</body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/quiz-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:18 GMT -->

</html>