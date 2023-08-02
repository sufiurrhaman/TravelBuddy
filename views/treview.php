<?php
require_once('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Transport Review</title>
</head>
<body>
	<body>
	<table width="100%">
		<tr align="right">
			<td align="left"><a href="transport.html">Back</a> </td>
			<td><a href="../index1.html">Home</a> &nbsp;&nbsp;&nbsp; <a href="../controller/logout.php">Log Out</a></td>

		</tr>
	</table> <br><br><br><br>

	<form method="post" action="treviewcheck.php">
		<fieldset>
			<legend>Review</legend>
			<table >
				<tr>
					<td colspan="2">Name:</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="name" value=""></td>
				</tr>
				
				<tr>
					<td colspan="2">Review: </td>
				</tr>
				<tr>
					<td colspan="2"><textarea name="treview"></textarea> <hr></td>
				</tr>
				<tr>
					<td align="left"><input type="reset" name="reset" value="Reset"> </td>
					<td align="right"><input type="submit" name="submit" value="Confirm"> </td>
				</tr>
				
				
			</table>
		</fieldset>
	</form>
</body>
</html>