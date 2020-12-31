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

 	private $catID;
 	private $name;
 	private $gender;
 	private $age;
 	private $breed;

 	public function setCatID($catID) { $this->catID = $catID; }
 	public function getCatID() { return $this->catID; }
 	
 	public function setName($name) { $this->name = $name; }
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
