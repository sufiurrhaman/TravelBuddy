<?php 
    require_once('db.php');

    function sbooking($user){
		$con = getConnection();
		$sql= "insert into shoporders values('','{$user['username']}',
				'{$user['fullname']}',
				'{$user['number']}',
				'{$user['address']}',
				'{$user['product']}',
				'{$user['quantity']}', 
			    '{$user['amount']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllSBooking(){
		$con = getConnection();
		$sql= "select * from shoporders";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function editSOrder($user){
		$con = getConnection();
		$sql= "update shoporders set 
					username = '{$user['username']}', 
					fullname = '{$user['fullname']}', 
					number = '{$user['number']}',
					address = '{$user['address']}', 
					product = '{$user['product']}',
					quantity = '{$user['quantity']}',
					amount = '{$user['amount']}' where sid={$user['sid']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function sreview($user){
		$con = getConnection();
		$sql= "insert into sreview values('','{$user['username']}',
				'{$user['fullname']}',
			    '{$user['review']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllSreview(){
		$con = getConnection();
		$sql= "select * from sreview";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getSOrdersByID($id){
		$con = getConnection();
		$sql= "select * from shoporders where sid={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getSOrders($username){
		$con = getConnection();
		$sql= "select * from shoporders where username='{$username}'";
		$result = mysqli_query($con, $sql);
		//$user = mysqli_fetch_assoc($result);
		return $result;
	}

	function getSreview($username){
		$con = getConnection();
		$sql= "select * from sreview where username='{$username}'";
		$result = mysqli_query($con, $sql);
		//$user = mysqli_fetch_assoc($result);
		return $result;
	}

	function deleteSreview($id){
		$con = getConnection();
		$sql= "delete from sreview where srid={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteSOrders($id){
		$con = getConnection();
		$sql= "delete from shoporders where sid={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getSBookingByProduct($product){
		$con = getConnection();
		$sql= "select * from shoporders where product like '%{$product}%'";
		$result = mysqli_query($con, $sql);
		//$user = mysqli_fetch_assoc($result);
		return $result;
	}


?>