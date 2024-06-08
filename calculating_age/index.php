<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Desafio (calcular idade)</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
        $ano_nasc = $_GET["ano"] ?? 2000;
        $ano_fim = $_GET["anoFim"] ?? date('Y');
    ?>
    <section id="part_desfio">
        <main class="container">
            <div class="title">
                <h1>Calculando a sua idade</h1>
            </div>
            <div class="numbers">
                <form class="form_values" action="" method="get">
                    <label for="ano">Em que ano você nasceu?</label>
                    <input type="number" name="ano" id="ano" value="<?=$ano_nasc?>" min="1900" max="<?=date('Y')?>">
                    <label for="anoFim">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=date('Y')?></strong>)</label>
                    <input type="number" name="anoFim" id="ano_fim" value="<?=$ano_fim?>" min="1900">
                    <input type="submit" value="Qual será minha idade?" id="submit">
                </form>
            </div>
            <div class="resultado">
                <h2>Resultado</h2>
                <?php 
                    if($ano_fim < $ano_nasc){
                        echo "Ano de referência final inválido, (Por favor coloque um ano maior que o ano de nascimento).";
                    } else{
                        $idade = $ano_fim - $ano_nasc;
                        if($idade > 1){
                            echo "<p>Quem nasceu em <strong>$ano_nasc</strong>, vai ter <strong>$idade</strong> anos de idade <strong>em $ano_fim</strong></p>";
                        } else if($idade == 1){
                            echo "<p>Quem nasceu em <strong>$ano_nasc</strong>, vai ter <strong>$idade</strong> ano de idade <strong>em $ano_fim</strong></p>";
                        }
                        
                    }
                    
                ?>
            </div>
        </main>
    </section>
</body>
</html>