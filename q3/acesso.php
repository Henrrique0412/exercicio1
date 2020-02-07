<?php
	
	$nome = $_GET["nome"];
	$idade = $_GET["idade"];
	$sexo = $_GET["sexo"];
	
	if($sexo == 'F' && $idade < 18){
	
		echo "Acesso negado";
	
	}
	else{
	
		echo "Acesso permitido";
	
	}

?>