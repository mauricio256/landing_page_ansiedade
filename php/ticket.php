<?php
include("conn.php");

$query = "SELECT * FROM participante ORDER BY id_cadastro DESC LIMIT 1";
    
    $stmt  = $conn->prepare($query);
    $stmt->execute();

    $participante  = $stmt->fetch(\PDO::FETCH_ASSOC) ?? null;
?>
<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ticket</title>
  <link rel="icon" type="image/x-icon" href="assets/images/icon.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700|Open+Sans:600|Squada+One|Rozha+One|Kristi&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="../css/style_ticket.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
  <article>
    <div class="top">
      <p>ID TIKECT: <?php echo $participante["id_cadastro"] ?></p>
      <div class="row">
        <div class="block">
          <img src="../images/logo_preto.png">
        </div>
      </div>
      </div>
    <div>
      Dados do pagador
      <hr>
      <h3>Nome:</h3><p><?php echo $participante["nome"] ?></p>
      <h3>Contato:</h3><p><?php echo $participante["telefone"] ?></p>
      <h3>Valor:</h3><p><?php echo"R$ ".$participante["valor"] ?></p>
      <h3>Status Pagamento:</h3><p><?php echo $participante["pagamento"] ?></p>
      <h3>Data/hora Pagamento:</h3><p><?php echo $participante["data_cadastro"] ?></p><br>
      Evento
      <hr>
      <h3>Local:</h3><p>Petrolina-PE</p> 
      <h3>Data e Hora:</h3><p>27/04/24 08:00 - 18:00</p>
      <h3>Palestrantes:</h3><p><br>José Costa<br>
                                   Andréia Gomes<br>
                                   Alessandro Brito<br>
                                   Rosiane Sampaio<br>
                                   Alexandre Braga</p>  

  
       
    </div><br>
  </article>

  <div style="color:white; text-align:center; margin-top:-50px;" >
      <p>Imprima ou tire print de tela</p><br>
    <form>
      
        <input type="button" value="Imprimir" onclick="window.print()" />
    </form>
    </div><br>
    <div style="text-align: center;" >
      <a style="color: white; text-align: center;" href="../index.html" >Sair</a><br>
    </div><br><br>

</body>
<!-- partial -->
  
</body>
</html>
