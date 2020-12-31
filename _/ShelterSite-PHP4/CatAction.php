<?php

$_POST['Name'] = "Boo";
$_POST['Gender'] = "Male";
$_POST['Age'] = "84";
$_POST['Breed'] = "Domestic Long Hair";

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
	insertCat($_POST['Name'], $_POST['Gender'], $_POST['Age'], $_POST['Breed']);
} 
else 
{
	die("A general error has occured.  Please use your back button to go back one page and try this again.");
}
 function insertCat($name, $gender, $age, $breed) 
 {
	$sql = "INSERT INTO tCat VALUES ('" . $name . "', '" . $gender . "', " . $age . ", '" . $breed . "')";
	
	//Do database stuff here.
}

?>
