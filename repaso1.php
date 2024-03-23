<?php
// PROGRAMA PARA PASAR LISTA A ALUMNOS UTILIZANDO POO
// Clase Modulo
class Modulo {
    private $nombre;
    private $codigo;

    public function __construct($nombre, $codigo) {
        $this->nombre = $nombre;
        $this->codigo = $codigo;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getCodigo() {
        return $this->codigo;
    }
}

// Clase Calificacion
class Calificacion {
    private $alumno;
    private $modulo;
    private $nota;

    public function __construct($alumno, $modulo, $nota) {
        $this->alumno = $alumno;
        $this->modulo = $modulo;
        $this->nota = $nota;
    }
    public function getAlumno() {
        return $this->alumno;
    }
    public function getModulo() {
        return $this->modulo;
    }
    public function getNota() {
        return $this->nota;
    }
}
// PASO 1: CREAR LA CLASE ALUMNOS
class Alumno {
 private $nombre;
 private $presente;

// PASO 2: CREAR EL CONSTRUCTOR
public function __construct($Nombre){
    $this->nombre = $Nombre;
    $this->presente = false;
}
// PASO 3: CREAR LAS FUNCIONES
//PRIMERA FUNCION
public function getNombre(){
    return $this->nombre;
}
// SEGUNDA FUNCION
public function marcarPresente(){
    $this->presente = true;
}
// TERCERA FUNCION
public function estarPresente(){
    return $this->presente;
}
}
// CREAR LA CLASE LISTA DE ASISTENCIA
// PASO 1:
class ListaAsistencia{
    private $alumnos;
//PASO 2:
public function __construct(){
  $this->alumnos = [];  
}
// PASO 3:
public function agregarAlumno($nombre){
    $alumno = new Alumno($nombre);
    $this->alumnos[]=$alumno;
}
public function marcarPresente($nombre){
    foreach($this->alumnos as $alumno){
        if($alumno->getNombre() == $nombre){
           $alumno->marcarPresente();
           break;
        }
    }
}
// SE IMPRIME EL RESULTADO DE SI ESTA O NO ESTA EL ALUMNO
public function imprimir(){
 foreach ($this->alumnos as $alumno){
    echo $alumno->getNombre()." - ".($alumno->estarPresente()? "Presente" : "Ausente")."<br>";
 }
}
}
// SE CREA EL AGREGAR ALUMNO
$lista = new ListaAsistencia();
$lista->agregarAlumno("Josue");
$lista->agregarAlumno("Leonilo");
$lista->agregarAlumno("Luis");

$lista->marcarPresente("Josue");
$lista->marcarPresente("Leonilo");
// $lista->marcarPresente("Luis");

$lista->imprimir();

// Creación de instancias de Modulo y Calificacion
$modulo = new Modulo("Matemáticas", "MAT101");
$calificacionJosue = new Calificacion("Josue", $modulo, 90);
$calificacionLeonilo = new Calificacion("Leonilo", $modulo, 85);
$calificacionLuis = new Calificacion("Luis", $modulo, 40);

// Mostrar información del módulo y las calificaciones
echo "Módulo: " . $modulo->getNombre() . " - " . $modulo->getCodigo() . "<br>";
echo "Calificaciones:<br>";
echo $calificacionJosue->getAlumno() . ": " . $calificacionJosue->getNota() . "<br>";
echo $calificacionLeonilo->getAlumno() . ": " . $calificacionLeonilo->getNota() . "<br>";
echo $calificacionLuis->getAlumno() . ": " . $calificacionLuis->getNota() . "<br>";

?>