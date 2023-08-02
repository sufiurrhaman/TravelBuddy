<?php
require_once('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Package Booking</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
<body>
	<body>
	<div class="navbar">
	<ul>
		<img src="../assets/l.jpg" alt="logo">	
		<div class="back"><a href="package.html">Back</a></div>
		<h1 class="title">BOOKING CONFIRMATION</h1>		
		<li><a href="../index1.html">Home</a></li>
		<li><a href="../controller/logout.php">Log Out</a></li>
    </ul>
    </div><br><br><br><br>

	<form method="post" action="pbookcheck.php">
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
					<td colspan="2" class="label">Location:</td>
				</tr>
				<tr>
					<td colspan="2" class="label"><select class="option" name="location">
				    <option value="Sajek" selected=" ">Sajek Valley</option>
				    <option value="Boga">Boga Lake</option>
				    <option value="Cox">Cox's Bazar</option>
				    <option value="Saint" >Saint Martin's Island</option>
				    <option value="Kuakata">Kuakata</option>
				    <option value="Humhum">Humhum Waterfall</option>
				    <option value="Dhuppani">Dhuppani Waterfall</option>
				    <option value="Panam" >Panam City</option>
				    <option value="Shalbon" >Shalban Bihar</option>
				    <option value="Shita" >Shitakundo</option>
				    <option value="Mohera" >Mohera</option>
			        </select></td>
				</tr>
				<tr>
					<td colspan="2" class="label">Date:</td>
				</tr>
				<tr>
					<td colspan="2"><input type="Date" name="date" value="" required pattern="\d{2}-\d{2}-\d{4}" min="2021-11-01" max="2021-12-31"></td>
				</tr>
				
				<tr>
					<td colspan="2" class="label">Adult(s):</td>
				</tr>
				<tr>
					<td colspan="2"><input type="number" name="adult"  min="1" max="30" ></td>
				</tr>
				<tr>
					<td colspan="2" class="label">Child(ren): </td>
				</tr>
				<tr>
					<td colspan="2"><input type="number" name="child"  min="0" max="30"></td>
				</tr>
				<tr>
					<td align="left"><input type="reset" class="reset" name="reset" value="Reset"> </td>
					<td align="right"><input type="submit" class="submit" name="submit" value="Confirm"> </td>
				</tr>
				
				
			</table>
		</fieldset>
	</form>


</body>
</html>