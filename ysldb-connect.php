<?php
$servername = "localhost";
$username = "root";
$password = "1223kq";
$dbname = "ysl_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("連線失敗:".$conn->connect_error);
}

?>