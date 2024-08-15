<?php

include 'includes/header.php';

class Transporte {

    protected int $ruedas;
    protected int $capacidad;

    public function __construct(int $ruedas, int $capacidad)
    {  
        $this->ruedas = $ruedas;
        $this->capacidad = $capacidad;
    }

    public function getInfo() : String{
        return 'El transporte tiene ' . $this->ruedas . ' ruedas y una capacidad de '. $this->capacidad . ' personas';
    }

    public function getRuedas() : string{
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte {

}

class Automovil extends Transporte {

    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
    }

    public function getTransmision() : String{
        return $this->transmision;
    }
}

$biclicleta = new Bicicleta(2, 1);
echo $biclicleta->getInfo();
echo '<hr>';

$auto = new Automovil(4,4, 'Manual');
echo $auto->getInfo();
echo $auto->getTransmision();
echo '<hr>';

include 'includes/footer.php';