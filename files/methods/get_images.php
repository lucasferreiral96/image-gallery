<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Teste</title>
</head>
<body>


<?php
    include "conn.php";

    $sql = "SELECT * FROM files";
    $query = $conn->query($sql);
    $count = $query->rowCount();

    if($count > 0){
    
    echo "<div class='container-teste'>";
    while($results = $query->fetch(PDO::FETCH_ASSOC)){
        $imglink = str_replace("..", "/projetos/img_uploader/files", $results['nome']);
            echo "<div class='image-box'>";   
            echo "<img src=$imglink>";
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