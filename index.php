<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Hola</p>
        <br>
        
        <?php
            $numero = 100;
            $boleano = false;
            $cadena = "El valor de la variable numero =";
            $resultado  = $cadena." ".$numero." ".$boleano."";
            
            if($boleano){
                echo "El valor de boleano es $boleano";
            }
            else if($numero == 100){
                echo "El valor de numero es $numero";
            }
            else{
                echo $resultado;
            }
            
            //Operadores Aritmeticos + - * / % | += -= *= /= ++ --
            $numeroA = 6; 
            $numeroB = 8;
            $numeroC = $numeroA + $numeroB;
            echo "<br>".$numeroC."<br><br>";
            
            //$numeroC = $numeroC + 1; $numeroC += 1;
            //$numeroC = $numeroC - 6; $numeroC -= 6;
            //$numeroC = $numeroC * 3; $numeroC *= 3;
            //$numeroC = $numeroC / 2; $numeroC /= 2;
            //$numeroC = $numeroC % 2; $numeroC %= 2;            
            
            $numeroC = $numeroB % $numeroA;
            //echo "<br>".$numeroC."<br>";
            
            //$numeroC += 1 | = | $numeroC = $numeroC + 1 | = | $numeroC++;
            //$numeroC -= 1 | = | $numeroC = $numeroC - 1 | = | $numeroC--;
            
            //$numeroC++;
            //echo "<br>".$numeroC."<br>";
            
            //Operadores Relacionales && || == === != !== > < >= <=
            //devuelven verdadero o falso
            /* 
                && valida que las condiciones tanto de la izquierda y derecha
                se cumplan o sean igual a verdadero
                
                true && true && true = true
                true && false = false
                false && true = false
                false && false = false
             
                
                || valida que alguna de las condiciones en la izquierda o derecha
                sea igual a verdadero
                
                true || true = true
                true || false = true
                false || true = true
                false || false = false
             
                
                == valida que el valor de la izquierda sea IGUAL al de la derecha
                (1 signifca verdadero y 0 representa falso)
                1 == 1 = true
                1 == false = false
                1 == 0 = false
                1 == "1" = true

             
                
                === valida que el valor de la izquierda sea IGUAL al de la derecha
                Y el TIPO DE DATO al que ambos pertenencen
                1 == 1 = true
                1 == false = false
                1 == 0 = false
                1 == "1" = false
             
                
                != valida que el valor de la izquierda sea DIFERENTE al de la derecha
                (1 signifca verdadero y 0 representa falso)
                1 != 1 = false
                1 != false = true
                1 != 0 = true
                1 != "1" = false             
                
                !== valida que el valor de la izquierda sea DIFENTE al de la derecha
                Y el TIPO DE DATO sea DIFERENTE de igual modo
                1 !== 1 = false
                1 !== false = true
                1 !== 0 = true
                1 !== "1" = true
             
                > valida que el valor de la izquierda sea MAYOR al de la derecha
                1 > 1 = false
                1 > 0 = true
                1 > 5 = false

                >= valida que el valor de la izquierda sea MAYOR O IGUAL al de la derecha
                1 >= 1 = true
                1 >= 0 = true
                1 >= 5 = false
             
                > valida que el valor de la izquierda sea MENOR al de la derecha
                1 < 1 = false
                1 < 0 = false
                1 < 5 = true

                <= valida que el valor de la izquierda sea MENOR O IGUAL al de la derecha
                1 <= 1 = true
                1 <= 0 = false
                1 <= 5 = true
            */
            

            /*
                $numeroA = 22; 
                $numeroB = 8;
                if($numeroA > $numeroB && $numeroA < 20 && $numeroB < 5){
                    echo "El valor de A es mayor al de B<br>";
                }
                else if($numeroA > $numeroB && $numeroA > 20 && $numeroB < 5){
                    echo "El valor de A es mayor al de B PERO A es mayor a 20<br>";
                }
                else{
                    echo "El valor de B es mayor al de A<br>";
                }

                //Operador ternario: (condicion)?valorRegresaVerdadero:valorRegresaFalso;
                echo "El valor del operador ternario es: ".((false)?"verdadero":"falso")." segun el codigo";
            */
            
            //Funciones: es un bloque de codigo a ejecutar tras ser llamado
            //estas funciones pueden aceptar valores para trabajar
            //pueden regresar valores tras procesar o llevar la accion que deben ejecutar
            
            //function nombreFuncion(...){...}
            //y = F(x) = x^2 + 4x + 4 || nombreFuncion(valor){...} || $variable = nombreFuncion(valor){... regresar valorX}
            //Parametro es una variable que nosotros declaramos para la funcion y que solo esta puede utilizar
            //las funciones aceptan paramtros para trabajar con ellos y regresar algo a la funcion principal
            
            function suma($var1=3, $var2=6){
                $var3 = $var1+$var2;
                
                return $var3;
            }
            
            if(false){
                $varT = 0;
                echo $varT."<br>";
                $varT = 7;
                if(true){
                    $varT = 0;
                }
            }
            
            echo suma(7, 8)."<br>";
            echo suma(7)."<br>";
            echo suma()."<br><br><br>";
            
            $varArreglo1 = [9, 7, 10, 6, 7];
            echo $varArreglo1[4]."<br>";
            
            $varArreglo2 = array(9, 7, 10, 6, 7);
            echo $varArreglo2[4];
        ?>
    </body>
</html>
