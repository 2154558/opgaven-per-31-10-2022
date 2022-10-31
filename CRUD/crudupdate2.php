<html>
<body>
<?php
include "datacon.php";


$klas = $_POST["klas"];
$minuten = $_POST["minuten"];
$reden = $_POST["reden"];
$naam = $_POST["naam"];


?>
<form action="crudpg1.php" method="post">
<input type="submit" value="ga naar de geupdate pagina" />
</form>

</body>
</html> 


<?php
$sqlupdate = "UPDATE student_te_laat SET klas = '$klas', minuten_te_laat = '$minuten', reden = '$reden', student_naam = '$naam' WHERE studentnummer = $_GET[id]";
mysqli_query($conn, $sqlupdate);
mysqli_close($conn);
?>