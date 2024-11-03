<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="http://localhost:8070/projetos/img_uploader/files/methods/load.php" id="formcontent" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile" id="myfile" class="myfile">
        <input type="submit" name='enviado' class="btn btn-success" id="enviar-btn" value="Enviar">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>