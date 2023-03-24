  <?php
  require_once("bdconnect.php");
  $result = $mysqli->query('SELECT * FROM date WHERE id = 1') or die('Запрос не удался: ' . mysql_error());


		  		$date_sql = $result->fetch_assoc();
				$date = $date_sql['date'];
				

    $diff = abs(strtotime($date));
$arrDate = [$diff];
  // Возвращаем JSON со списоком продуктов
  echo json_encode(array_reverse($arrDate));

?>
