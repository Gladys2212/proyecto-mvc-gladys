<?php

include 'includes/header.php';

class Producto {

    public $nombre;
    public $precio;
    public $disponible;

    public function __construct($nombre, $precio, $disponible) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
}

$producto = new Producto('Tablet', 4500, true);

echo $producto->nombre;
var_dump( $producto->nombre);
var_dump( $producto->precio);
var_dump( $producto->disponible);

echo "<pre>";
var_dump( $producto);
echo "</pre>";

$cocaCola = new Producto("Coca Cola",18, true);
var_dump($cocaCola->nombre);
echo '<br>';
var_dump( $cocaCola->precio);
echo '<br>';
var_dump( $cocaCola->disponible);
echo '<br>';

class Pokemon{
    private $nombre;
    private $tipo;
    private $salud;

    function __construct($nombre, $tipo, $salud) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->salud = $salud;
    }

    function mostrarPokemon() {
        echo 'El pokemon' . $this->nombre . ' tiene una salud de ' . $this->salud;
    }
}

$pikachu = new Pokemon('Pikachu','Hierba', 800);

echo "<pre>";
var_dump( $pikachu);
echo "</pre>";

$pikachu->mostrarPokemon();

$Squirtle = new Pokemon('Squirtle','Hierba', 1500);

echo "<pre>";
var_dump( $Squirtle);
echo "</pre>";
$Squirtle->mostrarPokemon();


include 'includes/footer.php';
