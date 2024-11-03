<?php

if(!isset($_POST['enviado'])){
    header('Location: uploadpage.php');
}
    // Define o diretorio que armazenará as imagens
    $target_dir = '../uploaded_files/';
    
    $explode = explode(".", $_FILES["myfile"]["name"]);
    $target_file = rand(1,99999) . '.' . end($explode);
    $filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); 
    $newname = $target_dir.$target_file;
    $status = 0;

    if($_FILES["myfile"]["size"] > 5000000){
        echo "<span style='color: red; font-weight: 600; font-family: sans-serif'>Arquivo muito grande, escolha um arquivo menor, por favor.</span><br>";
        $status = 0;
    }else{
        $status = 1;
    }

    if($filetype != "jpg" && $filetype != "png" && $filetype != "jpeg"
    && $filetype != "gif" ) {
        echo "Desculpe, somente arquivos JPG, JPEG, PNG & GIF sã permitidos.";
        $status = 0;
    }else{
        $status = 1;
    }

    if($status == 0){
        echo "O arquivo nao pode ser enviado";
    }else{
        include_once "conn.php";
        
        $statement = $conn->prepare("INSERT INTO files(id, nome, formato)
            VALUES('','$newname','$filetype')");
        $statement->execute();
        
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $newname)){
            echo "<span style='color: green; font-weight: 600; font-family: sans-serif'>Arquivo enviado com sucesso</span><br>";
            echo "<br>";
            echo "<a href='uploadpage.php'>Novo Upload</a>";
            echo "<br>";
            echo "<a href='../../index.php'>Pagina Inicial</a>";
        }else{
            echo "Erro ao enviar o arquivo";
        }
    }

?>