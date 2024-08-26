<?php

$db_name = "unmovie_db";
$db_host = "localhost";
$db_user = "root";
$db_pass = "zxc123";

$connection = new PDO("mysql:dbname=". $db_name . ";host=". $db_host, $db_user, $db_pass);

//habilitando erros
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



?>