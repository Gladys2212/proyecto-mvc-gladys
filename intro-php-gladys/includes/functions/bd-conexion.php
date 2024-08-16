<?php
    $mysqli = new mysqli("localhost","root","1234","bdpersonajes");
    if ($mysqli->connect_error) {
        die("Fallo al conectar a MySQL ". $mysqli->connect_error);
    }

    $resultado = $mysqli->query("SELECT * FROM personaje");
    $fila = $resultado->fetch_assoc();
    echo $fila['nombre'];
    echo '<br>';
    echo $fila['color'];
    echo '<br>';
?>    
