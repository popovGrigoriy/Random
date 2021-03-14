<?php
	sleep(2);
	if(!$_POST['ot'] || !$_POST['pos']) {
		echo '<div class = "number">Вы не ввели значения</div>';
		exit;
	}
	$ot = $_POST['ot'];
	$pos = $_POST['pos'];
	if($ot > $pos){
		echo '<div class = "number">Неверный диапозон значений</div>';
		exit;
	}
	($_POST['value']) ? $val = $_POST['value'] : $val = 1;
	$row = '<div class = "row">';
	$end = "</div>";
	$rez = "";
	$full = floor($val / 6) + 1;
	for($i = 0; $i < $val; $i++){
		if($i%6 == 0 || $i == 0){
			$rez .= $row;
			$full--;
		}
		if($full != 0){
			$rez .= '<div class = "col-2 number">' . rand($ot, $pos) .'</div>';
		}
		if($full == 0){
			$rez .= '<div class = "col number">' . rand($ot, $pos) .'</div>';
		}
		if($i%6 == 5){
			$rez .= $end;
		}
	}
	echo $rez;
?>
