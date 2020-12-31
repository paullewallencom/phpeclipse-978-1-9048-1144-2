<?php


/*
 * Debugging overview example
$catID = 1;
$catName = "Crinkle";
$catID = 42;

$hb = getHairball("Gack");

echo $catName . " presents a hairball!\r" . $hb;

die("End of Script");

function getHairball($sound) 
{
	$size = 6;
	$sound = " *Urp* ";
	$hairball = str_repeat($sound, $size);
	
	return $hairball;	
}

 */
 
 
 
/*
 * Debugging arrays - Variable View
 *
$myArray = array();
$myArray[0] = "Zero";
$myArray[1] = "One";

die("end of script");
*/



/*
 * Debugging  multi dimensional arrays - Varaiable View
$myArray = array();
$myArray[0][0] = "Zero";
$myArray[1][0] = "One";
$myArray[0][1] = "Zero and One";
$myArray[1][1] = "One and One";

die("end of script");
*/



/*
 * Debbugging variable index/associative Arrays - Variables View
$myArray = array();
$key = "Zero";
$myArray[$key] = 0;
$key = "One";
$myArray[$key] = 1;
$key = "Two";
$myArray[$key] = 2;
die("end of script");
*/



/*
 * Debugging Objects - Variables View
require_once("classes/clsCat.php");
$catObj = new Cat();
$catObj->setName("Roman");
$catObj->setGender("Male");
$catObj->setBreed("Orange Tabby DSH");
die("end of script");
*/




/*
 * Replacing variable values example
 *
require_once("classes/clsCat.php");
$catObj = new Cat();
$catObj->setName("Roman");
$catObj->setGender("Male");
$catObj->setBreed("Orange Tabby DSH");
$catObj->setAge("60");
$ageString = $catObj->getAge() . " months old";

$output = "The cat's name is " . $catObj->getName() . ".  Age: " . $ageString;

die("End of Script");
*/

/*
 * Watching Variables example 
 * 
$testArr = array();
$testArr[0] = 1;
$testArr[1] = 2; 
 
$gidgetWeight = 5;
$gidgetWeight = eat($gidgetWeight);
$gidgetWeight = eat($gidgetWeight);
$gidgetWeight = eat($gidgetWeight);
settype($gidgetWeight, "string");
function eat($weight) {
	return $weight + 5;
}

*/

?>
