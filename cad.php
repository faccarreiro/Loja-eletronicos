<?php 
 include "conexao.php";

 $nome= $_POST['nome'];
 $endereco= $_POST['endereco'];
 $telefone= $_POST['telefone'];
 $email= $_POST['email'];
 $cpf= $_POST['cpf'];
 $senha= $_POST['senha'];


		$sql = "INSERT INTO cliente ( nome, endereco, telefone, email, cpf, senha) VALUES ( '$nome', '$endereco', '$telefone', '$email', '$cpf','$senha')";
		if ($conn->query($sql)===TRUE) {
			echo "inserido com sucesso";
	}
	else {
		echo "error: ".$conn->error;
	}
	$conn-> close();
	


?>