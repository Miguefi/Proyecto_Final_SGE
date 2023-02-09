<?php

    require("checklogin.php");
    require("db.php");

    $stmt = $conn->prepare("SELECT * FROM golfistas");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<a href= "newGolfer.php"> Crear nuevo golfista </a></br>';
    foreach($result as $row) {
        //print "<form action='borrarGolfer.php?id=".$row["id"]."' method='post'></form>"
        print ($row["id"]. " - " . $row["nombre"]. " - " . $row["nacionalidad"]  . "</br>");
        print ($row["altura"]. " - " . $row["debut"]  . "</br>");
        print "<a href = 'editarGolfer.php?id=".$row["id"]."'>editar</a>";
        print "<a href = '#' onclick = 'borrar(".$row["id"].")'> borrar</a></br>";
    }

    //print_r($stmt)

?>
<script>

    //document.getElementById().addEventListener("click", borrar,false);
    function borrar(id) {
        if (confirm("¿Seguro que deseas eliminar al golfista?") == true) {
            window.location.href = 'borrarGolfer.php?id='+id;
        } else {           
            event.preventDefault()
            alert("Eliminación cancelada!");
        }
    }

</script>