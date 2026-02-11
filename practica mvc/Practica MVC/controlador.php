<?php
require_once "modelo.php";
class Controlador
{
    public function mostrar()
    {
        $datos = Modelo::listar(); // Pide datos al modelo
        require_once "vista.php"; // Los envía a la vista
    }
}