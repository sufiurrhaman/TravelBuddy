<?php 
	require_once('db.php');


	function validateTAdmin($username, $password){
		$con = getConnection();
		$sql= "select * from transadmins where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user){
			return true;
		}else{
			return false;
		}
	}

	function addTransAdmin($user){
		$con = getConnection();
		$sql= "insert into transadmins values('','{$user['name']}','{$user['username']}','{$user['email']}','{$user['num']}', 
		'{$user['password']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllTransAdmins(){
		$con = getConnection();
		$sql= "select * from transadmins";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getTransAdminByName($name){
		$con = getConnection();
		$sql= "select * from transadmins where name like '%{$name}%'";
		$result = mysqli_query($con, $sql);
		//$user = mysqli_fetch_assoc($result);
		return $result;
	}

	function getTransAdminByUName($username){
		$con = getConnection();
		$sql= "select * from transadmins where username='{$username}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getTransAdminByID($id){
		$con = getConnection();
		$sql= "select * from transadmins where taid={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editTransAdmin($user){
		$con = getConnection();
		$sql= "update transadmins set name='{$user['name']}', username='{$user['username']}', email='{$user['email']}', num='{$user['num']}', password='{$user['password']}' where taid={$user['taid']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function deleteTransAdmin($id){
		$con = getConnection();
		$sql= "delete from transadmins where taid={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}



?>