<?php
    session_start();
    require_once('header.php');
    require_once('../model/shopModel.php');
if (isset($_POST['submit'])){
    
          $username = $_COOKIE['loggedInName'];
          $name = $_POST['name'];
          $num = $_POST['number'];
          $address = $_POST['address'];
          $product = $_POST['product'];
          $quantity = $_POST['quantity'];

        function hasTwoWord($name)
                {
                    for ($i = 0; $i < strlen($name); ++$i) {
                        if ($i != strlen($name) - 1 && $name[$i] == " " && $i != 0) {
                            if ($name[strlen($name) - 1] != ' ') {
                                return true;
                            }
                        }
                    }
                    return false;
                }

                function validName($name)
                {
                    for ($i = 0; $i < strlen($name); ++$i) {
                        $c = ord(strtolower($name)[$i]);
                        if ($c < 'a' || $c > 'z' || $c == ' ') {
                          return true; 
                        } else{ return false; } 
                }
            }

            function validNum($num)
                {
                    for ($i = 0; $i < strlen($num); ++$i) {
                        $c = ord(strtolower($num)[$i]);
                        if ($c < '0' || $c > '9' ) {
                          return true; 
                        } else{ return false; } 
                }
            }

        if($name == "")
        {
            echo "Please Enter Your Name!<br>";
            
        }
          
        elseif(strlen($name)<=4)
            {
             echo "Length is too Short!<br>";
            
            } 

        elseif(!hasTwoWord($name)) 
         {
              echo "Please Enter Your Full Name as String and start with a letter!<br>";
         }
         elseif(!validName($name))
            {
              echo "Please Enter a Valid Name that start with a letter!<br>";
         }

        elseif ($num == "") {
            echo "Please Enter Mobile Number! <br>";
        }
        elseif (!validNum($num))  {
            echo "Please Enter a Valid Mobile Number!<br>";
        }
        elseif (strlen ($num) != 11) {
            echo "Mobile Number Must Contain 11 Digits!<br>";
        }

        elseif ($address == "" || strlen($address)<=4)  {
            echo "Please Enter your Full Address!<br>";
        }

        elseif($product == "")
        {
            echo "Please select product!<br>";
            
        }

        elseif ($quantity == "")
        {
            echo "please select quantity! <br>";
        } 

       
       else{
        if ($product == 'Tent') {
                $val = 3000;
                $amount = $val*$quantity;
            } 
            elseif ($product == 'Stove') {
                $val = 2000;
                $amount = $val*$quantity;
            }
             elseif ($product == 'LifeJacket') {
                $val = 1000;
                $amount = $val*$quantity;
            }
             elseif ($product == 'Pillow') {
                $val = 800;
                $amount = $val*$quantity;
            }
             elseif ($product == 'Hammock') {
                $val = 1000;
                $amount = $val*$quantity;
            }
             elseif ($product == 'Pant') {
                $val = 600;
                $amount = $val*$quantity;
            }
             elseif ($product == 'bag') {
                $val = 2000;
                $amount = $val*$quantity;
            }
            
            $user = [
                    'username'=> $username,
                    'fullname' => $name,
                    'number'=> $num, 
                    'address' => $address,
                    'product' => $product, 
                    'quantity' => $quantity,
                    'amount' => $amount
                ];

                $status = sbooking($user);
                if ($status== true) {

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Purchase Confirmed</title>
    <link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
<body>
    <div class="navbar">
    <ul>
        <img src="../assets/l.jpg" alt="logo">  
        <h1 class="title">CONFIRMED</h1>     
        <li><a href="../index1.html">Home</a></li>
        <li><a href="../controller/logout.php">Log Out</a></li>
    </ul>
    </div><br><br><br><br>

    <table class="box">
        <tr align="center">
        <td colspan="2" height="120px"> <h1> Your Order is Confirmed </h1></td>
        </tr>
        <tr height="60px" align="center">
            <td >Full Name :</td>
            <td><?= $_POST['name'] ?></td>
        </tr>
        <tr height="60px" align="center">
            <td>Contact Number  </td>
            <td><?= $_POST['number'] ?></td>
        </tr>
        <tr height="60px" align="center">
            <td>Location  </td>
            <td><?= $_POST['address'] ?></td>
        </tr>
        <tr height="60px" align="center">
            <td>Product :</td>
            <td><?= $_POST['product'] ?></td>
        </tr>
        <tr height="60px" align="center">
            <td>Quantity :  </td>
            <td><?= $quantity ?></td>
        </tr>
        <tr height="60px" align="center">
            <td>Amount  </td>
            <td><?= $amount .' BDT'; ?></td>
        </tr>
        
    </table>
</body>
</html>

<?php
                }
                else{echo "Order Failed...!";}

}
}
?>