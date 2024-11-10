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

        <section class="bg-body py-5">
            <div class="container py3">
                <h1 class="mt-5 text-center">Está com <br> <span class="text-costumer">alguma dúvida?</span> </h1>
                <form class="row g-3 px-4 px-xl-0 needs-validation" novalidate>
                    <div class="col-12">
                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>

                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>

                    </div>
                    <div class="col-12">
                        <input type="email" class="form-control" id="" aria-describedby="inputGroupPrepend" required>

                    </div>
                    <div class="col-12">
                        <textarea class="form-control" name="msg" id="" require rows="5"></textarea>

                    </div>
                    <div class="col-12 full-button">
                        <div class="iq-button w-100">
                            <button class="btn w-100 text-uppercase position-relative rounded-pill">
                                ENVIAR
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="contact bg-light container-fluid">
            <div class="container bg-light ">
                <h1 class=" text-center text-dark">Suporte <br><span>Especiaalizado</span></h1>
                <p class=" text-dark">
                    Nesta aba você encontra todos os meios de comunicação para ter um suporte especializado, você poderá tirar suas dúvidas e possíveis problemas no decorrer da sua jornada, nossa equipe está pronta ara te ajudar em qualquer questão!
                </p>
                <div class="input-group input-group w-100 justify-content-center">
                    <span class="input-group-text h-75  rounded-circle position-relative bg-black" style="left: 2rem;                 display: flex;                    height: 60px;                    margin-top: 0.5rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                    </span>
                    <span class=" px-5   bg-secondary rounded-pill text-center align-content-center " style="height: 60px; width:90%">
                        @magicosuporte
                    </span>
                    <!-- <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"> -->
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