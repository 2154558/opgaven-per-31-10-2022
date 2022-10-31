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
    $cijfers=[4,5,4,5,6,6,5,8,7,6,4,8];
    print_r($cijfers);
    print_r(onvoldoendes($cijfers));
    echo count($cijfers);
    print_r($returnarray);


    function onvoldoendes($array){
        $returnarray[];
        $x = 1;
            while($x <= count($array)){
                echo "moeder ";
                if($array < 5){
                    $returnarray[] = $array;
                }
                $x++;
            }
    };





?>
    
</body>
</html>