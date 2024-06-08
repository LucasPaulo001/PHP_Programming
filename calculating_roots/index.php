<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Desafio raizes</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php 
        $number = $_GET["num"] ?? 0;
    ?>
    <section id="part_desfio">
        <main class="container">
            <div class="title">
                <h1>Informe um número</h1>
            </div>
            <div class="numbers">
                <form class="form_numbers" action="<?=$_SERVER['PHP_SELF']?>"
                method="get">
                    <label for="num">Número</label>
                    <input type="number" name="num" id="num1" value="<?=$number?>">
                    <input type="submit" value="Calcular Raízes" id="submit">
                </form>
            </div>
            <div class="resultado">
                <h2>Resultado final</h2>
                <?php 
                    $raiz_quad = sqrt($number);
                    
                    echo "A raiz quadrada do número $number é:" .  number_format($raiz_quad, 2, ',', ' ');
                    $raiz_cub = pow($number, 1/3);
                    echo "<br>A raiz cúbica do número $number é: " . number_format($raiz_cub, 2, ',','');
                ?>
            </div>
        </main>
    </section>
</body>

</html>