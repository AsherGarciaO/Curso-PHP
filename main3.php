<?php
    //Instalar MySQL con Workbench
    //https://www.youtube.com/watch?v=_K2nOYwOq1E&pp=ygUOaW5zdGFsYXIgbXlzcWw%3D
    require_once 'BDConection.php';
    
    $conexion = new BDConection();
    $conn = $conexion->startConection();
    if($conexion->successConection()){
        $comando = "DELETE FROM alumnos WHERE alu_id = 6";
        $result = $conn->query($comando);
        
        if($result){}
        
        $comando = "SELECT alu_id, alu_nombre, alu_curso FROM alumnos;";
        $result = $conn->query($comando);
        
        if($result->num_rows > 0){
            while($fila = $result->fetch_assoc()){
                $llaves = array_keys($fila);
                foreach($llaves as $llave){
                    echo "Clave: ".$llave."; Valor: ".$fila[$llave]."<br>";
                }
                echo "<br><br>";
            }
        }
        
    }
    
    $conexion->closeConection();
?>