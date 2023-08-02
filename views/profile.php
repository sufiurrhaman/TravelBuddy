<?php 

	session_start();
	require_once('header.php');
	require_once('../model/usersModel.php');
	require_once('../model/adminModel.php');
	require_once('../model/transadminModel.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>

<body>
	<center>
	<div class="navbar">
    <ul>
        <img src="../assets/l.jpg" alt="logo">
        <div class="back"><a href="../index1.html">Back</a></div>  
        <h1 class="title">Welcome <?= $_COOKIE['loggedInName'] ?></h1> 
        <li><a href="myBooking.php">My Bookings </a></li>
        <li><a href="myReview.php">My Reviews </a></li>    
        <li><a href="../index1.html">Home</a></li>
        <li><a href="../controller/logout.php">Logout</a></li>
    </ul>
    </div><br><br><br><br>

	

	<h1></h1><br>
	<!-- <img src="../assets/upload/<?= $_SESSION['profile'] ?>" width="100px" height="100px"><br> -->

	<table class="box">
		<tr height="120px" >
			<th>NAME</th>
			<th>USER NAME</th>
			<th>EMAIL</th>
			<th>PHONE NUMBER</th>
			<th>PASSWORD</th>
			<th>ACTION</th>
		</tr>
		<?php

		$username = $_COOKIE['loggedInName'];
		$user = getUserByUname($username);

		if($user){

				echo '<tr height="90px" align="center">
					<td>' . $user['name'] . '</td>
					<td>' . $user['username'] . '</td>
					<td>' . $user['email'] . '</td>
					<td>' . $user['num'] . '</td>
					<td>' . $user['password'] . '</td>
					<td>
						<a href="editProfile.php?id='.$user['uid'].'"> <button class="book">EDIT</button></a> <br>
						
					</td>
				</tr>';
			}
		
		?>
	</table>

</center>

</body>

</html>


