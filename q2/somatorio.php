<?php
	$n1 = $_GET["n1"];
	$n2 = $_GET["n2"];
	$soma = $n1 + $n2;	
		if($soma > 20){
		
			$soma+=8;
			echo"o valor somado e: $soma";
		
		}
		else if($soma <= 20){
		
			$soma-=5;
			echo"o valor subtraido e: $soma";
		
		}
?>