<?php
 
    //importe do arquivo de cnfigurações de variaveis e constantes
		require_once ('modulo/config.php');   


    //importe do arquivo de funções para calculos matematicos
        require_once ('modulo/calculo.php');

    //Declarando as variaveis
    $tabuada = (double) null;
    $multiplicador = (double) null;
    $resultado = (double)null;
    $contador = (double) 0;
    $resFinal = (double) null;
 
    //Ver se o botão foi clicado
    if(isset($_POST['btnCalcular'])){
 
 
    //Recebendo os dados do formulario
    $tabuada = $_POST['txtTabuada'];
    $multiplicador =  $_POST['txtMultiplicador'];
    }
 
    //Tratamento do campo vazio
    if($_POST['txtTabuada'] =="" || $_POST['txtMultiplicador'] ==""){
        echo(ERRO_MSG_OPERACAO_CALCULO);    
 
    }elseif (!is_numeric($tabuada) || !is_numeric($multiplicador)){
       echo (ERRO_MSG_CARACTER_INVALIDO);
    }elseif ($tabuada== 0) {
        echo(ERRO_MSG_MULTIPLICACAO_ZERO);
    }else{
        //chamada para a função que vai realizar os calculos matematicos
            $resFinal = multiplicar ($tabuada,$multiplicador);
        }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>

<div id="titulo">
        Tabuada
    </div>
    <br>
    <div id="form">
        <form name="frmtabuada" method="post" action="index.php">
            Tabuada: <input type="text" name="txtTabuada" value="<?php echo ($tabuada);?>" > <br>
            Multiplicador: <input type="text" name="txtMultiplicador" value="<?php echo ($multiplicador);?>"> <br>        
    <div>
        <input type="submit" name="btnCalcular" value="Calcular">
        <input type="submit" name="btnLimpar" value="Limpar">
    </div>          
   
    <div align="center"  id ="resultado">
        <?php echo($resFinal)?>
    </div>
 
        </form>

</body>
</html>