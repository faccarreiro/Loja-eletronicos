<?php 
include "conexao.php";


$id=$_POST['id'];

$sql = "DELETE FROM loja WHERE id=$id ";
		if ($conn->query($sql)===TRUE) {
			echo "deletado com sucesso";
		}
	    else {
		echo "error: ".$conn->error;
	    }
	    $conn-> close();
	
 ?>