<?php
/**
 * 
 * Page holds the Database class.
 * 
 * This class handles all database operations in our application.
 * @author shuchow
 * @version 1.0
 * 
 */
/**
 * 
 * Database object
 * 
 * Database connection is held as a class variable.  It is set when
 * instantiated.
 * 
 */
	class Database 
	 {
		
	 	var $dbConn;
	
		/**
		 * 
		 * Returns the database connection
		 * 
		 */	 	
	 	 function getDbConn() 
		{
			return $this->dbConn;
		}
		 	
		/**
		*
		*Constructor instantiates db connection
		*
		*/ 
		 function Database() 
		{
		//Connect to the Server
		$this->dbConn = @mysql_connect("localhost", "eclipse", "melanie") or die("Couldn't connect to the MySQL server.");

		//Connect to the ShelterSite database.
		mysql_select_db("Shelter", $this->dbConn) or die("Couldn't connect to the Shelter database.");
		}

	}

?>	
	
	