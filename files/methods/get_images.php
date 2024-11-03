<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projetos/img_uploader/files/css/index.css">
</head>
<body>


<?php
    include "conn.php";

    // Dados a ser buscado no banco de dados
    $sql = "SELECT * FROM files";
    $query = $conn->query($sql);

    //Faz a busca do número de resultados no banco de dados
    $count = $query->rowCount();

    if($count > 0){
    
    echo "<div class='container-teste'>";
    while($results = $query->fetch(PDO::FETCH_ASSOC)){
        $imglink = str_replace("..", "/projetos/img_uploader/files", $results['nome']);
            echo "<div class='image-box'>";   
            echo "<img src=$imglink class='block'>";
            echo "<br>";
            echo "</div>";   

        };
        
        $conn = null;
        echo "</div>";
    }else{
        echo "Nenhuma imagem encontrada";
    }

?>

</body>
</html>