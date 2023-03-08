<?php
    
    /*
        Escreva um script em linguagem PHP que peça o tamanho em metros quadrados de uma área a ser pintada.
        Considere que  1 litro de tinta cobre 3m² e que a tinta é vendida em latas de 18 litros à R$ 300,00 cada.
    */

    if(isset($_GET['calcular'])) {
        $area = $_GET['area'];
        if($area != null) {
            if($area % 54 != 0) {
                $latas = (int) ($area % 54) + 1;
                $valor = $latas * 300;
                echo "Valor: R$ ".$valor;
            } else {
                $latas = (int) ($area % 54);
                $valor = $latas * 300;
                echo "Valor: R$ ".$valor;
            }
        }
    }

?>

<h1>
    Calcule o seu gasto em tintas!
</h1>

<form action="tintas.php" method="get">
    <label>Digite a área (m²): </label> 
    <input type="text" name="area"> 
    <br> 
    <br>
    <input type="submit" name="calcular" value="Calcular">
</form>