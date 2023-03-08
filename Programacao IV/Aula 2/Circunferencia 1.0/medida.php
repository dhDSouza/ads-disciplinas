<?php 
	
    $pi = 3.14;
	$raio = $_GET['raio'];

    if($raio != null) {
        $circunferencia = (2 * $pi * $raio);
        $area = ($pi * $raio) * ($pi * $raio);

        echo "Circunferência: ".$circunferencia.'<br>'."Área: ".$area;
    }
    else {
        echo "Ops! Algo de errado não deu certo!";
    }

?> 