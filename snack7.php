<?php 
// Creare un array contenente qualche alunno di un’ipotetica classe. 
// Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
// Stampare Nome, Cognome e la media dei voti di ogni alunno.


$classe = [
    [
        "nome" => "Mario",
        "cognome" => "Rossi",
        $voti = [
            "matematica" => 3,
            "storia" => 10,
            "inglese" => 7,
        ]
        ],
        [
            "nome" => "Luigi",
            "cognome" => "Verdi",
            $voti = [
                "matematica" => 10,
                "storia" => 2,
                "inglese" => 5,
            ]
            ],
            [
                "nome" => "Pippo",
                "cognome" => "Pippo",
                $voti = [
                    "matematica" => 4,
                    "storia" => 4,
                    "inglese" => 8,
                ]
                ],


            ];


for($i = 0 ; $i < count($classe) ; $i++){
    echo "Nome Alunno: " . "   " . $classe[$i]["nome"] . " " . "/" . " ";
    echo "Cognome Alunno: " . "   " . $classe[$i]["cognome"];

        for($j = 0 ; $j < count($classe[$voti]) ; $j++)
            echo $classe[$j][$voti];

    echo "<br><br>";
}


?>