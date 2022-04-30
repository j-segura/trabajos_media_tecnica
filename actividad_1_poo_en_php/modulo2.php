<?php

require_once('modulo1.php');

$Hotel = new Hotel('theCameron', 'San Andres', 4);

echo 'El hotel ' .$Hotel->getName() .' tiene ' .$Hotel->getNumStars() .' estrellas';
echo '<br>';

$Hotel->aumentar_una_estrella();

echo 'El hotel ' .$Hotel->getName() .' tiene ' .$Hotel->getNumStars() .' estrellas';
echo '<br>';

$Hotel->aumentar_una_estrella();

echo 'El hotel ' .$Hotel->getName() .' tiene ' .$Hotel->getNumStars() .' estrellas';
echo '<br>';

$Hotel->bajar_una_estrella();

echo 'El hotel ' .$Hotel->getName() .' tiene ' .$Hotel->getNumStars() .' estrellas';
echo '<br>';

?>