<?php
$origin = isset($_SERVER['HTTP_ORIGIN'])? $_SERVER['HTTP_ORIGIN'] : '';

header("Access-Control-Allow-Origin:$origin");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Expose-Headers: FooBar");

if(!isset($_COOKIE['saonan'])){
	setcookie('saonan',md5(time()),time()+3600,'/','saonan.com');
}