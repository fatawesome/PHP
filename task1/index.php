<?php
  $mysqli = mysqli_connect("127.0.0.1", "root", "", "test");

  if (!$mysqli) {
      echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
      echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }

  echo "Соединение с MySQL установлено!" . PHP_EOL;
  echo "Информация о сервере: " . mysqli_get_host_info($mysqli) . PHP_EOL . PHP_EOL;

  $res = mysqli_query($mysqli, "SELECT * FROM test_table");
  $n = mysqli_num_rows($res);

  echo "<table border=1>";
  while ($row = $res->fetch_row()) {
    echo "<tr>";
    for($i = 0; $i < 4; $i++) {

      echo "<td>" . $row[$i] . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";

?>
