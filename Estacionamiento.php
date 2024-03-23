<?php
// Creacion de clase 1
class Estacionamiento{
    public $tarifaHora;
    public $totalHoras;
    public $pagado;
//
    public function __construct($tarifaHora){
        $this->tarifaHora = $tarifaHora;
        $this->totalHoras = 0;
        $this->pagado = false;
    }
    public function calcularPago(){
        return $this->totalHoras * $this->tarifaHora;
    }
    public function pagar(){
// Para cambiar el estado de pagado a no pagado es en la siguiente linea de codigo (colocando true = pagado o false = no pagado)
        $this->pagado = true;
    }
    public function generarTicket(){
        $EstatusPago = $this->pagado ? "Pagado" : "Falta Pago";
        return "Tiempo: ".$this->totalHoras." Horas , Pago: $ ".$this->calcularPago(). " , Estado: " .$EstatusPago;
    }
    public function getTotalPago(){
        return $this->totalHoras;
    }
    public function setTotalHoras($horas){
        $this->totalHoras = $horas;
    }
    public function getPagado(){
        return $this->pagado;
    }
}
// Creacion de segunda clase
class EstacionamientoApp{
    private $estacionamiento;
//
    public function __construct(){
        $this->estacionamiento = new Estacionamiento(20);
    }
    public function ingresarVehiculo($horas){
        $this->estacionamiento->setTotalHoras($horas);
        echo "El vehiculo ingreso por: ". $horas. "horas.<br>";
    }
    public function pagarEstacionamiento(){
        $this->estacionamiento->pagar();
        echo " Monto del estacionamiento a pagar. <br>";
    }
    public function obtenerTicket(){
        echo $this->estacionamiento->generarTicket()."<br>";
    }
}
$estacionamientoApp = new EstacionamientoApp();
 $ThorasV = 5;

// En la siguiente linea de codigo al cambiar el numero cambia el total de horas que ingreso el vehiculo, pero no es dinamico
// $estacionamientoApp->ingresarVehiculo(2);

//Al hacer lo de las siguiente linea de codigo hace que sea mas dinamico
 $estacionamientoApp->ingresarVehiculo($ThorasV);
$estacionamientoApp->pagarEstacionamiento();
$estacionamientoApp->obtenerTicket();


?>