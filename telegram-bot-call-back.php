<?php
$data = json_decode(file_get_contents('php://input'), true);
$token = '504136360:AAE0LwahwnnNBUZ6lqd-CvJFdEjiaLze2ls';


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://vk-send.tk/telegram-shinu/telega.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);

/*
$user_id = $data['message']['chat']['id'];

     $url = 'https://api.telegram.org/bot'.$token.'/sendDocument?chat_id='.$user_id.'&document='.$gif.'.gif';*/
