<?php
$host ='acaso.ru';
if ($host != $_SERVER['HTTP_HOST']){
	header('Location: https://acaso.ru');
}else{
    // Указываем кодировку
    header('Content-Type: text/html; charset=utf-8');
 
    $server = "localhost"; /* имя хоста (уточняется у провайдера), если работаем на локальном сервере, то указываем localhost */
    $username = "emil20dd_b"; /* Имя пользователя БД */
    $password = "password"; /* Пароль пользователя, если у пользователя нет пароля то, оставляем пустым */
    $database = "emil20dd_b"; /* Имя базы данных, которую создали */
     
    // Подключение к базе данный через MySQLi
    $mysqli = new mysqli($server, $username, $password, $database);
 
    // Проверяем, успешность соединения. 
    if (mysqli_connect_errno()) { 
        echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
        exit(); 
    }
  
    // Устанавливаем кодировку подключения
    $mysqli->set_charset('utf8');
 
    //Для удобства, добавим здесь переменную, которая будет содержать название нашего сайта
    $address_site = "http://acaso.ru";
	$db_table = "user";
	$bank_table = "bank";
	$email_admin = "acaso@acaso.ru";
	$qiwi = "qiwi";
} 
?>