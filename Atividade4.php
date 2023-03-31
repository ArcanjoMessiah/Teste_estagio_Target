<?php

include_once 'webcomplement.html';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
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
            <div class="card-body"><h2>Atividade 4</h2></div>
            <h1>Faturamento Mensal</h1>

            <div class="content ">
                <?php
                // Array com o faturamento mensal por categoria
                $faturamentoMensal = array(
                    'Alimentação' => 20000.00,
                    'Eletrônicos' => 35000.00,
                    'Moda' => 15000.00,
                    'Esportes' => 10000.00,
                    'Outros' => 5000.00
                );

                // Cálculo do valor total
                $valorTotal = array_sum($faturamentoMensal);

                // Cálculo da porcentagem de representação de cada categoria no valor total
                $porcentagens = array();
                foreach ($faturamentoMensal as $categoria => $valor) {
                    $porcentagem = ($valor / $valorTotal) * 100;
                    $porcentagens[$categoria] = round($porcentagem, 2);
                }

                // Exibe os valores e as porcentagens em uma tabela
                echo "<table class='table table-hover table-dark'>";
                echo "<thead style='color: whitesmoke'><tr><th>Categoria</th><th>Valor</th><th>Porcentagem</th></tr></thead>";
                echo "<tbody style='color: whitesmoke'>";
                foreach ($faturamentoMensal as $categoria => $faturamento) {
                    $porcentagem = number_format($porcentagens[$categoria], 2, ',', '.');
                    $valor = number_format($faturamento, 2, ',', '.');
                    echo "<tr><td>$categoria</td><td>R$ $valor</td><td>$porcentagem%</td></tr>";
                }
                echo '</tbody>';
                echo '</table>';

                // Exibe o gráfico de pizza
                ?>

                <div class="card-footer bg text-center font-weight-bold">
                    <canvas id="myChart"></canvas>

                    <!-- Script para gerar o gráfico -->
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: <?php echo json_encode(array_keys($faturamentoMensal)); ?>,
                                datasets: [{
                                    data: <?php echo json_encode(array_values($porcentagens)); ?>,
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.5)',
                                        'rgba(54, 162, 235, 0.5)',
                                        'rgba(255, 206, 86, 0.5)',
                                        'rgba(75, 192, 192, 0.5)',
                                        'rgba(153, 102, 255, 0.5)'
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)'
                                    ],
                                    borderWidth: 2
                                }]
                            },

                            options: {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        labels: {
                                            fontColor: 'white'
                                        },
                                        display: true,
                                        position: 'bottom',
                                        backgroundColor: 'gray',
                                        padding: 10
                                    }
                                }
                            }
                        });
                    </script>
                </div>


            </div>



</body>

</html>