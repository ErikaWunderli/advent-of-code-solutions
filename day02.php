
<?php

$data = file('input/day02.txt');

$wrapping_paper = 0;

foreach ($data as $key => $row)
{
	
	// split dimension string into array and convert to ints
	$d = explode('x', $row);
	//length
	$d[0] = intval($d[0]);
	//width
	$d[1] = intval($d[1]);
	//height
	$d[2] = intval($d[2]);
	
	$wrapping_papper += 2*$d[0]*$d[1] + 2*$d[1]*$d[2] + 2*$d[2]*$d[0];
	
	// find the smallest side
	sort($d);
	$wrapping_papper += $d[0]*$d[1];
	
}

echo 'Answer: '.$wrapping_papper;
?>
