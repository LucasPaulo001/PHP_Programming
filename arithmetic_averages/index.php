<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Desadio de médias aritméticas</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET["valor1"] ?? 0;
        $valor2 = $_GET["valor2"] ?? 0;
        $peso1 = $_GET["peso1"] ?? 1;
        $peso2 = $_GET["peso2"] ?? 1;
    ?>
    <section id="part_desfio">
        <main class="container">
            <div class="title">
                <h1>Médias Aritméticas</h1>
            </div>
            <div class="numbers">
                <form class="form_values" action="<?=$_SERVER['PHP_SELF']?>" method="get">
                    <label for="valor1">1º Valor</label>
                    <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
                    <label for="peso1">1º Peso</label>
                    <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
                    <label for="valor1">2º Valor</label>
                    <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
                    <label for="peso1">2º Peso</label>
                    <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
                    <input type="submit" value="Calcular Média" id="submit">
                </form>
            </div>
            <div class="resultado">
                <h2>Cálculo das Médias</h2>
                <?php 
                    $media_aritmetica = ($valor1 + $valor2)/2;
                    $media_pond = (($valor1*$peso1)+($valor2*$peso2))/($peso1+$peso2);
                    echo "<p>A <strong>média aritmética simples</strong> entre os valores é: " . number_format($media_aritmetica, 2, ",","") . "<br>E a <strong>média aritmética ponderada</strong> com peso $peso1 e $peso2 é: " . number_format($media_pond, 2, ",","") ." </p>";
                ?>
            </div>
        </main>
    </section>
</body>
</html>