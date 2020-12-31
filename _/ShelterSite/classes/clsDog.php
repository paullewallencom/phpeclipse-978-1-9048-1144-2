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

 	private $dogID;
 	private $name;
 	private $gender;
 	private $age;
 	private $breed;

 	public function setDogID($dogID) { $this->dogID = $dogID; }
 	public function getDogID() { return $this->dogID; }
 	
 	public function setName($name) { 
 		
 		$this->name = $name; 
 		
 	}
 	public function getName() { return $this->name; }
 	
 	public function setGender($gender) { $this->gender = $gender; }
 	public function getGender() { return $this->gender; }
 	
 	public function setAge($age) { $this->age = $age; }
 	public function getAge() { return $this->age; }
 	
 	public function setBreed($breed) { $this->breed = $breed; }
 	public function getBreed() { return $this->breed; }
 	
 	public function __construct() 
 	{
 	}

 }
?>
