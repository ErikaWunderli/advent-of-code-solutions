<?php

$data = file('input/day02.txt');

$length = 0;

foreach($data as $key => $row)
{
	$d = explode('x', $row);
	$d[0] = intval($d[0]);
	$d[1] = intval($d[1]);
	$d[2] = intval($d[2]);
	
	//find the smallest area
	sort($d);
	
	//calculate its surface
	$length += 2*$d[0] + 2*$d[1];
	//bow
	$length += $d[0]*$d[1]*$d[2];
	
}

echo 'Answer: '.$length;

?>
