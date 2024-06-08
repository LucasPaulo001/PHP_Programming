<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - desafio salário mínimo</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
        $sal = $_GET["salario"] ?? 0;
    
    ?>
    <section id="part_desfio">
        <main class="container">
            <div class="title">
                <h1>Informe seu salário</h1>
            </div>
            <div class="numbers">
                <form class="form_numbers" action="<?=$_SERVER['PHP_SELF']?>" method="get">
                    <label for="salario">Salário (R$)</label>
                    <input type="number" name="salario" id="num1" value="<?=$sal?>">
                    <p id="msg">Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
                    <input type="submit" value="Calcular" id="submit">
                </form>
            </div>
            <div class="resultado">
                <h2>Resultado final</h2>
                <?php 
                    $sal_min = 1380;
                    $quant_sal_min = $sal/$sal_min;
                    echo "Quem recebe um salário de R$$sal ganha <strong>".(int)$quant_sal_min ." salário(s) mínimo(s)</strong>";
                    if($sal%$sal_min!=0){
                        $rest = $sal%$sal_min;
                        echo " + R$$rest";
                    }
                ?>
            </div>
        </main>
    </section>
</body>
</html>