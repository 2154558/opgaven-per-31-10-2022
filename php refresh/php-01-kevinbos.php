<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php-01-kevinbos.php" method="get">
    <input type="text" id="name" name="name">
    
    <?php 
    echo $_GET['name']
    ?>
</body>
</html>