<?php

include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 14000,
        'disponible' => true
    ],
    [
        'nombre' => 'SmartTV',
        'precio' => 25000,
        'disponible' => true
    ],
    [
        'nombre' => 'Audífonos',
        'precio' => 1200,
        'disponible' => true
    ]
];

echo '<pre>';
var_dump($productos);
echo '</pre>';

echo '<pre>';
$json = json_encode($productos);
var_dump($json);
echo '</pre>';

echo '<pre>';
$json_array = json_decode($json);
var_dump($json_array);
echo '</pre>';

include 'includes/footer.php';
