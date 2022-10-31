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

function breekaf($e, $string){
    $antwoord = substr($string, 0, strpos(wordwrap($string, $e), "\n"));
    return $antwoord;
}

echo breekAf(32, "Deze student is erg goed in programmeren in PHP");
echo "<br>";
echo breekAf(18, "Deze student is erg goed in programmeren in PHP");
echo "<br>";
echo breekAf(19, "Deze student is erg goed in programmeren in PHP");
echo "<br>";
echo breekAf(20, "Deze student is erg goed in programmeren in PHP");
echo "<br>";
echo breekAf(21, "Deze student is erg goed in programmeren in PHP");
echo "<br>";
echo breekAf(24, "Deze student is erg goed in programmeren in PHP");
?>


    
</body>



</html>