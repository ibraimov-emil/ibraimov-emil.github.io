<?php 
session_start();
require_once("bdconnect.php");
header('Content-type: text/html; charset=utf-8');
require_once 'QIWI/src/BillPayments.php';
require_once 'QIWI/vendor/curl/curl/src/Curl/Curl.php';

const SECRET_KEY = 'eyJ2ZXJzaW9uIjoiUDJQIiwiZGF0YSI6eyJwYXlpbl9tZXJjaGFudF9zaXRlX3VpZCI6Im41bzV2YS0wMCIsInVzZXJfaWQiOiI3OTc4ODIwODQ1MCIsInNlY3JldCI6IjkxNjg0YzgzMmQ5MTE2MjcyNWU0Y2IxZjkxOTFkODNkYmEyMjEyNDRlMjBjNzdjNjE0MzE2OWU4YjRiZWJlNjgifX0=';

/** @var \Qiwi\Api\BillPayments $billPayments */
$billPayments = new Qiwi\Api\BillPayments(SECRET_KEY);

$host ='acaso.ru';
if ($host != $_SERVER['HTTP_HOST']){
	header('Location: https://acaso.ru');
}else{
if(!isset($_SESSION["id"]) || $_SESSION["id"] == '0'){
			header('Location: https://acaso.ru');
		}else{
	$id = $_SESSION["id"];
	
$sql_qiwi = "SELECT * FROM ".$qiwi." WHERE id = '".$id."' ";
		  		$result_qiwi = $mysqli->query($sql_qiwi);
		  		$data = $result_qiwi->fetch_assoc();
				$billId = $data['billId'];

/** @var \Qiwi\Api\BillPayments $billPayments */
$response = $billPayments->getBillInfo($billId);

$status_obj = $response['status'];
$status = $status_obj['value'];
	if ($status == "PAID"){
		$num= null;
			$res = $mysqli->query("SELECT COUNT(*) FROM ".$bank_table.""); // выполняем запрос
		  	$num = $res->fetch_array(MYSQLI_NUM)[0]; // получаем количество строк
			$num++;
			$result_query_insert = $mysqli->query("INSERT INTO ".$bank_table." (id_bank,id_user) VALUES ('$num','$id')");	
			header('Location: https://acaso.ru');
	}else{header('Location: https://acaso.ru');}
	}
}
?> 
 