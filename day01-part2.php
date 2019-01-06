<?php

$x = file_get_contents('input/day01.txt');

$floor = 0;

for($i = 0; $i < strlen($x); $i++)
{	
	$char = substr($x, $i, 1);
	if($char == '(') $floor++;
	elseif($char == ')') $floor--;
	
	if($floor < 0)
	{
		echo "Answer: ".($i+1);
		break;
	}
	
}
	
?>
