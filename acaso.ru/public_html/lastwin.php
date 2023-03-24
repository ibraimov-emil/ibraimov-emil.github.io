  <?php
  require_once("bdconnect.php");
  $result = $mysqli->query('SELECT * FROM lastwin') or die('Запрос не удался: ' . mysql_error());

  // Тут будем хранить список продуктов
  $wins = [];

    // Вносим все продукты из БД в переменную
  while($row = $result->fetch_assoc()) {

    $wins[] = $row;
  }

  // Возвращаем JSON со списоком продуктов
  echo json_encode(array_reverse($wins));

?>

