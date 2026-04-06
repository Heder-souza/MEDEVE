<?php

$produtos = [
    [
        "nome" => "banana",
        "preco" => 19.00
    ],
    
    [
        "nome" => "maça",
        "preco" => 17.00
    ],

    [
        "nome" => "pera",
        "preco" => 12.00
    ]

    ];
    
foreach($produtos as $produto){
    echo "Nome: ".$produto["nome"]."<br>";
    echo "Preço: ".$produto["preco"]."<br>";
    echo "<hr>";
}

?>