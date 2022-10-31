<!DOCTYPE html>
<html lang="en">
   <head>
      <title>document</title>
   </head>
   <body>
         <h1>Storing Form data in Database</h1>
         <form action="crudpg2.php" method="post">
             
<p>
               <label for="studentnummer">studentnummer:</label>
               <input type="text" name="studentnummer" id="studentnummer">
            </p>
 
             
<p>
               <label for="klas">klas:</label>
               <input type="text" name="klas" id="klas">
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
               <input type="text" name="reden" id="reden">
            </p>
 
             
<p>
               <label for="naam">naam:</label>
               <input type="text" name="naam" id="naam">
            </p>
 
             
<p>
            <input type="submit" value="Submit">
         </form>
   </body>
</html>