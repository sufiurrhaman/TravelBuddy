<?php 
require_once('../model/usersModel.php');

   $name =$_REQUEST['name'];
    
    $result = getUserByName($name);
				
	    if($result){
			$data = "<table border='1' align='center' width='1200px' >
						<tr height='120px' align='center'>
							<th>ID</th>
							<th>NAME</th>
							<th>USER NAME</th>
							<th>EMAIL</th>
							<th>PHONE NUMBER</th>
							<th>ACTION</th>
						</tr>";

				while ($user = mysqli_fetch_assoc($result)) {

		      $data .= "<tr height='90px' align='center'>
								<td>{$user['uid']}</td>
								<td>{$user['name']}</td>
								<td>{$user['username']}</td>
								<td>{$user['email']}</td>
								<td>{$user['num']}</td>
								<td>
									<a href='../controller/dltUser.php?id={$user['uid']}'> <button>DELETE</button></a>
								</td>
						      </tr>";}

	        $data .= "</table>";

	        echo $data;
			      
			   }else{
				 echo "invalid username";
				} 
				?>
