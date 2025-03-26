<?php
    $msg = isset($_POST['msg']) ? $_POST['msg'] : '';
    $redirectUrl = isset($_POST['redirectUrl']) ? $_POST['redirectUrl'] : '';

    // Redirect to sign-in page if $msg or $redirectUrl is empty.
    if($msg === '' || $redirectUrl === ''){
        header('Location: sign-in.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from quizio-pwa-html-app.vercel.app/sign-in.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:49:35 GMT -->
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
  <body class="">
    <div
      class="container min-h-dvh relative overflow-hidden py-8 px-6 dark:text-white dark:bg-color1"
    >
      <!-- Absolute Items Start -->
      <img
        src="assets/images/header-bg-2.png"
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

        <div class="relative z-10">
            <div class="bg-white py-8 px-6 rounded-xl mt-12 dark:bg-color10" style="margin-top: 150px;">
                <h2 class="text-2xl font-semibold" style="color: #d01f35;">Thank You!</h2>
                <div class="pt-8">
                    <p class="text-sm font-semibold pb-2"><?php echo $msg ?></p>
                </div>
            </div>

            <button class="bg-p2 rounded-full py-3 text-white text-sm font-semibold text-center block mt-12 dark:bg-p1 w-full"
                onclick="window.location.href='<?php echo $redirectUrl; ?>'"
            >
                Go To Home
            </button>
        </div>
    </div>

    <!-- Javascript Dependencies -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script>
</body>

<!-- Mirrored from quizio-pwa-html-app.vercel.app/sign-in.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 12:49:40 GMT -->
</html>