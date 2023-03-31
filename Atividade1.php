<?php

include_once 'webcomplement.html';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <br><br>
    <div class="container">
        <div class="menu-bar">


            <a class="nav-link dropdown text-white" href="#" id="navbardrop" data-toggle="dropdown">
                <h2>| Atividades |</h2>
            </a>

            <div class="dropdown-menu float-center">
                <a class="dropdown-item" href="Atividade1.php" target="centro">Atividade 1</a>
                <a class="dropdown-item" href="Atividade2.php" target="centro">Atividade 2</a>
                <a class="dropdown-item" href="Atividade3.php" target="centro">Atividade 3</a>
                <a class="dropdown-item" href="Atividade4.php" target="centro">Atividade 4</a>
                <a class="dropdown-item" href="Atividade5.php" target="centro">Atividade 5</a>

            </div>

        </div>



        <div class="card bg-dark text-white text-center font-weight-bold">
            <div class="card-body">Atividade 1 </div>

            <?php

            //## Código de resposta da atividade 1 

            $INDICE = 13;
            $SOMA = 0;

            for ($K = 1; $K <= $INDICE; $K++) {
                $SOMA += $K;
            }

            echo "A soma dos números inteiros de 1 a $INDICE é: $SOMA";


            /* ## Também é possível fazer utilizando o While
##Exemplo: 

$INDICE = 13;
$SOMA = 0;
$K = 0;

while ($K < $INDICE) {
  $K = $K++;
  $SOMA = $SOMA + $K;
}

echo "A soma dos números de 1 a 13 é: " . $SOMA;*/

            ?>
            <br><br><br>
        </div>
    </div>
    <br><br>