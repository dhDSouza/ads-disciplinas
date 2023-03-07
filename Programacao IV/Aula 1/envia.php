<?php 
	
	// Pegamos os dados vindo do formulário
	$numero = $_POST['numero'];

    if($numero % 2 == 1){
        echo "O número digitado é ímpar!";
    } else {
        echo "O número digitado é par!";
    }

?>    