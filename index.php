<?php
// error_reporting(E_ALL); // Exibe todos os tipos de erros
// ini_set('display_errors', 1); // Ativa a exibição de erros
// ini_set('display_startup_errors', 1); // Exibe erros ocorridos na inicialização
session_start();

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

    <!--bread-crumb-->
    <!--bread-crumb-->


    <div class="iq-banner-thumb-slider">
      <div class="slider">
        <?php
        $Destaques = new videos();
        $Destaques->setDestaque('S');
        $Destaques->setBloqueado('N');
        $res = $Destaques->SelectDestaque();
        ?>
        <div class="position-relative slider-bg d-flex justify-content-end">
          <div class="position-relative my-auto">
            <div class="horizontal_thumb_slider" data-swiper="slider-thumbs-ott">
              <div class="banner-thumb-slider-nav">
                <div class="swiper-container " data-swiper="slider-thumbs-inner-ott">
                  <div class="swiper-wrapper">
                    <?php
                    foreach ($res as $row) { ?>
                      <div class="swiper-slide swiper-bg">
                        <div class="block-images position-relative ">
                          <div class="img-box">
                            <img src="<?php echo $row['video_capa'] ?>" class="img-fluid" alt=""
                              loading="lazy">
                            <div class="block-description">
                              <h6 class="iq-title fw-500 mb-0"><?php echo $row['video_nome'] ?></h6>
                              <span class="fs-12"><?php echo $row['video_duracao'] ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php                   }
                    ?>


                  </div>
                </div>
                <div class="slider-prev swiper-button">
                  <i class="iconly-Arrow-Left-2 icli"></i>
                </div>
                <div class="slider-next swiper-button">
                  <i class="iconly-Arrow-Right-2 icli"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-images" data-swiper="slider-images-ott">
            <div class="swiper-container" data-swiper="slider-images-inner-ott">
              <div class="swiper-wrapper m-0">
                <?php foreach ($res as $row) { ?>
                  <div class="swiper-slide p-0">
                    <div class="slider--image block-images">
                      <img src="<?php echo $row['video_banner'] ?>" loading="lazy" alt="banner" />
                    </div>
                    <div class="description">
                      <div class="row align-items-center h-100">
                        <div class="col-lg-6 col-md-12">
                          <div class="slider-content">
                            <div class="d-flex align-items-center RightAnimate mb-3">
                              <span
                                class="iq-custom-badge badge-costumer rounded-5 text-white text-capitalize SFProDisplayRegular  px-3 py-2 me-3  mr-3">Aula <?php echo $row['video_indice_aula'] ?></span>

                            </div>
                            <h1
                              class="texture-text big-font letter-spacing-1 text-white line-count-2  RightAnimate-two">
                              <?php echo $row['video_nome'] ?> </h1>
                            <p class="line-count-3 RightAnimate-two SFProDisplayRegular " style="color:#F6F8FC"><?php echo $row['video_texto'] ?></p>
                            <div class="d-flex flex-wrap align-items-center gap-3 RightAnimate-three">
                              <div class="slider-ratting d-flex align-items-center">
                                <ul
                                  class="ratting-start p-0 m-0 list-inline  d-flex align-items-center justify-content-left" style="color:#F6F8FC">
                                  <li>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <span class="text-white me-2 font-size-14 fw-500">4</span>

                              </div>
                              <span class="font-size-14 fw-500"><?php echo $row['video_duracao'] ?></span>
                              <div class=" font-size-14 fw-500 text-capitalize" style="color:#B7FF2F">Aula em Destaque

                              </div>

                            </div>
                          </div>
                          <div class="RightAnimate-four">
                            <div class="iq-button">
                              <a href="player.php?md=<?php echo $row['modulo_id'] ?>&ep=<?php echo $row['video_id'] ?> " class="btn text-uppercase position-relative">
                                <span class="button-text">ASSISTIR AULA</span>
                                <i class="fa-solid fa-play"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="continue-watching-block section-padding-top d-none">
      <div class="container-fluid">
        <div class="overflow-hidden">
          <div class="d-flex align-items-center justify-content-between px-md-3 px-1 mb-4">
            <h5 class="main-title text-capitalize mb-0">Histórico de Aulas
              <br>
              <span class="fs-6 text-secondary">Acesse as últimas aulas que assistiu</span>
            </h5>

            <!-- <a href="view-all-movie.html"  class="iq-view-all text-decoration-none flex-none">View All</a> -->


          </div>
          <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3" data-mobile="2"
            data-mobile-sm="2" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
            <ul class="p-0 swiper-wrapper m-0  list-inline">
              <li class="swiper-slide">
                <div class="iq-watching-block">
                  <div class="block-images position-relative">
                    <div class="iq-image-box overly-images">
                      <a href="./player.html" class="d-block">
                        <img src="./assets/images/continue-watch/01.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </a>
                    </div>
                    <div class="iq-preogress">
                      <span class="data-left-timing font-size-14 fw-500 text-lowercase">70 of 230 m</span>
                      <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                        <div class="progress-bar" style="width: 50%"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="iq-watching-block">
                  <div class="block-images position-relative">
                    <div class="iq-image-box overly-images">
                      <a href="./player.html" class="d-block">
                        <img src="./assets/images/continue-watch/02.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </a>
                    </div>
                    <div class="iq-preogress">
                      <span class="data-left-timing font-size-14 fw-500 text-lowercase">120 of 130 m</span>
                      <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                        <div class="progress-bar" style="width: 30%"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="iq-watching-block">
                  <div class="block-images position-relative">
                    <div class="iq-image-box overly-images">
                      <a href="./player.html" class="d-block">
                        <img src="./assets/images/continue-watch/03.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </a>
                    </div>
                    <div class="iq-preogress">
                      <span class="data-left-timing font-size-14 fw-500 text-lowercase">60 of 134 m</span>
                      <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                        <div class="progress-bar" style="width: 90%"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="iq-watching-block">
                  <div class="block-images position-relative">
                    <div class="iq-image-box overly-images">
                      <a href="./player.html" class="d-block">
                        <img src="./assets/images/continue-watch/04.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </a>
                    </div>
                    <div class="iq-preogress">
                      <span class="data-left-timing font-size-14 fw-500 text-lowercase">60 of 134 m</span>
                      <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                        <div class="progress-bar" style="width: 20%"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="iq-watching-block">
                  <div class="block-images position-relative">
                    <div class="iq-image-box overly-images">
                      <a href="./player.html" class="d-block">
                        <img src="./assets/images/continue-watch/05.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </a>
                    </div>
                    <div class="iq-preogress">
                      <span class="data-left-timing font-size-14 fw-500 text-lowercase">45 of 157 m</span>
                      <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="iq-watching-block">
                  <div class="block-images position-relative">
                    <div class="iq-image-box overly-images">
                      <a href="./player.html" class="d-block">
                        <img src="./assets/images/continue-watch/06.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </a>
                    </div>
                    <div class="iq-preogress">
                      <span class="data-left-timing font-size-14 fw-500 text-lowercase">70 of 230 m</span>
                      <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <div class="swiper-button swiper-button-next"></div>
            <div class="swiper-button swiper-button-prev"></div>
          </div>
        </div>
      </div> 
    </section>
    <?php
    $modulos = new modulos();
    $modulos->setStatus('Ativo');
    $md = $modulos->SelectAll();
    $ws = 1;
    foreach ($md as $row) { ?>
      <div class="streamit-block">
        <div class="container-fluid">
          <div class="overflow-hidden">
            <?php if ($ws == 1) { ?>
              <div class="d-flex  align-items-baseline justify-content-start px-md-3 px-1 my-4">
                <h3 class="main-title text-capitalize mb-0">Módulos do <span class="fw-bold" style="color:rgba(135, 41, 222, 1);">Curso </span> </h3><i style="background:rgba(135, 41, 222, 1);font-size:14px;margin-top:-5px;position:relative;top:-6px" class="fa p-2 mx-2 rounded-3   fa-book text-dark"></i>
              </div>
            <?php }
            $ws++;
            ?>
            <div class="d-flex  align-items-baseline justify-content-start px-md-3 px-1 my-4">
              <h5 class="main-title text-capitalize mb-0"><?php echo $row['nome'] ?></h5>
            </div>
            <div class="card-style-slider">
              <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
                data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="false" data-navigation="true"
                data-pagination="true">
                <ul class="p-0 swiper-wrapper m-0  list-inline">
                  <?php
                  $videos = new videos();
                  $videos->setId_modulo($row['id']);
                  $res = $videos->Select();
                  foreach ($res as $al) { ?>
                    <li class="swiper-slide">
                      <div class="iq-card card-hover">
                        <div class="block-images position-relative w-100">
                          <div class="img-box w-100">
                            <a href="player.php?md=<?php echo $al['modulo_id'] ?>&ep=<?php echo $al['video_id'] ?> " class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                            <img src="<?php echo $al['video_capa'] ?>" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                          </div>
                          <div class="card-description with-transition">
                            <div class="cart-content">
                              <div class="content-left">
                                <h5 class="iq-title text-capitalize">
                                  <a href="player.php?md=<?php echo $al['modulo_id'] ?>&ep=<?php echo $al['video_id'] ?> "><?php echo $al['video_nome'] ?></a>
                                </h5>
                                <div class="movie-time d-flex align-items-center my-2">
                                  <span class="movie-time-text font-normal"><?php echo $al['video_duracao'] ?></span>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="block-social-info align-items-center">

                            <div class="iq-button">
                              <a href="player.php?md=<?php echo $al['modulo_id'] ?>&ep=<?php echo $al['video_id'] ?> " class="btn text-uppercase position-relative rounded-circle">
                                <i class="fa-solid fa-play ms-0"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>


                    </li>

                  <?php }
                  ?>

                </ul>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php  }
    ?>



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