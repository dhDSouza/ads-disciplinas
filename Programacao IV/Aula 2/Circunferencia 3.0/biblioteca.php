<?php

    define("PI", 3.14);

    function calculaCircunferencia($r) {
        return (2 * PI * $r);
    }

    function calculaArea($r) {
        return (PI * $r) * (PI * $r);
    }

?>