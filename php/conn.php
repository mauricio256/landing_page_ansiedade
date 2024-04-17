<?php

 $server = 'localhost';
 $usuario = 'root';
 $senha = '';
 $dbname = 'socialimpulse';

 /*
 
 $server = 'localhost';
 $usuario = 'id21003317_root';
 $senha = '$Senha=130121';
 $dbname = 'id21003317_conectavale';

 */

 try {
     $conn = new PDO('mysql:host='.$server.';dbname='.$dbname.'', $usuario, $senha);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     return $conn;
 } catch(PDOException $e) {
     echo '  <hr><h1 style="color:orange">Erro de conexão com banco de dados!</h1><br>
             <strong>Mensagem de erro: </strong> ' . $e->getMessage().'
             <br><strong>Código de erro: </strong> ' . $e->getCode().'
             <br><strong>Linha de erro: </strong> ' . $e->getLine();
     echo'<br><img src="https://img.icons8.com/color/150/000000/delete-database.png"/>';
 }

 
