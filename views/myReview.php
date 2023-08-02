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
	<title>My Review</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>

<body>
	<center>
	<div class="navbar">
    <ul>
        <img src="../assets/l.jpg" alt="logo">
        <div class="back"><a href="profile.php">Back</a></div>  
        <h1 class="title">MY REVIEWS</h1>   
        <li><a href="../index1.html">Home</a></li>
        <li><a href="../controller/logout.php">Logout</a></li>
    </ul>
    </div><br><br><br><br>
	

	<h1><?= $_COOKIE['loggedInName'] ?>'s  Review</h1>

	<table border="1" align="center" width="1200px">
		<tr height="120px" >
			<th>Full Name</th>
			<th>Review</th>
			<th>Action </th>
		</tr>
		<?php

		$username = $_COOKIE['loggedInName'];
		$result = getPreview($username);
		while ($user = mysqli_fetch_assoc($result)) {

		if($user){

	
				echo '<tr height="90px" align="center">
					<td>' . $user['fullname'] . '</td>
					<td>' . $user['review'] . '</td>
					<td>
					<a href="../controller/dltPReview.php?id='.$user['prid'].'"> <button class="dlt">Delete</button></a>
					</td>
				</tr>';
			}
			}


		$result = getTreview($username);
		while ($user = mysqli_fetch_assoc($result)) {

		if($user){

				echo '<tr height="90px" align="center">
					<td>' . $user['fullname'] . '</td>
					<td>' . $user['review'] . '</td>
					<td>
					<a href="../controller/dltTReview.php?id='.$user['trid'].'"> <button class="dlt">Delete</button></a>
					</td>
				</tr>';
			}
		}

		$result = getSreview($username);
		while ($user = mysqli_fetch_assoc($result)) {

		if($user){

				echo '<tr height="90px" align="center">
					<td>' . $user['fullname'] . '</td>
					<td>' . $user['review'] . '</td>
					<td>
					<a href="../controller/dltSReview.php?id='.$user['srid'].'"> <button class="dlt">Delete</button></a>
					</td>
				</tr>';
			}
		}
?>
	</table> 

</center>

</body>

</html>


