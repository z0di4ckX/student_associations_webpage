<?php 
    include('../include/mysqli_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Img</title>
</head>
<body>
    <h1>
        Insertar la Imagen
    </h1>
    <form action="cargarImg.php" method="POST" enctype="multipart/form-data">
        Nombre <input type="file" name="img" /><br>
        <input type="submit" value="Acept">
    </form>
</body>
</html>