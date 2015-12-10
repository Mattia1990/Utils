<?php 

$dizionario = array("fish"=>"pesce", "snail"=>"lumaca", "lion"=>"leone", "whale"=>"balena");

$dizionario["cat"] = "gatto";
$dizionario["dog"] = "cane";

asort($dizionario);

foreach ($dizionario as $i => $el){
		echo $i."= $el";
		echo "<br>";
		};


?>
