<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de caixa eletrônico</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    $saque = $_GET["valor"] ?? 0;
    ?>
    <section id="part_desfio">
        <main class="content">
            <div class="title">
                <h2>Caixa eletrônico</h2>
            </div>
            <div class="numbers">
                <form class="form_values" action="" method="get">
                    <label for="valor">Qual valor você deseja sacar?(R$)*</label>
                    <input type="number" name="valor" id="valor" value="<?= $saque ?>">
                    <p>*Notas disponíveis R$100, R$50, R$10 e R$5</p>
                    <input type="submit" value="Sacar" id="submit">
                </form>
            </div>
            <div class="resultado">
                <h2>Saque de <?= "R$" . number_format($saque, 2, ",", ".") ?></h2>
                <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
                <?php
                $cedula_100 = (int)($saque/100);
                $cedula_50 = (int)($saque%100/50);
                $cedula_10 = (int)($saque%100%50/10);
                $cedula_5 = (int)($saque%100%50%10/5);
                $sobra = (int)($saque%100%50%10%5);
                ?>
                <div class="cedulas_img">
                    <div class="cedula">
                        <img src="images/100_front.jpg" alt="" height="50px"><?= "x" . $cedula_100?>
                    </div>
                    <div class="cedula">
                        <img src="images/50_Brazil_real_Second_Obverse.jpg" alt="" height="50px"><?= "x" . $cedula_50?>
                    </div>
                    <div class="cedula">
                        <img src="images/10_Brazil_real_Second_Obverse.jpg" alt="" height="50px"><?= "x" . $cedula_10?>
                    </div>
                    <div class="cedula">
                        <img src="images/5_Brazil_real_Second_Obverse.jpg" alt="" height="50px"><?= "x" . $cedula_5?>
                    </div>
                    <p>Sobra a ser sacado do valor {<?="<strong>R$".number_format($saque, 2, ",",".")."</strong>"?>}: <?="<strong>R$".number_format($sobra, 2,",",".")."</strong>"?></p>

                </div>
            </div>

        </main>
    </section>
    <footer>

    </footer>
</body>

</html>