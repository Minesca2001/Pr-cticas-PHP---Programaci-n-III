<?php // 7. Operadores básicos 
// • Aritméticos: + - * / % ** (potencia) 
// • Comparación: == != < > <= >= === (idéntico, tipo y valor) 
// • Lógicos: && (y), || (o), ! (no) 

// • Novedades útiles:
// <=> (spaceship): -1, 0 o 1 según comparación 
// ?? (coalescencia nula): toma el valor de la izquierda si existe, sino el de la derecha

$a = 10;
$b = 3;
echo $a + $b;         // 13
echo $a ** $b;        // 1000 (10 elevado a 3)
echo $a <=> $b;       // 1 (porque 10 > 3)

$valor = $_GET['edad'] ?? 18;   // Si
?>