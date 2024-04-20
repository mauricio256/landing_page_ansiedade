<?php
 include("conn.php");

 $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
 $tel = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
 $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);

 $conn;
 $query = "INSERT INTO `participante` (`id_cadastro`, `nome`, `telefone`, `email`,`valor`, `pagamento`, `data_cadastro`) VALUES (NULL, '$nome', '$tel', '$email','0', 'pendente', now());";
           
 try {
      if($conn->exec($query)):?>




            <!doctype html>
            <html lang="pt-br">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Social Impulse</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <link rel="icon" type="image/x-icon" href="images/logo_icon.png">
                <link rel="stylesheet" href="../css/style.css">
            </head>
            <body>
                <div class="text-center">
                    <div class="p-3">
                        <div style="text-align: center;">
                            <img src="../images/logo.png" width="200px" alt="">
                        </div><br> 

                        
                        <div class="shadow-none p-3 mb-5 bg-white rounded pb-5 p-3">
                            <img src="../images/cadastrado.gif">
                           
                            <p class="display-6 text-success">Cadastro realizado com sucesso!</p> 
                            <p class="text-danger"><strong>ATENÇÃO! </strong><br>Após realizar o pagamento enviar seu nome e o comprovante para o WhatsApp: <strong>(74) 8871-2317</strong>  | José Pereira da Costa.</p>  
                       
                            <hr>
                            <h5>PIX (Com 20% Desconto)</h5> <h4><strong>R$ 749,00</strong></h4>Chave PIX: <strong>838.552.205-06</strong> <br> 
                            <input id="chavePix" value="83855220506"  style=" width: 110px; margin:10px; border:none; background:none;"/><br>
                            <img src="../images/QRCODE.webp" width="200px"><br><br>
                            <button class="btn btn-success" id="copy">Copiar Chave Pix</button>
                            <p id="msg" style="display:none; color:blue;">Chave pix copiada!<br> Abra o aplicativo do seu banco</p>
                            <hr>
                            <h5>Cartão de Crédito</h5> <h4><strong>R$ 936,25</strong></h4> Até 10X (sem juros)<br><br> 
                            <a class="btn btn-success" href="https://social-impulse.pay.yampi.com.br/r/1BTZDTBVH9">Pagar com Cartão</a></h5>
                            <hr>
                                
                        </div>
                            
                    </div>

                </div>


                <script type="text/javascript">
                    const textInput = document.getElementById('chavePix');
                    const copyButton = document.getElementById('copy');
                    const msg =document.getElementById('msg');

                    copyButton.addEventListener('click', ()=> {
                    textInput.select();
                    document.execCommand('copy');
                    copyButton.innerHTML = "Copiado!";
                    msg.style.display = "";
                    });
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            </body>
            </html>

            










         
      <?php     else:
                echo "<div style='width: 100%; padding:20px; background-color:red; color:yellow;'>Ocorreu um erro ao cadastrar. tente novamente </div><br><a href='../cadastro_funcionario.php'>Voltar</a>"; 
           endif;
           
           } catch (Exception $e) {
                echo "<div style='width: 100%; padding:20px; background-color:red; color:yellow;'>Ocorreu um erro: Mesangem de erro:".  $e->getMessage() ."</div><br><a href='../cadastro_funcionario.php'>Voltar</a>"; 
           }