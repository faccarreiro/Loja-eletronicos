<?php 
include "conexao.php";


$id=$_POST['id'];

$sql = "DELETE loja WHERE id='$id' ";
		if ($conn->query($sql)===TRUE) {
			echo "inserido com sucesso";
		}
	    else {
		echo "error: ".$conn->error;
	    }
	    $conn-> close();
	
 ?>