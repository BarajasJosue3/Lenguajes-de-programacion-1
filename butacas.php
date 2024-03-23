<?php
// realizar un programa que simule las butacas ocupadas de un cine utilizando 
// arreglos y variables globales y metodos get

// Crear el array para simular las butacas

//Las siguientes lineas de codigo son las maneras de como guardar 
// $butacasOcupadas = array (3,5,8,10,15);
//$butacasOcupadas = ();
//$butacasOcupadas = array();
//$butacasOcupadas = [];
$butacasOcupadas = [3, 5, 8, 10, 15];

// Se crea una funcion que verifique que las butacas esten ocupadas
function butacaOcupada($butaca,$butacasOcupadas){
    return in_array($butaca,$butacasOcupadas);
}
// Mostrar el formulario de la seleccion de la butaca
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    echo '<form method="post">';
    echo 'Selecciona una butaca (1-15): <input type="number" name="butacas" min="1" max="15" required>';
    echo '<br>';
    echo '<input type="submit" value="Verificar butaca">';
    echo '</form>';
}
// Procesar los datos de la seleccion de la butaca
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $butacaSelect = $_POST["butacas"];
    if ($butacaSelect < 1 || $butacaSelect > 15) {
        echo "La butaca seleccionada no es valida. Por favor selecciona una butaca entre 1 a 15";
    }
    else {
        if (butacaOcupada($butacaSelect,$butacasOcupadas)){
            echo "La butaca $butacaSelect esta ocupada";
// Con las siquientes sentencias de las dos lineas de codigo puedes verificar
            // var_dump($butacasOcupadas);
            // print_r($butacasOcupadas);
        }
        else {
            echo "La butaca $butacaSelect esta disponible";
            // Agregar la butaca seleccionada al array de butacas ocupadas
            $butacasOcupadas[] = $butacaSelect;
        }
    }
}
// Mostrar las butacas ocupadas
echo "<br> Butacas Ocupadas: ";
foreach ($butacasOcupadas as $butaca => $value){
    echo $value . ", ";
}

?>