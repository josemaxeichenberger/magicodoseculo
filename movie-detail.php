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

<body class=" custom-header-relative ">
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

        <?php include('./header.php') ?>

        <section id="home-banner-slider" class="iq-main-slider p-0 swiper banner-home-swiper overflow-hidden"
            data-swiper="home-banner-slider">
            <div class="slider m-0 p-0 swiper-wrapper home-slider">
                <?php
                $Destaques = new videos();
                $Destaques->setDestaque('S');
                $Destaques->setBloqueado('N');
                $Destaques->setId_modulo($_GET['md']);
                $res = $Destaques->SelectDestaqueMod();

                foreach ($res as $row) { ?>

                    <div class="swiper-slide slide s-bg-1 p-0">
                        <div class="banner-home-swiper-image">
                            <img src="<?php echo $row['video_banner'] ?>" alt="banner-home-swiper-image">
                        </div>
                        <div class="container-fluid position-relative h-100">
                            <div class="slider-inner h-100">
                                <div class="row align-items-center iq-ltr-direction h-100">
                                    <div class="col-lg-7 col-md-12">
                                        <h1 class="texture-text big-font-5 letter-spacing-1 line-count-1 text-uppercase mb-0 RightAnimate">
                                        <?php echo $row['video_nome'] ?>
                                        </h1>
                                        <p class="line-count-3 RightAnimate-two"> 
                                        <?php echo $row['video_texto'] ?>
                                        </p>
                                        <div class="d-flex flex-wrap align-items-center r-mb-23 RightAnimate-two">
                                            <div class="slider-ratting d-flex align-items-center">
                                            <span class="text-white ms-2 me-2 font-size-14 fw-500">4.3/5</span>
                                                <ul
                                                    class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                                    <li>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star-half" aria-hidden="true"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="font-size-14 fw-500 time"> <?php echo $row['video_duracao'] ?></span>
                                        </div>
                                       
                                     
                                        <div class="RightAnimate-four mt-4">
                                            <div class="iq-button">
                                                <a href="play.php?md=<?php echo $row['modulo_id'] ?>&ep=<?php echo $row['video_id'] ?>" class="btn text-uppercase position-relative">
                                                    <span class="button-text">ASSISTIR AULA </span>
                                                    <i class="fa-solid fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                <?php }
                ?>


            </div>
            <div class="swiper-banner-button-prev swiper-nav" id="home-banner-slider-prev">
                <i></i>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44" height="44" fill="none" stroke="currentColor">
                    <circle r="20" cy="22" cx="22"></circle>
                </svg>
            </div>
            <div class="swiper-banner-button-next swiper-nav" id="home-banner-slider-next">
                <i></i>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44" height="44" fill="none" stroke="currentColor">
                    <circle r="20" cy="22" cx="22"></circle>
                </svg>
            </div>
            <div class="swiper-pagination"></div>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none"
                    stroke="currentColor">
                    <circle r="20" cy="22" cx="22" id="test"></circle>
                </symbol>
            </svg>
        </section>




        <section>
            <div class="tabs pb-5">
                <div class="container">
                    <div class="content-details iq-custom-tab-style-two">

                        <div id="playlist" class="tab-pane animated fadeInUp active show" role="tabpanel">
                            <div class="overflow-hidden">

                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                                    <div class="col mb-4">
                                        <div class="watchlist-warpper card-hover-style-two rounded-4">
                                            <div class="block-images position-relative w-100 rounded-4">
                                                <div class="img-box" style="max-height: 250px;">
                                                    <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                    <img src="./assets/images/movies/playlist/01.webp" alt="movie-card" class="img-fluid rounded-4 object-cover w-100 d-block border-0">
                                                    <div class="position-relative px-2" style="top: -6rem;">
                                                        <div class=" align-items-center">
                                                            <h5 class="text-capitalize fw-500 position-relative" style=" top:1.2rem;"> <a href="">Play List 1</a> </h5>
                                                            <div class="d-flex align-items-center gap-1 font-size-12">
                                                                <i class="fa-solid fa-earth-americas text-primary"></i>
                                                                <span class="text-body fw-semibold text-capitalize">Public</span>
                                                                <button type="button" class="btn d-block ms-auto me-2 btn-lg mb-1 btn-play rounded-circle text-uppercase position-relative mx-0">

                                                                    <i class="fa-solid fa-play"></i>
                                                                </button>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



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


    <!-- Select2 Script -->
    <script src="./assets/js/plugins/select2.js" defer></script>


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