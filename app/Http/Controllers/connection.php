<?php

$host = 'mysql:host=127.0.0.1;dbname=movies_db; charset=utf8mb4';
$db_user = 'root';
$db_pass = 'root';
$opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];



try {
  $conn = new PDO($host, $db_user, $db_pass, $opt);
}
catch (PDOException $Exception) {
  echo $Exception->getMessage();
}


 ?>
