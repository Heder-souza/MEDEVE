<?php

## 0 -> receber | 1 -> pagar
$contas = [
    [
        "descricao" => "IPTU",
        "valor" => 1892.00,
        "tipo" => 0
    ],
    
    [
        "descricao" => "Aluguel",
        "valor" => 900.00,
        "tipo" => 1
    ],

    [
        "descricao" => "Carro",
        "valor" => 1550.00,
        "tipo" => 0
    ]

    ];
    
foreach($contas as $conta){
    if ($conta["tipo"] == 0 ){
        echo "descricao: ".$conta["descricao"]."<br>";
        echo "valor: ".$conta["valor"]."<br>";
        echo "tipo: Receber <br>";
        echo "<hr>";
    }
}

?>