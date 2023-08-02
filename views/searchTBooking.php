<?php 
require_once('../model/transModel.php');

   $trans =$_REQUEST['name'];
    $result = getTBookingByTrans($trans);
		
				
	    if($result){

			$data = "<table border='1' align='center' width='1200px' >
				<tr height='120px'>
					<th>SL</th>
					<th>Full Name</th>
					<th>Contact Number</th>
					<th>Transport</th>
					<th>Date</th>
					<th>Days Required</th>
					<th>Address</th>
					<th>Amount</th>
					<th>Action </th>
				</tr>";

				while ($user = mysqli_fetch_assoc($result)) {

		      $data .= "<tr height='90px' align='center'>
					<td>{$user['tid']}</td>
					<td>{$user['fullname']}</td>
					<td>{$user['number']}</td>
					<td>{$user['transport']}</td>
					<td>{$user['date']}</td>
					<td>{$user['days']}</td>
					<td>{$user['address']}</td>
					<td>{$user['amount']}</td>
					<td>
						<a href='editTBooking.php?id={$user['tid']}'> <button>EDIT</button></a> <br>
						<a href='../controller/dltTBooking.php?id={$user['tid']}'> <button>Delete</button></a>
					</td>
				</tr>";
			}
	      $data .=  "</table>";

	      echo $data;
				 }else{
					 echo "Not Found";
				 } 
			
				?>

	