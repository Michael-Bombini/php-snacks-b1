<?php

/*
Passare come parametri 
GET name, mail e age 
e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola 
e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”




*/

$name = key_exists("name", $_GET) ? trim($_GET["name"]) : "";
$mail = key_exists("mail", $_GET) ? trim($_GET["mail"]) : "";
$age = key_exists("age", $_GET) ? trim($_GET["age"]) : "";
// var_dump($name);
// var_dump($mail);
// var_dump($age);
// var_dump(is_numeric($age));


if($name==="" && $mail==="" && $age==="")
    echo "Effettua l'accesso inserendo i dati";

else {

if(strlen($name) > 3  && strpos($mail , "@") && strpos($mail , ".") && is_numeric($age)){
    echo "Accesso riuscito";

}
else{
    echo "Accesso non riuscito";

}


}



?>