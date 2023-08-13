<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	define ("br", "<br>"); // creates a constant
	
	echo "Before sleep the epoch time is: " . time() . br;
	sleep(10);
	echo "After sleep the epoch time is: " . time() . br;

	echo "The current date is: " . date("D M j, Y - H:i:s ", time()) . br;
	echo "The date next Friday is: " . date("D M  j, Y - H:i:s ", strtotime("Next Friday")) . br; 
	echo "The date 1 year, 1 month, 1 day, and 1 hour from now is: " . date("D M  j, Y - H:i:s ", strtotime("+1 year 1 month 1 day 1 hours", time())) . br;
	echo "One week ago the date was: " . date("D M  j, Y - H:i:s ", strtotime("7 days ago", time())) . br;  
	echo "One year ago the date was: " . date("D M  j, Y - H:i:s ", strtotime("1 year ago", time())) . br; 

	echo "The epoch time at the start of today was: " . strtotime("01/04/2014") . br;  // 00:00:00 
	echo "The epoch time at 5 pm  today was: " . strtotime("01/04/2014 17:00") . br; 
	?>  
</body>
</html>