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
	<title>My Booking</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>

<body>
	<center>
	<div class="navbar">
    <ul>
        <img src="../assets/l.jpg" alt="logo">
        <div class="back"><a href="profile.php">Back</a></div>  
        <h1 class="title">MY BOOKINGS</h1>   
        <li><a href="../index1.html">Home</a></li>
        <li><a href="../controller/logout.php">Logout</a></li>
    </ul>
    </div><br><br><br><br>
	

	<h1><?= $_COOKIE['loggedInName'] ?>'s  Package Bookings</h1> <br> <br>

	<div id= "search">
    <input type="text" id="name" name="name" value="" placeholder="Search By Location" 
    onkeyup="searchPBooking()" />
	<input type="button" class="book" name="click" value="Search" onclick="searchPBooking()"> <br><br>
    </div>

	<table border="1" align="center" width="1200px" id="pbooking">
		<tr height="120px" >
			<th>SL</th>
			<th>Full Name</th>
			<th>Contact Number</th>
			<th>Location</th>
			<th>Date</th>
			<th>Adult(s)</th>
			<th>Child(ren)</th>
			<th>Amount</th>
			<th>Action </th>
		</tr>

		<?php

		$username = $_COOKIE['loggedInName'];
		$result = getPBooking($username);
		while ($user = mysqli_fetch_assoc($result)) {

		if($user){

				echo '<tr height="90px" align="center">
					<td>' . $user['pid'] . '</td>
					<td>' . $user['fullname'] . '</td>
					<td>' . $user['number'] . '</td>
					<td>' . $user['location'] . '</td>
					<td>' . $user['date'] . '</td>
					<td>' . $user['adult'] . '</td>
					<td>' . $user['child'] . '</td>
					<td>' . $user['amount'] . '</td>
					<td>
						<a href="editPBooking.php?id='.$user['pid'].'"> <button class="book">EDIT</button></a> <br>
						<a href="../controller/dltPBooking.php?id='.$user['pid'].'"> <button class="dlt">Delete</button></a>
					</td>
				</tr>';
			}
		}
		?>
	</table> <br><br>

	<!-- Transport Booking List -->

		<h1><?= $_COOKIE['loggedInName'] ?>'s  Transport Bookings</h1> <br>

	<div id= "search">
    <input type="text" id="name1" name="name1" value="" placeholder="Search By Transport" 
    onkeyup="searchTBooking()" />
	<input type="button" class="book" name="click" value="Search" onclick="searchTBooking()"> <br><br>
    </div>

	<table border="1" align="center" width="1200px" id="tbooking">
		<tr height="120px" >
			<th>SL</th>
			<th>Full Name</th>
			<th>Contact Number</th>
			<th>Transport</th>
			<th>Date</th>
			<th>Days Required</th>
			<th>Address</th>
			<th>Amount</th>
			<th>Action </th>
		</tr>
		<?php

		$username = $_COOKIE['loggedInName'];
		$result = getTBooking($username);
		while ($user = mysqli_fetch_assoc($result)) {
		
		if($user){

				echo '<tr height="90px" align="center">
					<td>' . $user['tid'] . '</td>
					<td>' . $user['fullname'] . '</td>
					<td>' . $user['number'] . '</td>
					<td>' . $user['transport'] . '</td>
					<td>' . $user['date'] . '</td>
					<td>' . $user['days'] . '</td>
					<td>' . $user['address'] . '</td>
					<td>' . $user['amount'] . '</td>

					<td>
						<a href="editTBooking.php?id='. $user['tid'] .'"> <button class="book">EDIT</button></a> <br>
						<a href="../controller/dltTBooking.php?id='. $user['tid'] .'"> <button class="dlt">Delete</button></a>
					</td>
				</tr>';
			}
		}
?>

	</table><br><br>

	<h1><?= $_COOKIE['loggedInName'] ?>'s  Product Orders</h1> <br>

	<div id= "search">
    <input type="text" id="name2" name="name2" value="" placeholder="Search By Product" 
    onkeyup="searchSBooking()" />
	<input type="button" class="book" name="click" value="Search" onclick="searchSBooking()"> <br><br>
    </div>

	<table border="1" align="center" width="1200px" id="sbooking">
		<tr height="120px" >
			<th>SL</th>
			<th>Full Name</th>
			<th>Contact Number</th>
			<th>Address</th>
			<th>Product</th>
			<th>Quantity</th>
			<th>Amount</th>
			<th>Action </th>
		</tr>
<?php

		$username = $_COOKIE['loggedInName'];
		$result = getSOrders($username);
		while ($user = mysqli_fetch_assoc($result)) {
		
		if($user){

				echo '<tr height="90px" align="center">
					<td>' . $user['sid'] . '</td>
					<td>' . $user['fullname'] . '</td>
					<td>' . $user['number'] . '</td>
					<td>' . $user['address'] . '</td>
					<td>' . $user['product'] . '</td>
					<td>' . $user['quantity'] . '</td>
					<td>' . $user['amount'] . '</td>

					<td>
						<a href="editSBuy.php?id='.$user['sid'].'"> <button class="book">EDIT</button></a> <br>
						<a href="../controller/dltSBuy.php?id='.$user['sid'].'"> <button class="dlt">Delete</button></a>
					</td>
				</tr>';
			}
		}
	?>
	</table>

</center>

</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>


