<?php
    $numero1 = "";
    $decimal = "";
    $hexadec = "";
    $mensaje = "";
    $sigbi = "0";
    $sigdec="";
    $sighex ="";

    function verificarBin($num):bool{
        
        $var = strval($num);
        
        $var2 = "";
        // if($var[0]=="-"||$var[0]=="+"){
        //     for($i = 1;$i<strlen($var);$i++){
        //         if($var[$i]==1||$var[$i]==0)
        //            $var2 = $var2.$var[$i] ;
        //     }
        // }else{
        for($i = 0;$i<strlen($var);$i++){
            if($var[$i]==1||$var[$i]==0)
               $var2 = $var2.$var[$i] ;
        }
    //}
        return $var == $var2;

    }

    if (isset($_POST['transformar'])){
        try{
        $numero1 = $_POST['binario'];
        $sigbi = $_POST['sigbi'];
        
        if (verificarBin($numero1)==false){
                throw new Exception('Por favor introduzca un número');
        }else{
            
            if($sigbi==1){
                $sigdec = "-";
                $decimal = bindec($numero1);
                $sighex= "-";
                $hexadec = dechex(bindec($numero1));
            }elseif ($sigbi == 0) {
                $sigdec = "+";
                $decimal = bindec($numero1);
                $sighex= "+";
                $hexadec = dechex(bindec($numero1));
            } else{
                throw new Exception('Bit de signo incorrecto (0 positivo/1 negativo)');
            }
        }
          
        } catch (Exception $e){
            $numero1 = "";
            $decimal = "";
            $hexadec = "";
            $mensaje = $e -> getMessage();
            $sigbi =  "";
            $sigdec= "";
            $sighex ="";
        }
    }