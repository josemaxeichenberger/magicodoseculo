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
    <style>
        .was-validated .form-control:invalid,
        .form-control.is-invalid {
            border-color: red !important;
            background-image: url('assets/alert.svg');
            background-repeat: no-repeat;
        }

        .btn.btn-costumer {
            color: var(--bs-white);
            background-color: rgba(135, 41, 222, 1) !important;
            ;
            border-color: rgba(135, 41, 222, 1) !important;
            ;
        }

        .fp {
            border-color: #797979;

        }

        .fp::placeholder {
            color: #797979;

        }
    </style>
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

        <div class="section-padding">
            <div class="container">
                <h1 class="text-white">Seus Bônus</h1>
                <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <a href="#">
                                    <img src="../assets/images/blog/blog1.webp" alt="blogImg-01" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="iq-blog-detail">

                                <a href="#">
                                    <h3 class="mb-3 line-count-1 blog-heading">Grupo Exclusivo</h3>
                                </a>
                                <p class="line-count-2">Praesent iaculis, purus ac vehicula mattis, arcu lorem blandit nisl, non laoreet dui mi eget elit. Donec porttitor ex vel augue maximus luctus. Vivamus finibus nibh eu nunc volutpat suscipit.</p>
                                <div class="iq-button ">
                                    <a href="#" class="btn text-capitalize position-relative">
                                        <span class="button-text">Read More <i class="fa fa-angle-right ml-2" aria-hidden="true"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <a href="#">
                                    <img src="../assets/images/blog/blog2.webp" alt="blogImg-02" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta d-flex mb-3">
                                    <ul class="list-inline mb-0">
                                        <li class="border-gredient-left">
                                            <a href="#"> <span>February 2, 2022</span></a>
                                        </li>
                                    </ul>
                                    <ul class="iq-blogtag list-inline">
                                        <li class="border-gredient-left"><a href="../blog/blog-tag.html"> Trailers </a></li>
                                    </ul>
                                </div>

                                <a href="#">
                                    <h3 class="mb-3 line-count-1 blog-heading">10 teams we can’t wait to use in Soccer 2022 </h3>
                                </a>
                                <p class="line-count-2">Praesent iaculis, purus ac vehicula mattis, arcu lorem blandit nisl, non laoreet dui mi eget elit. Donec porttitor ex vel augue maximus luctus. Vivamus finibus nibh eu nunc volutpat suscipit.</p>
                                <div class="iq-button link-button">
                                    <a href="#" class="btn text-capitalize position-relative">
                                        <span class="button-text">Read More <i class="fa fa-angle-right ml-2" aria-hidden="true"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <a href="#">
                                    <img src="../assets/images/blog/blog3.webp" alt="blogImg-03" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta d-flex mb-3">
                                    <ul class="list-inline mb-0">
                                        <li class="border-gredient-left">
                                            <a href="#"> <span>January 30, 2022</span></a>
                                        </li>
                                    </ul>
                                    <ul class="iq-blogtag list-inline">
                                        <li class="border-gredient-left"><a href="#">Movie</a></li>
                                    </ul>
                                </div>

                                <a href="#">
                                    <h3 class="mb-3 line-count-1 blog-heading">10 Free Games with Gold of July 2022 are out</h3>
                                </a>
                                <p class="line-count-2">Praesent iaculis, purus ac vehicula mattis, arcu lorem blandit nisl, non laoreet dui mi eget elit. Donec porttitor ex vel augue maximus luctus. Vivamus finibus nibh eu nunc volutpat suscipit.</p>
                                <div class="iq-button link-button">
                                    <a href="#" class="btn text-capitalize position-relative">
                                        <span class="button-text">Read More <i class="fa fa-angle-right ml-2" aria-hidden="true"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <?php include('./footer.php') ?>
    </main>


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
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>