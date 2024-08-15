<?php

include 'includes/header.php';

// require 'class/Clientes.php';
// require 'class/Detalles.php';

use App\Detalles;
use App\Clientes;

function mi_autoload($clase) {
    $partes = explode('\\', $clase);

    require __DIR__ .'/class/'. $partes[1] .'.php';
}

spl_autoload_register('mi_autoload');

// class Clientes{
//     public function __construct(){
//         echo 'Desde 05.php que contiene los clientes';
//     }
// }

$clienteReferente = new Clientes();

$detalles = new App\Detalles();
$clientes = new App\Clientes();


include 'includes/footer.php';