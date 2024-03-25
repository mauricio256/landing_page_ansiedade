<?php
if(($_GET["ticket"]) != "aprovado"){
  echo"<meta http-equiv='refresh' content='0; url=index.php'>";
}

require_once __DIR__ . '../../app/config.php';

function getRankingDonations($donations = null)
{
    if (!$donations) {
        return [];
    }

    usort($donations, function($a, $b) {
        return $b['value'] / $a['value'];
    });
    
    return array_slice($donations, 0, 5);
}
 
$query = "SELECT * FROM donations ORDER BY id DESC LIMIT 1";
    
    $stmt  = $pdo->prepare($query);
    $stmt->execute();

    $recentDonations  = $stmt->fetch(\PDO::FETCH_ASSOC) ?? null;
    ///$rankingDonations = getRankingDonations( $recentDonations );
?>
<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ticket</title>
  <link rel="icon" type="image/x-icon" href="assets/images/icon.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700|Open+Sans:600|Squada+One|Rozha+One|Kristi&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style_ticket.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
  <article>
    <div class="top">
      <p>ID TIKECT: <?php echo $recentDonations["id"] ?></p>
      <div class="row">
        <div class="block">
          <img src="assets/images/logo_preto.png">
        </div>
      </div>
      </div>
    <div>
      Dados do pagador
      <hr>
      <h3>Nome:</h3><p><?php echo $recentDonations["nickname"] ?></p>
      <h3>Contato:</h3><p><?php echo $recentDonations["message"] ?></p>
      <h3>Valor pago:</h3><p><?php echo"R$ ".$recentDonations["value"] ?></p>
      <h3>Status Pagamento:</h3><p><?php echo $recentDonations["status"] ?></p>
      <h3>Data/hora Pagamento:</h3><p><?php echo $recentDonations["created_at"] ?></p><br>  
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
      <a style="color: white; text-align: center;" href="index.php" >Sair</a><br>
    </div><br><br>

</body>
<!-- partial -->
  
</body>
</html>
