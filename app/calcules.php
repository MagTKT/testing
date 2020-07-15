<?php

include 'calculatrice/Calculer.php';

$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];

$calculer = new Calculer($nombre1, $nombre2);
echo $calculer->addMethod();
echo $calculer->subMethod();
echo $calculer->mulMethod();
echo $calculer->divMethod();