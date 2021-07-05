<?php 

$date = new DateTime();

$interval = new DateInterval("P14D");

$date->add($interval);

echo $date->format("d/m/y");

?>