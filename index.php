<?php
define('ASCII_ALPHABET_LENGTH',26);


function calcAsciiCode(int $char_code): int {
	if($char_code > 90) return $char_code - ASCII_ALPHABET_LENGTH;
	else if($char_code < 65) return $char_code + ASCII_ALPHABET_LENGTH;
	return $char_code;
}

function encodeCesar(string $word,int $swap): string {
	$array_chars = str_split($word);
	foreach($array_chars as $key => $char) {
		var_dump(calcAsciiCode(ord($char)+$swap));
		$array_chars[$key] = chr(calcAsciiCode(ord($char)+$swap));  
	}
	return implode($array_chars);
}

function decodeCesar(string $word, int $swap): string {
	//TODO: Idem pero restando, refactor?
}

//TODO: Chequeos de entrada
$word = readline("Introduce una palabra:") or die;
$swap = readline("Introduce el grado de desplazamiento:") or die;

//TODO: Upper and lower case
$word = strtoupper($word);
echo encodeCesar($word, $swap);

?>