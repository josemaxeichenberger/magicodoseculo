<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mágico do Século</title>
    <!-- Google Font Api KEY-->
    <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" />

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
    <style>
        .bg-body {
            --bs-bg-opacity: 0.6;
        }
        @font-face {
  font-family: 'SF Pro Display Bold';
  src: url('./SFPRODISPLAYREGULAR.OTF') format('opentype');
  font-weight:lighter;
  font-style: normal;
}
label {
  font-family: 'SF Pro Display', sans-serif;
}
.login{
    background: url('assets/identidade/HomeBanner.png'); background-size: cover; background-repeat: no-repeat; position: relative;min-height:500px;background-position:left;
}
@media (max-width:700px){
    .login{
    background: url('assets/identidade/HomeBanner.png'); background-size: cover; background-repeat: no-repeat; position: relative;min-height:500px;background-position:top;
}  
}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/css/formValidation.min.css" integrity="sha512-B9GRVQaYJ7aMZO3WC2UvS9xds1D+gWQoNiXiZYRlqIVszL073pHXi0pxWxVycBk0fnacKIE3UHuWfSeETDCe7w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        <!--Nav Start-->
        <!--Nav End-->

        <!--bread-crumb-->
        <!--bread-crumb-->

        <nav class="navbar" style="background-color: rgba(0,0,0,0.8);">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./favicon.ico" alt="Bootstrap" width="auto" height="24">
                </a>
            </div>
        </nav>
        <div class="vh-100 login"
            >
            <div class="container">
                <div class="row justify-content-center align-items-center height-self-center vh-100">
                    <div class="col-lg-8 col-md-12 align-self-center">
                        <div class="user-login-card bg-body">
                            <div class="text-center">
                                <!--Logo -->

                                <div class="logo-hulu">
                                    <a class="navbar-brand text-primary" >
                                        <!-- <img class="img-fluid logo" src="" loading="lazy" alt="streamit" /> -->
                                        <h2 class="text-white fw-light">Acesse a <br> <span class="fw-bold"> sua conta</span></h2>
                                    </a>
                                </div>
                            </div>
                            <form id="contactForm">
                                <div class="form-group mb-3">
                                    <label class="text-white fw-500 mb-2">E-mail</label>
                                    <input type="text" class="form-control rounded  rounded-3" name="email" placeholder="Insira o seu melhor e-mail" required="" style="background-color:transparent !important;">
                                    <small class="form-text text-danger" id="emailError"></small> <!-- Espaço para mensagem de erro -->
                                </div>

                                <div class="form-group mb-3">
                                    <label class="list-group-item align-items-center font-size-14 text-white fw-500 ">
                                        <input class="form-check-input m-0 " type="checkbox" name="terms" required="">
                                        Ao clicar, você concorda com nossos <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">&nbsp; Termos</a>.
                                    </label>
                                    <small class="form-text text-danger" id="termsError"></small> <!-- Espaço para mensagem de erro -->
                                </div>

                                <div class="full-button">
                                    <div class="iq-button">
                                        <button type="submit" class="btn text-uppercase position-relative">
                                            <span class="button-text">CONECTE-SE</span>
                                        </button>
                                    </div>
                                </div>
                            </form>


                            <!-- <p class="my-4 text-center fw-500 text-white">New to Streamit? <a href="register.html"
                            class="text-primary ms-1">Register</a></p> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Termos </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Termos de Uso do Curso de Roleta:
        </h4>
        <p>
        Este documento estabelece os Termos de Uso do Curso de Roleta (“Curso”) oferecido pela Sorte no Jogo /Allan Cabral . Ao adquirir e participar deste Curso, você concorda em aderir aos termos e condições descritos abaixo, que têm como objetivo proporcionar um entendimento claro sobre a natureza do conteúdo oferecido e suas expectativas.
        </p>
        <h3>1. Finalidade do Curso
        </h3>
        <p>1.1. O Curso de Roleta é um programa educacional desenvolvido para fornecer conhecimentos teóricos e práticos sobre estratégias, probabilidades e padrões observáveis nas mesas de roleta. 1.2. Este Curso é estritamente destinado a fins educacionais e de entretenimento. Ele não é um substituto para aconselhamento financeiro, consultoria de investimentos ou outros serviços profissionais relacionados a ganhos financeiros. 1.3. A roleta é um jogo de azar. Todos os conteúdos, dicas, estratégias e práticas apresentadas no Curso têm como objetivo apenas o aprimoramento da experiência de jogo do usuário e não devem ser interpretados como garantia de lucro ou resultados financeiros específicos.</p>
        <h3>2. Isenção de Responsabilidade
        </h3>
        <p>
        2.1. O Curso não oferece qualquer tipo de promessa ou garantia de ganhos financeiros. 2.2. O Curso não incentiva e promove o uso da roleta como uma forma de investimento, e quaisquer resultados financeiros que venham a ser obtidos durante ou após a participação no Curso são de responsabilidade exclusiva do usuário. 2.3. O participante entende que qualquer aposta realizada na roleta é por conta e risco próprios, e que o jogo deve ser encarado como uma forma de entretenimento, podendo resultar em perdas financeiras.
        </p>
        <h3>
        3. Restrição de Idade

        </h3>
        <p>
        3.1. O Curso é estritamente destinado a maiores de 18 anos. 3.2. A participação de menores de idade é expressamente proibida e qualquer tentativa de acesso por menores de 18 anos resultará no cancelamento imediato do acesso ao Curso, sem direito a reembolso. 3.3. A Sorte no Jogo /Allan Cabral  não se responsabiliza pelo acesso ao Curso por parte de menores de idade, cabendo ao usuário a responsabilidade de respeitar essa restrição
        </p>
        <h3>4. Jogo Responsável
        </h3>
        <p>4.1. O participante é encorajado a jogar com responsabilidade, estabelecendo limites claros de tempo e dinheiro para suas atividades de entretenimento com a roleta. 4.2. É fundamental que o participante utilize apenas recursos financeiros que esteja disposto a perder, evitando apostar valores que possam comprometer sua estabilidade financeira ou bem-estar pessoal. 4.3. O usuário deve procurar ajuda profissional em casos de comportamento compulsivo ou problemas relacionados ao jogo, por meio de canais de suporte especializados.</p>
        <h3>5. Natureza do Jogo de Roleta
        </h3>
        <p>5.1. A roleta é considerada um jogo de azar, sendo impossível prever ou garantir resultados consistentes de ganhos. 5.2. Quaisquer estratégias ensinadas no Curso são baseadas em teorias estatísticas e análises empíricas, mas não devem ser encaradas como métodos infalíveis de lucro. 5.3. O participante deve estar ciente dos riscos envolvidos na prática de jogos de azar, reconhecendo que a roleta não é uma forma de investimento ou fonte confiável de renda.</p>
        <h3>6. Responsabilidade do Participante
        </h3>
        <p>
        6.1. O participante é responsável por gerenciar de forma prudente os recursos destinados ao jogo, utilizando apenas o que estiver disposto a perder. 6.2. É recomendado que o participante jogue de maneira responsável, estabelecendo limites de tempo e dinheiro para suas atividades de entretenimento. 6.3. A Sorte no Jogo /Allan Cabral  não se responsabiliza por decisões financeiras ou de apostas feitas pelo participante com base no conteúdo do Curso.

        </p>
        <h3>
        7. Termos de Compromisso

        </h3>
        <p>7.1. Ao se inscrever no Curso, o participante declara que está ciente de que todo o conteúdo é destinado a fins de entretenimento e aprendizado, sem garantia de ganhos financeiros. 7.2. O participante concorda em não buscar indenizações ou compensações financeiras da Sorte no Jogo /Allan Cabral  por quaisquer perdas decorrentes de suas atividades relacionadas à roleta.</p>
        <h3>8. Alterações nos Termos
        </h3>
        <p>8.1. A Sorte no Jogo /Allan Cabral  se reserva o direito de modificar estes Termos de Uso a qualquer momento, notificando os participantes por meio de comunicado eletrônico ou na plataforma do Curso. 8.2. O participante é responsável por revisar os Termos de Uso periodicamente para estar ciente de quaisquer atualizações ou alterações.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>


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