<?php

require_once('modulo1.php');

$libro1 = new libro('los juegos del hambre', 'novela', 'Suzanne Collins', 374);
$libro2 = new libro('the 100', 'novela', 'alguien', 304);
$libro3 = new libro('The wicher', 'accion', 'juans', 774);
$libro4 = new libro('Elite', 'sexo', 'larry', 474);

function imprimirLibros($data) {
    echo $data->obtenerTitulo();
    echo '<br>';
    echo $data->obtenerGenero();
    echo '<br>';
    echo $data->obtenerAutor();
    echo '<br>';
    echo $data->obtenerNumPag();
    echo '<br>';
    echo '<br>';
}

imprimirLibros($libro1);
imprimirLibros($libro2);
imprimirLibros($libro3);
imprimirLibros($libro4);

?>