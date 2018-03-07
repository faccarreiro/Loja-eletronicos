<?php 
 include "conexao.php";

   $produto= $_POST['produto'];
 $categoria= $_POST['categoria'];
   $estoque= $_POST['estoque'];
     $preco= $_POST['preco'];
 $descricao= $_POST['descricao'];
    $imagen= $_POST['imagen'];


$sql = "INSERT INTO loja ( produto, categoria, estoque, preco, descricao, imagen) 
        VALUES ( '$produto', '$categoria', '$estoque', '$preco', '$descricao','$imagen')";
		if ($conn->query($sql)===TRUE) {
			echo "inserido com sucesso";
		}
	    else {
		echo "error: ".$conn->error;
	    }
	    $conn-> close();
	


?>