<?php

$key = file_get_contents('input/day04.txt');

// counter
$n = 1;

// loop until answer found
$answer = false;
while ($answer == false)
{
	
	// create hash
	$hash = md5($key.$n);
	
	// check for match
	if(substr($hash, 0, 5) === '00000') $answer = $n;
	
	$n++;
	
}

echo 'Answer: '.$answer;

?>
