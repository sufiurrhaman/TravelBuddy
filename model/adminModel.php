<?php 
	require_once('db.php');

	function validateAdmin($username, $password){
		$con = getConnection();
		$sql= "select * from admins where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user){
			return true;
		}else{
			return false;
		}
	}

	function addAdmin($user){
		$con = getConnection();
		$sql= "insert into admins values('','{$user['name']}','{$user['username']}','{$user['email']}','{$user['num']}', 
		'{$user['password']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllAdmins(){
		$con = getConnection();
		$sql= "select * from admins";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getAdminByName($name){
		$con = getConnection();
		$sql= "select * from admins where name like '%{$name}%'";
		$result = mysqli_query($con, $sql);
		//$user = mysqli_fetch_assoc($result);
		return $result;
	}

	function getAdminByUName($username){
		$con = getConnection();
		$sql= "select * from admins where username='{$username}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAdminByID($id){
		$con = getConnection();
		$sql= "select * from admins where aid={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editAdmin($user){
		$con = getConnection();
		$sql= "update admins set name='{$user['name']}', username='{$user['username']}', email='{$user['email']}', num='{$user['num']}', password='{$user['password']}' where aid={$user['aid']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteAdmin($id){
		$con = getConnection();
		$sql= "delete from admins where aid={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


?>