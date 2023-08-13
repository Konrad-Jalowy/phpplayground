<?php
function CircumferenceByValue($pi,$radius)
{
	$circumference = 2 * $pi * $radius;
	return $circumference;
}

function CircumferenceByReference(&$pi,&$radius,&$circumference)
{
	$circumference = 2 * $pi * $radius;
}
?>