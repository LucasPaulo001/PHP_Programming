<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Desafio (reajuste de preço)</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
        $preço = $_GET["valor"] ?? 0;
        $porcentagem = $_GET["porcento"] ?? 0;
    ?>
    <section id="part_desfio">
        <main class="container">
            <div class="title">
                <h1>Reajustador de preços</h1>
            </div>         
            <div class="numbers">
                <form class="form_values" action="<?=$_SERVER['PHP_SELF']?>" method="get">
                    <label for="valor">Preço do produto (R$)</label>
                    <input type="number" name="valor" id="valor" value="<?=$preço?>" step="0.01">

                    <label for="porcento">Qual será a porcentagem de reajuste? (<strong><span id="p">?</span>%</strong>)</label>

                    <input type="range" name="porcento" id="porcento" min="0" max="100" step="1" oninput="moveValue()" value="<?=$porcentagem?>">
                    
                    <input type="submit" value="Reajustar" id="submit">
                </form>
            </div>         
            <div class="resultado">
                <h2>Resultado do reajuste</h2>
                <?php 
                    $reajuste = $preço + ($preço*($porcentagem/100));
                    echo "<p>O produto que custava <strong> R$" . number_format($preço, 2, ",",".") . "</strong>, após o reajuste <strong>de $porcentagem%</strong> ficará valendo <strong> R$" . number_format($reajuste, 2, ".",",") . "</strong></p>";
                ?>
            </div>         
        </main>
    </section>
    <script>
        moveValue()
        function moveValue(){
            p.innerText = porcento.value;
        }
    </script>
</body>
</html>