<?php

require_once('Animal.php');//cargamos la clase

$perro = new Animal('cafe', 10);

echo 'El peso del perro es: ' .$perro->getPeso() .'kg';
echo '<br>';

//añadir un kilo al perro
$perro->añadir_un_kilo();

echo 'El peso del perro es: ' .$perro->getPeso() .'kg';
echo '<br>';

//añadir un kilo al perro
$perro->añadir_un_kilo();

echo 'El peso del perro es: ' .$perro->getPeso() .'kg';
echo '<br>';

?>