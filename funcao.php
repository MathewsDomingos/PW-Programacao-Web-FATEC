<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Funções em PHP</title>
</head>
<body>
    
</body>
</html>

<?php

    function InprimirQuebra(){
        echo "<br>";
        echo "<hr>";
    }

    function ImprimirTexto($texto){
        echo $texto;
    }

    echo "<pre>";
    ImprimirTexto("Mateus");
    ImprimirTexto(" Aluno");
    InprimirQuebra();
    echo "</pre>";


    function Adicao($num1, $num2){
        return $num1 + $num2;
    }

    function Subtracao($num1, $num2){
        return $num1 - $num2;
    }

    function Multiplicacao($num1, $num2){
        return $num1 * $num2;
    }

    function Media($num1, $num2){
        return Adicao($num1, $num2) / 2; 
    }

    /*Adicao();
    InprimirQuebra();
    Subtracao();
    InprimirQuebra();
    Multiplicacao();
    InprimirQuebra();*/
    ImprimirTexto( Media(8,9) );

?>