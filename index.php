<?php

function encodeCesar(string $word,int $swap): string {
	$array_chars = str_split($word);
	foreach($array_chars as $key => $char) {
		//TODO: Dar la vuelta al abecedario
		$array_chars[$key] = chr(ord($char)+$swap);  
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