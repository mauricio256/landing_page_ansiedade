<?php
    require_once __DIR__ . '/../app/config.php';
?>

<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conecta Vale</title>
    <link rel="icon" type="image/x-icon" href="assets/images/icon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Hero -->
    <div class="px-4 py-1">

        <div class="text-center">
            <div style="text-align: center;">
                <img src="assets/images/logo.png" width="200px" alt="">
            </div>
            <div class="col-lg-9 mx-auto">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container text-white ">
                        <h1 class="display-5">O evento ideal para você</h1>
                        <p class="lead">

                        <div class="accordion" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Networking de Alto Nível
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body text-start">
                                        * Amplie sua rede de contatos e conecte-se com líderes de diversos
                                        setores.<br><br>
                                        * Crie relações valiosas que podem impulsionar seu negócio a novos
                                        patamares.<br><br>
                                        * Encontre parceiros estratégicos para colaborar e gerar resultados.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Palestras Inspiradoras
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-start">
                                        * Aprenda com especialistas renomados e obtenha insights valiosos para o seu
                                        negócio.<br><br>
                                        * Descubra as últimas tendências do mercado e as melhores práticas para o
                                        sucesso.<br><br>
                                        * Aprimore seus conhecimentos e habilidades para se destacar da concorrência.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Um Ambiente Propício para o Sucesso
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-start">
                                        * Desfrute de um ambiente dinâmico e inspirador, ideal para fazer networking e
                                        aprender.<br><br>
                                        * Participe de debates e workshops que o ajudarão a alcançar seus
                                        objetivos.<br><br>
                                        * Encontre soluções inovadoras para os desafios do seu negócio.
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class=" mt-3 pt-5 alert alert-warning alert-dismissible fade show" role="alert">
                            <h5>Garanta sua vaga agora! As inscrições são limitadas.</h5>
                            Não perca essa chance única de impulsionar seu negócio e alcançar o sucesso!<br><br>

                            <strong>Inscreva-se e participe do Conecta Vale!</strong>

                            <div class="d-grid d-sm-flex justify-content-sm-center">
                                <button data-toggle="modal" data-target="#modal-donation"
                                    class="btn btn-warning btn-lg m-2 rounded-3">Inscrever-se</button>
                            </div>

                            <div class="text-center mt-3">
                                <a href="https://api.whatsapp.com/send?phone=5574981370420&text=Texto%20aqui"
                                    target="_blank">
                                    <svg enable-background="new 0 0 512 512" width="20" height="20" version="1.1"
                                        viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z"
                                            fill="#4CAF50" />
                                        <path
                                            d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z"
                                            fill="#FAFAFA" />
                                    </svg>
                                    Duvidas?
                                </a>
                            </div>
                        </div>


                        </p>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <!--// Hero -->


    <!-- Modal - Doação  -->
    <div class="modal fade" id="modal-donation" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-3" id="modal-title">Inscrição Conecta Vale</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Body - Informações do Doador -->
                <div id="modal-body-payer" class="modal-body p-5 pt-0">
                    <form id="form-donation">

                        <div id="alert-donation" class="alert alert-danger text-center d-none" role="alert"></div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="nickname" placeholder="Nome Completo"
                                required autofocus>
                            <label for="nickname">Nome Completo</label>
                        </div>

                        <div class="form-floating mb-3" data-validate="Campo obrigatório">
                            <input class="form-control rounded-3" id="message" type="tel" name="tell" maxlength="15"
                                pattern="\(\d{2}\)\s*\d{5}-\d{4}" placeholder="Telefone">
                            <span class="focus-input100" data-placeholder="&#xf235;"></span>
                            <label for="nickname">Telefone</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" id="email" placeholder="name@example.com"
                                required>
                            <label for="email">Email</label>
                        </div>

                        <hr />
                        <div class="input-group input-group-lg mt-1 mb-3">
                            <input value="0.10" hidden type="text" class="form-control" id="value" placeholder="0,00"
                                required>
                        </div>

                        <button type="submit"
                            class="w-100 border-none mb-2 btn btn-lg btn-success text-white fw-bold rounded-3">Inscrever-se</button>
                    </form>
                </div>
                <!--// Body - Informações do Doador -->

                <!-- Body - Realização da doação via PIX -->
                <div id="modal-body-payment" class="modal-body text-center d-none">

                    <div id="loading" class="text-center mb-4 mt-4">
                        <div class="spinner-border text-warning" style="width: 5rem; height: 5rem;" role="status"></div>
                    </div>

                    <div class="row d-none" id="payment-content">
                        <div class="col-md-12">
                            <img src="" id="image-qrcode-pix" style="width: 50%;" />
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" id="code-pix" rows="1" cols="20"></textarea>
                            <button
                                class="w-40 mb-2 mt-3 rounded-2 btn btn-warning text-white btn-clipboard btn-lg px-4 gap-3"
                                id="copyButton">Pix copia cola</button>
                            <br>
                            <a class="w-40 mt-3 m" href="card_pag/client/checkout_card.html"> <img width="25"
                                    height="25" src="https://img.icons8.com/color/48/bank-card-back-side.png">
                                Pagar com cartão de Crédito </a>
                        </div>

                        <div class="text-center">
                            <p class="text-body-secondary small mt-2 mb-3">
                                <img width="100" height="100" src="https://img.icons8.com/plasticine/100/ticket.png"
                                    alt="ticket" />
                        </div>

                        <p class="text-danger"><strong>ATENÇÃO! </strong>Seu ticket só será validado após efetuar o
                            pagamento
                            <br>
                        </p>

                    </div>
                </div>
                <!--// Body - Realização da doação via PIX -->

                <!-- Body - Pagamento Aprovado -->
                <div id="modal-body-approved" class="modal-body text-center d-none">
                    <h2 class="text-success mb-3"><br>Sua inscrição foi validada com sucesso! </h2><br>
                    <a href="ticket.php">Clique aqui para ver seu ticket</a>
                    <div class="text-center mt-3">
                      
                </div>
                <!--// Body - Pagamento Aprovado -->
            </div>
        </div>


    </div>
    <!--// Modal - Doação  -->
    <div class="text-center m-2">
        <a class="text-light opacity-25 " href="administrador.html">Área do admistrador</a>
    </div><br>

    <!-- Confetti Effect -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.0/dist/confetti.browser.min.js"></script>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <!-- Page JS -->
    <script src="assets/js/pages/page-index.js"></script>

</body>

</html>