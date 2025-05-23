<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from quizio-pwa-html-app.vercel.app/quiz-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/images/letter-w.png" type="image/x-icon" />
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel="manifest" href="manifest.json" />
  <title>Whiteboard</title>
  <link href="style.css" rel="stylesheet">
  <style>
    #quiz_container{
      display: none;
    }
  </style>
</head>

<body class="">
  <div id="loader_container" style="display: flex; justify-content: center; height: 100vh; align-items: center;">
    <img src="assets/quiz_loader.gif" />
  </div>
  <div id="quiz_container" class="none container min-h-dvh relative overflow-hidden py-8 dark:text-white dark:bg-color1">
    <!-- Absolute Items Start -->
    <img src="assets/images/header-bg-1.png" alt="" class="absolute top-0 left-0 right-0 -mt-8" />
    <div class="absolute top-0 left-0 bg-p3 blur-[145px] h-[174px] w-[149px]"></div>
    <div class="absolute top-40 right-0 bg-[#0ABAC9] blur-[150px] h-[174px] w-[91px]"></div>
    <div class="absolute top-80 right-40 bg-p2 blur-[235px] h-[205px] w-[176px]"></div>
    <div class="absolute bottom-0 right-0 bg-p3 blur-[220px] h-[174px] w-[149px]"></div>
    <!-- Absolute Items End -->

    
    <div class="relative z-20 px-6">
      <button onclick="closeWarning()" class="sidebarModalCloseButton absolute top-1 right-3 border rounded-full border-p1 flex justify-center items-center p-1 text-white">
        <i class="ph ph-x"></i>
      </button>
      <?php
        $quiz_name = $_GET['quiz_name'];
        if(!isset($_GET['quiz_level'])){
      ?>
        <h2 style="text-align: center; color: white; font-weight: 500; text-transform: uppercase; margin-bottom: 5px; font-size: 20px;"><?= $quiz_name ?></h2>
      <?php } ?>
      <div class="flex justify-center items-center gap-1 bg-white  py-2 px-4 rounded-xl dark:bg-color9" style="width: 100px; margin: auto;">
        <p class="text-xs font-semibold text-nowrap"><span class="current_question_number"></span> of <span class="total_question_number"></span></p>
      </div>
      <div class="flex justify-between items-center gap-5 mt-2">
        <div class="w-full bg-p1 bg-opacity-10 h-2 rounded-full relative">
          <span class="absolute top-0 left-0 bg-p1 h-2 rounded-full" id="width-bar" style="width: 10%"></span>
        </div>
      </div>

      <div
        class="bg-white dark:bg-color11 p-4 rounded-xl mt-20 text-center flex flex-col justify-center items-center relative">
        <!-- <div
          class="flex justify-center items-center gap-1 bg-bgColor16 px-3 py-1 rounded-md font-semibold text-p2 dark:text-white text-xs absolute left-4 top-4">
          <i class="ph-fill ph-lightbulb-filament text-p1 text-sm"></i>
          <p>Hint</p>
        </div> -->
        <div class="h-24 w-24 rounded-full bg-p2 p-2 -mt-16">
          <div
            class="h-full w-full bg-white dark:bg-color9 rounded-full flex justify-center items-center text-lg font-bold p-1.5 relative progress">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
              <circle cx="16" cy="16" r="15.9155" class="progress-bar__background" />

              <circle id="timer-circle" cx="16" cy="16" r="15.9155" style="stroke-dashoffset: 0px"
                class="progress-bar__progress js-progress-bar" />
                <p id="timeDisplay" style="font-size: 20px; font-weight: 400; text-align: center; width: 18px; margin-left: <?php if(isset($quiz_name) && $quiz_name != ""){ echo "0px"; } else{ echo "-10px";}?>;" class="text-lg font-bold absolute top-[26px] left-[30px]">
                  <?php if(isset($quiz_name) && $quiz_name != ""){ ?>
                    20
                  <?php }else{
                    echo (isset($_GET['max_limit']) ? $_GET['max_limit'] : "5") . ":00";
                  }?>
                </p>
            </svg>
          </div>
        </div>
        <p class="text-2xl font-semibold pt-2 pb-2">Question <span class="current_question_number"></span></p>
        <p class="text-lg font-semibold px-4 pt-3 border-t border-dashed border-color21 dark:border-color24" id="question_title"></p>
      </div>
      <div>
        
      </div>

      <div class="flex flex-col gap-4 pt-8">
        <div id="first_option" onclick="selectOption(event)" class="flex justify-between items-center bg-white dark:bg-color9 py-4 px-5 rounded-2xl relative">
          <p class="text-sm font-semibold text-center" style="width: 100%;"></p>
          <!-- <div class="size-8 rounded-full text-white border border-color21 flex justify-center items-center"></div> -->
        </div>
        <div id="second_option" onclick="selectOption(event)" class="flex justify-between items-center bg-white dark:bg-color9 py-4 px-5 rounded-2xl relative">
          <p class=" text-sm font-semibold text-center" style="width: 100%;"></p>
          <!-- <div class="size-8 rounded-full text-white border border-color21 flex justify-center items-center"></div> -->
        </div>
        <div id="third_option" onclick="selectOption(event)" class="flex justify-between items-center bg-white dark:bg-color9 py-4 px-5 rounded-2xl relative">
          <p class=" text-sm font-semibold text-center" style="width: 100%;"></p>
          <!-- <div class="size-8 rounded-full text-white border border-color21 flex justify-center items-center"></div> -->
        </div>
        <div id="fourth_option" onclick="selectOption(event)" class="flex justify-between items-center bg-white dark:bg-color9 py-4 px-5 rounded-2xl relative">
          <p class="text-sm font-semibold text-center" style="width: 100%;"></p>
          <!-- <div class="size-8 rounded-full text-white border border-color21 flex justify-center items-center"></div> -->
        </div>
        <div id="fifth_option" onclick="selectOption(event)" class="flex justify-between items-center bg-white dark:bg-color9 py-4 px-5 rounded-2xl relative">
          <p class="text-sm font-semibold text-center" style="width: 100%;"></p>
          <!-- <div class="size-8 rounded-full text-white border border-color21 flex justify-center items-center"></div> -->
        </div>
      </div>

      <div class="pt-12">
        <a
          class="py-3 text-center bg-p2 dark:bg-p1 rounded-full text-sm font-semibold text-white block confirmationModalOpenButton w-full cursor-pointer"
          onclick="displayQuestion()"
          >
          Next
        </a>
      </div>
      <?php if(!isset($_GET['quiz_level'])){ ?>
        <div class="pt-2">
          <a
            class="py-3 text-center bg-p2 dark:bg-p1 rounded-full text-sm font-semibold text-white block confirmationModalOpenButton w-full cursor-pointer"
            onclick="displayQuestion()"
            style="background: #ff710f;"
            >
            Skip
          </a>
        </div>
      <?php } ?>
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
      var currentQuizId = null;
      var currentQuesType = null;
      var userAnswer = [];
      var tempAnswer = ""; // In this variable store the answer of current question
      let previousTime = null;
      let quizName = "<?= $quiz_name ?>"
      var quizLevel = "<?= isset($_GET['quiz_level']) ? $_GET['quiz_level'] : '' ?>";
      var preSubmittedAnswer = null;
      var preSubmittedAnswer_resetOption = null;

      $.ajax({
        url: 'api.php',
        method: 'GET',
        data: {function_name: "load_questions", quiz_level: quizLevel},
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
        timer();
        if(index > 0){
          resetOptions();
          userAnswer.push({question_id: currentQuizId, answer: tempAnswer});
          tempAnswer = "";
        }
        let currentIndex_preSubAnswer = null;
        if(preSubmittedAnswer && preSubmittedAnswer[index]){
          currentIndex_preSubAnswer = preSubmittedAnswer[index]['answer'];
        }

        let tempQuestion = resArray[index++];
        if(!tempQuestion){
          getCorrectAnswer();
          return;
        }
        currentQuizId = tempQuestion.question_id;
        currentQuesType = tempQuestion.type;
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
          if(tempQuestion.fifth_option){
            $('#fifth_option').show();
            $('#fifth_option p').text(tempQuestion.fifth_option);
          }else{
            $('#fifth_option').hide();
          }
        }

        if(currentIndex_preSubAnswer === '1'){
          // $('#first_option').prepend(preSaveText);
          // preSubmittedAnswer_resetOption = 1;

          // Manually trigger the function with a simulated event
          selectOption({ target: $('#first_option')[0] });
        }else if(currentIndex_preSubAnswer === '2'){
          selectOption({ target: $('#second_option')[0] });
        }else if(currentIndex_preSubAnswer === '3'){
          selectOption({ target: $('#third_option')[0] });
        }else if(currentIndex_preSubAnswer === '4'){
          selectOption({ target: $('#fourth_option')[0] });
        }else if(currentIndex_preSubAnswer === '5'){
          selectOption({ target: $('#fifth_option')[0] });
        }

        $('#width-bar').css('width',`${index*10}%`);
      }

      // Function to reset the classes of options
      function resetOptions() {
        // Reset the classes of all options
        const options = ['#first_option', '#second_option', '#third_option', '#fourth_option', '#fifth_option'];
        options.forEach(option => {
          const optionElement = $(option);
          optionElement.removeClass('bg-color4');
          optionElement.addClass('bg-white');

          optionElement.find('p').removeClass('text-p2');
          optionElement.find('div').removeClass('border border-color21 bg-p3');
        });
      }

      function selectOption(event) {
        // Ensure the clicked element is the outermost <div> or find its parent
        const element = event.target.closest('.flex'); // Adjust the selector to your outermost div class
        if (!element) return; // Exit if no matching element is found

        if (currentQuesType === "TRUE_FALSE" || currentQuesType === "SINGLE_CHOICE") {
            resetOptions();
            if(tempAnswer.length > 0){
              tempAnswer = "";
            }
        }

        element.classList.toggle('bg-white');
        element.classList.toggle('bg-color4');

        // Select the <p> element inside the clicked element
        let pTag = element.querySelector('p');  // This selects the first <p> inside the clicked element
        if (pTag) {
            pTag.classList.toggle('text-p2');
        }

        saveAnswer(element.id);
      }

      function saveAnswer(answer){
        let tempOption = "";
        if(answer === "first_option"){
          tempOption = "1";
        }else if(answer === "second_option"){
          tempOption = "2";
        }else if(answer === "third_option"){
          tempOption = "3";
        }else if(answer === "fourth_option"){
          tempOption = "4";
        }else if(answer === "fifth_option"){
          tempOption = "5";
        }

        if(tempAnswer.includes(tempOption)){
          tempAnswer = tempAnswer.replace(tempOption, "");
        }else{
          tempAnswer += tempOption
        }
      }

      function isAnswerCorrect(str1, str2) {
        // Check if lengths are different
        if (str1.length !== str2.length) return false;

        // Sort the characters in both strings and compare
        const sortedStr1 = str1.split('').sort().join('');
        const sortedStr2 = str2.split('').sort().join('');

        return sortedStr1 === sortedStr2;
      }

      function getCorrectAnswer(){
        $.ajax({
          method: 'GET',
          url: 'api.php',
          data: {function_name: 'get_correct_answer', quiz_id: <?= $_GET['quiz_id'] ?>, quiz_level: quizLevel},
          success: function (res){
            let correctAnswer = JSON.parse(res);

            let correctQues = 0;
            let incorrectQues = 0;

            userAnswer.forEach((element, index) => {
              if(element.answer !== ''){
                if(isAnswerCorrect(element.answer, correctAnswer[index].correct_answer)){
                  correctQues++;
                }else{
                  incorrectQues++;
                }
              }
            });

            var levelArray = ['Beginner', 'Intermediate', 'Upper - Intermediate', 'Advanced'];
            let currentLevelIndex = levelArray.indexOf(quizLevel);

            if (quizLevel !== 'Beginner' && quizLevel !== 'Intermediate' && quizLevel !== 'Upper - Intermediate' && quizLevel !== 'Advanced' ) {
              submitQuizAnswer(correctQues, incorrectQues, "normal_quiz");
            }else{
              submitQuizAnswer(correctQues, incorrectQues, "level_test");
              if((<?= $_GET['quiz_id'] ?> == 1 && correctQues >= 9) || (<?= $_GET['quiz_id'] ?> != 1 && correctQues >= 5)) upgradeLevel(levelArray[currentLevelIndex + 1], currentLevelIndex + 2);
              window.location.href = `quiz-result-level.php?quiz_id=<?= $_GET['quiz_id'] ?>&quiz_level=${quizLevel}&correct=${correctQues}&incorrect=${incorrectQues}`;
            }
          },
          error: function (err){
            console.error(err);
          }
        })
      }

      function upgradeLevel(newLevel, unlockValue){
        $.ajax({
          method: 'GET',
          url: 'api.php',
          data: {
            function_name: 'upgrade_level',
            new_level: newLevel,
            unlock_value: unlockValue
          },
          error: function(error){
            console.error(error);
          }
        });
      } 

      function submitQuizAnswer(correct, incorrect, type){
        $.ajax({
          method: 'GET',
          url: 'api.php',
          data: {
            function_name: 'submit_answer',
            quiz_id: <?= $_GET['quiz_id'] ?>,
            answer_json: JSON.stringify(userAnswer),
            correct_ques: correct,
            incorrect_ques: incorrect,
            type: type
          },
          success: function (data){
            if(type === "level_test") return;
            window.location.href = 'quiz-result.php?quiz_id=<?= $_GET['quiz_id'] ?>';
          },
          error: function(error){
            console.error("Error in submitting the quiz answer:", error);
          }
        });
      }

      function getPreSubmittedAnswer(){
        $.ajax({
          method: 'GET',
          url: 'api.php',
          data: {
            function_name: 'get_user_submitted_answer',
            quiz_id: <?= $_GET['quiz_id'] ?>,
          },
          success: function (data) {
            try {
                let JSONData = JSON.parse(data); // Parse the main JSON first

                // Ensure 'data' key exists and 'answer_json' is present
                if (JSONData.status === "success" && JSONData.data && JSONData.data.answer_json) {
                    let parsedAnswers = JSON.parse(JSONData.data.answer_json);
                    preSubmittedAnswer =  parsedAnswers;
                } else {
                    console.error("answer_json is missing or undefined:", JSONData);
                }
            } catch (error) {
                console.error("Error parsing JSON:", error, data);
            }
          },
          error: function(error){
            console.error("Error", error);
          }
        });
      }

      getPreSubmittedAnswer();

      function closeWarning(){
        

        // let confirmValue = confirm("If you close the test now, your responses will not be saved.                 Are you sure you want to close the test?");
        let confirmValue = confirm("If you close the test now, your responses will not be saved.\nAre you sure you want to close the test?");
        if (confirmValue === true) {
          window.history.back()
        }
      }

      function timer(){

        if(quizName === ""){
          if(previousTime) return;

          let maxTime = 5 * 60; // 5 min

          <?php if (isset($_GET['max_limit'])): ?>
            maxTime = <?php echo intval($_GET['max_limit']) * 60; ?>; // Safely pass and use the PHP value
          <?php endif; ?>
          maxTime--;
          let strokeValue = 0;
          let strokeDivide = maxTime;

          clearInterval(previousTime);

          previousTime = setInterval(() => {

            if(maxTime === 0){
              getCorrectAnswer();
              return;
            }

            let minutes = 0;
            let second = maxTime % 60;
            if(second < 10){
              second = `0${second}`;
            }

            if(maxTime > 60){
              minutes = Math.floor(maxTime/60);
            }

            $('#timeDisplay').text(`${minutes}:${second}`);
            $('#timer-circle').css('stroke-dashoffset', `${strokeValue}px`);
            
            strokeValue += (100 / strokeDivide);
            maxTime--;
          }, 1000);

        }else{
          let maxTime = 20; //29 sec
          let strokeValue = 0;

          clearInterval(previousTime);

          previousTime = setInterval(() => {

            if(maxTime === 0){
              if(quizLevel !== ''){
                getCorrectAnswer();
                return;
              }
              displayQuestion();
              maxTime = 20;
            }

            $('#timeDisplay').text(maxTime--);
            $('#timer-circle').css('stroke-dashoffset', `${strokeValue}px`);
            
            strokeValue += 5;
          }, 1000);
        }

        document.getElementById('quiz_container').style.display = 'block';
        document.getElementById('loader_container').style.display = 'none';
        
      }

      // window.addEventListener('beforeunload', (event) => {
      //   // Custom message for modern browsers
      //   const confirmationMessage = 'Are you sure you want to leave this page? Changes you made may not be saved.';

      //   // Set the returnValue property to display a confirmation dialog
      //   event.returnValue = confirmationMessage;

      //   // Some browsers also display the return value
      //   return confirmationMessage;
      // });


      timer();

    </script>
</body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/quiz-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:18 GMT -->

</html>