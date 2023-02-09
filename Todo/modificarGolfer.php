<?php
   
    require("checklogin.php");
    require("db.php");

    var_dump($_POST);

    $nombre = $_POST["nombre"];
    $nacionalidad = $_POST["nacionalidad"];
    $altura = $_POST["altura"];
    $debut = $_POST["debut"];
    $palmares = $_POST["palmares"];
    $id = $_POST["id"];

    $sql = "UPDATE golfistas SET nombre = :nombre,
                altura = :altura,
                nacionalidad = :nacionalidad,
                debut = :debut,
                palmares = :palmares,
                WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre',$_POST["nombre"],PDO::PARAM_STR);
    $stmt->bindParam(':nacionalidad',$_POST["nacionalidad"],PDO::PARAM_STR);
    $stmt->bindParam(':altura',$_POST["altura"],PDO::PARAM_STR);
    $stmt->bindParam(':debut',$_POST["debut"],PDO::PARAM_STR);
    $stmt->bindParam(':palmares',$_POST["palmares"],PDO::PARAM_STR);
    $stmt->bindParam(':id',$_POST["id"],PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->execute() == true) {
        header("Location: golfers.php");
    }

?>
