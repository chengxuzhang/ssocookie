<?php
$origin = isset($_SERVER['HTTP_ORIGIN'])? $_SERVER['HTTP_ORIGIN'] : '';

header("Access-Control-Allow-Origin:$origin");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:Origin, Accept-Language, Accept-Encoding, X-Forwarded-For, Connection, Accept, User-Agent, Host, Referer, Cookie, Content-Type, Cache-Control, If-Modified-Since, *");

if(!file_exists($_COOKIE['saonan'].'.data')){
	echo json_encode(['status'=>400]);die;
}
$data = file_get_contents($_COOKIE['saonan'].'.data');

echo json_encode(['status'=>200,'data'=>$data]);die;