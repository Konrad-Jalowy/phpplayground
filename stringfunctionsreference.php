<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
		$movie = "Blade Runer, 19882, R, Ridley Scott , Harrison Ford, Rutger Hauer, Sean Yung";
              //  Title , Year,  MPAA,  Director, Actors

		echo "The length of the string \$movie is: " . strlen($movie) . "<br>";
		$position = strpos($movie,",");
		echo "The title of the movie is: " . substr($movie,0,$position) . "<br>";
		echo "The number of words in the string is: " . str_word_count($movie) . "<br>";
		print_r (count_chars("$movie",1));
		echo "<br>";
		echo "This is the string reversed: " . strrev($movie) . "<br>";
		echo "There are " . substr_count($movie,",") . " commas in the string<br>";
		echo "<br>";
		
		$movieArray = explode(",",$movie);
		print_r($movieArray);
		echo "<br>";
		$movieArray[0] = "Blade Runner";
		$movieArray[1] = "1982";
		$movieArray[6] = "Sean Young";
		$implodedMovie = implode(";",$movieArray);
		echo "Imploded string from \$movieArray: $implodedMovie<br>";
		echo "<br>";
	
		$movie = "Blade Runer, 19882, R, Ridley Scott , Harrison Ford, Rutger Hauer, Sean Yung";
              //  Title , Year,  MPAA,  Director, Actors
		echo $movie . "<br>";

		$movie = str_replace("Runer","Runner",$movie);
		echo $movie . "<br>";
		$movie = str_replace("19882","1982",$movie);
		echo $movie . "<br>";
		$movie = str_replace("Yung","Young",$movie);
		echo $movie . "<br>";
	?>  
</body>
</html>