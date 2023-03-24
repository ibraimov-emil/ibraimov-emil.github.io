<?php 
header('Content-type: text/html; charset=utf-8');

require_once "qiwi.php";

$bill = time() * 10 + 5;
$billId = $bill.'';
 
$qiwi = new Qiwi('79788208450','93c672e870617626126c20f85f453441');

$sendMoney = $qiwi -> sendMoneyToQiwi([
	'id' => $billId,
	'sum' => [
		'amount' => $bring_cash,
		'currency' => '643'
	],
	'paymentMethod' => [
		'type' =>'Account',
		'accountId' => '643'
	],
	'comment' => 'acaso | Ежедневные розыгрыши',
	'fields' => [
		'account' => $bring_qiwi
	]
]);

?>
