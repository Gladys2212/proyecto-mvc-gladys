<?php

include 'includes/header.php';

$politico = [
    'nombre' => 'Señora X',
    'edad' => 60,
    'informacion' => [
        'afiliacion' => 'PRIAN',
        'corrupto' => true,
    ]
];

echo '<pre>';
echo var_dump($politico);
echo '</pre>';

echo '<pre>';
echo $politico['nombre'];
echo '</pre>';

echo '<pre>';
echo $politico['informacion']['afiliacion'];
echo '</pre>';

echo '<pre>';
echo $politico['informacion']['corrupto'];
echo '</pre>';

$corrupto = $politico['informacion']['corrupto'];
echo $corrupto ? "Es corrupto.." : "No es corrupto..";
echo '<br>';

$politico['propuesta'] = 'Tarjeta rosa de la salud';
$politico['edad'] = 85;

$politico['informacion']['afiliacion'] = 'PAN';

echo '<pre>';
echo $politico['informacion']['afiliacion'];
echo '</pre>';

$politico['informacion']['apodo'] = 'la botarga';
$politico['nombre'] = 'Xochilt';

echo '<pre>';
echo $politico['informacion']['apodo'];
echo '</pre>';

echo '<pre>';
echo $politico['nombre'];
echo '</pre>';

include 'includes/footer.php';

?>