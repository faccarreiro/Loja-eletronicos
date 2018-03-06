<?php

include "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT nome FROM usuarios WHERE (email)=('$email') AND (senha)=('$senha')" ;
$result = $conn->query($sql);

if($result->num_rows>0){
  $_SESSION['logado']= 1;
	while($row = $result->fetch_assoc()){
	echo "seja bem vindo ";
  echo $row['nome'];
}
}
else{
	echo "0 resultados";
}
$conn->close();
?>
