<?php
session_start();
require_once("bdconnect.php");
header('Content-type: text/html; charset=utf-8');
require_once 'QIWI/src/BillPayments.php';
require_once 'QIWI/vendor/curl/curl/src/Curl/Curl.php';

const SECRET_KEY = 'eyJ2ZXJzaW9uIjoiUDJQIiwiZGF0YSI6eyJwYXlpbl9tZXJjaGFudF9zaXRlX3VpZCI6Im41bzV2YS0wMCIsInVzZXJfaWQiOiI3OTc4ODIwODQ1MCIsInNlY3JldCI6IjkxNjg0YzgzMmQ5MTE2MjcyNWU0Y2IxZjkxOTFkODNkYmEyMjEyNDRlMjBjNzdjNjE0MzE2OWU4YjRiZWJlNjgifX0=';

/** @var \Qiwi\Api\BillPayments $billPayments */
$billPayments = new Qiwi\Api\BillPayments(SECRET_KEY);
$id = $_SESSION["id"];	 
//проверяем есть ли такой id в таблице киви
$result_bill = mysqli_num_rows($mysqli->query("SELECT id FROM ".$qiwi." WHERE ( id = '".$id."' )"));

if($result_bill == 0){
	
$billId = $billPayments->generateId();
$result_query_insert = $mysqli->query("INSERT INTO ".$qiwi." (id, billId) VALUES ('$id','$billId')");
	
}else{
	//данные из таблицы киви
	$sql_qiwi = "SELECT * FROM ".$qiwi." WHERE id = '".$id."' ";
		  		$result_qiwi = $mysqli->query($sql_qiwi);
		  		$data = $result_qiwi->fetch_assoc();
				$billId = $data['billId'];
	$response = $billPayments->getBillInfo($billId);

$status_obj = $response['status'];
$status = $status_obj['value'];
	if ($status == "PAID"){
		header('Location: https://acaso.ru');
	}
	//добавить статус оплаты айди
}
	
	$sql_qiwi_date = $mysqli->query("SELECT * FROM date WHERE id = '1' ");
		  		$data_date = $sql_qiwi_date->fetch_assoc();
				$datePay = $data_date['date'];

$fields = [
  'amount' => 1.00,
  'currency' => 'RUB',
  'comment' => 'acaso | Принять участие',
  'successUrl' => 'https://acaso.ru/result',
  'expirationDateTime' => $datePay
];

/** @var \Qiwi\Api\BillPayments $billPayments */
$response = $billPayments->createBill($billId, $fields);
$payUrl = $response['payUrl'];
$host ='acaso.ru';
 if(!isset($_SESSION["id"]) || $_SESSION["id"] == '0'){ header('Location: https://acaso.ru'); }else{
 if ($host != $_SERVER['HTTP_HOST']){
	header('Location: https://acaso.ru');
}else{
if ($payUrl) {
  header ('Location: ' . $payUrl);
}
 }
 }
?>