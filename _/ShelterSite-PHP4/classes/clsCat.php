<?php
/**
 * 
 * Page holds the Cat class.
 * 
 * This class handles the Cat object.
 * @author shuchow
 * @version 1.0
 * 
 */
/**
 * 
 * Cat Object
 * 
 * Solely a data object for a cat.
 * 
 */
require_once("clsPet.php");

 class Cat extends Pet
 {

 	var $catID;
 	var $name;
 	var $gender;
 	var $age;
 	var $breed;

 	 function setCatID($catID) { $this->catID = $catID; }
 	 function getCatID() { return $this->catID; }
 	
 	 function setName($name) { $this->name = $name; }
 	 function getName() { return $this->name; }
 	
 	 function setGender($gender) { $this->gender = $gender; }
 	 function getGender() { return $this->gender; }
 	
 	 function setAge($age) { $this->age = $age; }
 	 function getAge() { return $this->age; }
 	
 	 function setBreed($breed) { $this->breed = $breed; }
 	 function getBreed() { return $this->breed; }
 	
 	 function Cat() 
 	{
 	}

 }
?>
