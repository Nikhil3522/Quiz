<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from quizio-pwa-html-app.vercel.app/upcoming-contest.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:04 GMT -->
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
    #video_container{
        display: none;
        background: #bfbffd87;
        padding-top: 30px;
        padding-bottom: 30px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        box-shadow: 0px 0px 5px gray;
    }

    

    @media only screen and (max-width: 600px) {
      #video_container{
        width: 95%
      }
    }
  </style>
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
          <a href="course-view.php"
            class="bg-white size-8 rounded-full flex justify-center items-center text-xl dark:bg-color10">
            <i class="ph ph-caret-left"></i>
          </a>
          <h2 class="text-2xl font-semibold text-white">Lessons</h2>
        </div>
      </div>
      <!-- Page Title End -->

        <div id="video_container">
            <button style="margin-left: auto; font-size: 25px; padding-right: 15px;" onclick="hideVideoContainer()">
                <i class="ph ph-x text-p2"></i>
            </button>
            <video width="320" height="240" controls="" style="width: 95%;" autoplay>
                <source src="assets/video/Video_Nosrat%20Course%201.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>



      <div class="px-6 mt-5">
        <div class="pt-5">
          <div class="flex flex-col gap-4">

            <a href="#" class="rounded-2xl overflow-hidden shadow2">
                <div class="flex justify-between items-center py-3.5 px-5 bg-p2 bg-opacity-20 dark:bg-bgColor16"  style="background: #bfbffd;">
                    <div class="flex justify-start items-center gap-3">
                    <p class="font-medium">Lesson 1: Basic Travel Conversation</p>
                    </div>
                </div>
                <div class="p-5 bg-white dark:bg-color10">
                  <div class="flex justify-between items-center">
                    <div class="flex justify-start items-center gap-2">
                        <img src="assets/images/lesson-logo.png" width="50px"/>
                        <div class="">
                            <p class="font-semibold text-xs">
                                By John Doe
                            </p>
                            <p class="text-xs">Lesson Level: Beginner</p>
                        </div>
                    </div>
                  </div>


                <div class="border-b border-dashed border-black dark:border-color24 border-opacity-10 pb-5 text-xs mt-5">
                    <p class="text-xs" style="text-align: justify;">This lesson covers essential phrases for travel  such as greetings  asking for directions  and ordering food.</p>

                    <div class="flex justify-start items-center gap-1 mt-5">
                        
                        <p class="text-xs"><span style="font-weight: 600;">Specialization</span>: Conversation</p>
                    </div>
                </div>

                

                <div class="pt-5 flex justify-between items-center">
                    <div class="flex justify-start items-center gap-1" onclick="showVideoContainer()">
                        <i class="ph ph-video text-p2"></i>
                        <p class="text-xs">Video lesson</p>
                    </div>
                    <div class="flex justify-start items-center gap-1">
                        <i class="ph ph-headphones text-p2"></i>
                        <p class="text-xs">Audio lesson</p>
                    </div>
                    <div class="flex justify-start items-center gap-1">
                        <i class="ph ph-note text-p2"></i>
                        <p class="text-xs">Notes</p>
                    </div>
                </div>
                </div>
            </a>

            <a href="#" class="rounded-2xl overflow-hidden shadow2">
                <div class="flex justify-between items-center py-3.5 px-5 bg-p2 bg-opacity-20 dark:bg-bgColor16"  style="background: #bfbffd;">
                    <div class="flex justify-start items-center gap-3">
                    <p class="font-medium">Lesson 2: Basic Travel Conversation
                    </p>
                    </div>
                </div>
                <div class="p-5 bg-white dark:bg-color10">
                  <div class="flex justify-between items-center">
                    <div class="flex justify-start items-center gap-2">
                        <img src="assets/images/lesson-logo.png" width="50px"/>
                        <div class="">
                            <p class="font-semibold text-xs">
                            By John Doe
                            </p>
                            <p class="text-xs">Lesson Level: Intermediate</p>
                        </div>
                    </div>
                  </div>


                <div class="border-b border-dashed border-black dark:border-color24 border-opacity-10 pb-5 text-xs mt-5">
                    <p class="text-xs" style="text-align: justify;">This lesson covers essential phrases for travel  such as greetings  asking for directions  and ordering food.</p>

                    <div class="flex justify-start items-center gap-1 mt-5">
                        
                        <p class="text-xs"><span style="font-weight: 600;">Specialization</span>: Conversation</p>
                    </div>
                </div>

                <div class="pt-5 flex justify-between items-center">
                    <div class="flex justify-start items-center gap-1" onclick="showVideoContainer()">
                        <i class="ph ph-video text-p2"></i>
                        <p class="text-xs">Video lesson</p>
                    </div>
                    <div class="flex justify-start items-center gap-1">
                        <i class="ph ph-headphones text-p2"></i>
                        <p class="text-xs">Audio lesson</p>
                    </div>
                    <div class="flex justify-start items-center gap-1">
                        <i class="ph ph-note text-p2"></i>
                        <p class="text-xs">Notes</p>
                    </div>
                </div>
                </div>
            </a>

            <a href="#" class="rounded-2xl overflow-hidden shadow2">
                <div class="flex justify-between items-center py-3.5 px-5 bg-p2 bg-opacity-20 dark:bg-bgColor16"  style="background: #bfbffd;">
                    <div class="flex justify-start items-center gap-3">
                    <p class="font-medium">Lesson 3: Basic Travel Conversation
                    </p>
                    </div>
                </div>
                <div class="p-5 bg-white dark:bg-color10">
                  <div class="flex justify-between items-center">
                    <div class="flex justify-start items-center gap-2">
                        <img src="assets/images/lesson-logo.png" width="50px"/>
                        <div class="">
                            <p class="font-semibold text-xs">
                            By John Doe
                            </p>
                            <p class="text-xs">Lesson Level: Advanced</p>
                        </div>
                    </div>
                  </div>


                <div class="border-b border-dashed border-black dark:border-color24 border-opacity-10 pb-5 text-xs mt-5">
                    <p class="text-xs" style="text-align: justify;">This lesson covers essential phrases for travel  such as greetings  asking for directions  and ordering food.</p>

                    <div class="flex justify-start items-center gap-1 mt-5">
                        
                        <p class="text-xs"><span style="font-weight: 600;">Specialization</span>: Conversation</p>
                    </div>
                </div>
                  
                <div class="pt-5 flex justify-between items-center">
                    <div class="flex justify-start items-center gap-1" onclick="showVideoContainer()">
                        <i class="ph ph-video text-p2"></i>
                        <p class="text-xs">Video lesson</p>
                    </div>
                    <div class="flex justify-start items-center gap-1">
                        <i class="ph ph-headphones text-p2"></i>
                        <p class="text-xs">Audio lesson</p>
                    </div>
                    <div class="flex justify-start items-center gap-1">
                        <i class="ph ph-note text-p2"></i>
                        <p class="text-xs">Notes</p>
                    </div>
                </div>
                  
                <!-- <div class="pt-5 flex justify-between items-center">
                  <div class="flex justify-start items-center gap-1">
                    
                    <p class="text-xs"><span style="font-weight: 600;">Specialization</span>: Conversation</p>
                  </div>
                  <div class="flex justify-start items-center gap-1">
                    <button class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1" style="float: right;">
                        Start
                    </button>
                  </div>
                </div> -->

                </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==== js dependencies start ==== -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script>
  <script>
    function hideVideoContainer(){
        document.getElementById('video_container').style.display = 'none';
    }

    function showVideoContainer(){
        document.getElementById('video_container').style.display = 'flex';
        if (!currentAudio.paused){
          pauseAudio();
        }
    }  
  </script>
</body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/upcoming-contest.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:50:05 GMT -->

</html>