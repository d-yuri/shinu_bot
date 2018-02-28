<?php
$data = json_decode(file_get_contents('php://input'), true);
$token = '567179149:AAFwA-kbvtgxusDFVqNoEEhJF_gRUkdcEoo';

file_get_contents('http://vk-sender.tk/telega.php?param='.serialize($data));
file_put_contents('telega.txt',print_r($data,true));

/*
$user_id = $data['message']['chat']['id'];

     $url = 'https://api.telegram.org/bot'.$token.'/sendDocument?chat_id='.$user_id.'&document='.$gif.'.gif';*/
