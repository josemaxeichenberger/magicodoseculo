<?php
// error_reporting(E_ALL); // Exibe todos os tipos de erros
// ini_set('display_errors', 1); // Ativa a exibição de erros
// ini_set('display_startup_errors', 1); // Exibe erros ocorridos na inicialização

function my_autoload($pClassName)
{
  include('./Class' . "/" . $pClassName . ".class.php");
}

spl_autoload_register("my_autoload"); // Carrega as classes 


?>
<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mágico do Século</title>
  <!-- Google Font Api KEY-->
  <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">

  <!-- Favicon -->
  <link rel="shortcut icon" href="./assets/identidade/002.png" />
  <!-- Library / Plugin Css Build -->
  <link rel="stylesheet" href="./assets/css/core/libs.min.css" />

  <!-- font-awesome css -->
  <link rel="stylesheet" href="./assets/vendor/font-awesome/css/all.min.css" />

  <!-- Iconly css -->
  <link rel="stylesheet" href="./assets/vendor/iconly/css/style.css" />

  <!-- Animate css -->
  <link rel="stylesheet" href="./assets/vendor/animate.min.css" />

  <!-- SwiperSlider css -->
  <link rel="stylesheet" href="./assets/vendor/swiperSlider/swiper.min.css">





  <!-- Streamit Design System Css -->
  <link rel="stylesheet" href="./assets/css/streamit.min.css?v=5.2.1" />

  <!-- Custom Css -->
  <link rel="stylesheet" href="./assets/css/custom.min.css?v=5.2.1" />

  <!-- Rtl Css -->
  <link rel="stylesheet" href="./assets/css/rtl.min.css?v=5.2.1" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">

</head>

<body class="  ">
  <span class="screen-darken"></span>
  <!-- loader Start -->
  <!-- loader Start -->
  <div class="loader simple-loader">
    <div class="loader-body">
      <img src="./assets/images/loader.gif" alt="loader" class="img-fluid " width="300">
    </div>
  </div>
  <!-- loader END --> <!-- loader END -->
  <main class="main-content">
    <?php
    include(__DIR__ . '/header.php');
    ?>

<div class="iq-breadcrumb" style="background-image: url(./assets/images/pages/01.webp);">
         <div class="container-fluid">
            <div class="row align-items-center">
                  <div class="col-sm-12">
                      <nav aria-label="breadcrumb" class="text-center">
                          <h2 class="title">Pricing Plan</h2>
                          <ol class="breadcrumb justify-content-center">
                              <li class="breadcrumb-item"><a href="./index.html">Home</a></li> 
                              <li class="breadcrumb-item active">Pricing Plan</li>
                          </ol>
                      </nav>
                  </div>
              </div> 
         </div>
      </div>      <!--bread-crumb-->







  </main>
  <?php include('./footer.php') ?>


  <div id="back-to-top" style="display: none;">
    <a class="p-0 btn bg-primary btn-sm position-fixed top border-0 rounded-circle text-white" id="top" href="#top">
      <i class="fa-solid fa-chevron-up"></i>
    </a>
  </div>
  <!-- Wrapper End-->
  <!-- Library Bundle Script -->
  <script src="./assets/js/core/libs.min.js"></script>
  <!-- Plugin Scripts -->


  <!-- SwiperSlider Script -->
  <script src="./assets/vendor/swiperSlider/swiper.min.js"></script>




  <!-- Lodash Utility -->
  <script src="./assets/vendor/lodash/lodash.min.js"></script>
  <!-- External Library Bundle Script -->
  <script src="./assets/js/core/external.min.js"></script>
  <!-- countdown Script -->
  <script src="./assets/js/plugins/countdown.js"></script>
  <!-- utility Script -->
  <script src="./assets/js/utility.js"></script>
  <!-- Setting Script -->
  <script src="./assets/js/setting.js"></script>
  <script src="./assets/js/setting-init.js" defer></script>
  <!-- Streamit Script -->
  <script src="./assets/js/streamit.js" defer></script>
  <script src="./assets/js/swiper.js" defer></script>
</body>

</html>