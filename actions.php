<?php


function getData($conn, $query){
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}




?>