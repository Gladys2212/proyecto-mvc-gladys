<?php
    declare(strict_types= 1);

    include 'includes/header.php';

    function autenticarUsuario(bool $autenticado) : ? string{
        return $autenticado ?'El usuario está autenticado':'Acceso denegado';
    }

    $mensaje = autenticarUsuario(true);
    echo $mensaje;
    echo '<br>';

    $mensaje = autenticarUsuario(false);
    echo $mensaje;
    echo '<br>';

    include 'includes/footer.php';