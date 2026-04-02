<?php

$cidades = [
    [
        "cidade" => "marilia"
    ],

    [
        "cidade" => "São paulo"
    ],

    [
        "cidade" => "Salinas"
    ],

    [
        "cidade" => "Floripa"
    ],

    [
        "cidade" => "Catanduva"
    ]
    ];

    foreach($cidades as $cidade){
        echo "cidade: ".$cidade["cidade"]."<hr>";
    }

?>