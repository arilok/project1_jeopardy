<!DOCTYPE html>
<html lang = "en">
   
<head>
    <meta charset = "UTF-8">
	<link href="homeStyleSheet.css" rel="stylesheet" type="text/css">
    <title>Jeopardy</title>
</head>

<body background="128.jpg">
	
	<form action = "http://codd.cs.gsu.edu/~clee122/project2/gameStart.php" method = "post">
		
			<h2> Welcome to Jeopardy</h2>
			<h1> Please enter your name: <input type = "text" name = "player_name"> <input type = "submit" value = "submit"></h1>
	</form>
	<?php
		$value = 0;
		setcookie("value", $value, time() + 3600);
		setcookie("score", $value, time() + 3600);
	?>

</body>
</html>