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

    <!-- Streamit Design System Css -->
    <link rel="stylesheet" href="./assets/css/streamit.css?v=5.2.1" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="./assets/css/custom.css?v=5.2.1" />

    <!-- Rtl Css -->
    <link rel="stylesheet" href="./assets/css/rtl.min.css?v=5.2.1" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/css/formValidation.min.css" integrity="sha512-B9GRVQaYJ7aMZO3WC2UvS9xds1D+gWQoNiXiZYRlqIVszL073pHXi0pxWxVycBk0fnacKIE3UHuWfSeETDCe7w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .help-block{
        color: red;
        text-align: center;
    display: block;
    top: -20px;
    position: relative;
    }
</style>
</head>

<body>
    <span class="screen-darken"></span>

    <!-- Loader Start -->
    <div class="loader simple-loader">
        <div class="loader-body">
            <img src="./assets/images/loader.gif" alt="loader" class="img-fluid" width="300">
        </div>
    </div>

    <main class="main-content">
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/identidade/001.png" alt="Bootstrap" width="30" height="24">
                </a>
            </div>
        </nav>

        <div class="">
            <div class="banner-wrapper">
                <img src="assets/identidade/HomeBanner.png" class="img-fluid d-block mx-auto w-100" alt="">
                <div class="overlay"></div>
            </div>
            <div class="container form-login">
                <div class="row justify-content-center align-items-center height-self-center">
                    <div class="col-lg-5 col-md-12 align-self-center">
                        <div class="user-login-card" style="backdrop-filter:unset;">
                            <div class="text-center">
                                <div class="logo-default">
                                    <a class="navbar-brand text-primary" href="./index.html">
                                        <img class="img-fluid logo" src="./assets/images/logo.webp" loading="lazy" alt="streamit">
                                    </a>
                                </div>
                            </div>
                            <form id="contactForm" novalidate="novalidate">
                            <h2 class="text-center SFProDisplayRegular">Conecte <br> <span class="SFProDisplayBold">sua conta</span></h2>
                                <div class="mb-3 ">
                                    <label class="text-white fw-500 mb-2 SFProDisplayRegular">Email</label>
                                    <input type="text" name="email" id="email" class="form-control rounded-0 input-my SFProDisplayRegular" placeholder="Insira seu melhor email" required="">
                                </div>
                                <small class="form-text text-danger emailError" id="emailError"></small>
                                <div class="mb-3 ">
                                    <label class="custom-checkbox mb-3 ">
                                        <input type="checkbox" name="termos" id="termos" required="">
                                        <span class="checkmark"></span>
                                        Aceito os termos e condições
                                    </label>
                                    <small class="form-text text-danger termosError" id="termosError"></small>
                                </div>
                                <div class="full-button">
                                    <div class="iq-button active">
                                        <button type="submit" class="btn text-uppercase position-relative">
                                            <span class="button-text">ENTRAR</span>
                                            <i class="fa-solid fa-play"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once('./footer.php'); ?>

    <div id="back-to-top" style="display: none;">
        <a class="p-0 btn bg-primary btn-sm position-fixed top border-0 rounded-circle text-white" id="top" href="#top">
            <i class="fa-solid fa-chevron-up"></i>
        </a>
    </div>

     <!-- Wrapper End-->
    <!-- Library Bundle Script -->
    <script src="./assets/js/core/libs.min.js"></script>
    <!-- Plugin Scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/js/formValidation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/js/framework/bootstrap.min.js"></script>

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
        $(document).ready(function() {
            $('#contactForm').formValidation({
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'O e-mail é obrigatório'
                            },
                            emailAddress: {
                                message: 'Insira um e-mail válido'
                            }
                        }
                    },
                    terms: {
                        validators: {
                            notEmpty: {
                                message: 'Você deve concordar com os termos'
                            }
                        }
                    }
                }
            }).on('err.field.fv', function(e, data) {
                // Exibir a mensagem de erro abaixo do campo
                $('#' + data.field + 'Error').text(data.validatorResult.message);
                $('#' + data.field).css('border', '1px solid red');

            }).on('success.field.fv', function(e, data) {
                // Limpar a mensagem de erro quando for válido
                $('#' + data.field + 'Error').text('');
            }).on('success.form.fv', function(e) {
                e.preventDefault();

                // Enviar dados via AJAX
                $.ajax({
                    url: 'login_validate.php',
                    type: 'POST',
                    data: $('#contactForm').serialize(),
                    success: function(response) {
                        window.location.href = 'index.php'; // Mensagem de sucesso do PHP
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status === 401) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "E-mail não encontrado. Verifique suas informações!",
                            });
                        } else if (xhr.status === 500) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "Erro no servidor. Tente novamente mais tarde!",
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "E-mail não encontrado. Verifique suas informações!",
                            });
                        }
                    }
                });

            });
        });
    </script>
</body>

</html>