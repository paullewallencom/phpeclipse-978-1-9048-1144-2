<?php
/**
 * 
 * Page holds the Pet class.
 * 
 * This class is a superclass.
 * @author shuchow
 * @version 1.0
 * 
 */
/**
 * 
 * Pet object
 * 
 * Pet object is used as a superclass for all animal subclasses.
 * 
 */
 class Pet 
 {

	/**
	 * 
	 * Takes months and returns a string with the years and months.
	 * 
	 */
 	  function translateMonths($months)
		{
 		$returnMe = false;
 		
 		if ($months < 0 || !is_numeric($months)) 
 		{
 		}
		else if ($months < 12)
 		{
 			$returnMe = "0 years, " . $months . " months";
 		} 
 		else 
 		{
 			$years = floor($months / 12);
 			$months = $months % 12;
 			$returnMe = $years . " years, " . $months . " months";
 		}
 		
		return $returnMe;
 	 }
 	
 }
?>