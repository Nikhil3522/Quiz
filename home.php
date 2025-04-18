<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from quizio-pwa-html-app.vercel.app/home.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:49:44 GMT -->
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
  <link href="style.css" rel="stylesheet"></head>
  <body class="-z-20">
    <div
      class="container min-h-dvh relative overflow-hidden pt-8 dark:text-white dark:bg-black"
    >
      <!-- Absolute Items Start -->
      <img
        src="assets/images/header-bg-1.png"
        alt=""
        class="absolute top-0 left-0 right-0 -mt-6"
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
        <div class="flex justify-between items-center gap-4 px-6 relative z-20">
          <div class="flex justify-start items-center gap-2">
            <button
              class="sidebarModalOpenButton text-2xl text-white !leading-none"
            >
              <i class="ph ph-list"></i>
            </button>
            <h2 class="text-2xl font-semibold text-white">Whiteboard</h2>
            <!-- <img src="assets/logo.png" width="80px" alt="Roshan Logo"/> -->
          </div>
          <div class="flex justify-start items-center gap-2">
            <a
              href="#"
              class="text-white border border-color24 p-2 rounded-full flex justify-center items-center bg-color24"
            >
              <i class="ph ph-globe"></i>
            </a>
            <a
              href="sign-in.php"
              class="text-white border border-color24 p-2 rounded-full flex justify-center items-center bg-color24"
            >
              <i class="ph ph-user"></i>
            </a>
          </div>
        </div>
        <!-- Page Title End -->

        <div class="relative" style="margin-top: 85px;">
          <!-- <p class="text-white text-center pt-5 text-sm font-semibold">
            Learning Stages
          </p> -->
          <!-- <div style="position: absolute; top: -25%; left: 50%; transform: translateX(-50%);">
            <h3 class="font-semibold text-center" style="color: white; font-size: 25px;">Whiteboard</h3>
            <h3 class="font-semibold text-center" style="color: white; font-size: 25px;">Stages</h3>
          </div> -->
          <div
            class="absolute -left-[53%] -top-[620px] min-[370px]:-top-[650px] min-[380px]:-top-[680px] min-[400px]:-top-[720px] min-[420px]:-top-[750px]"
            style="margin-top: 30px;"
          >
            <div 
              class="flex justify-around items-center rounded-full relative rotate-0 circleSliders duration-700 max-[430px]:size-[209vw] size-[900px] cursor-pointer"
              style="transform: rotate(-58deg); margin-top: -30px;"
            >
              <div
                onclick="redirectStage()"
                class="flex flex-col justify-center items-center text-center gap-3 absolute -left-[1%] bottom-[35%] rotate-[58deg] clickable"
              >
                <img src="assets/images/Beginner.png" alt="" class="home-swiper-icon" />
                <p class="text-sm font-semibold dark:text-white">Beginner</p>
              </div>
              <div onclick="redirectStage()" class="flex flex-col justify-center items-center text-center gap-3 absolute rotate-[58deg] clickable" style="left: 4%; bottom: 19.5%;">
                <img src="assets/images/Elementary.png" alt="" class="home-swiper-icon">
                <p class="text-sm font-semibold dark:text-white">
                  Elementary
                </p>
              </div>
              <div
                onclick="redirectStage()"
                id="third-option-swiper"
                class="flex flex-col justify-center items-center text-center gap-3 absolute left-[15.5%] bottom-[7.5%] rotate-[58deg] cursor-pointer"
              >
                <img src="assets/images/Intermediate.png" alt="" class="home-swiper-icon" />
                <p class="text-sm font-semibold dark:text-white mt-2">
                  Intermediate
                </p>
              </div>

              <div
                onclick="redirectStage()"
                id="fourth-option-swiper"
                class="flex flex-col justify-center items-center text-center gap-3 absolute left-[29%] bottom-0 cursor-pointer"
                style="left: 27%;"
              >
                <img src="assets/images/Fluent.png" alt="" class="home-swiper-icon" />
                <p class="text-sm font-semibold dark:text-white mt-2">Fluent</p>
              </div>
             
              <div
                onclick="redirectStage()"
                class="flex flex-col justify-center items-center text-center gap-3 absolute right-[45.5%] -bottom-[3%] cursor-pointer"
              >
                <img src="assets/images/Advanced.png" alt="" class="home-swiper-icon" />
                <p class="text-sm font-semibold dark:text-white">
                  Advanced
                </p>
              </div>
              <div
                onclick="redirectStage()"
                class="flex flex-col justify-center items-center text-center gap-3 absolute right-[31%] bottom-0 cursor-pointer"
                style="right: 29%;"
              >
                <img src="assets/images/Proficiency.png" alt="" class="home-swiper-icon" />
                <p class="text-sm font-semibold dark:text-white">
                  Proficiency
                </p>
              </div>

              <!-- <div
                onclick="redirectStage()"
                class="flex flex-col justify-center items-center text-center gap-3 absolute right-[2%] bottom-[23.5%] rotate-[-58deg] cursor-pointer"
                style="right: 6%; bottom: 18.6%;"
              >
                <img src="assets/images/Proficiency.png" style="width: 90px" alt="" class="" />
                <p class="text-sm font-semibold dark:text-white">
                  Proficiency
                </p>
              </div> -->
            </div>
          </div>
          <div class="flex justify-start items-center gap-1 flex-col pt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="202" height="202" style="margin-top: 30px;">
              <path
                d="M76.388 165.94C75.9671 167.043 74.7305 167.599 73.6407 167.145C70.8225 165.972 68.0826 164.618 65.4379 163.094C64.4153 162.504 64.1052 161.184 64.7252 160.18V160.18C65.3453 159.175 66.6606 158.867 67.6844 159.454C70.0989 160.84 72.5974 162.074 75.1655 163.149C76.2544 163.605 76.8088 164.837 76.388 165.94V165.94Z"
                fill="#141414"
                fill-opacity="0.16"
                id="itemLeft"
              />
              <path
                d="M124.225 166.48C124.629 167.59 124.057 168.82 122.936 169.19C110.033 173.452 96.1783 173.936 83.0093 170.584C81.8653 170.293 81.2096 169.106 81.535 167.971V167.971C81.8604 166.836 83.0434 166.184 84.1878 166.473C96.4884 169.579 109.42 169.127 121.474 165.171C122.595 164.803 123.821 165.371 124.225 166.48V166.48Z"
                fill="#FF710F"
                id="itemCenter"
              />

              <!-- <path
                d="M141.502 157.326C142.203 158.276 142.002 159.617 141.031 160.288C138.52 162.024 135.9 163.597 133.187 164.996C132.138 165.537 130.86 165.084 130.35 164.02V164.02C129.84 162.955 130.291 161.682 131.339 161.139C133.811 159.858 136.2 158.424 138.493 156.845C139.465 156.176 140.802 156.376 141.502 157.326V157.326Z"
                fill="#141414"
                fill-opacity="0.16"
                id="itemRight"
              /> -->
            </svg>
          </div>
        </div>

        <a href="home-test.php">
          <div class="px-6">
            <div
              class="px-4 bg-p2 flex justify-between items-center rounded-2xl relative after:absolute after:h-full after:left-2 after:right-2 after:bg-p2 after:mt-6 after:opacity-30 after:rounded-2xl after:-z-10 before:absolute before:h-full before:mt-12 before:opacity-30 before:rounded-2xl before:-z-10 before:left-4 before:right-4"
              style="background: #f00028;"
            >
              <div class="text-white font-semibold !leading-none pl-2">
                <p class="">Test your</p>
                <p class="text-[36px] py-2 pl-2">English</p>
              </div>
              <div class="">
                <img src="assets/images/invite_illus.png" alt="" />
              </div>
            </div>
          </div>
        </a>
        <div class="pt-12 pl-6">
          <div class="flex justify-between items-center pr-6">
            <div class="flex justify-start items-center gap-2">
              <i class="ph-fill text-xl ph-trophy text-p1"></i>
              <h3 class="text-xl font-semibold">Explore Learning Resources</h3>
            </div>
            <a 
              class="text-p1 font-semibold text-sm"
              href="choose-course.php"
            >
            See All</a
            >
          </div>
          <div class="pt-5 swiper best-player-slider">
            <div class="swiper-wrapper">
              <div
                class="p-4 rounded-xl border border-black border-opacity-10 bg-white shadow2 swiper-slide dark:bg-color9 dark:border-color24"
              >
                <div class="flex flex-col justify-center items-center pt-4">
                  <div
                    class="relative size-24 flex justify-center items-center"
                  >
                    <img
                      src="https://roshan1.b-cdn.net/whiteboard/logo_nosrat_course.png"
                      alt=""
                      class="size-[68px] rounded-full"
                      style="object-fit: cover;"
                    />
                    <img
                      src="assets/images/user-progress.svg"
                      alt=""
                      class="absolute top-0 left-0"
                    />
                    <img
                      src="assets/images/medal1.svg"
                      alt=""
                      class="absolute -bottom-1.5 left-9 size-7"
                    />
                  </div>
                  <p class="text-xs font-semibold dark:text-white pt-4">
                    آموزش زبان انگلیسی از مبتدی تا پیشرفته در 90 روز
                  </p>
                </div>

                <a href="lessons-view.php?iid=1">
                  <div
                    class="flex justify-between items-center pt-2 mt-2 border-t border-dashed border-black border-opacity-10"
                  >
                      <div
                        class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1"
                        style="margin: auto;"
                      >
                        <p class="text-xs font-semibold text-p2 text-white">
                          View
                        </p>
                      </div>
                  </div>
                </a>
              </div>
              <div
                class="p-4 rounded-xl border border-black border-opacity-10 bg-white shadow2 swiper-slide dark:bg-color9 dark:border-color24"
              >
                <div class="flex flex-col justify-center items-center pt-4">
                  <div
                    class="relative size-24 flex justify-center items-center"
                  >
                    <img
                      src="https://roshan1.b-cdn.net/whiteboard/realenglish/Real%20English%20Logo.png"
                      alt=""
                      class="size-[68px] rounded-full"
                      style="object-fit: cover;"
                    />
                    <img
                      src="assets/images/user-progress.svg"
                      alt=""
                      class="absolute top-0 left-0"
                    />
                    <img
                      src="assets/images/medal2.svg"
                      alt=""
                      class="absolute -bottom-1.5 left-9 size-7"
                    />
                  </div>
                  <p class="text-xs font-semibold dark:text-white pt-4">
                    آموزش مکالمه زبان انگلیسی با روش سریع و مدرن
                  </p>
                </div>
                
                <a href="lessons-view.php?iid=2">
                  <div
                    class="flex justify-between items-center pt-2 mt-2 border-t border-dashed border-black border-opacity-10"
                  >
                    <div
                      class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1"
                      style="margin: auto;"
                    >
                      <p class="text-xs font-semibold text-p2 text-white">
                        View
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <div
                class="p-4 rounded-xl border border-black border-opacity-10 bg-white shadow2 swiper-slide dark:bg-color9 dark:border-color24"
              >
                <div class="flex flex-col justify-center items-center pt-4">
                  <div
                    class="relative size-24 flex justify-center items-center"
                  >
                    <img
                      src="https://roshan1.b-cdn.net/whiteboard/10%20K%20Words/10k.png"
                      alt=""
                      class="size-[68px] rounded-full"
                      style="object-fit: cover;"
                    />
                    <img
                      src="assets/images/user-progress.svg"
                      alt=""
                      class="absolute top-0 left-0"
                    />
                    <img
                      src="assets/images/medal3.svg"
                      alt=""
                      class="absolute -bottom-1.5 left-9 size-7"
                    />
                  </div>
                  <p class="text-xs font-semibold dark:text-white pt-4">
                    آموزش 1100 واژه ضروری - زبان انگلیسی
                  </p>
                </div>
                
                <a href="lessons-view.php?iid=3">
                  <div
                    class="flex justify-between items-center pt-2 mt-2 border-t border-dashed border-black border-opacity-10"
                  >
                    <div
                      class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1"
                      style="margin: auto;"
                    >
                      <p class="text-xs font-semibold text-p2 text-white">
                        View
                      </p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-12 px-6">
          <div class="flex justify-between items-center">
            <div class="flex justify-start items-center gap-2">
              <i class="ph-fill text-xl ph-trophy text-p1"></i>
              <h3 class="text-xl font-semibold">Learn With Tests</h3>
            </div>
            <a href="current-contest.php" class="text-p1 font-semibold text-sm"
              >See All</a
            >
          </div>
          <div class="pt-5">
            <a
              href="quiz-details.php?max_limit=5"
              class="rounded-2xl overflow-hidden shadow2 block"
            >
              <div
                class="flex justify-between items-center py-3.5 px-5 bg-p2 dark:bg-bgColor16 text-white"
              >
                <div class="flex justify-start items-center gap-3">
                  <p class="font-medium">Synonyms and Antonyms Test</p>
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
                <div
                  class="flex justify-between items-center gap-2 text-xs py-3 text-nowrap pt-5 pb-5"
                >
                  <p>30 left</p>
                  <div
                    class="relative bg-p2 dark:bg-p1 dark:bg-opacity-10 bg-opacity-10 h-1 w-full rounded-full after:absolute after:h-1 after:w-[40%] after:bg-p2 after:dark:bg-p1 after:rounded-full"
                  ></div>
                  <p>100 spots</p>
                </div>
                <div
                  class="flex row-reverse border-b border-dashed border-black dark:border-color24 border-opacity-10 pb-5 flex justify-between items-center text-xs"
                  style="flex-direction: row-reverse;"
                >
                  <div class="flex justify-start items-center gap-2">
                    <button
                      class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1"
                    >
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
        <div class="pt-12 pl-6" style="display: none;">
          <div class="flex justify-between items-center pr-6">
            <div class="flex justify-start items-center gap-2">
              <i class="ph-fill text-xl ph-trophy text-p1"></i>
              <h3 class="text-xl font-semibold">Upcoming Tests</h3>
            </div>
            <a
              href="upcoming-contest.html"
              class="text-p1 font-semibold text-sm"
              >See All</a
            >
          </div>
          <div class="pt-5 swiper upcoming-contest-slider">
            <div class="swiper-wrapper">
              <a
                href="quiz-details.php?upcoming=true"
                class="rounded-2xl overflow-hidden shadow2 swiper-slide border border-color21"
              >
              <div
                class="flex justify-between items-center py-3.5 px-5 bg-p2 dark:bg-bgColor16 text-white"
              >
                <div class="flex justify-start items-center gap-3">
                  <p class="font-medium">Singular vs. Plural Forms Test</p>
                </div>
              </div>
                <div class="p-5 bg-white dark:bg-color10">
                  <div class="flex justify-between items-center text-xs">
                    <div class="flex gap-2">
                      <p>Max Time</p>
                      <p class="font-semibold">- 5 min</p>
                    </div>
                    <div class="flex gap-3">
                      <p>Max Ques</p>
                      <p class="font-semibold">- 20</p>
                    </div>
                  </div>
                  <div
                    class="flex justify-between items-center gap-2 text-xs py-3 text-nowrap"
                  >
                    <p>42 left</p>
                    <div
                      class="relative bg-p2 dark:bg-p1 dark:bg-opacity-10 bg-opacity-10 h-1 w-full rounded-full after:absolute after:h-1 after:w-[40%] after:bg-p2 after:dark:bg-p1 after:rounded-full"
                    ></div>
                    <p>100 spots</p>
                  </div>
                  <div
                    class="border-b border-dashed border-black dark:border-color24 border-opacity-10 pb-5 flex justify-between items-center text-xs"
                  >
                    <div class="flex justify-start items-center gap-2">
                      <div
                        class="text-white flex justify-center items-center p-2 bg-p1 rounded-full"
                      >
                        <i class="ph ph-trophy"></i>
                      </div>
                      <div class="">
                        <p>Earn Points</p>
                        <p class="font-semibold">20</p>
                      </div>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <button
                        class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1"
                      >
                        Join Now
                      </button>
                    </div>
                  </div>
                  <div class="pt-5 flex justify-between items-center">
                    <div class="flex justify-start items-center gap-1">
                      <i class="ph ph-brain text-p2"></i>
                      <p class="text-xs">Details</p>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <i class="ph ph-share-network"></i>
                    </div>
                  </div>
                </div>
              </a>
              <a
                href="quiz-details.php?upcoming=true"
                class="rounded-2xl overflow-hidden shadow2 swiper-slide border border-color21"
              >
                <div
                  class="flex justify-between items-center py-3.5 px-5 bg-p2 dark:bg-bgColor16 text-white"
                >
                  <div class="flex justify-start items-center gap-3">
                    <p class="font-medium">Likes and Dislike Test</p>
                  </div>
                </div>
                <div class="p-5 bg-white dark:bg-color10">
                  <div class="flex justify-between items-center text-xs">
                    <div class="flex gap-2">
                      <p>Max Time</p>
                      <p class="font-semibold">- 15 min</p>
                    </div>
                    <div class="flex gap-3">
                      <p>Max Ques</p>
                      <p class="font-semibold">- 20</p>
                    </div>
                  </div>
                  <div
                    class="flex justify-between items-center gap-2 text-xs py-3 text-nowrap"
                  >
                    <p>25 left</p>
                    <div
                      class="relative bg-p2 dark:bg-p1 dark:bg-opacity-10 bg-opacity-10 h-1 w-full rounded-full after:absolute after:h-1 after:w-[20%] after:bg-p2 after:dark:bg-p1 after:rounded-full"
                    ></div>
                    <p>100 spots</p>
                  </div>
                  <div
                    class="border-b border-dashed border-black dark:border-color24 border-opacity-10 pb-5 flex justify-between items-center text-xs"
                  >
                    <div class="flex justify-start items-center gap-2">
                      <div
                        class="text-white flex justify-center items-center p-2 bg-p1 rounded-full"
                      >
                        <i class="ph ph-trophy"></i>
                      </div>
                      <div class="">
                        <p>Earn Points</p>
                        <p class="font-semibold">20</p>
                      </div>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <button
                        class="text-white text-xs bg-p2 py-1 px-4 rounded-full dark:bg-p1"
                      >
                        Join Now
                      </button>
                    </div>
                  </div>
                  <div class="pt-5 flex justify-between items-center">
                    <div class="flex justify-start items-center gap-1">
                      <i class="ph ph-brain text-p2"></i>
                      <p class="text-xs">Details</p>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <i class="ph ph-share-network"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="mt-12" style="width: 100%; padding-bottom: 10px; padding-top: 10px; background: #f00028; color: white;">
          <p class="text-xs text-center mt-2">Powered by Whiteboard © 2025 All rights reserved</p>
        </div>
      </div>
    </div>

    <!-- Bottom Tab Start -->
    <!-- <div class="fixed bottom-0 left-0 right-0 z-40">
      <div
        class="container bg-p2 px-6 py-3 rounded-t-2xl flex justify-around items-center dark:bg-p1"
      >
        <a
          href="home.php"
          class="flex justify-center items-center text-center flex-col gap-1"
        >
          <div
            class="flex justify-center items-center p-3 rounded-full bg-p1 dark:bg-p2"
          >
            <i class="ph ph-house text-xl !leading-none text-white"></i>
          </div>
          <p class="text-xs text-white font-semibold dark:text-color10">Home</p>
        </a>
        <a
          href="choose-category.php"
          class="flex justify-center items-center text-center flex-col gap-1"
        >
          <div
            class="flex justify-center items-center p-3 rounded-full bg-white dark:bg-color10"
          >
            <i
              class="ph ph-diamonds-four text-xl !leading-none dark:text-white"
            ></i>
          </div>
          <p class="text-xs text-white font-semibold dark:text-color10">
            Stages
          </p>
        </a>
        <a
          href="earn-rewards.html"
          class="flex justify-center items-center text-center flex-col gap-1"
        >
          <div
            class="flex justify-center items-center p-3 rounded-full bg-white dark:bg-color10"
          >
            <i
              class="ph ph-users-three text-xl !leading-none dark:text-white"
            ></i>
          </div>
          <p class="text-xs text-white font-semibold dark:text-color10">
            Share & Earn
          </p>
        </a>
        <a
          href="current-contest.php"
          class="flex justify-center items-center text-center flex-col gap-1"
        >
          <div
            class="flex justify-center items-center p-3 rounded-full bg-white dark:bg-color10"
          >
            <i
              class="ph-fill ph-chart-bar text-xl !leading-none dark:text-white"
            ></i>
          </div>
          <p class="text-xs text-white font-semibold dark:text-color10">Contests</p>
        </a>
      </div>
    </div> -->
    <!-- Bottom Tab End -->

    <!-- Sidebar Start -->
    <div class="hidden sidebarModal inset-0 z-50">
      <div class="container bg-black bg-opacity-80 h-full overflow-y-auto">
        <div class="w-[330px] bg-slate-50 relative" style="display: flex; flex-direction: column; height: 100vh; justify-content: space-between;">
          <button
            class="sidebarModalCloseButton absolute top-3 right-3 border rounded-full border-p1 flex justify-center items-center p-1 text-white"
          >
            <i class="ph ph-x"></i>
          </button>
          <div class="bg-p2 text-white pt-8 pb-4 px-5">
            <div
              class="flex justify-start items-center gap-3 pb-6 border-b border-color24 border-dashed"
              style="border: none;"
            >
              <img src="assets/images/user.png" alt="" style="background: white; border-radius: 50%; padding: 5px; width: 50px;"/>
              <div class="">
                <p class="text-2xl font-semibold">
                  Ahmed S <i class="ph-fill ph-seal-check text-p1"></i>
                </p>
                <p class="text-xs">
                  <span class="font-semibold">Level :</span> <span id="level_display"></span>
                </p>
              </div>
            </div>
            <!-- <div class="flex justify-between items-center pt-6">
              <div class="flex justify-start items-start gap-2">
                <div
                  class="flex justify-center items-center text-white rounded-full bg-p1 p-1.5"
                >
                  <i class="ph-fill ph-chart-bar"></i>
                </div>
                <div class="">
                  <p class="text-xs">Rank</p>
                  <p class="text-base font-semibold">420</p>
                </div>
              </div>
              <div
                class="h-8 w-px bg-[linear-gradient(180deg,rgba(255,255,255,0.00)_0%,rgba(255,255,255,0.99)_49.48%,rgba(255,255,255,0.00)_100%)]"
              ></div>
              <div class="flex justify-start items-start gap-2">
                <div
                  class="flex justify-center items-center text-white rounded-full bg-p1 p-1.5"
                >
                  <i class="ph-fill ph-coins"></i>
                </div>
                <div class="">
                  <p class="text-xs">Earned Coins</p>
                  <p class="text-base font-semibold">20</p>
                </div>
              </div>
            </div> -->
          </div>
          <div class="flex flex-col" style="height: 75vh;">
            <a
              href="home-test.php"
              class="flex justify-between items-center py-3 px-4 border-b border-dashed border-color21 dark:bg-color1 dark:border-color24"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border bg-color16 bg-p2 text-lg !leading-none text-p2 dark:bg-bgColor14 dark:border-bgColor16 dark:text-p1"
                >
                  <i class="ph ph-exam"></i>
                </div>
                <p class="font-semibold dark:text-white">Test your English</p>
              </div>
              <div
                class="flex justify-center items-center rounded-full text-p2 dark:text-p1"
              >
                <i class="ph ph-arrow-right"></i>
              </div>
            </a>
            <a
              href="choose-course.php"
              class="flex justify-between items-center py-3 px-4 border-b border-dashed border-color21 dark:bg-color1 dark:border-color24"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border bg-color16 bg-p2 text-lg !leading-none text-p2 dark:bg-bgColor14 dark:border-bgColor16 dark:text-p1"
                >
                  <i class="ph ph-diamonds-four"></i>
                </div>
                <p class="font-semibold dark:text-white">Learning Resources</p>
              </div>
              <div
                class="flex justify-center items-center rounded-full text-p2 dark:text-p1"
              >
                <i class="ph ph-arrow-right"></i>
              </div>
            </a>
            <a
              href="choose-category.php"
              class="flex justify-between items-center py-3 px-4 border-b border-dashed border-color21 dark:bg-color1 dark:border-color24"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border bg-color16 bg-p2 text-lg !leading-none text-p2 dark:bg-bgColor14 dark:border-bgColor16 dark:text-p1"
                >
                  <i class="ph ph-diamonds-four"></i>
                </div>
                <p class="font-semibold dark:text-white">Learning Stages</p>
              </div>
              <div
                class="flex justify-center items-center rounded-full text-p2 dark:text-p1"
              >
                <i class="ph ph-arrow-right"></i>
              </div>
            </a>
            <a
              href="current-contest.php"
              class="flex justify-between items-center py-3 px-4 border-b border-dashed border-color21 dark:bg-color1 dark:border-color24"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border bg-color16 bg-p2 text-lg !leading-none text-p2 dark:bg-bgColor14 dark:border-bgColor16 dark:text-p1"
                >
                  <i class="ph ph-medal"></i>
                </div>
                <p class="font-semibold dark:text-white">Learn with Tests</p>
              </div>
              <div
                class="flex justify-center items-center rounded-full text-p2 dark:text-p1"
              >
                <i class="ph ph-arrow-right"></i>
              </div>
            </a>
            <!-- <a
              href="master-medal.html"
              class="flex justify-between items-center py-3 px-4 border-b border-dashed border-color21 dark:bg-color1 dark:border-color24"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border bg-color16 border-color14 text-lg !leading-none text-p2 dark:bg-bgColor14 dark:border-bgColor16 dark:text-p1"
                >
                  <i class="ph ph-medal"></i>
                </div>
                <p class="font-semibold dark:text-white">My Awards</p>
              </div>
              <div
                class="flex justify-center items-center rounded-full text-p2 dark:text-p1"
              >
                <i class="ph ph-arrow-right"></i>
              </div>
            </a> -->
            <!-- <a
              href="top-member.html"
              class="flex justify-between items-center py-3 px-4 border-b border-dashed border-color21 dark:bg-color1 dark:border-color24"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border bg-color16 border-color14 text-lg !leading-none text-p2 dark:bg-bgColor14 dark:border-bgColor16 dark:text-p1"
                >
                  <i class="ph ph-users-three"></i>
                </div>
                <p class="font-semibold dark:text-white">Top Members</p>
              </div>
              <div
                class="flex justify-center items-center rounded-full text-p2 dark:text-p1"
              >
                <i class="ph ph-arrow-right"></i>
              </div>
            </a> -->
            <!-- <a
              href="my-profile.html"
              class="flex justify-between items-center py-3 px-4 border-b border-dashed border-color21 dark:bg-color1 dark:border-color24"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border bg-color16 border-color14 text-lg !leading-none text-p2 dark:bg-bgColor14 dark:border-bgColor16 dark:text-p1"
                >
                  <i class="ph ph-user" style="color: rgba(240, 0, 40, 1)"></i>
                </div>
                <p class="font-semibold dark:text-white">My Profile</p>
              </div>
              <div
                class="flex justify-center items-center rounded-full text-p2 dark:text-p1"
              >
                <i class="ph ph-arrow-right"></i>
              </div>
            </a> -->
            <!-- <a
              href="my-wallet.html"
              class="flex justify-between items-center py-3 px-4 border-b border-dashed border-color21 dark:bg-color1 dark:border-color24"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border bg-color16 border-color14 text-lg !leading-none text-p2 dark:bg-bgColor14 dark:border-bgColor16 dark:text-p1"
                >
                  <i class="ph ph-wallet"></i>
                </div>
                <p class="font-semibold dark:text-white">Balance</p>
              </div>
              <p class="text-p1 font-semibold text-sm">$40</p>
            </a>
            <a
              href="earn-rewards.html"
              class="flex justify-between items-center py-3 px-4 border-b border-dashed border-color21 dark:bg-color1 dark:border-color24"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border bg-color16 border-color14 text-lg !leading-none text-p2 dark:bg-bgColor14 dark:border-bgColor16 dark:text-p1"
                >
                  <i class="ph ph-users-three"></i>
                </div>
                <p class="font-semibold dark:text-white">Share & Earn</p>
              </div>
              <p class="text-p1 font-semibold text-sm">$65</p>
            </a> -->
            <!-- <a
              href="notification-setting.html"
              class="flex justify-between items-center py-3 px-4 border-b border-dashed border-color21 dark:bg-color1 dark:border-color24"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border bg-color16 border-color14 text-lg !leading-none text-p2 dark:bg-bgColor14 dark:border-bgColor16 dark:text-p1"
                >
                  <i class="ph ph-bell"></i>
                </div>
                <p class="font-semibold dark:text-white">Notifications</p>
              </div>
              <div
                class="flex justify-center items-center rounded-full text-p2 dark:text-p1"
              >
                <i class="ph ph-arrow-right"></i>
              </div>
            </a> -->

            <a
              href="settings.html"
              class="flex justify-between items-center py-3 px-4 border-b border-dashed border-color21 dark:bg-color1 dark:border-color24"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border bg-color16 bg-p2 text-lg !leading-none text-p2 dark:bg-bgColor14 dark:border-bgColor16 dark:text-p1"
                >
                  <i class="ph ph-gear-six"></i>
                </div>
                <p class="font-semibold dark:text-white">Settings</p>
              </div>
              <div
                class="flex justify-center items-center rounded-full text-p2 dark:text-p1"
              >
                <i class="ph ph-arrow-right"></i>
              </div>
            </a>
            <!-- <a
              href="earn-rewards.html"
              class="flex justify-between items-center py-3 px-4 border-b border-dashed border-color21 dark:bg-color1 dark:border-color24"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border bg-color16 border-color14 text-lg !leading-none text-p2 dark:bg-bgColor14 dark:border-bgColor16 dark:text-p1"
                >
                  <i class="ph ph-share-network"></i>
                </div>
                <p class="font-semibold dark:text-white">Share App</p>
              </div>
              <div
                class="flex justify-center items-center rounded-full text-p2 dark:text-p1"
              >
                <i class="ph ph-arrow-right"></i>
              </div>
            </a> -->
            <a
              href="help-center.html"
              class="flex justify-between items-center py-3 px-4 border-b border-dashed border-color21 dark:bg-color1 dark:border-color24"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border bg-color16 bg-p2 text-lg !leading-none text-p2 dark:bg-bgColor14 dark:border-bgColor16 dark:text-p1"
                >
                  <i class="ph ph-seal-question"></i>
                </div>
                <p class="font-semibold dark:text-white">Help Center</p>
              </div>
              <div
                class="flex justify-center items-center rounded-full text-p2 dark:text-p1"
              >
                <i class="ph ph-arrow-right"></i>
              </div>
            </a>
            <button
              class="flex justify-between items-center py-3 px-4 dark:bg-color1 withdrawModalOpenButton"
            >
              <div class="flex justify-start items-center gap-3">
                <div
                  class="flex justify-center items-center p-2 rounded-full border text-lg !leading-none bg-p2 border-bgColor16 text-p1"
                >
                  <i class="ph ph-sign-out"></i>
                </div>
                <p class="font-semibold">Logout</p>
              </div>
              <div
                class="flex justify-center items-center rounded-full text-p1"
              >
                <i class="ph ph-arrow-right"></i>
              </div>
            </button>
          </div>
          <div
            class="flex justify-between items-center p-4 bg-p2 dark:bg-p1 text-white"
          >
            <p class="text-sm">Terms and Conditions</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Sidebar End -->

    <!-- Logout Modal Start -->
    <div class="hidden inset-0 withdrawModal z-50">
      <div class="bg-black opacity-40 absolute inset-0 container"></div>
      <div class="flex justify-end items-end flex-col h-full">
        <div class="container relative">
          <img
            src="assets/images/modal-bg-white.png"
            alt=""
            class="dark:hidden"
          />
          <img
            src="assets/images/modal-bg-black.png"
            alt=""
            class="hidden dark:block"
          />
          <div class="bg-white dark:bg-color1 relative z-40 overflow-auto pb-8">
            <div
              class="px-6 pt-8 border-b border-color21 dark:border-color24 border-dashed pb-5 mx-6"
            >
              <p class="text-2xl text-p1 text-center font-semibold">Log Out</p>
            </div>

            <div class="pt-5 px-6">
              <p class="text-color5 dark:text-white pb-8 text-center">
                Are you sure you want to log out?
              </p>
              <div class="flex justify-between items-center gap-3">
                <button
                  class="withdrawModalCloseButton border border-color16 bg-color14 rounded-full py-3 text-p2 text-sm font-semibold text-center block dark:border-p1 w-full dark:text-white"
                >
                  Cancel
                </button>
                <a
                  href="logout.php"
                  class="bg-p2 rounded-full py-3 text-white text-sm font-semibold text-center block dark:bg-p1 w-full"
                >
                  Yes, Logout
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Logout Modal End -->
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        getLevelOfUser();

        const elements = document.querySelectorAll(".home-swiper-icon");

        elements.forEach(element => {
            element.addEventListener("click", redirectStage); // Normal click event
            element.addEventListener("touchstart", redirectStage); // Touch event for mobile
        });
    });


    </script>
    <!-- Js Dependencies -->
    <script src="assets/js/plugins/plugins.js"></script>
    <script src="assets/js/plugins/plugin-custom.js"></script>
    <script src="assets/js/plugins/circle-slider.js"></script>
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script></body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/home.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:49:58 GMT -->
</html>
