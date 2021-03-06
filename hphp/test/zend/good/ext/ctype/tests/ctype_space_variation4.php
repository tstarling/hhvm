<?php
/* Prototype  : bool ctype_space(mixed $c)
 * Description: Checks for whitespace character(s)
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass octal and hexadecimal values as $c to ctype_space() to test behaviour
 */

echo "*** Testing ctype_space() : usage variations ***\n";

$orig = setlocale(LC_CTYPE, "C");

$octal_values = array (011, 012, 013, 014, 015, 040);
$hex_values   = array (0x9, 0xA, 0xB, 0xC, 0xD, 0x20);

echo "\n-- Octal Values --\n";
$iterator = 1;
foreach($octal_values as $c) {
	echo "-- Iteration $iterator --\n";
	var_dump(ctype_space($c));
	$iterator++;
}

echo "\n-- Hexadecimal Values --\n";
$iterator = 1;
foreach($hex_values as $c) {
	echo "-- Iteration $iterator --\n";
	var_dump(ctype_space($c));
	$iterator++;
}
setlocale(LC_CTYPE, $orig);
?>
===DONE===