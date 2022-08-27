<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>

<body>

    <?php 
        /*$carros = array();
        $carros = array("BMW", "SAVEIRO", "GOL", "PALIO");

        echo "<pre>";
        print_r($carros);
        echo "</pre>";

        $salas = array('lab01' => 40, 'lab02' => 32);
        $salas['lab03'] = 30;

        echo "<pre>";
        print_r($salas);
        echo "</pre>";

        $salas[0] = "24";

        $nomes = ['FERNANDO', 'ANTONIA', 'MARIA'];
        echo "<pre>";
        print_r($nomes);
        echo "</pre>";*/


        /*$tabuada = array(0,1,2,3,4);
        $tabuada[0] = array(0,1,2,3,4);
        $tabuada[1] = array(0,1,2,3,4);
        $tabuada[2] = array(0,1,2,3,4);
        $tabuada[3] = array(0,1,2,3,4);
        $tabuada[4] = array(0,1,2,3,4);

        $tabuada[4] = array();
        $tabuada[4] [0] = 0;
        $tabuada[4] [1] = 4;
        $tabuada[4] [2] = 8;
        $tabuada[4] [3] = 12;
        $tabuada[4] [4] = 16;

        echo "<pre>";
        print_r($tabuada);
        echo "</pre>";*/

        $armario = array();
        $armario["Porta 01"] = array("Fio 2mm", "Fio 4mm", "Fio", "Fio terra");
        $armario["Porta 02"] = array();
        $armario["Gavetinha"] = array();

        array_push($armario["Gavetinha"], "Brincos");
        array_push($armario["Gavetinha"], "Aneis");
        array_push($armario["Gavetinha"], "Berloques");
        array_push($armario["Gavetinha"], "Pulseiras");

        $armario["Porta 02"][0] = "Porcas";
        $armario["Porta 02"][1] = "Parafuso";
        $armario["Porta 02"][2] = "Arruela";
        $armario["Porta 02"][3] = "Pregos";

        echo "<pre>";
        print_r($armario);
        echo "</pre>";




    ?>

</body>
</html>