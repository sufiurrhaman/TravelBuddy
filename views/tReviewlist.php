<?php



session_start();
require_once('header.php');
require_once('../model/transModel.php');
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Transport Review List</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
<body>
<center>
<div class="navbar">
    <ul>
        <img src="../assets/l.jpg" alt="logo">
        <div class="back"><a href="adminDashboard.php">Back</a></div>  
        <h1 class="title">TRANSPORT BOOKING LIST</h1>  
        <li><a href="../index1.html">Home</a></li>
        <li><a href="../controller/logout.php">Logout</a></li>
    </ul>
    </div><br><br><br><br>





<table border="1" align="center" width="1200px">
<tr height="120px" >
<th>SL</th>
<th>Full Name</th>
<th>Review</th>



</tr>
<?php



$username = $_COOKIE['loggedInName'];
$result = getAllTreview();
while ($user = mysqli_fetch_assoc($result)) {



if($user){



echo '<tr height="90px" align="center">
<td>' . $user['trid'] . '</td>
<td>' . $user['fullname'] . '</td>
<td>' . $user['review'] . '</td>

</tr>';
}
}

?>
</table>
</center>




</body>



</html>