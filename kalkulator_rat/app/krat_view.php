<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>

<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>

<meta charset="utf-8" />
<title>Kalkulator</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div>
	<div style="  width: 50%; margin-left:25%">
	
<a href = "<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button pure-button-active">
	Inna chroniona strona </a>	
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active"> Wyloguj</a> 
	</div>
</div>



<div style="width:90%; margin: 2em auto; background-color: #C6CECE; width: 260px;border: 0.1em solid #aaa">


<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_URL);?>/app/krat.php" method="get">
	<br>
	<label for="id_x">Kwota zaciągniętego kredytu: </label>
	<input id="id_x" type="text" name="x" value="<?php if (isset ($x)) print($x); ?>" /><br /><br>
	<label for="id_y">Liczba lat: </label>
	<input id="id_y" type="text" name="y" value="<?php if (isset ($x)) print($y); ?>" /><br /><br>
	<label for="id_y">Oprocentowanie: </label>
	<input id="id_z" type="text" name="z" value="<?php if (isset ($x)) print($z); ?>" /><br /><BR>
	<input type="submit" value="Oblicz ratę" >
	<div style="margin: 15px; padding: 7px; border-radius: 40px; background-color: #FAEE86; width:190px;text-align: center; border: 0.1em solid #aaa">
	
	
	<a href = "<?php print(_APP_ROOT); ?>/../kalkulator_rat" class="pure-button pure-button-active">
	Zeruj kalkulator </a>	
	<br>
	
</div>
<br>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 0px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #E97451; width:200px;">';
		foreach ( $messages as $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 30px; padding: 7px; border-radius: 40px; background-color: #E97451; width:120px; text-align: center;">
<?php echo 'Wynik: '.$result; ?>
</div>


<?php } ?>

</div>



</body>

<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>


</html>