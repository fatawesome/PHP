<?php
  error_reporting(E_ALL);

  $db_host = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "test";

  $db_link = new mysqli($db_host, $db_user, $db_pass, $db_name)
    or die($mysqli->connect_errno." - ".$mysqli->connet_error);
  //$db_link->query("SET CHARACTER SET 'utf-8'");
  mysqli_query($db_link,"SET CHARACTER SET 'utf8'");

  $query = "SELECT * FROM `mytable` WHERE 1";
  $result = $db_link->query($query);

  //print_r($result);

  echo "<table>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['fio']."</td>";
      echo "<td>".$row['birthday']."</td>";
      echo "<td>".$row['sex']."</td>";
    echo "</tr>";
  }
  echo "</table>";

?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form action="add.php" method="post">
       <input type="submit" name="" value="Добавить">
     </form>
   </body>
 </html>
