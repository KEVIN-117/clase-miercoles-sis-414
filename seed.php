<?php

require_once("./connection.php");

$create_student_table = "CREATE TABLE student(
    id SERIAL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    address VARCHAR(50) NOT NULL
);";


$create_course_table = "CREATE TABLE course(
    id SERIAL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(50) NOT NULL
);";

$create_course_student_table = "CREATE TABLE student_course(
    id SERIAL PRIMARY KEY,
    student_id SERIAL NOT NULL,
    course_id SERIAL NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student(id),
    FOREIGN KEY (course_id) REFERENCES course(id)
);";


builder($create_student_table, $conn);
builder($create_course_table, $conn);
# builder($create_course_student_table, $conn);

function builder($query, $conn)
{
    if ($conn->query($query) === true) {
        echo "Tabla  creada con éxito";
    } else {
        echo "Error al crear la tabla:" . $conn->error;
    }
}

?>