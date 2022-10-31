<!DOCTYPE html>
<html lang="en">
   <head>
      <title>update</title>
   </head>
   <body>

<?php
include 'datacon.php';

$sql = "SELECT student_naam, klas, minuten_te_laat, reden FROM student_te_laat WHERE studentnummer = $_GET[id]";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
         <h1>update de student</h1>
         <form action="crudupdate2.php?id=<?php echo $_GET["id"]?>" method="post">
             
<p>
               <label for="klas">klas:</label>
               <input type="text" name="klas" id="klas" value="<?php echo $row["klas"] ?>">
            </p>
   
<p>
               <label for="minuten">hoeveel minuten te laat:</label>
                  <select name="minuten" id="minuten">
                     <option value="10">10</option>
                     <option value="20">20</option>
                     <option value="30">30</option>
                     <option value="40">40</option>
                  </select> 
            </p>
    
<p>
               <label for="reden">reden:</label>
               <input type="text" name="reden" id="reden" value="<?php echo $row["reden"] ?>">
            </p>
             
<p>
               <label for="naam">naam:</label>
               <input type="text" name="naam" id="naam" value="<?php echo $row["student_naam"] ?>">
            </p>
             
<p>
            <input type="submit" value="Submit">
         </form>
   </body>
</html>
