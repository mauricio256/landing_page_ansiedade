<?php
 include("conn.php");

 $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
 $tel = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
 $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);

 $conn;
 $query = "INSERT INTO `participante` (`id_cadastro`, `nome`, `telefone`, `email`,`valor`, `pagamento`, `data_cadastro`) VALUES (NULL, '$nome', '$tel', '$email','2', 'pendente', now());";
           
 try {
      if($conn->exec($query)):?>




            <!doctype html>
            <html lang="pt-br">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Conecta Vale</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <link rel="icon" type="image/x-icon" href="../images/logo.png">
                <link rel="stylesheet" href="../style.css">
            </head>
            <body>
                <div class="text-center">
                    <div class="p-3">
                    <div style="text-align: center;">
                        <img src="../images/logo_preto.png" width="200px" alt="">
                    </div><br> 
                    <div class="bg-light pb-5 p-3">
                        <p class="display-6 text-success">Cadastro realizado com sucesso!</p>
                        <p class="text-danger"><strong>ATENÇÃO! </strong>Seu ticket só será validado após efetuar o
                                pagamento
                                <br>
                        </p>
                            <p class="text-body-secondary ">
                                    <img width="100" height="100" src="https://img.icons8.com/plasticine/100/ticket.png"
                                        alt="ticket" />
                          
                            <h1>R$<strong> 159,00</strong> <a class="btn btn-success opacity-75" href="https://conecta-vale.pay.yampi.com.br/r/81VLZ352QC">Pagar</a></h1>
                            
                            
                    </div>
                            
                    </div>

                </div>
      
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            </body>
            </html>












         
      <?php     else:
                echo "<div style='width: 100%; padding:20px; background-color:red; color:yellow;'>Ocorreu um erro ao cadastrar. tente novamente </div><br><a href='../cadastro_funcionario.php'>Voltar</a>"; 
           endif;
           
           } catch (Exception $e) {
                echo "<div style='width: 100%; padding:20px; background-color:red; color:yellow;'>Ocorreu um erro: Mesangem de erro:".  $e->getMessage() ."</div><br><a href='../cadastro_funcionario.php'>Voltar</a>"; 
           }