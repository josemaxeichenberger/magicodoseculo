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
$link = '';

$uteisCasaLicenciada = '   <div class="row text-start pt-3 pt-xl-1"> 
          <div class="col-12 mb-2 mt-2">
            <a class="text-white" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px;" fill="#ffffff" viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" />
              </svg>
              LINKS ÚTEIS
            </a>
          </div> 
           <div class="col-12 mt-2">
                <a href="https://bit.ly/Casa-Licenciada" target="_black" class="btn  mx-1 btn-info btn-sm text-uppercase">Crie sua conta aqui</a>
           </div>                  
        </div> ';
        $uteisGrupodelives = '   <div class="row text-start pt-3 pt-xl-1"> 
        <div class="col-12 mb-2 mt-2">
          <a class="text-white" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px;" fill="#ffffff" viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" />
            </svg>
            LINKS ÚTEIS
          </a>
        </div> 
         <div class="col-12 mt-2">
              <a href="https://chat.whatsapp.com/Hzg6obaAr0yJhbdYAZRUqN" target="_black" class="btn mx-1 btn-warning btn-sm text-uppercase">GRUPO DE LIVES</a>
         </div>                  
      </div> ';
      $uteis = '   <div class="row text-start pt-3 pt-xl-1"> 
      <div class="col-12 mb-2 mt-2">
        <a class="text-white" target="_blank" rel="noopener noreferrer">
          <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px;" fill="#ffffff" viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" />
          </svg>
          LINKS ÚTEIS
        </a>
      </div> 
       <div class="col-12 mt-2">
            <a href="https://www.instagram.com/magicosuporte/" target="_black" class="btn mx-1 btn-primary btn-sm text-uppercase">SUPORTE</a>
       </div>                  
    </div> ';
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
        <div class="iq-main-slider site-video">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pt-0">
                            <?php
                            $videos = new videos();
                            $videos->setId_modulo($_GET['md']);
                            $videos->setId($_GET['ep']);
                            $res = $videos->SelectById();
                            echo $res['video'];
                            ?>
                            <!-- <video id="my-video" poster="https://i.ytimg.com/vi_webp/rKVEoyTedv4/maxresdefault.webp"
                                class="video-js vjs-big-play-centered w-100" controls preload="auto" data-setup='{}'>
                                <source src="./assets/images/video/sample-video.mp4" type="video/mp4" />
                                <source src="MY_VIDEO.webm" type="video/webm" />
                            </video> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="details-part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Movie Description Start-->
                        <div class="trending-info mt-4 pt-0 pb-4">
                            <div class="row">
                                <div class="col-md-9 col-12 mb-auto">
                                    <div class="d-block d-lg-flex align-items-center">
                                        <h2 class="trending-text fw-bold texture-text text-uppercase my-0 fadeInLeft animated d-inline-block"
                                            data-animation-in="fadeInLeft" data-delay-in="0.6" style="opacity: 1; animation-delay: 0.6s">
                                            Aula <?php echo $res['video_indice_aula']; ?>
                                        </h2>

                                    </div>
                                    <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-tag">
                                        <li class="trending-list"><a class="text-primary">Módulo <?php echo $_GET['md']; ?></a></li>
                                        <li class="trending-list"><a class="text-primary"> <?php echo $res['video_nome']; ?></a></li>
                                    </ul>
                                    <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-tag">
                                        <li class="trending-list"><a class="text-primary"> <?php echo $res['video_texto']; ?></a></li>
                                    </ul>
                                    <div class="d-flex flex-wrap align-items-center text-white text-detail flex-wrap mb-4">
                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group  ">
                                            <input type="radio" class="btn-check rounded-rounded-start-pill" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                            <label class="btn rounded-rounded-start-pill  btn-sm btn-outline-secondary" for="btnradio1"><i class="fa fa-thumbs-up"></i>&nbsp;632</label>
                                            <input type="radio" class="btn-check rounded-rounded-end-pill" name="btnradio" id="btnradio2" autocomplete="off">
                                            <label class="btn btn-sm rounded-rounded-end-pill  btn-outline-secondary" for="btnradio2"><i class="fa fa-thumbs-down"></i></label>
                                        </div>
                                        <span class="ms-3 font-Weight-500 genres-info"><?php echo $res['video_duracao']; ?></span>

                                    </div>
                                    
                                    <?php
                                        if($res['modulo_id'] ==1 && $res['video_indice_aula'] ==2){
                                            echo $uteisCasaLicenciada;
                                        }
                                        if($res['modulo_id'] ==4 && $res['video_indice_aula'] ==1){
                                            echo $uteisGrupodelives;
                                        }
                                        if($res['modulo_id'] ==4 && $res['video_indice_aula'] ==2){
                                            echo $uteis;
                                        }
                                    
                                     ?>
                                </div>

                            </div>
                        </div>
                        <!-- Movie Description End --> <!-- Movie Source Start -->

                        <!-- Movie Source End -->
                    </div>
                </div>
            </div>
        </div>


        <section>
            <div class="tabs pb-5">
                <div class="container">
                    <div class="content-details iq-custom-tab-style-two">

                        <div id="playlist" class="tab-pane animated fadeInUp active show" role="tabpanel">
                            <div class="overflow-hidden">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                                    <?php
                                    $videos = new videos();
                                    $videos->setId_modulo($_GET['md']);
                                    $res = $videos->Select();
                                    foreach ($res as $r) { ?>
                                        <div class="col mb-4">
                                            <div class="watchlist-warpper card-hover-style-two rounded-4">
                                                <div class="block-images position-relative w-100 rounded-4">
                                                    <div class="img-box">
                                                       
                                                        <?php
                                                        if ($r['video_bloqueado'] == 'S') { ?>
                                                         <a onclick="Block('<?php echo date('d/m/Y as H:i',strtotime($r['video_data_liberacao'])) ?>')" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                            <img src="<?php echo $r['video_capa_bloqueado'] ?>" alt="movie-card" class="img-fluid rounded-4  w-100 d-block border-0">

                                                        <?php } else { ?>
                                                            <a href="player.php?md=<?php echo $r['modulo_id'] ?>&ep=<?php echo $r['video_id'] ?> " class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                            <img src="<?php echo $r['video_capa'] ?>" alt="movie-card" class="img-fluid rounded-4  w-100 d-block border-0">

                                                        <? }
                                                        ?>

                                                        <div class="position-relative px-2" style="top: -6rem;">
                                                            <div class=" align-items-center">

                                                                <ul
                                                                    class="ratting-start p-0 m-0 position-relative list-inline text-warning d-flex align-items-center justify-content-left" style=" top:1.2rem;">
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
                                                                <div class="d-flex align-items-center gap-1 font-size-12">
                                                                    <span class="text-body fw-semibold text-capitalize">Aula <?php echo $r['video_indice_aula'] ?></span>
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
                                    <?php  }
                                    ?>


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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  function Block(data) {
    Swal.fire({
      icon: "error",
      title: "Aviso",
      text: "Aula será liberada no dia " + data,
    });
  }
</script>
</body>

</html>