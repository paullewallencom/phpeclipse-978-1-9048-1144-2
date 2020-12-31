<?php
/**
 * 
 * Page holds the Dog class.
 * 
 * This class handles the Dog object.
 * @author shuchow
 * @version 1.0
 * 
 */
/**
 * 
 * Dog Object
 * 
 * Solely a data object for a dog.
 * 
 */
require_once("clsPet.php");

 class Dog extends Pet
 {

 	var $dogID;
 	var $name;
 	var $gender;
 	var $age;
 	var $breed;

 	 function setDogID($catID) { $this->dogID = $dogID; }
 	 function getDogID() { return $this->dogID; }
 	
 	 function setName($name) { $this->name = $name; }
 	 function getName() { return $this->name; }
 	
 	 function setGender($gender) { $this->gender = $gender; }
 	 function getGender() { return $this->gender; }
 	
 	 function setAge($age) { $this->age = $age; }
 	 function getAge() { return $this->age; }
 	
 	 function setBreed($breed) { $this->breed = $breed; }
 	 function getBreed() { return $this->breed; }
 	
 	 function Dog() 
 	{
 	}

 }
?>
