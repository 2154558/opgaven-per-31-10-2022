<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cruddelete</title>
</head>
<body>
    
<?php
include 'datacon.php';
?>

<form action="crudpg1.php">
    <input type="submit" value="terug naar hoofdpagina" />
</form>


<?php
$sql = "SELECT studentnummer, student_naam, klas, minuten_te_laat, reden FROM student_te_laat";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
var_dump($row);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sqldelete = "DELETE FROM Student_te_laat WHERE studentnummer= $_GET[delete]";

if ($conn->query($sqldelete) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>




</body>
</html>