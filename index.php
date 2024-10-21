<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Uploader</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./files/css/index.css">
</head>
<body>
    <header>
        <div class="menu">
            <div class="links">
                <a href="./files/methods/uploadpage.php">Upload</a>
            </div>
        </div>
    </header>
    <main>
        <div class="content">
            <h1>Galeria de imagens</h1>
            <div class="searchbar">
                <form action="">
                    <input type="text" name="searchbar" id="searchinput" placeholder="Procurar...">
                    <input type="submit" value="Procurar" class="btn btn-primary searchbtn">
                </form>
            </div>
            
            <div class="images">
                <?php
                    include "./files/methods/get_images.php";
                ?>
                 
            </div>

        </div>
        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="./files/js/main.js"></script>
</body>
</html>