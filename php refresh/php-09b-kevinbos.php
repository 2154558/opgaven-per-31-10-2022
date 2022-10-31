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

function kleinewoorden($z, $array){
    $x = 0;
    $y = explode(" ", $array);
    foreach($y as $array){
        if(strlen($array) < $z){
            $x++;
            }
        }
    return $x;
}


$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";

echo kleinewoorden(4,"dit is een voorbeeld");
echo "<br>";
echo kleineWoorden(3,"dit is een voorbeeld");
echo "<br>";
echo kleineWoorden(1,"dit is een voorbeeld");
echo "<br>";
echo kleineWoorden(0,"dit is een voorbeeld");	
echo "<br>";
echo kleineWoorden(2,"a b c d");
echo "<br>";	
echo kleineWoorden(6,"abcde");	
echo "<br>";
echo kleineWoorden(4,$string);
echo "<br>";	
echo kleineWoorden(3,$string);	
echo "<br>";
echo kleineWoorden(10,$string);	
?>
    
</body>
</html>