<?php

# require_once("./seed.php");
require_once("./connection.php");
require_once("./actions.php");

$query = "SELECT * FROM student";

$students = getData($conn, $query);
echo "<br><h1>Estudiantes</h1>";
while ($row = $students->fetch_assoc()) {
    echo "Nombre: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Teléfono: " . $row['phone'] . "<br>";
    echo "Dirección: " . $row['address'] . "<br>";
    echo "<br>";
}


$student = [
    "id" => 1,
    "name" => "Juan",
    "email" => "juan.example.com",
    "phone" => "1234567890",
    "address" => "Calle 123"
];

$fullQuery = "UPDATE student SET";

foreach ($student as $key => $value) {
    echo $key . " => " . $value . "<br>";
}


?>