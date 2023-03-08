<form action="circunferencia.php" method="get"> 
    <label>Digite o raio: </label> 
    <input type="text" name="raio"> 
    <br> 
    <br>
    <input type="submit" name="calcular" value="Calcular">
</form>

<?php 

    define("PI", 3.14);

    function calculaCircunferencia($r) {
        return (2 * PI * $r);
    }

    function calculaArea($r) {
        return (PI * $r) * (PI * $r);
    }

    if(isset($_GET['calcular'])) {
		$raio = $_GET['raio'];
        if($raio != null) {
            echo "Circunferência: ".calculaCircunferencia($raio).'<br>'."Área: ".calculaArea($raio);
        }
        else {
            echo "Ops! Algo de errado não deu certo!";
        }
    }

?>