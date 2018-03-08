<?php 
 include "conexao.php";

       $nome= $_POST['nome'];
        $cpf= $_POST['cpf'];
   $endereco= $_POST['endereco'];
   $telefone= $_POST['telefone'];
      $email= $_POST['email'];
      $senha= $_POST['senha'];


$sql = "INSERT INTO funcionario ( nome, cpf, endereco, telefone, email, senha) 
        VALUES ( '$nome', '$cpf', '$endereco', '$telefone', '$email','$senha')";
		if ($conn->query($sql)===TRUE) {
			echo "inserido com sucesso";
		}
	    else {
		echo "error: ".$conn->error;
	    }
	    $conn-> close();
	


?>