<?php 
	
	$host 	= "localhost";
	$dbname = 'project';
	$dbuser = 'root';
	$dbpassword = '';

	function getConnection(){
		global $host;
		global $dbname;
		global $dbuser;
		global $dbpassword;
		
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con;
	}

?>