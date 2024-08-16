<?php

    include 'includes/header.php';

    $paises = [];
    $paises2 = array();
    $paises3 = array('Alemania','Escocia','Bangladesh');

    // empty - Rebisa si un arreglo o variable está vacío
    var_dump( empty($paises) );
    echo '<br>';

    var_dump( empty($paises2) );
    echo '<br>';

    var_dump( empty($paises3) );
    echo '<br>';

    /* 
        isset - Revisa si un arreglo está creado
        o una propiedad est definida
    */

    var_dump( isset($paises4) );
    echo '<br>';

    var_dump( isset($paises2) );
    echo '<br>';

    var_dump( isset($paises3) );
    echo '<br>';


    $pais = [
        'nombre' => 'Bangladesh',
        'capital' => 'Daca',
        'idioma' => 'Bengalí'
    ];

    /* 
        isset - También permite reisar si una clave
        de un arreglo asosiativo existe
    */

    var_dump( isset($pais['nombre']) );
    echo '<br>';

    var_dump( isset($pais['capital']) );
    echo '<br>';

    var_dump( isset($pais['idioma']) );
    echo '<br>';

    var_dump( isset($pais['clima']) );

    include 'includes/footer.php';