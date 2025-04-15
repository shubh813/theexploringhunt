<?php

$num=0;
for ($num=0;$num<=4;$num++){
	for ($j=0;$j<=$num;$j++){
		echo "W";
	}
	echo "<br>";
}
$array = array("Amit" => "BCA", "Aakarsh"=>"Btech");
foreach($array as $name => $course){
	echo "<br>Name is ".$name." \n and course is ".$course;
}
?>