<?php 
    require_once('db.php');

    function tbooking($user){
		$con = getConnection();
		$sql= "insert into tbookings values('','{$user['username']}',
				'{$user['fullname']}',
				'{$user['number']}',
				'{$user['transport']}',
				'{$user['date']}',
				'{$user['days']}', 
				'{$user['address']}',
			    '{$user['amount']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllTBooking(){
		$con = getConnection();
		$sql= "select * from Tbookings";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getTBookingByID($id){
		$con = getConnection();
		$sql= "select * from tbookings where tid={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editTBooking($user){
		$con = getConnection();
		$sql= "update tbookings set 
					username = '{$user['username']}', 
					fullname = '{$user['fullname']}', 
					number = '{$user['number']}',
					transport = '{$user['transport']}', 
					date = '{$user['date']}',
					days = '{$user['days']}',
					address = '{$user['address']}',
					amount = '{$user['amount']}' where tid={$user['tid']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function treview($user){
		$con = getConnection();
		$sql= "insert into treview values('','{$user['username']}',
				'{$user['fullname']}',
			    '{$user['review']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllTreview(){
		$con = getConnection();
		$sql= "select * from treview";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getTBooking($username){
		$con = getConnection();
		$sql= "select * from tbookings where username='{$username}'";
		$result = mysqli_query($con, $sql);
		//$user = mysqli_fetch_assoc($result);
		return $result;
	}

	function getTreview($username){
		$con = getConnection();
		$sql= "select * from treview where username='{$username}'";
		$result = mysqli_query($con, $sql);
		//$user = mysqli_fetch_assoc($result);
		return $result;
	}

	function deleteTreview($id){
		$con = getConnection();
		$sql= "delete from treview where trid={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteTbooking($id){
		$con = getConnection();
		$sql= "delete from tbookings where tid={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getTBookingByTrans($trans){
		$con = getConnection();
		$sql= "select * from tbookings where transport like '%{$trans}%'";
		$result = mysqli_query($con, $sql);
		//$user = mysqli_fetch_assoc($result);
		return $result;
	}

?>