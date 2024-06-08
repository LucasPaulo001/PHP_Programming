<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de sorteio</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
        $num1 = $_GET["num1"] ?? "";
        $num2 = $_GET["num2"] ?? "";
        $amount = $_GET["amount"] ?? "";
    ?>
    <section id="part_desfio">
        <main class="container">
            <div class="title">
                <h1>Sorteador de números</h1>
            </div>
            <div class="numbers">
            <div class="numbers">
                <form class="form_values" action="code.php" method="get">
                    <label for="num1">Entre</label>
                    <input type="number" name="num1" id="num1" required value="<?=$num1?>">

                    <label for="num2">e</label>
                    <input type="number" name="num2" id="num2" required value="<?=$num2?>">

                    <label for="amount">quantidade de números sorteados</label>
                    <input id="number_int" type="number" name="amount" required value="<?=$amount?>">
                    
                    <input type="submit" value="Sortear" id="submit">
                </form>
            </div>
            </div>
            <div class="resultado">
                <h2>Resultado do sorteio</h2>
                <?php 
                    $num1 = $_GET["num1"];
                    $num2 = $_GET["num2"];
                    $amount = $_GET["amount"];
                    $i;
                    for($i=0; $i<$amount; $i++){
                        if($num1 < $num2){
                            echo " " . $vet[] = mt_rand($num1, $num2);
                        } else{
                            echo " " . $vet[] = mt_rand($num2, $num1);
                        }
                    }
                ?>
            </div>
        </main>
    </section>
</body>
</html>