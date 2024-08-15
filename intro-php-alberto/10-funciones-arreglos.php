<?php

    include'includes/header.php';

    $politicosMexicanos = [
        'Señora X',
        'Claudia S',
        'Jorge M',
        'Amlo'
    ];

    echo'<pre>';
    var_dump($politicosMexicanos);
    echo'</pre>';

    sort($politicosMexicanos);

    echo'<pre>';
    var_dump($politicosMexicanos);
    echo'</pre>';

    rsort($politicosMexicanos);

    echo'<pre>';
    var_dump($politicosMexicanos);
    echo'</pre>';

    $cantante = array(
        'nombre' => 'Peso Pluma',
        'genreo'=> 'CT',
        'discos'=> 2,
        'nacionalidad'=> 'Mexico-Americano'
    );

    echo'<pre>';
    var_dump($cantante);
    echo'</pre>';

    #ordenar arreglo asociativo 
    asort($cantante);#ordena por valores
    ksort($cantante);#ordena por claves

    arsort($cantante);#ordena por valores (de la Z a la A)
    krsort($cantante);#ordena por claves (de la Z a la A)

    echo'<pre>';
    var_dump($cantante);
    echo'</pre>';

    include'includes/footer.php';
