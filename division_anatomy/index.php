<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP - Anatomia de divisão</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php 
        $num1 = $_GET["dividendo"] ?? 0;
        $num2 = $_GET["divisor"] ?? 1;
    ?>
    <section id="part_desfio">
        <main class="container">
            <div class="title">
                <h1>Anatomia de uma divisão</h1>
            </div>
            <div class="numbers">
                <form class="form_numbers" action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                    <label for="num1">Dividendo</label>
                    <input type="number" name="dividendo" id="num1" value="<?=$num1?>">
                    <label for="num2">Divisor</label>
                    <input type="number" name="divisor" id="num2" value="<?=$num2?>">
                    <input type="submit" value="Analisar" id="submit">
                </form>
            </div>
            <div class="resultado">
                <h2>Estrutura da divisão</h2>
                <?php 
                    $dividendo = $num1;
                    $divisor = $num2;
                    $quociente = intdiv($num1, $num2);
                    $resto = $num1%$num2;
                ?>
                <table class="divisao">
                    <tr class="top">
                        <td class="dividendo"><?=$dividendo?></td>
                        <td class="divisor"><?=$divisor?></td>
                    </tr>
                    <tr class="buttom">
                        <td class="resto"><?=$resto?></td>
                        <td class="quociente"><?=$quociente?></td>
                    </tr>
                </table>
            </div>
        </main>
    </section>
</body>

</html>