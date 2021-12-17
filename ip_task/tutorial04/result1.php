<?php

$principle=$_POST['p'];
$rate=$_POST['r'];
$year=$_POST['y'];

$si=($principle*$rate*$year)/100;

echo "$si";
?>