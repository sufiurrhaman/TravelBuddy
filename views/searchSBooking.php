<?php 
require_once('../model/shopModel.php');

   $product =$_REQUEST['name'];
    $result = getSBookingByProduct($product);
		
				
	    if($result){

			$data = "<table border='1' align='center' width='1200px' >
				<tr height='120px'>
					<th>SL</th>
					<th>Full Name</th>
					<th>Contact Number</th>
					<th>Address</th>
					<th>Product</th>
					<th>Quantity</th>
					<th>Amount</th>
					<th>Action </th>
				</tr>";

				while ($user = mysqli_fetch_assoc($result)) {

		      $data .= "<tr height='90px' align='center'>
					<td>{$user['sid']}</td>
					<td>{$user['fullname']}</td>
					<td>{$user['number']}</td>
					<td>{$user['address']}</td>
					<td>{$user['product']}</td>
					<td>{$user['quantity']}</td>
					<td>{$user['amount']}</td>
					<td>
						<a href='editSBuy.php?id={$user['sid']}'> <button>EDIT</button></a> <br>
						<a href='../controller/dltSBuy.php?id={$user['sid']}'> <button>Delete</button></a>
					</td>
				</tr>";
			}
	      $data .=  "</table>";

	      echo $data;
				 }else{
					 echo "Not Found";
				 } 
			
				?>

	