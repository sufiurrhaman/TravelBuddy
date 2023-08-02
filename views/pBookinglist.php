<?php



session_start();
require_once('header.php');
require_once('../model/packageModel.php');
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Package Booking List</title>
<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>



<body>



<center>

<div class="navbar">
    <ul>
        <img src="../assets/l.jpg" alt="logo">
        <div class="back"><a href="adminDashboard.php">Back</a></div>  
        <h1 class="title">PACKAGE BOOKING LIST</h1>  
        <li><a href="../index1.html">Home</a></li>
        <li><a href="../controller/logout.php">Logout</a></li>
    </ul>
    </div><br><br><br><br>





<table border="1" align="center" width="1200px">
<tr height="120px" >
<th>SL</th>
<th>Full Name</th>
<th>Contact Number</th>
<th>Location</th>
<th>Date</th>
<th>Adult(s)</th>
<th>Child(ren)</th>
<th>Amount</th>
</tr>
<?php
$username = $_COOKIE['loggedInName'];
$result = getAllPBooking();
while ($user = mysqli_fetch_assoc($result)) {



if($user){
?>
<tr height="90px" align="center">
<td><?= $user['pid'] ?></td>
<td><?= $user['fullname'] ?></td>
<td><?= $user['number'] ?></td>
<td><?= $user['location'] ?></td>
<td><?= $user['date'] ?></td>
<td><?= $user['adult'] ?></td>
<td><?= $user['child'] ?></td>
<td><?= $user['amount'] ?></td>



<?php } }?>
</table>
</center>




</body>



</html>