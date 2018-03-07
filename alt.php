<?php 
include "conexao.php";

$id=$_POST['id'];
$produto=$_POST['produto'];
$categoria=$_POST['categoria'];
$estoque=$_POST['estoque'];
$preco=$_POST['preco'];
$descricao=$_POST['descricao'];
$imagen=$_POST['imagen'];

$sql= " UPDATE loja SET produto='$produto', categoria='$categoria', estoque='$estoque', preco='$preco', descricao='$descricao', imagen='$imagen' WHERE id=$id";

if ($conn->query($sql)===TRUE) {
			echo "atualizado com sucesso";
	}
	else {
		echo "error: ".$conn->error;
	}
	$conn-> close();





 ?>