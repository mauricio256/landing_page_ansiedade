<?php

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


    echo"
        <h2></h2>
        <div style='border: thin solid black; margin:5px; padding:10px;'>
            <h4>CONECTA VALE - TICKET</h4>
            <hr>
            <h5><strong>Dados de compra:</strong></h5>
            <p><strong>Ticket ID:</strong> ".$recentDonations["id"]."</p>
            <p><strong>Nome:</strong>".$recentDonations['nickname']."</p>
            <p><strong>Valor:</strong>  R$ ".$recentDonations['value']."</p> 
            <p><strong>Situação:</strong> ".$recentDonations['status']."</p>      
            <p><strong>Data de compra</strong>: ".$recentDonations['created_at']."</p>
            <hr>
            <h5><strong>Dados do evento:</strong></h5>
            <p>Data do evento:</p>
            <p>Local:</p>
            <p>Horário:</p>
            <p>Palestrantes:</>
        </div>
        ";       


    ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <div style="margin: 10px;" >
    <p>Imprima ou tire print de tela</p>
    <form>
        <input type="button" value="Imprimir" onclick="window.print()" />
    </form>
    </div>
   

    <script src="" async defer></script>
</body>

</html>