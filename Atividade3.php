<?php

include_once 'webcomplement.html';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
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
            <h1>Faturamento Mensal</h1>

            <div class="content ">
                <table class="table table-hover table-dark">

                    <tr style="color: whitesmoke;">
                        <th>Dia</th>
                        <th>Faturamento</th>
                    </tr>
                    <?php

                    // Lê o arquivo Json contendo os dados de faturamento da distribuidora
                    $file = file_get_contents('dados.json');
                    $data = json_decode($file, true);

                    // Cria um vetor para armazenar o faturamento diário
                    $faturamentoDiario = array();

                    // Preenche o vetor com o faturamento diário
                    foreach ($data as $item) {
                        $faturamentoDiario[$item['dia']] = $item['valor'];
                    }

                    // Encontra o menor valor de faturamento ocorrido em um dia do mês
                    $valorFaturamentoSemZero = array_filter($faturamentoDiario, function ($valor) {
                        return $valor !== 0;
                    });

                    $menorValor = min($valorFaturamentoSemZero);

                    // Encontra o maior valor de faturamento ocorrido em um dia do mês
                    $maiorValor = max($faturamentoDiario);

                    // Calcula a média mensal de faturamento, ignorando dias sem faturamento (finais de semana e feriados)
                    $somaFaturamento = 0;
                    $contadorDias = 0;
                    foreach ($faturamentoDiario as $dia => $valor) {
                        $diaSemana = date('N', strtotime($dia . '-01')); // Obtém o dia da semana (de 1 a 7) para o primeiro dia do mês
                        if ($diaSemana <= 5 && $valor > 0) { // Verifica se o dia é útil (segunda a sexta-feira) e se teve faturamento
                            $somaFaturamento += $valor;
                            $contadorDias++;
                        }
                    }
                    $mediaMensal = $somaFaturamento / $contadorDias;

                    // Conta o número de dias no mês em que o valor de faturamento diário foi superior à média mensal
                    $contadorDiasAcimaMedia = 0;
                    foreach ($faturamentoDiario as $dia => $valor) {
                        if ($valor > $mediaMensal) {
                            $contadorDiasAcimaMedia++;
                        }
                    }

                    // Exibe os resultados em HTML
                    $valoresDiferentesDeZero = array_filter($faturamentoDiario, function ($valor) {
                        return $valor > 0;
                    });
                    $menorValorDiferenteDeZero = min($valoresDiferentesDeZero);
                    echo "<p>O menor valor de faturamento ocorrido em um dia do mês foi: R$ " . number_format($menorValorDiferenteDeZero, 2, ',', '.') . "</p>";
                    echo "<p>O maior valor de faturamento ocorrido em um dia do mês foi: R$ " . number_format($maiorValor, 2, ',', '.') . "</p>";
                    echo "<p>Número de dias no mês em que o valor de faturamento diário foi superior à média mensal: " . $contadorDiasAcimaMedia . "</p>";





                    $somaFaturamento = 0;
                    foreach ($faturamentoDiario as $dia => $faturamento) {
                        if ($faturamento > 0) { ?>
                            <tr >
                                <td><?php echo $dia; ?></td>
                                <td>R$ <?php echo number_format($faturamento, 2, ',', '.'); ?></td>
                            </tr>
                    <?php
                            $somaFaturamento += $faturamento;
                        }
                    } ?>
                    <tr style="background-color: black">
                        <td><strong>Total:</strong></td>
                        <td><strong>R$ <?php echo number_format($somaFaturamento, 2, ',', '.'); ?></strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>

</body>

</html>