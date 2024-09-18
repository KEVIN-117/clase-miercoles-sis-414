<?php

$nameDb = "clase_miercoles";
$userDb = "root";
$userPassDb = "";
$hostDb = "localhost"; # 127.0.0.1


$conn = new mysqli($hostDb, $userDb, $userPassDb, $nameDb);

if (!$conn) {
    echo "Error en la conexión";
} else {
    echo "Conexión exitosa";
}

?>