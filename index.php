<?php
require('vendor/autoload.php');



if($_SERVER['HTTP_HOST'] != "api-slack-token-ob.herokuapp.com"){

    $dotenv = Dotenv\Dotenv::createMutable(__DIR__);
    $dotenv->load();
}




$ary = array("token" => $_ENV['TOKEN']);
$data = json_encode($ary);

//[{data: "hello world !"}]

echo($data);