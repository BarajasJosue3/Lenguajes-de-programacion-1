<?php

class Automovil{
private string $color;
private int $velocidad;
private float $tamaño;
private float $modelo;

public function __construct($modelo,$color,$tamaño,$velocidad){
    $this->modelo = $modelo;
    $this->color = $color;
    $this->tamaño = $tamaño;
    $this->velocidad = $velocidad;
}
public function MostrarMod(){
    return $this->modelo;
}
public function MostrarCol(){
    return $this->color;
}
public function MostrarTam(){
    return $this->tamaño;
}
public function MostrarVel(){
    return $this->velocidad;
}


}
public static void  (string [ ] args){
    automovil Miauto = new Automovil(100,km);
    automovil Tuauto = new Automovil(50,km);
    automovil Josue = new Automovil(200,km);
    
    }



?>