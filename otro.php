<?php
    $matriz = [[9, 4], [1, 7], [8, 3], [7, 3]];
    $digitos = [2, 3, 4, 1, 6, 6, 0, 8, 9];
    $digitos = array_unique($digitos);
    
    sort($digitos);
    
    array_push($matriz, [0, 6]);
    
    $primerElemeto = array_shift($matriz);
    foreach($primerElemeto as $item){
        echo $item."-";
    }
    echo "<br><br>";
    foreach ($matriz as $array){
        foreach ($array as $item){
            echo $item."-";
        }
        
        echo "<br>";
    }
    
    echo json_encode($matriz)."<br><br>";
    var_dump($matriz);
    echo "<br><br>";   
    
    
    if(in_array(5, $digitos)){
        echo "El valor 5 esta dentro del arreglo";
    }
    else{
        array_push($digitos, 5);
        sort($digitos);
    }
    foreach ($digitos as $digito){
        echo $digito."-";
    }
    
    $string = "1 2 3 4 5";
    $valores = explode(" ", $string);
    echo "<br><br>";
    foreach ($valores as $digito){
        echo $digito."-";
    }
    echo "<br><br>";
    echo implode(";", $valores);
    echo "<br><br>";
    
    $indicado = ["Nombre"=>"Asher", "Cargo"=>"Profesor"];
    $claves = array_keys($indicado);
    echo "<br><br>";
    foreach ($claves as $clave){
        echo "Clave: ".$clave.". Valor: ".$indicado[$clave]."<br>";
    }
    
    $mayus = "ABCDEFGHIJKLM";
    $minus = trim("  abcdefghijklmabcde");
    echo "<br><br>";
    echo strtolower($mayus);
    echo "<br>";
    echo strtoupper($minus);
    
    echo "<br><br>";
    echo strpos($minus, "e");
    echo "<br>". substr($minus, strpos($minus, "e"), strpos($minus, "k") - strpos($minus, "e") + 1);
    echo "<br>".str_replace("abcde", "A-A", $minus);
?>