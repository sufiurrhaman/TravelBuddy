<?php 
require_once('../model/packageModel.php');

   $location =$_REQUEST['name'];
    $result = getPBookingByLoc($location);
		
				
	    if($result){

			$data = "<table border='1' align='center' width='1200px' >
				<tr height='120px'>
					<th>SL</th>
					<th>Full Name</th>
					<th>Contact Number</th>
					<th>Location</th>
					<th>Date</th>
					<th>Adult(s)</th>
					<th>Child(ren)</th>
					<th>Amount</th>
					<th>Action </th>
				</tr>";

				while ($user = mysqli_fetch_assoc($result)) {

		      $data .= "<tr height='90px' align='center'>
					<td>{$user['pid']}</td>
					<td>{$user['fullname']}</td>
					<td>{$user['number']}</td>
					<td>{$user['location']}</td>
					<td>{$user['date']}</td>
					<td>{$user['adult']}</td>
					<td>{$user['child']}</td>
					<td>{$user['amount']}</td>
					<td>
						<a href='editPBooking.php?id={$user['pid']}'> <button>EDIT</button></a> <br>
						<a href='../controller/dltPBooking.php?id={$user['pid']}'> <button>Delete</button></a>
					</td>
				</tr>";
			}
	      $data .=  "</table>";

	      echo $data;
				 }else{
					 echo "Not Found";
				 } 
			
				?>

	