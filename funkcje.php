<?php
function trojkat_pole($a, $h) {
	return $a * $h / 2;
}
function prostokat_pole($a, $b) {
	return $a * $b;
}
function trapez_pole($a, $b, $h) {
	return ($a + $b) * $h / 2;
}
function kolo_pole($r) {
	return pi() * $r * $r;
}
function trojkat_obwod($a, $b,$c){
	return $a + $b + $c;	
}
function prostokat_obwod($a, $b){
	return 2 * $a + 2 * $b;	
}
function trapez_obwod($a, $b, $c, $d){
	return $a + $b + $c + $d;	
}
function kolo_obwod($r){
	return 2 * pi() * $r;	
}
