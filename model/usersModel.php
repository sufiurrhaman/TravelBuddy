<?php 
	require_once('db.php');

	function validate($username, $password){
		$con = getConnection();
		$sql= "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user){
			return true;
		}else{
			return false;
		}
	}

	function addUser($user){
		$con = getConnection();
		$sql= "insert into users values('','{$user['name']}','{$user['username']}','{$user['email']}','{$user['num']}', 
		'{$user['password']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$con = getConnection();
		$sql= "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUserByID($id){
		$con = getConnection();
		$sql= "select * from users where uid={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getUserByUname($username){
		$con = getConnection();
		$sql= "select * from users where username='{$username}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getUserByName($name){
		$con = getConnection();
		$sql= "select * from users where name like '%{$name}%'";
		$result = mysqli_query($con, $sql);
		//$user = mysqli_fetch_assoc($result);
		return $result;
	}

	function editUser($user){
		$con = getConnection();
		$sql= "update users set name='{$user['name']}', username='{$user['username']}', email='{$user['email']}', num='{$user['num']}', password='{$user['password']}' where uid={$user['uid']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql= "delete from users where uid={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	

?>