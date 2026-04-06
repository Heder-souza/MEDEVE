<?php

$clientes = [
    [
        "usuario" => "heder",
        "perfil" => "ADMIN"
    ],
    
    [
        "usuario" => "davi",
        "perfil" => "ALUNO"
    ],

    [
        "usuario" => "peres",
        "perfil" => "ALUNO"
    ]

    ];
    
foreach($clientes as $cliente){
    echo "usuario: ".$cliente["usuario"]."<br>";
    echo "perfil: ".$cliente["perfil"]."<br>";
    echo "<hr>";
}

?>