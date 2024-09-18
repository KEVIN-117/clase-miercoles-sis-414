<?php

$my_onject = [
    "num_rows" => 1,
    "name" => "Juan",
    "email" => "example",
    "fetch_assoc" => function () {
        return [
            "name" => "Juan",
            "email" => "example"
        ];
    }
];

?>