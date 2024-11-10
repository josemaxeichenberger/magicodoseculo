<!doctype html>
<html lang="en" data-bs-theme="hotstar">
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
    <!-- Custom Css -->
    <link rel="stylesheet" href="./assets/css/custom.min.css?v=5.2.1" />

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        #emailError {
            position: absolute;
            top: 100%;
            left: 0;
            color: red;
        }

        #termosError {
            color: red;
        }
    </style>
</head>
<body>
    <span class="screen-darken"></span>

    <main class="main-content">
        <div class="container form-login">
            <div class="row justify-content-center align-items-center height-self-center">
                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="user-login-card" style="backdrop-filter:unset;">
                        <form id="contactForm">
                            <h2 class="text-center SFProDisplayRegular">Conecte <br> <span class="SFProDisplayBold">sua conta</span></h2>

                            <div class="mb-3">
                                <label class="text-white fw-500 mb-2 SFProDisplayRegular">Email</label>
                                <input type="text" name="email" id="email" class="form-control rounded-0 input-my SFProDisplayRegular" placeholder="Insira seu melhor email">
                                <small class="form-text text-danger" id="emailError"></small>
                            </div>

                            <div class="mb-3">
                                <label class="custom-checkbox mb-3">
                                    <input type="checkbox" name="termos" id="termos">
                                    <span class="checkmark"></span>
                                    Aceito os termos e condições
                                </label>
                                <small class="form-text text-danger" id="termosError"></small>
                            </div>

                            <div class="full-button">
                                <div class="iq-button active">
                                    <button type="submit" class="btn text-uppercase position-relative">
                                        <span class="button-text">ENTRAR</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('#contactForm').submit(function(e) {
                e.preventDefault();

                // Limpar erros anteriores
                $('#emailError').text('');
                $('#termosError').text('');

                // Variáveis para validação
                var isValid = true;
                var email = $('#email').val();
                var termos = $('#termos').is(':checked');

                // Validando o e-mail
                if (email === '') {
                    $('#emailError').text('O e-mail é obrigatório');
                    isValid = false;
                } else if (!/\S+@\S+\.\S+/.test(email)) {
                    $('#emailError').text('Insira um e-mail válido');
                    isValid = false;
                }

                // Validando os termos
                if (!termos) {
                    $('#termosError').text('Você deve concordar com os termos');
                    isValid = false;
                }

                // Se tudo estiver válido, enviar o formulário via AJAX
                if (isValid) {
                    $.ajax({
                        url: 'login_validate.php',
                        type: 'POST',
                        data: $('#contactForm').serialize(),
                        success: function(response) {
                            window.location.href = 'index.php'; // Redireciona após sucesso
                        },
                        error: function(xhr, status, error) {
                            if (xhr.status === 401) {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "E-mail não encontrado. Verifique suas informações!",
                                });
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "Erro no servidor. Tente novamente mais tarde!",
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
