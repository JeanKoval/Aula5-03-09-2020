<?php

    $primeiroNumero = $_GET['primeiroNumero'];
    $segundoNumero = $_GET['segundoNumero'];
    $operacao = $_GET['operacao'];
    
    switch ($_GET['operacao']){
        case 'soma':
            $resultado = $primeiroNumero + $segundoNumero;
            echo "O primeiro numero eh $primeiroNumero" . '<br>';
            echo "O segundo numero eh $segundoNumero" . '<br>';
            echo "a soma dos numeros eh $resultado";
        break;
        case 'subtracao':
            $resultado= $primeiroNumero - $segundoNumero;
            echo "O primeiro numero eh $primeiroNumero" . '<br>';
            echo "O segundo numero eh $segundoNumero" . '<br>';
            echo "a subtracao dos numeros eh $resultado";
        break;
        case 'multiplicacao':
            $resultado= $primeiroNumero * $segundoNumero;
            echo "O primeiro numero eh $primeiroNumero" . '<br>';
            echo "O segundo numero eh $segundoNumero" . '<br>';
            echo "a multiplicacao dos numeros eh $resultado";
        break;
        case 'divisao':
            $resultado= $primeiroNumero / $segundoNumero;
            echo "O primeiro numero eh $primeiroNumero" . '<br>';
            echo "O segundo numero eh $segundoNumero" . '<br>';
            echo "a divisao dos numeros eh $resultado";
        break;
    }

    
    