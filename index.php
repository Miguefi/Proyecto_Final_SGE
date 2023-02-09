<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Saludo Html</h1>

<?php
    echo "<h2>Saludo Php</h2>"
?>

<form action="entrada.php" method="POST">

Nombre <input type="text" name="nombre" id="nombre"> <br>
Password <input type="password" name="password" id="password"> <br>
<input type="submit" value="Enviar">
</form>
    
</body>
</html>