<?php

include("php/conn.php");

          $query = "SELECT * FROM participante ORDER BY id_cadastro DESC LIMIT 1";
          
          $stmt  = $conn->prepare($query);
          $stmt->execute();

          $participante  = $stmt->fetch(\PDO::FETCH_ASSOC) ?? null;

          $id = $participante["id_cadastro"];



$atualiza_pag = $conn->prepare("UPDATE `participante` SET `pagamento` = 'aprovado' WHERE `participante`.`id_cadastro` = $id");
$atualiza_pag->execute();

$result = $atualiza_pag->rowCount();

if($result == 1){ ?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Impulse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="images/logo_icon.png">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <div class="text-light text-center">
        <div class=" m-sm-5 p-3">
          <div style="text-align: center;">
            <img src="images/logo.png" width="200px" alt="">
          </div><br> 
          <div class="m-sm-3 m-1 text-start bg-light rounded p-4"> 
            <div class="text-center">
              <img width="80" height="80" src="https://img.icons8.com/office/80/approval.png" alt="approval"/>
              <h2 class="text-success opacity-75 mb-2"><br>Pagamento recebido com sucesso!</h2><br>
              <p class="text-black-50"><br>Enviamos para seu <a target="_blank" href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=23&ct=1713322489&rver=7.0.6738.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fcobrandid%3dab0455a0-8d03-46b9-b18b-df2f57b9e44c%26nlp%3d1%26deeplink%3dowa%252f0%252f%253fstate%253d1%26redirectTo%3daHR0cHM6Ly9vdXRsb29rLmxpdmUuY29tL21haWwvMC8%26RpsCsrfState%3d8286e380-ae53-f185-5c2b-0aae73172494&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=ab0455a0-8d03-46b9-b18b-df2f57b9e44c">E-mail</a> os dados de sua credencial de acesso ao evento. Verifique sua caixa de SPAM.<br>
              <img width="100" height="100" src="https://img.icons8.com/plasticine/100/ticket.png" alt="ticket" /><br>
              <div class="text-center mt-3">  
            </div>
          </div>
        <a href="index.html" class="btn btn-secondary">Fechar</a>
        </div>

    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


<?php echo"FALTA Enviar e-mail para o USER"; } else{ 
  echo"
  <script>
      window.location.href='index.html';
  </script>
  ";
}