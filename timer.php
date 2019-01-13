<?php 
	date_default_timezone_set('America/Caracas');
	$target = mktime(24, 0, 0, 0, 0, 0);//set marriage date

    $fechaActual = strtotime(date('Y-m-d h:i:s',time()));
	var_dump($fechaActual);die;
	$fecha_actual = strtotime($fechaActual);
	$fecha_entrada = strtotime("19-11-2008 21:00:00");
		
	if($fecha_actual > $fecha_entrada) {
		echo "La fecha actual es mayor a la comparada.";
	} else {
		echo "La fecha comparada es igual o menor";
	}
	/*$fecha = date('Y-m-j');
	$fechaUltimoIntento = date('Y-m-j h:i:s');
	$nuevafecha = strtotime ( '+24 hour' , strtotime ( $fecha ) ) ;
	
    $difference =($target-$today);
    $hours =date('h',$difference);
	
	$difference = date('H:s:i', strtotime('24:00:00')); */
	//print $month." month".$days." days".$hours."hours left";

	$total = "";
