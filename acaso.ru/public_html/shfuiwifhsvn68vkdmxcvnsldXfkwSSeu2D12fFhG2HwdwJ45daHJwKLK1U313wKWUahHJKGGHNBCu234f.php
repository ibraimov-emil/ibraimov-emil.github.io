<?php
session_start();
require_once("bdconnect.php");

//удаляем айди транзакций из киви таблицы
	$delSql="DELETE FROM $qiwi";
	$delResult = $mysqli->query($delSql);

//количество участников в банке
	$count = null; 
	$resultat = $mysqli->query("SELECT COUNT(*) FROM ".$bank_table.""); // выполняем запрос
	$count = $resultat->fetch_array(MYSQLI_NUM)[0]; // получаем количество строк

//Добавляем дату для срока оплаты
$d = strtotime("+7 day");
$date = date("Y-m-d", $d);
$datePay = $date.'T19:59:00+03:00';
$delSql=$mysqli->query("DELETE FROM date");
$result_query_insert_pay = $mysqli->query("INSERT INTO date (id,date) VALUES (1,'$datePay')");


if($count == '0'){
	echo nan;

}else{
for($i=8; $i>=1; $i--){
	
$rand = rand(1, $count);
	
//данные из таблицы банка
	$id = $_SESSION["id"];
		  		$sql = "SELECT * FROM ".$bank_table." WHERE id_bank = '".$rand."'";
		  		$result = $mysqli->query($sql);
		  		$row = $result->fetch_assoc();
$id = $row['id_user'];

//данные из таблицы пользователей
$sqli = "SELECT * FROM ".$db_table." WHERE id = '".$id."' ";
		  		$res = $mysqli->query($sqli);
		  		$data = $res->fetch_assoc();
				$cash = $data['cash'];

if($i==1){
	$count_win = $count * 0.45;
	echo $count_win;
	$depo = $count_win + $cash;
}else{
	if(($i==2)||($i==3)){
		$count_win = $count * 0.15;
		echo $count_win;
		$depo = $count_win + $cash;
	}else{
		if(($i==4)||($i==5)||($i==6)||($i==7)||($i==8)){
			$count_win = $count * 0.05;
			echo $count_win;
			$depo = $count_win + $cash;
		}
	}
}

	
//зачисляем выигрышь победителю
$upSql="UPDATE $db_table SET cash = '$depo' WHERE id = '$id'";
$upResult = $mysqli->query($upSql);

//добавляем в базу данных победителей
		  		$sql_wins = $mysqli->query("SELECT * FROM ".$db_table." WHERE id = '".$id."' ");
		  		$row_wins = $sql_wins->fetch_assoc();
				$name = $row_wins['name'];
				$photo = $row_wins['photo'];
				$contact_win = 'https://vk.com/id'.$id;
$result_wins = $mysqli->query("INSERT INTO lastwin (id, name, photo, prize) VALUES ('$contact_win', '$name', '$photo', '$count_win')");
   }
}
	$delSql="DELETE FROM $bank_table";
	$delResult = $mysqli->query($delSql);


?>
