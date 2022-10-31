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
$array = [11,11,5,2,12,6,7,8,1,10,9];

function telgrotegetallen($getal){
    $x=0;
    foreach($getal as $value){

        if($value > 10){
            $y = $value;
            $x = $x + $y;
        }
    }
    echo $x;

}
telgrotegetallen($array)
?>

    
</body>
</html>