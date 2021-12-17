<form action="test.php" method="post">   

Enter your date of birth:
<select name="month" >
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>

</select>
<select name="day" id="day">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
<select name="year" id="year">
<option value="1">2013</option>
<option value="2">2012</option>
<option value="3">2011</option>
</select>
<input type="submit" name="submit" value="age" >


<?php
if (isset($_POST['submit']))
{
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
if ($year != '' && $month != '' && $day != '') {
$birthDate = $year.'-'.$month.'-'.$day;

$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1],  $birthDate[0]))) > date("md") ? ((date("Y")-$birthDate[0])-1):(date("Y")-$birthDate[0]));
echo "Age is: ".$age;
}}
?>