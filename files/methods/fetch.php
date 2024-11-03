<?php

include_once "conn.php";
if(isset($_POST['request'])){

    $req = $_POST['request'];
        if($req == 'latest'){
            $sql = "SELECT * FROM files ORDER BY id DESC ";
            $query = $conn->query($sql);
            $count = $query->rowCount(); //Faz a busca do número de resultados no banco de dados
    if($count > 0){    
    echo "<div class='container-teste'>";
        while($results = $query->fetch(PDO::FETCH_ASSOC)){
            $imglink = str_replace("..", "/projetos/img_uploader/files", $results['nome']);
            echo "<div class='image-box'>";   
            echo "<img src=$imglink class='block'>";
            echo "<br>";
            echo "</div>";   
        }
    }
}else{
    if($req == 'older'){
        $sql = "SELECT * FROM files ORDER BY id DESC ";
        $query = $conn->query($sql);
        $count = $query->rowCount(); //Faz a busca do número de resultados no banco de dados

        if($results = $query->fetch(PDO::FETCH_ASSOC)){
                $sql = "SELECT * FROM files ORDER BY id ASC ";
                $query = $conn->query($sql);
                $count = $query->rowCount(); //Faz a busca do número de resultados no banco de dados
        if($count > 0){
            echo "<div class='container-teste'>";
            while($results = $query->fetch(PDO::FETCH_ASSOC)){
                $imglink = str_replace("..", "/projetos/img_uploader/files", $results['nome']);
                    echo "<div class='image-box'>";   
                    echo "<img src=$imglink class='block'>";
                    echo "<br>";
                    echo "</div>";   
            }
        }else{
            echo "erro: resultados mais antigos";
        }
    }
}
}
}

?>