<?php
if(isset($_POST["submit"]))
{
$date1=$_POST['date'];

$hours_in_day   = 24;
$minutes_in_hour= 60;
$seconds_in_mins= 60;

$birth_date     = new DateTime("$date1");
$current_date   = new DateTime();

$diff           = $birth_date->diff($current_date);
?>
<div class = "san"> <strong>Age in Years: </strong><?php echo $years     = $diff->y . " years " ; echo "<br/>"; ?></div>
<?php
}
?>