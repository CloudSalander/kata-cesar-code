<!--
Note: We assume english alphabet and uppercase
-->
<?php
include('Mode.php');

define('ASCII_ALPHABET_LENGTH',26);
define('A_ASCII',65);
define('Z_ASCII',90);

function calcAsciiCode(int $char_code): int {
	if($char_code > Z_ASCII) return $char_code - ASCII_ALPHABET_LENGTH;
	else if($char_code < A_ASCII) return $char_code + ASCII_ALPHABET_LENGTH;
	return $char_code;
}

function filterCesar(string $word,int $swap, Mode $is_decode = Mode::DECODE): string {
	$array_chars = str_split($word);
	if($is_decode === Mode::DECODE) $swap = -$swap;
	foreach($array_chars as $key => $char) {
		$array_chars[$key] = chr(calcAsciiCode(ord($char)+$swap));  
	}
	return implode($array_chars);
}

//TODO: Chequeos de entrada
$word = readline("Introduce una palabra:") or die;
$swap = readline("Introduce el grado de desplazamiento:") or die;
$mode = intval(readline("¿Quieres codificar(1) o decodificar(2)?")) or die;

if($mode == 1) {
	$mode = Mode::ENCODE;
}
else {
	$mode = Mode::DECODE;
} 

$word = strtoupper($word);
echo filterCesar($word, $swap,$mode);

?>