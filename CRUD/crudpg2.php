<html>
<body>
<?php
include "datacon.php";


$studentnummer = $_POST["studentnummer"];
$klas = $_POST["klas"];
$minuten = $_POST["minuten"];
$reden = $_POST["reden"];
$naam = $_POST["naam"];

$sqladd = "INSERT INTO student_te_laat VALUES ( '$studentnummer','$klas','$minuten','$reden','$naam')";
mysqli_query($conn, $sqladd);
 

mysqli_close($conn);
?>
<form action="crudpg1.php" method="post">
<input type="submit" value="ga naar de geupdate pagina" />
</form>

</body>
</html> 


