<?php
require('vendor/autoload.php');

$-SERVER['HTTP_HOST']

if($-SERVER['HTTP_HOST'] != "https://api-slack-token-ob.herokuapp.com"){

    $dotenv = Dotenv\Dotenv::createMutable(__DIR__);
    $dotenv->load();
}




$ary = array("token" => $_ENV['TOKEN']);
$data = json_encode($ary);

//[{data: "hello world !"}]

echo($data);