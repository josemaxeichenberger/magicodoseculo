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
            <div class="container pt-5">
                <h1 class="text-white pt-5 text-center" >Seus Bônus</h1>
                <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1">
                    <div class="col px-5 px-xl-1">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <a href="#">
                                    <img src="../assets/images/blog/blog1.webp" alt="blogImg-01" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="iq-blog-detail">

                                <a href="#">
                                    <h3 class="mb-3 line-count-1 text-center blog-heading text-black SFProDisplayBold">Grupo Exclusivo</h3>
                                </a>
                                <p class="line-count-4 text-black text-center px-3">
                                    No grupo exclusivo, você terá acesso a informações privilegiadas e dicas avançadas para maximizar seus resultados.
                                </p>
                                <div class="iq-button mx-auto text-center justify-content-center ">
                                    <a href="#" class="btn mx-auto w-75 d-block text-capitalize position-relative">
                                        <span class="button-text">Entrar no grupo<i class="fa fa-angle-right ml-2" aria-hidden="true"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col px-5 px-xl-1">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <a href="#">
                                    <img src="../assets/images/blog/blog1.webp" alt="blogImg-01" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="iq-blog-detail">

                                <a href="#">
                                    <h3 class="mb-3 line-count-1 text-center blog-heading text-black SFProDisplayBold">Resgate sua Premiação</h3>
                                </a>
                                <p class="line-count-4 text-black text-center px-3">
                                    Está na hora de receber sua placa de premiação, ela representa todo o seu esforço e dedicação nesta jornada!
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </p>
                                <div class="iq-button mx-auto text-center justify-content-center ">
                                    <a href="#" class="btn mx-auto w-75 d-block text-capitalize position-relative">
                                        <span class="button-text">Resgatar Placa<i class="fa fa-angle-right ml-2" aria-hidden="true"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col px-5 px-xl-1">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <a href="#">
                                    <img src="../assets/images/blog/blog1.webp" alt="blogImg-01" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="iq-blog-detail">

                                <a href="#">
                                    <h3 class="mb-3 line-count-1 text-center blog-heading text-black SFProDisplayBold">Dobre sua Banca</h3>
                                </a>
                                <p class="line-count-4 text-black text-center px-3">
                                    Dobra de banca exclusiva para alunos com as melhores técnicas de gestão e estratégia.
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </p>
                                <div class="iq-button mx-auto text-center justify-content-center ">
                                    <a href="#" class="btn mx-auto w-75 d-block text-capitalize position-relative">
                                        <span class="button-text">Dobrar minha banca<i class="fa fa-angle-right ml-2" aria-hidden="true"></i></span>
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