<?php

include 'includes/header.php';

$personajes = [
    [
        'nombre' => 'Bob Esponja',
        'genero' => 'Masculino',
        'color' => 'Amarillo',
        'trabaja' => true,
        'rutaImagen' => '../image/image.png'
    ],
    [
        'nombre' => 'Arenita',
        'genero' => 'Masculino',
        'color' => 'Cafe',
        'trabaja' => true,
        'rutaImagen' => '../image/image copy.png'
    ],
    [
        'nombre' => 'Patricio',
        'genero' => 'Masculino',
        'color' => 'Rosado',
        'trabaja' => false,
        'rutaImagen' => '../image/image copy 2.png'
    ],
    [
        'nombre' => 'Don cangrego',
        'genero' => 'Masculino',
        'color' => 'Rojo',
        'trabaja' => true,
        'rutaImagen' => '../image/image copy 3.png'
    ],
    [
        'nombre' => 'Calamardo',
        'genero' => 'Masculino',
        'color' => 'Gris',
        'trabaja' => true,
        'rutaImagen' => '../image/image copy 4.png'
    ],
    [
        'nombre' => 'Plankton',
        'genero' => 'Masculino',
        'color' => 'Verde',
        'trabaja' => true,
        'rutaImagen' => '../image/image copy 5.png'
    ],
    [
        'nombre' => 'Calamarino Elegante',
        'genero' => 'Masculino',
        'color' => 'Gris',
        'trabaja' => true,
        'rutaImagen' => '../image/image copy 6.png'
    ],
    [
        'nombre' => 'Señora Puff',
        'genero' => 'Femenino',
        'color' => 'Cafe',
        'trabaja' => true,
        'rutaImagen' => '../image/image copy 7.png'
    ],
    [
        'nombre' => 'Karen',
        'genero' => 'Femenino',
        'color' => 'Gris',
        'trabaja' => true,
        'rutaImagen' => '../image/image copy 8.png'
    ],
    [
        'nombre' => 'Gary',
        'genero' => 'Masculino',
        'color' => 'Rosa y Azul',
        'trabaja' => false,
        'rutaImagen' => '../image/image copy 9.png'
    ]
];

?>


<div class="contenedor-grid">
    <?php foreach ($personajes as $person) { ?>
        <div class="tarjeta">
            <p id="namePerson">hola <?php echo $person['nombre'] ?></p>
            <img src="<?php echo $person['rutaImagen'] ?>" alt="Imagen del persona">
            <p>genero: <?php echo $person['genero'] ?></p>
            <p>color: <?php echo $person['color'] ?></p>
            <p>trabaja: <?php echo $person['trabaja'] ? 'Si' : 'No'; ?></p>
        </div>
    <?php } ?>
</div>

<?php
include 'includes/footer.php';
