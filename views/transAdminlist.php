<?php 
	session_start();
	require_once('header.php');
	require_once('../model/transadminModel.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Transport Admin List</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>

<body>

	<center>
		
	<div class="navbar">
    <ul>
        <img src="../assets/l.jpg" alt="logo">
        <div class="back"><a href="adminDashboard.php">Back</a></div>  
        <h1 class="title">TRANSPORT ADMINLIST</h1>  
        <li><a href="../index1.html">Home</a></li>
        <li><a href="../controller/logout.php">Logout</a></li>
    </ul>
    </div><br><br><br><br>	 

	<div id= "search">
    <input type="text" id="name" name="name" value="" placeholder="Search By Name" onkeyup="searchTransAdmin()" />
	<input type="button" class="book" name="click" value="Search" onclick="searchTransAdmin()">
    </div>
    <br><br>
	<div id="table">
	<table border="1" align="center" width="1200px" >
		<tr height="120px" align="center">
			<th>ID</th>
			<th>NAME</th>
			<th>USER NAME</th>
			<th>EMAIL</th>
			<th>PHONE NUMBER</th>
			<th>ACTION</th>
		</tr>
		<?php
		
        
		$result = getAllTransAdmins();
		while ($user = mysqli_fetch_assoc($result)) {

		if($user){
		?>
	       
                    <tr height="90px" align="center">
					<td><?= $user['taid'] ?></td>
					<td><?= $user['name'] ?></td>
					<td><?= $user['username'] ?></td>
					<td><?= $user['email'] ?></td>
					<td><?= $user['num'] ?></td>
					
					<td>
						<a href="../controller/dltTransAdmin.php?id=<?= $user['taid'] ?>"> <button class="dlt">DELETE</button></a>
					</td>
				</tr>
			
<?php 
	} 
}
?>
    </div>
	</table>
</center>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>