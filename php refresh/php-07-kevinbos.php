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


function begroeting($naam){
    $tijd = date('H:i:s');
    if($tijd < 12.00){
        $uitkomst = "goedemorgen " . $naam;

    }
    elseif($tijd > 12.00 && $tijd < 18.00){
        $uitkomst = "goedemiddag " . $naam;

    }
    elseif($tijd > 18.00){
        $uitkomst = "goedenavond " . $naam;
    }
    return $uitkomst;
}

echo begroeting("jurd");
?>
    
</body>
</html>