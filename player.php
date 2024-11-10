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
        <div class="iq-main-slider site-video">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pt-0">
                            <video id="my-video" poster="https://i.ytimg.com/vi_webp/rKVEoyTedv4/maxresdefault.webp"
                                class="video-js vjs-big-play-centered w-100" controls preload="auto" data-setup='{}'>
                                <source src="./assets/images/video/sample-video.mp4" type="video/mp4" />
                                <source src="MY_VIDEO.webm" type="video/webm" />
                            </video>
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
                                            Zombie Island
                                        </h2>
                                        <div class="slider-ratting d-flex align-items-center ms-lg-3 ms-0">
                                            <ul class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-half" aria-hidden="true"></i></li>
                                            </ul>
                                            <span class="text-white ms-2">4.8 (imdb)</span>
                                        </div>
                                    </div>
                                    <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-tag">
                                        <li class="trending-list"><a class="text-primary" href="./view-all-movie.html">Action</a></li>
                                        <li class="trending-list"><a class="text-primary" href="./view-all-movie.html">Adventure</a></li>
                                        <li class="trending-list"><a class="text-primary" href="./view-all-movie.html">Drama</a></li>
                                    </ul>
                                    <div class="d-flex flex-wrap align-items-center text-white text-detail flex-wrap mb-4">
                                        <span class="badge bg-secondary">Horror</span>
                                        <span class="ms-3 font-Weight-500 genres-info">1hr 48mins</span>
                                        <span class="trending-year trending-year-list font-Weight-500 genres-info">
                                            Feb 2017
                                        </span>
                                    </div>
                                   
                                </div>
                               
                            </div>
                        </div>
                        <!-- Movie Description End --> <!-- Movie Source Start -->
                        <div class="content-details trending-info">
                            <ul class="iq-custom-tab tab-bg-gredient-center d-flex nav nav-pills align-items-center text-center mb-5 justify-content-center list-inline"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-bs-toggle="pill" href="#description-01" role="tab" aria-selected="true">
                                        Description
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="pill" href="#review-01" role="tab" aria-selected="false">
                                        Rate &amp; Review
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="pill" href="#source-01" role="tab" aria-selected="false">
                                        Sources
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="description-01" class="tab-pane animated fadeInUp active show" role="tabpanel">
                                    <div class="description-content">
                                        <p>
                                            Zombie Island is a 1998 direct-to-video animated comedy horror film
                                            based on Hanna-Barbera's Scooby-Doo Saturday-morning cartoons. In the
                                            film, Shaggy, Scooby, Fred, Velma, and Daphne reunite after a
                                            year-long hiatus from Mystery, Inc. to investigate a bayou island said
                                            to be haunted by the ghost of the pirate Morgan Moonscar. The film was
                                            directed by Jim Stenstrum, from a screenplay by Glenn Leopold.
                                        </p>
                                    </div>
                                </div>
                                <div id="review-01" class="tab-pane animated fadeInUp" role="tabpanel">
                                    <div class="streamit-reviews">
                                        <div id="comments" class="comments-area validate-form">
                                            <p class="masvideos-noreviews mt-3">
                                                There are no reviews yet.
                                            </p>
                                        </div>
                                        <div class="review_form">
                                            <div class="comment-respond">
                                                <h3 class="fw-500 my-2">
                                                    Be the first to review “Zombie Island”
                                                </h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="mb-2">
                                                                Your review
                                                                <span class="required">
                                                                    *
                                                                </span>
                                                            </label>
                                                            <textarea class="form-control" name="comment" cols="5" rows="8" required=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="mb-2">
                                                                Name
                                                                <span class="required">
                                                                    *
                                                                </span>
                                                            </label>
                                                            <input class="form-control" name="author" type="text" value="" size="30" required="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="mb-2">
                                                                Email&nbsp;
                                                                <span class="required">
                                                                    *
                                                                </span>
                                                            </label>
                                                            <input class="form-control" name="email" type="email" value="" size="30" required="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mt-3 mt-3 d-flex gap-2 align-items-center">
                                                            <input class="form-check-input mt-0" type="checkbox" value="" id="check1" checked />
                                                            <label class="form-check-label" for="check1">
                                                                Save my name, email, and website in this browser for the
                                                                next time I comment.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-submit mt-4">
                                                            <div class="iq-button">
                                                                <button name="submit" type="submit" id="submit" class="btn text-uppercase position-relative" value="Submit">
                                                                    <span class="button-text">Submit</span>
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
                                <div id="source-01" class="tab-pane animated fadeInUp" role="tabpanel">
                                    <div class="source-list-content table-responsive">
                                        <table class="table custom-table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Links
                                                    </th>
                                                    <th>
                                                        Quality
                                                    </th>
                                                    <th>
                                                        Language
                                                    </th>
                                                    <th>
                                                        Player
                                                    </th>
                                                    <th>
                                                        Date Added
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="iq-button">
                                                            <a href="./movie-detail.html" class="btn text-uppercase position-relative">
                                                                <span class="button-text"> Play Now</span>
                                                                <i class="fa-solid fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        1080p
                                                    </td>
                                                    <td>
                                                        english
                                                    </td>
                                                    <td>
                                                        MusicBee
                                                    </td>
                                                    <td>
                                                        2021-11-28
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="iq-button">
                                                            <a href="./movie-detail.html" class="btn text-uppercase position-relative">
                                                                <span class="button-text"> Play Now</span>
                                                                <i class="fa-solid fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        800p
                                                    </td>
                                                    <td>
                                                        english
                                                    </td>
                                                    <td>
                                                        5KPlayer
                                                    </td>
                                                    <td>
                                                        2021-11-25
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="iq-button">
                                                            <a href="./movie-detail.html" class="btn text-uppercase position-relative">
                                                                <span class="button-text"> Play Now</span>
                                                                <i class="fa-solid fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        720p
                                                    </td>
                                                    <td>
                                                        English
                                                    </td>
                                                    <td>
                                                        MediaMonkey
                                                    </td>
                                                    <td>
                                                        2021-11-20
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                        <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                        <img src="<?php echo $r['video_capa'] ?>" alt="movie-card" class="img-fluid rounded-4  w-100 d-block border-0">
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
</body>

</html>