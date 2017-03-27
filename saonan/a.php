<?php
$origin = isset($_SERVER['HTTP_ORIGIN'])? $_SERVER['HTTP_ORIGIN'] : '';

header("Access-Control-Allow-Origin:$origin");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:Origin, Accept-Language, Accept-Encoding, X-Forwarded-For, Connection, Accept, User-Agent, Host, Referer, Cookie, Content-Type, Cache-Control, If-Modified-Since, *");


// print_r($_COOKIE);die;
echo json_encode(['s']);die;

 ?>