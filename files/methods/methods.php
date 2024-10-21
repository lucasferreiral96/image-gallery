<?php

function upload(){

}

function connection(){   
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=image-gallery", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Conectado com sucesso";
    } catch(PDOException $e) {
      echo "Falha de conexão: " . $e->getMessage();
    }
    
}

?>