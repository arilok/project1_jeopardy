<!DOCTYPE html>
<html lang = "en">
   
<head>
    <meta charset = "UTF-8">
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
    <title>Jeopardy</title>
</head>

<body background="129.jpg">


	<h1> JEOPARDY </h1>
	<br><br>
	<h2> Welcome <?php print $_POST["player_name"] ?> </h2>

	<table>
		<tr>
			<th> Web Dev </th>
			<th> Math </th>
			<th> Misc </th>

		</tr>

		<tr>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q2.php"> $200 </a></td>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q6.php"> $200 </a></td>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q11.php"> $200 </a></td>

		</tr>

		<tr>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q3.php"> $400 </a></td>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q7.php"> $400 </a></td>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q12.php"> $400 </a></td>

		</tr>

		<tr>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q4.php"> $600 </a></td>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q8.php"> $600 </a></td>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q13.php"> $600 </a></td>

		</tr>

		<tr>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q1.php"> $800 </a></td>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q9.php"> $800 </a></td>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q14.php"> $800 </a></td>

		</tr>

		<tr>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q5.php"> $1000 </a></td>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q10.php"> $1000 </a></td>
			<td><a href = "http://codd.cs.gsu.edu/~clee122/project2/q15.php"> $1000 </a></td>

		</tr> 
	</table>
	<br>
	<br>
	
	
	<h3 align = "center">Score: <?php echo $_COOKIE["score"]; ?></h3>

	
</body>
</html>