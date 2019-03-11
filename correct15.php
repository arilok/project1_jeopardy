<!DOCTYPE html>
<html lang = "en">
   
<head>
    <meta charset = "UTF-8">
	<link href="homeStyleSheet.css" rel="stylesheet" type="text/css">
    <title>Jeopardy</title>
</head>

<body bgcolor ="#000099">
	<?php
		$answer = "alan turing";
		$value = $_COOKIE["score"];
		if ($_POST["answer"] == $answer) {
			echo "<h1>Correct!</h1>";			
			setcookie("score", ++$value, time() + 3600);


	} else {
		echo "<h1>Incorrect!</h1>";
	}
	
	?>
	<a href = "http://codd.cs.gsu.edu/~clee122/project2/gameStart.php"><h2> Home</h2></a>

	
	
	
</body>
</html>