<?php 

$origin = isset($_SERVER['HTTP_ORIGIN'])? $_SERVER['HTTP_ORIGIN'] : '';

header("Access-Control-Allow-Origin:$origin");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Expose-Headers: FooBar");

file_put_contents($_COOKIE['saonan'].'.data', '用户'.$_GET['username'].'已经从'.$_GET['web'].'网站登录了');



