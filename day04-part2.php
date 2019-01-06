<?php

$key = file_get_contents('input/day04.txt');

$n = 1;
$answer = false;

while($answer == false)
{
	
	$hash = md5($key.$n);
	
	// check for match
	if(substr($hash, 0, 6) === '000000') $answer = $n;
	
	$n++;
	
}
echo 'Answer: '.$answer;
?>
