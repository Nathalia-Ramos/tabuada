<?php 

    //criando função para calcular as operações
    function multiplicar ($num1, $num2) {

        //declarando as variaveis
        $numero1 = (double) $num1;
        $numero2 = (double) $num2;
        $result = (double) 0;
        $cont = (double) 0;
        $final = (double) null;
        
  
        while($cont <= $numero2){
            
            $result = $numero1*$cont;
            $final.= $numero1." x ".$cont." = ".$result."<BR>" ;
            $cont++;
        }
    
         return $final;
    }




?>