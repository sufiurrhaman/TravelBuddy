<?php 
	require_once('db.php');

	function pbooking($user){
		$con = getConnection();
		$sql= "insert into pbookings values('','{$user['username']}',
				'{$user['fullname']}',
				'{$user['number']}',
				'{$user['location']}',
				'{$user['date']}',
				'{$user['adult']}', 
				'{$user['child']}',
			    '{$user['amount']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllPBooking(){
		$con = getConnection();
		$sql= "select * from pbookings";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getPBookingByID($id){
		$con = getConnection();
		$sql= "select * from pbookings where pid={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editPBooking($user){
		$con = getConnection();
		$sql= "update pbookings set 
					username = '{$user['username']}', 
					fullname = '{$user['fullname']}', 
					number = '{$user['number']}',
					location = '{$user['location']}', 
					date = '{$user['date']}',
					adult = '{$user['adult']}',
					child = '{$user['child']}',
					amount = '{$user['amount']}' where pid={$user['pid']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function preview($user){
		$con = getConnection();
		$sql= "insert into preview values('','{$user['username']}',
				'{$user['fullname']}',
			    '{$user['review']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getPBooking($username){
		$con = getConnection();
		$sql= "select * from pbookings where username='{$username}'";
		$result = mysqli_query($con, $sql);
		//$user = mysqli_fetch_assoc($result);
		return $result;
	}

	function getPreview($username){
		$con = getConnection();
		$sql= "select * from preview where username='{$username}'";
		$result = mysqli_query($con, $sql);
		//$user = mysqli_fetch_assoc($result);
		return $result;
	}

	function getAllPreview(){
		$con = getConnection();
		$sql= "select * from preview";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function deletePreview($id){
		$con = getConnection();
		$sql= "delete from preview where prid={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deletePbooking($id){
		$con = getConnection();
		$sql= "delete from pbookings where pid={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getPBookingByLoc($location){
		$con = getConnection();
		$sql= "select * from pbookings where location like '%{$location}%'";
		$result = mysqli_query($con, $sql);
		//$user = mysqli_fetch_assoc($result);
		return $result;
	}



?>