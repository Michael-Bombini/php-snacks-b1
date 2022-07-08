<?php 

/*
Creiamo un array contenente le partite di basket di un’ipotetica 
tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

*/

$partite = [
    [
        "nomeCasa" => "Milano",
        "puntiCasa" => rand(0,80),
        "nomeOspite" => "Cantù",
        "puntiOspite" => rand(0,80),
    ],
    [
        "nomeCasa" => "Roma",
        "puntiCasa" => rand(0,80),
        "nomeOspite" => "Bologna",
        "puntiOspite" => rand(0,80),
    ],
    [
        "nomeCasa" => "Torino",
        "puntiCasa" => rand(0,80),
        "nomeOspite" => "Palermo",
        "puntiOspite" => rand(0,80),
    ],

];

for($i = 0 ; $i < count($partite) ; $i++){
    echo $partite[$i]["nomeCasa"] . " " . " - " . $partite[$i]["nomeOspite"] . " " . "/" . " " .
    $partite[$i]["puntiCasa"]  . "-" . $partite[$i]["puntiOspite"];
    echo "<br><br>";
}


?>