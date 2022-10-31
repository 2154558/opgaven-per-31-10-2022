<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
      .tabel{
        border-collapse: collapse;
        margin: 50px 0;
        font-size: 0.9em;
        min-width: 500px;
      }
      .tabel thead tr{
        background-color: lime;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
      }
      .tabel th,
      .tabel td {
        padding: 12px 15px;
      }
      .tabel tbody tr {
        border-bottom: 1px solid #dddddd;
      }
    </style>
</head>

<body>
<div>
  <div class= "pagina" align="center">
    <?php
      include "datacon.php";

        $sql = "SELECT studentnummer, student_naam, klas, minuten_te_laat, reden FROM student_te_laat";
        $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            echo "<table class='tabel'>
                    <tr><th>student naam</th><th>klas</th><th>aantal minuten te laat</th><th>reden te laat</th><th>delete<th>update</th></th></tr>";
          while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["student_naam"]."</td>
                    <td>".$row["klas"]."
                    <td> ".$row["minuten_te_laat"]."
                    <td> ".$row["reden"]."
                    <td>" ?>
                    <a href="cruddelete.php?delete=<?php echo $row['studentnummer'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    <td>
                    <a href="crudupdate.php?id=<?php echo $row['studentnummer'] ?>">update</a>
                    </td>
                    </td >
                    <?php
                    echo "</td>"."</td></td></tr>";
          }
            echo "</table>";
          } 
          else {
          echo "0 results";
          }
      ?>
    <div class="te_laat" align="float">
      <form action="form.php">
        <input type="submit" value="weer een te laat" />
      </form>
    </div>
  </div>
</div>
</body>
</html>
