<?php
$params = array(
	'client_id'     => '7315704',
	'redirect_uri'  => 'https://acaso.ru/auth/vk.php',
	'display' 		=> 'popup',
	'response_type' => 'code', 
	'state'         => 'https://acaso.ru'
);

header('Location: https://oauth.vk.com/authorize?'.urldecode(http_build_query($params)));
?>