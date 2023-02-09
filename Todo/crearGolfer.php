<?php
   
    require("checklogin.php");
    require("db.php");

    //var_dump($_POST);

    $sql = "INSERT INTO golfistas (nombre, nacionalidad, altura, debut, palmares) 
    VALUES (:nombre,:nacionalidad,:altura,:debut,:palmares)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre',$_POST["nombre"],PDO::PARAM_STR);
    $stmt->bindParam(':nacionalidad',$_POST["nacionalidad"],PDO::PARAM_STR);
    $stmt->bindParam(':altura',$_POST["altura"],PDO::PARAM_STR);
    $stmt->bindParam(':debut',$_POST["debut"],PDO::PARAM_STR);
    $stmt->bindParam(':palmares',$_POST["palmares"],PDO::PARAM_STR);

    if ($stmt->execute() == true) {
        header("Location: golfers.php");
    }

?>