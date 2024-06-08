<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Desafio (Calculadora de tempo)</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
        $seg = $_GET["segundos"] ?? 0;
    ?>
    <section id="part_desfio">
        <main class="container">
            <div class="title">
                <h1>Calculadora de tempo</h1>
            </div>
            <div class="numbers">
                <form class="form_values" action="" method="get">
                    <label for="segundos">Qual o total de segundos?</label>
                    <input type="number" name="segundos" id="seg" value="<?=$seg?>">
                    <input type="submit" value="Calcular" id="submit">
                </form>
            </div>
            <div class="resultado">
                <h2>Totalizando tudo</h2>
                <?php 
                    $semana = (int)($seg/604800);
                    $dia = (int)($seg % 604800/86400);
                    $hora = (int)($seg % 604800 % 86400 / 3600);
                    $minuto = (int)($seg % 604800 % 86400 % 3600 / 60);
                    $segundos = (int)($seg % 604800 % 86400 % 3600 % 60);
                    echo "<p>Analizando o valor que você digitou, <strong>" . number_format($seg, 0, ",",".") . " segundos</strong> equivalem a um total de:</p><br>";
                    echo "$semana semana(s)<br>$dia dia(s)<br>$hora hora(s)<br>$minuto minuto(s)<br>$segundos segundo(s)";
                ?>
            </div>
        </main>
    </section>
</body>
</html>