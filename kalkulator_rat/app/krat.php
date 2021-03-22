<?php
require_once dirname(__FILE__).'/../config.php';

$x = ($_REQUEST ['x']) ? $_REQUEST['x'] : null;
$y = ($_REQUEST ['y']) ? $_REQUEST['y'] : null;
$z = ($_REQUEST ['z']) ? $_REQUEST['z'] : null;


if ( $x == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $y == "") {
	$messages [] = 'Nie podano liczby lat';
}
if ($z == "") {
	$messages [] = 'Nie podano oprocentowania';
}
if (empty( $messages )) {
	
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $z )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}

}


if (empty ( $messages )) { // gdy brak błędów

	$x = floatval($x);
	$y = floatval($y);
	$z = floatval($z);
	
	$result = ($x / ($y*12)) + (($x / ($y*12))*($z*0.01));
}

include 'krat_view.php';