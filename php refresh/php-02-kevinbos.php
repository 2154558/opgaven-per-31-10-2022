<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php-02-kevinbos.php" method="get">
    <input type="number" id="getal1" name="getal1">
    <input type="number" id="getal2" name="getal2">
    <input type="submit" value="Submit">
    </form>
<?php

echo $_GET['getal1'], ' X ', $_GET['getal2'],' = ', $_GET['getal1'] * $_GET['getal2'];

?>
    
</body>
</html>