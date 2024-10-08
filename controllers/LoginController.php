<?php

namespace Controllers;

use Classes\Email;
use Model\Usuario;
use MVC\Router;

class LoginController
{

    public static function login(Router $router)
    {
        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //echo 'Desde POST';

            $auth = new Usuario($_POST);

            $alertas = $auth->validarLogin();

            if (empty($alertas)) {
                //  echo 'El usuario proporcionó correo y contraseña';
                //comprobar que exista el usuario
                $usuario = Usuario::buscarPorCampo('email', $auth->email);

                //debuguear($usuario);

                if ($usuario) {
                    //verificar la contraseña
                    if ($usuario->comprobarContrasenaAndVerificado($auth->password)) {

                        //Autenticar usuario
                        session_start();

                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre . ' ' . $usuario->apellido;
                        $_SESSION['email'] = $usuario->email;
                        $_SESSION['login'] = true;

                        //debuguear($_SESSION);

                        //Redireccionamiento
                        if ($usuario->admin == 1) {
                            $_SESSION['admin'] = $usuario->admin ?? null;
                            header('Location: /admin');
                        } else {
                            header('Location: /cliente');
                        }

                    } 
                } else {
                    Usuario::setAlerta('error', 'Usuario no encontrado');
                }

                //debuguear($auth);
                //debuguear($usuario);
            }


           
        }

        $alertas = Usuario::getAlertas();

        $router->render('auth/login', ['alertas' => $alertas]);

    }
    
    public static function logout()
    {
        echo 'Desde logout';
    }

    public static function olvide(Router $router){
        $alertas = [];

        //echo 'Desde olvide';

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Usuario($_POST);
            $alertas = $auth->validarEmail();

            if(empty($alertas)) {
                $usuario = Usuario::buscarPorCampo('email', $auth->email);
    
                if($usuario && $usuario->confirmado == 1) {
                    //debuguear('Si existe y ya está confirmado');
                    $usuario->crearToken();
                    $usuario->guardar();

                    //TODO enviar el email

                    //Enviar el email 
                    $email = new Email(
                        $usuario->email,
                        $usuario->nombre,
                        $usuario->token
                    );

                    $email->enviarInstrucciones();

                    Usuario::setAlerta('exito','Revisa tu email');
                    
                } else {
                    //debuguear('No existe o no está confirmado');
                    Usuario::setAlerta('error', 'El usuario no existe o no está confirmado');
                    
                }
            }
    
        }

        
        $alertas = Usuario::getAlertas();
        $router->render('auth/olvide-password',[
            'alertas' => $alertas
        ]);
    } 

    public static function recuperar(Router $router) {
        $alertas = [];
        $error = false;

        $token = s($_GET['token']);

        // Buscar usuario por su token
        $usuario = Usuario::buscarPorCampo('token', $token);

        if(empty($usuario)) {
            Usuario::setAlerta('error', 'Token No Válido');
            $error = true;
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Leer el nuevo password y guardarlo

            $password = new Usuario($_POST);
            $alertas = $password->validarPassword();

            if(empty($alertas)) {
                $usuario->password = null;

                $usuario->password = $password->password;
                $usuario->hashPassword();
                $usuario->token = null;

                $resultado = $usuario->guardar();
                if($resultado) {
                    header('Location: /');
                }
            }
        }

        $alertas = Usuario::getAlertas();
        $router->render('auth/recuperar-password', [
            'alertas' => $alertas, 
            'error' => $error
        ]);
    }

    public static function crear(Router $router)
    {
        $usuario = new Usuario;

        // Alertas vacias
        $alertas = [];


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();


            if (empty($alertas)) {

                $resultado = $usuario->existeUsuario();

                if ($resultado->num_rows) {
                    $alertas = Usuario::getAlertas();
                } else {
                    $usuario->hashPassword();

                    $usuario->crearToken();
                    $usuario->guardar();

                    $email = new Email($usuario->email, $usuario->nombre, $usuario->token);
                    $email->enviarConfirmacion();

                    $resultado = $usuario->guardar();

                    if ($resultado) {
                        header('Location: /mensaje');
                    }
                }
            }
        }

        $router->render('auth/crear-cuenta', [
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }

    public static function confirmar(Router $router)
    {
        $alertas = [];

        $token = s($_GET['token']);

        //debuguear($token);

        $usuario = Usuario::buscarPorCampo('token', $token);

        if (empty($usuario)) {
            //echo 'Token no válido';
            Usuario::setAlerta('error', 'Token no válido');
            //$error = true;
        } else {
            //echo 'Token valido, confirmando usuario...';
            $usuario->confirmado = 1;
            $usuario->token = '';

            // debuguear($usuario);
            $usuario->guardar();
            Usuario::setAlerta('exito', 'Cuenta comprobada correctamente');
        }

        $alertas = Usuario::getAlertas();
        $router->render('auth/confirmar-cuenta', [
            'alertas' => $alertas
        ]);

        //if($_SERVER['REQUEST_METHOD'] === 'POST') {


            //Leer el nuevo password y guardarlo
            //$password = new Usuario($_POST);
           // $alertas = $password->validarPassword();

            //if(empty($alertas)) {
              // debuguear($usuario);
            //}

            //if(empty($alertas)) {
                //$usuario->password = null;
                //debuguear($usuario);

                //$usuario->password = $password->password;
                //$usuario->hashPassword();
               // $usuario->token = null;

               //$resultado = $usuario->guardar();
                //if($resultado)  {
                 // header('Location: /');
                //}
                
            //}

        //}
            //Modificar a usuario confirmado
            //echo 'Token valido,confirmando usuario';

            //debuguear($usuario);

            //$usuario->confirmado = 1;
            //$usuario->token = '';

            //debuguear($usuario);

            

      

        
    }

    public static function mensaje(Router $router)
    {

        $router->render('auth/mensaje');
    }

    public static function admin()
    {
        echo 'Desde admin';
    }

    public static function cliente()
    {
        echo 'Desde cliente';
    }
}
