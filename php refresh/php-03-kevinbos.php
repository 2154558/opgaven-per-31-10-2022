<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p style='color:red'>
<?php 

for($x = 0; $x <= 20; $x++){
    if($x < 20){
        echo $x . "-" ;
    }
    elseif($x == 20){
        echo $x;
    }
}
$i = 0;
echo "<br>";
while($i <= 20){
    if($i < 20){
        echo $i . "-" ;
    }
    elseif($i == 20){
        echo $i;
    }
    $i++;
}

?>
</p>
</body>
</html>