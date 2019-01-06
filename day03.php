<?php

$data = file_get_contents('input/day03.txt');

// use an array as a counter of visits, using the x/y coordinates as the key and the number of visits as the value
$visits = array();

$x = 0;
$y = 0;
$visits['0|0'] = 1;

for($i = 0; $i < strlen($data); $i++)
{
	
	$char = substr($data, $i, 1);
	if($char == '^') $y++;
	elseif($char == 'v') $y--;
	elseif($char == '<') $x--;
	elseif($char == '>') $x++;
	else die('unexpected char');
	
	// add visit to array
	$key = $x.'|'.$y;
	if(!array_key_exists($key, $visits)) $visits[$key] = 1;
	else $visits[$key]++;
	
}
// output answer
echo 'Answer: '.count($visits);
	
?>
