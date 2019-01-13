<?php
$str = 'a\bn';
$a = array("A", "B", 1 => "c");
$coche = "moto";
$moto = &$coche;
$moto = "coche";
echo $coche . " " . $moto;