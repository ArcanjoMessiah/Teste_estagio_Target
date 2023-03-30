<?php

include_once 'webcomplement.html';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>



    <br><br>

    <form action="Atividade5.php" method="post">
        <div class="container">
            <div class="card bg-dark text-white text-center font-weight-bold">
                <div class="menu-bar">
                    <div>

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
                </div>

                



                    <div class="card-body">
                        <h2>Atividade 5 </h2>


                        <div class="content">
                            <h3 style="align-content: center;">Invertendo strings</h3>

                            <br>
                        </div>
                        <br>
                        <label for="num">Informe a sua strig a ser invertida: </label>
                        <center> <input type="text" name="string" size="40" id="string" class="form-control col-4"></center>
                        <br><br>

                        <div class="card-body">

                            <button type="reset" class="btn btn-success float-center">Limpar</button>
                            <button type="submit" class="btn btn-primary float-center" style="margin-left: 5px;">Inverter</button>
                        </div>

                        <?php
                        // Recebe a string a ser invertida

                        $string = isset($_POST['string']) ? $_POST['string'] : '';


                        // Variável para armazenar a string invertida
                        $string_invertida = "";

                        // Percorre a string de trás para frente e adiciona cada caractere na variável $string_invertida
                        for ($i = strlen($string) - 1; $i >= 0; $i--) {
                            $string_invertida .= $string[$i];
                        }

                        // Imprime a string invertida
                        echo $string_invertida;
                        ?>




                    </div>


                </form>

            </div>





</body>

</html>