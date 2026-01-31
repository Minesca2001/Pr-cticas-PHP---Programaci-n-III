<?php // 6. Constantes: Valores que NO cambian
// Dos formas (usa const cuando puedas):

    const PAIS = "República Dominicana";     // Forma moderna (preferida) 
define("TASA_DOP_USD", 60.50);           // Forma clásica  

echo "Vivo en " . PAIS . "<br>";
echo "1 USD = " . TASA_DOP_USD . " DOP";
?>