<?php
declare(strict_types= 1);
include 'includes/header.php';

class Pokemon{
    
    protected String $nombre;
    private String $tipo;
    private int $salud;
    public static $imagen = 'Imagen.jpg';

    public function __construct(String $nombre, String $tipo, int $salud){
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->salud = $salud;
    }

    function mostrarPokemon() : void {
        echo 'El pokemon' . $this->nombre . ' tiene una salud de ' . $this->salud;
    }

    public function getNombre() : String {
        return $this->nombre;
    }

    public function getSalud() : int  {
        return $this->salud;
    }  

    public function setNombre($nombre) : void  {
        $this->nombre = $nombre;
    }

    public static function obtenerPokemon(){
        echo 'Obteniendo datos del pokemon...';
    }
    
    public static function obtenerImagenPokemon(){
        return self::$imagen;
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

echo Pokemon::obtenerPokemon();
echo Pokemon::obtenerImagenPokemon();

include 'includes/footer.php';