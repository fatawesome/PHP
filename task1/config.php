<?php
  $db_host = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "test";

  $db_link = mysqli_connect($db_host,$db_user,$db_pass,$db_name)
    or die(mysqli_connect_errno()." - ".mysqli_connect_error());
  mysqli_query($db_link,"SET CHARACTER SET 'utf8'");

  echo "Connection success!";

  $query = "SELECT * FROM `test_table` WHERE 1";

  $result = mysqli_query($db_link,$query);
  //print_r($result);

  echo "<table border=1>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['surname']."</td>";
      echo "<td>".$row['age']."</td>";
      echo "<td>".$row['birthday']."</td>";
    echo "</tr>";
  }
  echo "</table>";
?>
