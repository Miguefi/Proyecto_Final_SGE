<?php

    require('checklogin.php');
    print_r($_COOKIE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_COOKIE["idioma"])) {
            echo $_COOKIE["idioma"]=="en"? "<h1> Welcome!! </h1>" : "<h1>Bienvenido!!</h1>";
        } else {
            echo "<h1> Bienvenido no tienes cookies!! </h1>";
        }
    ?>
    <a href="golfers.php"> Tabla Golfistas </a>
</body>
</html>