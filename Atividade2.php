<?php

include_once 'webcomplement.html';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>



    <br><br>

    <form action="Atividade2.php" method="post">
        <div class="container">
            <div class="card bg-dark text-white text-center font-weight-bold">
                <div class="menu-bar">
                    <div>

                        <a class="nav-link dropdown text-white" href="#" id="navbardrop" data-toggle="dropdown">
                            <h2>|   Atividades  |</h2>
                        </a>

                        <div class="dropdown-menu float-center">
                            <a class="dropdown-item" href="Atividade1.php" target="centro">Atividade 1</a>
                            <a class="dropdown-item" href="Atividade2.php" target="centro">Atividade 2</a>
                            <a class="dropdown-item" href="Atividade3.php" target="centro">Atividade 3</a>
                            <a class="dropdown-item" href="Atividade4.php" target="centro">Atividade 4</a>
                            <a class="dropdown-item" href="Atividade5.php" target="centro">Atividade 5</a>
                        </div>



                    </div>
                </div>



                <div class="card-body">
                    <h2>Atividade 2 </h2>
                </div>

                <div class="content">
                    <h3 style="align-content: center;">Verificação Fibonacci</h3>

                    <br>
                </div>
                <br>
                <label for="num">Informe o número a ser verificado: </label>
                <center> <input type="int" name="num" size="30" id="num" class="form-control col-3"></center>
                <br><br>

                <div class="card-body">

                    <button type="reset" class="btn btn-warning float-center">Limpar</button>
                    <button type="submit" class="btn btn-primary float-center" style="margin-left: 5px;">Verificar</button>
                </div>




                <?php

                $num = isset($_POST['num']) ? $_POST['num'] : ''; // recebe o número informado pelo usuário
                $seq = array(0, 1); // inicia a sequência de Fibonacci com os valores 0 e 1

                // calcula a sequência de Fibonacci até o valor ser maior ou igual ao número informado
                while ($seq[count($seq) - 1] < $num) {
                    $next = $seq[count($seq) - 1] + $seq[count($seq) - 2];
                    array_push($seq, $next);
                }

                // verifica se o número informado pertence à sequência de Fibonacci
                if ($num == 0) {
                    echo "O número 0 pertence à sequência de Fibonacci.";
                } elseif (in_array($num, $seq)) {
                    echo "O número " . $num . " pertence à sequência de Fibonacci.";
                } elseif ($num < $seq[0]) {
                    echo "O número " . $num . " não pertence à sequência de Fibonacci.";
                } else {
                    echo "O número " . $num . " não pertence à sequência de Fibonacci.";
                }

                ?>
                <br><br><br><br><br>

                <!-- <div class="menu-bar">
                    <div class="menu-item text-center" onclick="toggleMenu()">
                        <h3>Menu de Atividades</h3>

                        <div class="menu-oculto dropdown-toggle float-center" id="menu-oculto">
                            <ul>
                                <li><a href="Atividade1.php">Atividade 1</a></li>
                                <li><a href="Atividade2.php">Atividade 2</a></li>
                                <li><a href="Atividade3.php">Atividade 3</a></li>
                                <li><a href="Atividade4.php">Atividade 4</a></li>
                                <li><a href="Atividade5.php">Atividade 5</a></li>
                            </ul>

                            <br><br>

                        </div>
                    </div>
                </div> -->
            </div>





</body>

</html>