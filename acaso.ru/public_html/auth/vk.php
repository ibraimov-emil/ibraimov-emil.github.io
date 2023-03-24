<?php

   //Запускаем сессию
    session_start();
 
    //Добавляем файл подключения к БД
    require_once("bdconnect.php");

if (!empty($_GET['code'])) {
	$params = array(
		'client_id'     => '7315704',
		'client_secret' => 'F12HoZeF1cXZFGXgIUtW',
		'redirect_uri'  => 'https://acaso.ru/auth/vk.php',
		'code'          => $_GET['code']
	);
	
	// Получение access_token
	$data = file_get_contents('https://oauth.vk.com/access_token?' . urldecode(http_build_query($params)));
	$data = json_decode($data, true);
	if (!empty($data['access_token'])) {
		// Получили	 email
	
 		$id = $data['user_id'];	
		// Получим данные пользователя
		$params = array(
			'v'            => '5.103',
			'uids'         => $data['user_id'],
			'access_token' => $data['access_token'],
			'fields'       => 'photo_big',
		);
 
		$info = file_get_contents('https://api.vk.com/method/users.get?' . urldecode(http_build_query($params)));
		$info = json_decode($info, true);	
		$info = $info['response'][0];
		
		$name = $info['first_name'];
		$photo = $info['photo_big'];


		$_SESSION['id'] = $data['user_id'];
$result_query_insert = $mysqli->query("INSERT INTO ".$db_table." (id, name, photo) VALUES ('$id','$name','$photo')");
		header('Location: https://acaso.ru');

	}
}

?>
