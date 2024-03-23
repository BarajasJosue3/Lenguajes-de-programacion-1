<?php 
// Aquí vamos a obtener el código del alumno y el nombre enviado por el formulario a través del método POST
$codigoAlumno = $_POST['codigo'];
$nombreAlumno = $_POST['nombre'];
//Aqui imprimimos el codigo recibido
// echo $codigoAlumno;


// Aquí obtenemos la fecha actual
$fechaActual = date("d-m-y");
//Prueba de que estan correctos los datos
//echo $codigoAlumno."<br>".$fechaActual;


// Se crea un archivo llamado registro de asistencia
$archivo = "asistencias_$fechaActual.txt";

// Verificamos que el archivo exista
if(file_exists($archivo)){
    // Si existe el archivo se va a agregar la asistencia del alumno
    $lista = file_get_contents($archivo);
    $lista .= "Código: $codigoAlumno, Nombre: $nombreAlumno\n";
    file_put_contents($archivo, $lista);
} else {
    // Si el archivo no existe, tenemos que crearlo y guardar la asistencia
    $lista = "Código: $codigoAlumno, Nombre: $nombreAlumno\n";
    file_put_contents($archivo, $lista);
}

echo "Asistencia Registrada";
?>

?>