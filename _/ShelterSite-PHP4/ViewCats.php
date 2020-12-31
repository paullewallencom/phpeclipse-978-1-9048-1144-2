<?php

require("classes/clsDatabase.php");
require("classes/clsCatView.php");

$dbObj = new Database();
$listingObj = new CatView();

$listingArr = $listingObj->getAllCatsArray($dbObj->getDbConn());

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en_US" xml:lang="en_US">
<head>
<title>Available Cats</title>
<link href="styles/shelter.css" type="text/css" rel="stylesheet" />
</head>
<body>
<h1>Available Cats</h1>
<table>
<tr>
<th>Name</th>
<th>ID Number</th>
<th>Age</th>
<th>Gender</th>
<th>Breed</th>
</tr>
<?php
	 foreach ($listingArr as $key=>$value) {
?>
<tr>
<td><?= $value->getName() ?></td>
<td><?= $value->getCatID() ?></td>
<td><?= $value->translateMonths($value->getAge()) ?></td>
<td><?= $value->getGender() ?></td>
<td><?= $value->getBreed() ?></td>
</tr>
<?
	 } 
?>
</table>
</body>
</html>
