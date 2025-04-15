<?php
$num=1;
if ($num==1){
	$name = $_POST["myName"];
	$roll = $_POST["myRoll"];
	$mynum = $_POST["myNo"];
	$mymail = $_POST["myMail"];
	alert("Success");
	echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
	echo "<P> Name is <strong>$name</strong></p>";
	echo "<P> My Roll Number is <strong>$roll</strong></p>";
	echo "<P> Phone Number is <strong>$mynum</strong></p>";
	echo "<P> Mailid is <strong>$mymail</strong></p>";
}
echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
?>