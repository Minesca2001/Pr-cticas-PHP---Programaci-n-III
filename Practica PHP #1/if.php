<?php // Estructuras de Control> Tomar decisiones if-elseif-else

$hora = date("H");  // Hora actual en formato 24h 

if ($hora < 12) {
    echo "Buenos días";
} elseif ($hora < 18) {
    echo "Buenas tardes";
} else {
    echo "Buenas noches";
}
?>

<?php // Operador Ternario (if corto en una linea)

$edad = 20;
$mensaje = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
echo $mensaje;
?>

<?php // match (solo funciona en PHP 8+, más limpio que switch)

$dia = "lunes";

$resultado = match ($dia) {
    "lunes" => "Inicio de semana",
    "viernes" => "¡Viernes!",
    default => "Día normal"
};

echo $resultado;
?>

<?php // Bucles: Repetir código for (cuando sabes cuántas veces repetir):

for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i <br>";
}
?>

<?php // foreach (ideal para listas/arrays, lo veremos más en módulo 2):

$frutas = ["mango", "chinola", "guineo"];
foreach ($frutas as $fruta) {
    echo "Me gusta el $fruta <br>";
}
?>