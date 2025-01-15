<?php
    require_once 'Persona.php';
    require_once 'Profesor.php';
    require_once 'Programador.php';
    
    $Asher = new Profesor("Asher", "García", 18);
    $Asher->presentar();
    echo "<br>";
    $Asher->enseñar();
    echo "<br>";
    echo "<br>";
    
    $Octavio = new Programador("Octavio", "Olea", 27);
    $Octavio->presentar();
    echo "<br>";
    $Octavio->programar();
    
    echo "<br>";
    echo "<br>";
    $Victor = new Persona("Victor", "Hernández", 25);
    $Victor->presentar();
    
?>