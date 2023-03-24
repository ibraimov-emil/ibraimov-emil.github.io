<?php 
session_start();
$msg_box = ""; // в этой переменной будем хранить сообщения формы
   $errors = array(); // контейнер для ошибок
   // проверяем корректность полей
   if($_POST['bring_qiwi'] == ""){   $errors[] = "1";}

   if($_POST['bring_cash'] == ""){   $errors[] = "1";}
 
   // если форма без ошибок
   if(empty($errors)){
       //проверка на то, что запрос от акасо
	   $host ='acaso.ru';
	   if ($host != $_SERVER['HTTP_HOST']){
	header('Location: https://acaso.ru');
	   }else{
	   require_once("../bdconnect.php");
	   
        //извлекаем данные
	   $id = $_SESSION["id"];
	   $bring_qiwi = $_POST['bring_qiwi']; 
	   $bring_cash = $_POST['bring_cash'].'';
		  
       //проверяем баланс пользователя
	   $sqli = $mysqli->query("SELECT * FROM ".$db_table." WHERE id = '".$id."' ");
		  		$data = $sqli->fetch_assoc();
				$cash = $data['cash'];
           
        //проверяем достаточно ли средств         
		   if($bring_cash<=$cash){
			  
			    
			    $check_pay = $mysqli->query("SELECT COUNT(*) FROM payday WHERE id = '$id' ");
			   	$count_check_pay = $check_pay->fetch_array(MYSQLI_NUM)[0];
			    $date = date("Y-m-dTH:i:s+3:00");
			   
               //проверяем платил ли пользователь когда-нибудь
			   if($count_check_pay > 0){
			    
				   
				$sql_date = $mysqli->query("SELECT * FROM payday WHERE id = '".$id."' ");
		  		$date_sql = $sql_date->fetch_assoc();
				$date_pay = $date_sql['date'];
				
				   $diff = abs(strtotime($date) - strtotime($date_pay));
				//проверяем прошло ли 24 часа
				if ($diff>=86400){
				   require_once("payer.php");
                   if(flag){ $upSqlQiwi=$mysqli->query("UPDATE payday SET date = '$date' WHERE id = '$id'"); }
				}else{
					$error_box='*вывод доступен раз в 24 часа';
				}
				   
			   }else{
				   
				   $kadabra = $mysqli->query("INSERT INTO payday (id, date) VALUES ('$id', '$date')");
				  require_once("payer.php");
				 
			   }
			
		   }else{$error_box = "*недостачно средств на вывод";}
       
	   }
   }else{
       // если были ошибки, то выводим их
       $success_box = "";
   }

 echo json_encode(array(
       'result' => $success_box,
	   'error' => $error_box
   ));

?>
