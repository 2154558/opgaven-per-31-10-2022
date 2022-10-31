<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function kleinewoorden($array){
    $y = explode(" ", $array);
    $x = 0;
    foreach($y as $array){
        if(strlen($array) < 4){
            $x++;
            }
        }
    return $x;
}



$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";
echo kleineWoorden("dit is een voorbeeld");
echo kleineWoorden("a b c d");
echo kleineWoorden("abcd");
echo kleinewoorden($string);


?>
    
</body>
</html>