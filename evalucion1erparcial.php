<?php

class Usuario {
    private $nombreUsuario;
    private $email;
    private $contraseña;

    public function __construct($nombreUsuario, $email, $contraseña) {
        $this->nombreUsuario = $nombreUsuario;
        $this->email = $email;
        $this->contraseña = $contraseña;
    }

    public function getNombreUsuario() {
        return $this->nombreUsuario;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getContraseña() {
        return $this->contraseña;
    }
}

class Registro {
    private $usuarios;

    public function __construct() {
        $this->usuarios = array();
    }

    public function agregarUsuario($usuario) {
        $this->usuarios[] = $usuario;
    }

    public function mostrarUsuarios() {
        foreach ($this->usuarios as $usuario) {
            echo "Nombre de usuario: " . $usuario->getNombreUsuario() . ", Email: " . $usuario->getEmail() . ", Contraseña: " . $usuario->getContraseña() . "\n";
        }
    }
}

$registro = new Registro();

$usuario1 = new Usuario("Josue Alain Barajas Soria<br>", "barajasjosue@gmail.com<br>", "contraseña123<br>");
$registro->agregarUsuario($usuario1);

$usuario2 = new Usuario("Alvaro Bronco Garcia Segura<br>", "alvaro@hotmail.com<br>", "patitofeo123<br>");
$registro->agregarUsuario($usuario2);

$registro->mostrarUsuarios();


?>
