<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Uploader</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="/projetos/img_uploader/files/css/index.css">
</head>
<body>
    <header>
        <div class="menu">
            
            <div class="links">
                <a href="#" id="upload-btn">Upload</a>
            </div>
        </div>
    </header>
    <main>
        <div class="content">

            <?php    
                include "./files/methods/modal_insert.php";
            ?>


            <h1>Galeria de imagens</h1>
            <div class="searchbar">
                <form action="">
                    <input type="text" name="searchbar" id="searchinput" placeholder="Procurar uma imagem...">
                    <input type="submit" value="Procurar" class="btn btn-primary searchbtn">
                </form>
            </div>
            
            <div class="images">
                <div class="filter-box">
                    <div id="filter">
                        <select name="getval" id="getval">
                            <option value="select">Filtrar</option>
                            <option value="latest">Mais recentes</option>
                            <option value="older">Mais antigos</option>
                        </select>
                    </div>
                </div>
                <?php
                    include_once "./files/methods/get_images.php";
                    include_once "./files/methods/modal_insert.php";
                ?>
                 
            </div>

        </div>
        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="./files/js/main.js"></script>
</body>
</html>