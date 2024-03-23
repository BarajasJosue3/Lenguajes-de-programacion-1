<?php
//Crear una factura y clases en php
//Primer paso: es crear la clase producto
class Producto{
    public $nombre;
    public $precio;
//Segundo paso: crear un constructor funcion
    public function __construct($nombre, $precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}
class Factura{
    public $productos=[];
    public function agregarProducto($productos){
        $this->productos[] = $productos;
    }
    public function calcularTotal(){
        $total = 0;
        foreach ($this->productos as $productos) {
            $total += $productos->precio;
        }
        return $total;
    }
}
//Crear los objetos: productos 
$producto1 = new Producto("Shampoo", 80);
$producto2 = new Producto("Galletas", 20);
$producto2 = new Producto("Pasta de dientes", 40);
$producto2 = new Producto("Cocacola", 25);

//Crear la clase: factura
$factura = new Factura();
$factura->agregarProducto("producto1");
$factura->agregarProducto("producto2");
$factura->agregarProducto("producto3");
$factura->agregarProducto("producto4");

//Crear el: Mostrar la factura y el total
echo "Factura <br>";
foreach($factura->productos as $productos){
    echo $productos->nombre.": $".$productos->precio."<br>";
} 
echo "Total: $".$factura->calcularTotal();

?>