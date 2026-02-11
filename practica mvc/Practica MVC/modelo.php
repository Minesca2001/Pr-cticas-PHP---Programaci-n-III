<?php
class Modelo
{
    public static function listar()
    {
        return [
            ["campo1" => "Producto", "campo2" => "Marca", "campo3" => "Precio"],
            ["campo1" => "Telefono", "campo2" => "Samsung", "campo3" => "$160"],
            ["campo1" => "Proyector", "campo2" => "Epson", "campo3" => "$200"],
            ["campo1" => "Smart TV", "campo2" => "TCL", "campo3" => "$250"],
            ["campo1" => "Laptop", "campo2" => "Dell", "campo3" => "$200"],
            // Agrega 2 registros más aquí...
        ];
    }
}