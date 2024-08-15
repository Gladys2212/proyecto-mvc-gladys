<?php

include 'includes/header.php';

$carrito = ['Tablet', 'SmartTv', 'laptop', 'Xbox', 'Gaming Laptop'];

echo '<pre>';
var_dump($carrito);
echo '</pre>';

echo $carrito[1];
echo '<br>';

echo sizeof($carrito);
echo '<br>';

echo $carrito[0];
echo '<br>';

echo $carrito[sizeof($carrito) - 1];
echo '<br>';

echo '<pre>';
echo $carrito[sizeof($carrito) - 1];
echo '</pre>';
echo '<br>';

$pokemon = ['Charmander','Charizard','Pikachu','Raichu','Greninja','Alakazam'];

echo '<pre>';
echo $pokemon[sizeof($pokemon) - 1];
echo '<pre>';
echo '<br>';

echo '<pre>';
echo $pokemon[0];
echo '<pre>';
echo '<br>';


include 'includes/footer.php';
