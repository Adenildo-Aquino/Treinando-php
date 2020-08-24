<?php
//conexão com o banco de dados

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);
//mysqli_ser_charset($connect, "utf-8");

if(mysqli_connect_error()):
	echo "Error na conexão: ".mysqli_connect_error();
endif;