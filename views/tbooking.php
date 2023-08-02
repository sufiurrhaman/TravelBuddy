<?php
require_once('header.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Transport Booking</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
<body>
	<body>
	<div class="navbar">
	<ul>
		<img src="../assets/l.jpg" alt="logo">	
		<div class="back"><a href="transport.html">Back</a></div>
		<h1 class="title">BOOKING CONFIRMATION</h1>		
		<li><a href="../index1.html">Home</a></li>
		<li><a href="../controller/logout.php">Log Out</a></li>
    </ul>
    </div><br><br><br><br>

	<form method="post" action="tbookcheck.php">
		<div class="reg">
			<h1>Booking Confirmation</h1>
			<table >
				<tr>
					<td colspan="2" class="label">Full Name:</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td colspan="2" class="label">Contact Number:</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="number" value=""></td>
				</tr>
				<tr>
					<td colspan="2" class="label">transport:</td>
				</tr>
				<tr>
					<td colspan="2"><select class="option" name="transport">
				    <option value="Car" selected=" ">Car</option>
				    <option value="Noah">Noah</option>
				    <option value="Hiace">Hiace</option>
				    <option value="Mini" >Mini Bus</option>
				    <option value="Bus">Bus</option>
			        </select></td>
				</tr>
				<tr>
					<td colspan="2" class="label">Date:</td>
				</tr>
				<tr>
					<td colspan="2"><input type="Date" name="date" value="" required pattern="\d{2}-\d{2}-\d{4}" min="2021-11-01" max="2021-12-31"></td>
				</tr>
				
				<tr>
					<td colspan="2" class="label">Day(s) Required :</td>
				</tr>
				<tr>
					<td colspan="2"><input type="number" name="dr"  min="1" max="30" ></td>
				</tr>
				<tr>
					<td colspan="2" class="label">Address: </td>
				</tr>
				<tr>
					<td colspan="2"><textarea class="tarea" name="address"></textarea></td>
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