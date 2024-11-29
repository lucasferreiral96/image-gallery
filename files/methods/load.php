<?php

    // Define o diretorio que armazenará as imagens
    $target_dir = '../uploaded_files/';
    $image = $_FILES;
    $newname;
    $filetype;

        foreach($image as $img){
            $explode = explode(".", $img['name']);
            $target_file = rand(1,99999) . '.' . end($explode);
            $filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); 
            $newname = $target_dir.$target_file;
        }
    
    if($img["size"] > 5120000){
        echo "Arquivo muito grande, escolha um arquivo menor, por favor.";
    }else{
        if($filetype != "jpg" && $filetype != "png" && $filetype != "jpeg"
            && $filetype != "gif" && $filetype != "jfif" ) {
            echo "Somente arquivos JPG, JPEG, PNG, JFIF & GIF são permitidos.";
        }else{
            include_once "conn.php";
        
        $statement = $conn->prepare("INSERT INTO files(id, nome, formato)
            VALUES('','$newname','$filetype')");
        $statement->execute();
        
        if(move_uploaded_file($img["tmp_name"], $newname)){
            echo "Arquivo enviado com sucesso";
        }else{
            echo "Erro ao enviar o arquivo";
        }
        }
    }

?>