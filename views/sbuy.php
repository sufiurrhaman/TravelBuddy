<?php
require_once('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Purchase</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
<body>
	<body>
	<div class="navbar">
	<ul>
		<img src="../assets/l.jpg" alt="logo">	
		<div class="back"><a href="package.html">Back</a></div>
		<h1 class="title">ORDER CONFIRMATION</h1>		
		<li><a href="../index1.html">Home</a></li>
		<li><a href="../controller/logout.php">Log Out</a></li>
    </ul>
    </div><br><br><br><br>

	<form method="post" action="sbuycheck.php">
		<div class="reg">
			<h1>Purchasing Confirmation</h1>
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
					<td colspan="2" class="label">Address: </td>
				</tr>
				<tr>
					<td colspan="2"><textarea class="tarea" name="address"></textarea> </td>
				</tr>
				<tr>
					<td colspan="2" class="label">Product:</td>
				</tr>
				<tr>
					<td colspan="2"><select class="option" name="product">
				    <option value="Tent" selected=" ">Tent</option>
				    <option value="Stove">Stove</option>
				    <option value="LifeJacket">Life Jacket</option>
				    <option value="Pillow" >Inflatable Pillow</option>
				    <option value="Hammock">Hammock</option>
				    <option value="Pant">Trekking Pant</option>
				    <option value="bag" >Trekking Bag</option>
			        </select></td>
				</tr>
				
				
				<tr>
					<td colspan="2" class="label">Quantity :</td>
				</tr>
				<tr>
					<td colspan="2"><input type="number" name="quantity"  min="1" max="10" ><br><br><br></td>
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