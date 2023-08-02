<?php
require_once('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Shop Review</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
<body>
	<body>
	<div class="navbar">
    <ul>
        <img src="../assets/l.jpg" alt="logo">
        <div class="back"><a href="shop.html">Back</a></div>  
        <h1 class="title">SHOP REVIEW</h1>     
        <li><a href="../index1.html">Home</a></li>
        <li><a href="../controller/logout.php">Log Out</a></li>
    </ul>
    </div><br><br><br><br>

	<form method="post" action="sreviewcheck.php">
		<div class="rev">
			<h1>Review</h1>
			<table >
				<tr>
					<td colspan="2" class="label">Name:</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="name" value=""></td>
				</tr>
				
				<tr>
					<td colspan="2" class="label">Review: </td>
				</tr>
				<tr>
					<td colspan="2"><textarea class="tarea" name="sreview"></textarea><br><br> <br></td>
				</tr>
				<tr>
					<td align="left"><input type="reset" class="reset" name="reset" value="Reset"> </td>
					<td align="right"><input type="submit" class="submit" name="submit" value="Confirm"> </td>
				</tr>
				
				
			</table>
		</div>
	</form>


</body>
</html>