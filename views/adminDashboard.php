<?php 

	session_start();
	require_once('header.php');
	require_once('../model/packageModel.php');
	require_once('../model/transModel.php');
	require_once('../model/shopModel.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/adminstyle.css">
</head>
<body>
	<div class="bar">
	<ul>
		<img src="../assets/l.jpg" alt="logo" >	
		<h1 class="title">Admin DashBoard</h1>		
		<li><a href="../index1.html">Home</a></li>
		<li><a href="adminProfile.php">Profile</a></li>
		<li><a href="../controller/logout.php">Logout </a></li>
    </ul>
    </div>
   

<?php

		$result = getAllPBooking();
		$rows = mysqli_num_rows($result);
		$amount =0;

		while ($user = mysqli_fetch_assoc($result)) {

				$amount += $user['amount'];
			}
?>

	
	<table class="box1">
		<tr  height="50px" align="center">
			<td class="header">PACKAGE</td>
		</tr>
		<tr height="60px" align="center">
		<td> Total Package Bookings</td>
		<td><?= $rows ?></td>
	    </tr> 
	    <tr height="60px" align="center">
		<td> Total Package Amount</td>
		<td><?= $amount.' BDT'?></td>
	    </tr>
	</table>
	
<?php

	$result = getAllTBooking();
	$rows = mysqli_num_rows($result);
	$amount =0;

	while ($user = mysqli_fetch_assoc($result)) {

			$amount += $user['amount'];
		}
?>

	
	<table class="box2">
		<tr height="50px" align="center">
			<td class="header">TRANSPORT</td>
		</tr>
		<tr height="60px" align="center">
		<td> Total Transport Bookings</td>
		<td><?= $rows ?></td>
	    </tr> 
	    <tr height="60px" align="center">
		<td> Total Transport Amount</td>
		<td><?= $amount.' BDT'?></td>
	    </tr>
	</table>


<?php

		$result = getAllSBooking();
		$rows = mysqli_num_rows($result);
		$amount =0;

		while ($user = mysqli_fetch_assoc($result)) {

				$amount += $user['amount'];
			}
?>

		<table class="box3">
			<tr height="50px" align="center">
			<td class="header">SHOP</td>
		    </tr>
			<tr height="60px" align="center">
			<td> Total Shop Orders</td>
			<td><?= $rows ?></td>
		    </tr> 
		    <tr height="60px" align="center">
			<td> Total Shop Orders Amount</td>
			<td><?= $amount.' BDT'?></td>
		    </tr>
		</table>
       <div class="sidebar">
		<ul>
			<li><a href="addAdmin.html"> Add Admin </a></li>
			<li><a href="addTransAdmin.html"> Add Transport Admin </a></li>
			<li><li><a href="userlist.php"> View UserList </a></li>
			<li><a href="adminlist.php"> View AdminList </a></li>
			<li><a href="transAdminlist.php"> View Transport AdminList </a></li>
			<li><a href="pBookinglist.php"> View Package Bookings </a></li>
			<li><a href="pReviewlist.php"> View Package Reviews </a></li>
			<li><a href="tBookinglist.php"> View Transport Bookings </a></li>
			<li><a href="tReviewlist.php"> View Transport Reviews </a></li>
			<li><a href="sBuylist.php"> View Shop Orders </a></li>
			<li><a href="sReviewlist.php"> View Shop Reviews </a></li>
		</ul>
    </div>
	


</body>
</html>