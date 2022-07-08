<?php 

/*
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$numeri = [];

while (count($numeri) < 15) {
$numeroGenerato = rand(1,20);
if(!in_array($numeroGenerato , $numeri)){
    $numeri[] = $numeroGenerato;



}
}


for($i = 0 ; $i < count($numeri) ; $i++ ){
    echo "<br>";
    echo $numeri[$i];
    
}

?>