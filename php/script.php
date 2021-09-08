<?php


function validate_x($val){
	if(isset($val))
	{
		if ($val == -4 || $val == -3 || $val == -2 || $val == -1 || $val == 0 || $val == 1 || $val == 2 || $val == 3 || $val == 4)
			return true;
		else
			return false;
	}
	return false;
}

function validate_y($val){
	if(isset($val))
	{
		if ($val >= -3 && $val <= 3)
			return true;
		else
			return false;
	}
	return false;
}

function validate_r($val){
	if(isset($val))
	{
		if ($val == 1 || $val == 2 || $val == 3 || $val == 4 || $val == 5)
			return true;
		else
			return false;
	}
	return false;
}

function validate($val){
	return isset($val);
}

// Проверка на попадание в область

function check_cicrcle_area($x, $y, $r){
		return ($x>=0 && $y<=0 && sqrt($x*$x+$y*$y)<=$r);
}

function check_triangle_area($x, $y, $r){
		return ($x<=0 && $y>=0 && $y<=$x+$r);
}

function check_squad_area ($x, $y, $r){
		return ($x>=0 && $y>=0 && $x<=$r && $y<= $r/2);
}

// Основная логика программы
//echo implode(" ", array_keys($_GET));
$Xval = $_GET["xval"];
$Yval = $_GET["yval"];
$Rval = $_GET["rval"];

$timezone = $_GET["timezone"];

if (validate_x($Xval) && validate_y($Yval) && validate_r($Rval) && validate($timezone)){
	
	$INSIDE = check_cicrcle_area($Xval, $Yval, $Rval) || check_squad_area($Xval, $Yval, $Rval) || check_triangle_area($Xval, $Yval, $Rval);
	$CONVERTED_INSIDE = $INSIDE ? "Внутри": "Снаружи";
	$current_time = date("j M o G:i:s", time()-$timezone*60);
	$executionTime = round(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 7);
	
	$ANSWER = "<tr>";
	$ANSWER .= "<td>" . $Xval . "</td>";
	$ANSWER .= "<td>" . $Yval . "</td>";
	$ANSWER .= "<td>" . $Rval . "</td>";
	$ANSWER .= "<td>" . $current_time . "</td>";
	$ANSWER .= "<td>" . $executionTime . "</td>";
	$ANSWER .= "<td>" . $CONVERTED_INSIDE . "</td>";
	$ANSWER .= "</tr>";
	
	echo $ANSWER;
}
?>