<?php

$servename= "localhost";
$username= "root";
$password="";
$dbname="lojascarreiro";

//criar conexão
$conn = new mysqli($servename,$username,$password,$dbname);
//checar conexao
if ($conn->connect_error){
	die("connection failed" . $conn->connect_error);
}


?>