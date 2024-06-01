<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de sorteio</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <section>
        <div id="content">
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
            <input class="btn" type="submit" value="Gerar outro" onclick="javascript:document.location.reload()">
            <input class="btn" type="submit" value="Voltar" onclick="javascript:window.location.href='index.html'">

        </div>
    </section>
</body>
</html>