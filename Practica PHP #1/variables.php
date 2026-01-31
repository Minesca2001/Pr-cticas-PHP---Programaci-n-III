<?php // 5. Variables: Guardar datos
// Las variables empiezan con $ (obligatorio), sin declarar tipo. 

$nombre = "Fausto"; // string (texto)
$edad = 28; // entero (número sin decimal)
$altura = 1.75; // float (número con decimal) 
$esProfesor = true; // booleano (true/false) 
$nada = null; // valor vacío/nulo 

// Mostrar variables
echo "Mi nombre es $nombre y tengo $edad años.<br>";
echo 'Mi nombre es $nombre'; // Con comillas simples NO interpola variables

// • Comillas dobles " " → interpolan variables (ponen el valor dentro). 
// • Comillas simples ' ' → muestran el nombre literal de la variable. 

// Tipado estricto (recomendado activar siempre al inicio del archivo):
// declare(strict_types=1);  // ¡Actívalo! Evita errores raros 
?>