<?php
        // put your code here
        
        if (isset($_POST['area'])){
            $tipo = $_POST['area'];
            if ($tipo == "Circulo"){
                $valor = $_POST['valor'];
                $valor1 = $valor * $valor;                        
                $a= 3.1416 * $valor1; 
                echo $a;
            }elseif ($tipo = "Circunferencia") {
                $valor = $_POST['valor'];
                $valor1 = $valor + $valor;                        
                $a= 3.1416 * $valor1; 
                echo $a;
            }    
        }
        ?>
   
        