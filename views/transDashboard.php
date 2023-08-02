<?php

session_start();
require_once('header.php');
require_once('../model/transModel.php');
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TransAdmin</title>
	<link rel="stylesheet" type="text/css" href="../css/adminstyle.css">
</head>
<body>
	<div class="bar">
	<ul>
		<img src="../assets/l.jpg" alt="logo" >	
		<h1 class="title">Trans Admin DashBoard</h1>		
		<li><a href="../index1.html">Home</a></li>
		<li><a href="transProfile.php">Profile</a></li>
		<li><a href="../controller/logout.php">Logout </a></li>
    </ul>
</div>

<?php

	$username = $_COOKIE['loggedInName'];
	$result = getAllTBooking();
	$rows = mysqli_num_rows($result);
	$amount =0;

	while ($user = mysqli_fetch_assoc($result)) {
		$amount += $user['amount'];
	}
?>

		<table class="box1">
			<tr height="50px" align="center">
			<td class="header">TRANSPORT</td>
		    </tr>
			<tr height="60px" align="center">
			<td> Total Transport Orders</td>
			<td><?= $rows ?></td>
		    </tr> 
		    <tr height="60px" align="center">
			<td> Total Transport Orders Amount</td>
			<td><?= $amount.' BDT'?></td>
		    </tr>
		</table>


	<div class="sidebar">
		<ul>
			<li><li><a href="userlist.php"> View UserList </a></li>
			<li><a href="addTransAdmin.html"> Add Transport Admin </a></li>
			<li><a href="transAdminlist.php"> View Transport AdminList </a></li>
			<li><a href="tBookinglist.php"> View Transport Bookings </a></li>
			<li><a href="tReviewlist.php"> View Transport Reviews </a></li>
		</ul>
    </div>


</body>
</html>