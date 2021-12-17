<?php 
$res = false;
if (isset($_POST["submit"])) {
	$dob_val = $_POST["dob"];
	$dob = new DateTime($dob_val);
	$today = new DateTime('today');
	$obj = date_diff($dob, $today, FALSE);
	$msgres = "<p> Date Of Birth is $dob_val  And Age is : $obj->y </p>";
	$msgres .= "<p>Year : ".$obj->y." Months : ".$obj->m." Days : ".$obj->d."</p>";
	$res = true;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Age Calculate From DOB in PHP Using Forms</title>
	</head>
	<body>
		<div id="php">
			<h2>Age Calculate From DOB in PHP Using Forms</h2>
			<form method="post">
				<p> Select The Date Of Birth : <input type="date" name="dob" required /></p>
				<p> <input type="submit" name="submit" value="Result"> </p>
			</form>
		</div>
		<?php
	if ($res) {
		echo "<div class='resultdiv'>  $msgres </div>";
	}
		?>
	</body>
</html>