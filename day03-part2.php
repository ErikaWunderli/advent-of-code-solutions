<?php

$data = file_get_contents('input/day03.txt');

$visits = array();

$santa_x = 0;
$santa_y = 0;
$robot_x = 0;
$robot_y = 0;
$visits['0|0'] = 2;

for($i = 0; $i < strlen($data); $i++)
{
	
	if(($i % 2) == 0)
	{
		$x = 'santa_x';
		$y = 'santa_y';
	}
	
	else
	{
		$x = 'robot_x';
		$y = 'robot_y';
	}
	
	// set x/y change
	$char = substr($data, $i, 1);
	if($char == '^') $$y++;
	elseif($char == 'v') $$y--;
	elseif($char == '<') $$x--;
	elseif($char == '>') $$x++;
	else die('unexpected char');
	
	// add visit to array
	$key = $$x.'|'.$$y;
	if(!array_key_exists($key, $visits)) $visits[$key] = 1;
	else $visits[$key]++;
	
}
echo 'Answer: '.count($visits);
	
?>
