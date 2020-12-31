<?php
/**
 * 
 * Page holds the Cat View class.
 * 
 * This class handles all view operations for the Cat Object
 * @author shuchow
 * @version 1.0
 * 
 */
/**
 * 
 * CatView Object
 * 
 * This class is invoked by front users.  Interfaces with the Database an Cat
 * objects.
 * 
 */
class CatView {
	
	/**
	 * 
	 * Goes into the database and pulls all cat records, places them into cat
	 * object.  Places all the objects into an array and returns the array.
	 * 
	 */
 	 function getAllCatsArray($conn) 
 	{
 		require_once("clsCat.php");
 		
 		$sql = "SELECT * FROM tCat ORDER BY CatID";
 		$e = mysql_query($sql, $conn);
 		$catArr = array();
 		$i = 0;

 		while ($rs = mysql_fetch_array($e)) {
 			$catArr[$i] = new Cat();
 			$catArr[$i]->setCatID($rs['CatID']);
 			$catArr[$i]->setName($rs['Name']);
 			$catArr[$i]->setGender($rs['Gender']);
 			$catArr[$i]->setAge($rs['Age']);
 			$catArr[$i]->setBreed($rs['Breed']);
 			$i++;
 		}
 		
 		return $catArr;
 	}
 	 /**
	 * 
	 * Returns a record set of a cat based on the ID number.
	 * 
	 */
 	function getACat($id, $dbConn) 
 	{
 		$sql = "SELECT * FROM tCat WHERE CatID = " . $id;	
 		$e = mysql_query($sql, $dbConn);
 		return mysql_fetch_array($e);		
 	}
}
?>
