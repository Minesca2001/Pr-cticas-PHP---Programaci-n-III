<!DOCTYPE html>
<html>

<head>
    <title>Mi página</title>
</head>

<?php // 3. Sintaxis básica: Cómo empieza y termina un archivo PHP
// Todo código PHP va dentro de etiquetas especiales. La forma recomendada es:

// <?php // Aquí va TODO tu código PHP ?>

<?php
// • <?php → abre el bloque PHP. 
// • Puedes mezclar HTML y PHP en el mismo archivo:
// • Cierra el bloque → ?>

<body>
    <h1>Bienvenido</h1> <?php echo "Esto es PHP dentro de HTML"; ?>
    <p>Más HTML normal</p>


    <?php // Comentarios (para explicar código, no se ejecutan): 
    // • Una línea: // esto es un comentario o # esto también 
    
    /*  Comentario  multilínea  */

    // 4. echo y print: Cómo mostrar texto en la página 
    echo "Hola mundo";          // Muestra texto simple 
    echo "<br>";                // Salto de línea HTML
    echo "Hola " . "Fausto";    // Concatenar con punto .
    echo "<h2>Título grande</h2>";  // Puedes poner HTML dentro
    
    // print es similar, pero menos usado:
    print "Hola con print";
    // ?>
</body>


</html>