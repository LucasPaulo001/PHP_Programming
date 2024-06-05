<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de caixa eletrônico</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        $saque = $_GET["saque"] ?? 0;
        $preference = $_GET["pref"] ?? 0;
        $standard = $_GET["padrao"] ?? "";
    ?>
    <header>
        <h1>Sistema de caixa eletrônico</h1>
    </header>
    <section>
        <main class="content">

            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <div>
                    <label for="saque">Quanto quer sacar?</label>
                    <input type="number" name="saque" id="saque" step="0.01" required value="<?=$saque?>">
                </div>
                <div>
                    <label for="pref">Preferência de cédulas</label>
                    <input type="number" name="pref" id="pref" value="<?=$preference?>">
                </div>
                <div>
                    <label for="padrao">Ou marque a caixa para um saque padrão</label>
                    <input type="checkbox" name="padrao" id="padrao"> 
                </div>
                <div>
                    <input type="submit" value="Sacar" id="btn_saq">
                </div>
            </form>

            <div class="res">
                <h2>Quantidade e valor de cédulas sacadas</h2>
                <?php 
                //Caso as preferências forem maiores que 0 e o saque padrão esteja marcado
                    if($preference > 0 && $standard == true){
                        echo "Remova o valor de preferência";
                    } 
                    //Caso as preferências forem maiores que 0 e a box esteja desmarcada
                    else if($preference > 0 && $standard == false){

                        //Caso de preferências informadas
                        if($preference==10){
                            $standard = false;
                            $quant_cedulas = $saque/10;
                            $cedulas_10 = $quant_cedulas;
                            echo "Quantidade em cédulas de 10R$: $cedulas_10";
                        } 
                        if($preference==20){
                            $standard = false;
                            $quant_cedulas = $saque/20;
                            $cedulas_20 = (int)$quant_cedulas;
                            echo "Quantidade em cédulas de 20R$: $cedulas_20";

                            //Se ficar sobras após a escolha de saque com notas de 20R$ o resto será completo por outro tipo de nota
                            if($quant_cedulas%20!=0){
                                $cedulas_20 = $saque%20;
                                echo"<br>Valor restante: $cedulas_20 R$";
                                
                            }
                        }
                        if($preference==50){
                            $standard = false;
                            $quant_cedulas = $saque/50;
                            $cedulas_50 = $quant_cedulas;
                            echo "Quantidade em cédulas de 50R$: " . (int)$cedulas_50;
                            if($cedulas_50 % 50 != 0){
                                $quant_cedulas = $saque%50/20;
                                $cedulas_50 = $quant_cedulas;
                                echo "<br>Valor restante em notas de 20R$: " . (int)$cedulas_50 ;
                                if($quant_cedulas%20!=0){
                                    $quant_cedulas = $saque%50%20/10;
                                    echo "<br>Valor restante em notas de 10R$: " .  (int)$quant_cedulas;
                                }
                                
                            }
                        }
                        if($preference==100){
                            $standard = false;
                            $quant_cedulas = $saque/100;
                            $cedulas_100 = $quant_cedulas;
                            echo "Quantidade de cédulas de 100R$: " . (int)$cedulas_100;
                            if($cedulas_100%100!=0){
                                $cedulas_100 = $saque%100/10;
                                echo "<br>Valor restante em notas de 10R$: " . (int)$cedulas_100;
                            }
                        }
                    }
                    else if($preference == 0 || $preference == "" && $standard == true){
                        if($saque >= 100){
                            $quant_cedulas = $saque/100;
                            $cedulas_100 = (int)$quant_cedulas;
                        }
                        if($saque >= 50){
                            $quant_cedulas = $saque%100/50;
                            $cedulas_50 = (int)$quant_cedulas;
                        }
                        if($saque >= 20){
                            $quant_cedulas = $saque%100%50/20;
                            $cedulas_20 = (int)$quant_cedulas;
                        }
                        if($saque >= 10){
                            $quant_cedulas = $saque%100%50%20/10;
                            $cedulas_10 = (int)$quant_cedulas;
                        }
                        echo "Quantidade de Cédulas <strong>de 100R$</strong>: $cedulas_100<br>Quantidade de Cédulas <strong>de 50R$</strong>: $cedulas_50<br>Quntidade de Cédulas <strong>de 20R$</strong>: $cedulas_20<br>Quantidade de Cédulas <strong>de 10R$</strong>: $cedulas_10<br>";
                    }
                        
                ?>    
            </div>
            
        </main>
    </section>
    <footer>

    </footer>
</body>
</html>