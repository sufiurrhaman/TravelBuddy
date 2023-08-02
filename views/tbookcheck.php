<?php
    session_start();
    require_once('header.php');
    require_once('../model/transModel.php');
if (isset($_POST['submit'])){
          
          $username = $_COOKIE['loggedInName'];
          $name = $_POST['name'];
          $num = $_POST['number'];
          $transport = $_POST['transport'];
          $date = $_POST['date'];
          $dr = $_POST['dr'];
          $address = $_POST['address'];

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

        elseif($transport == "")
        {
            echo "Please select transport!<br>";
            
        }

        elseif($date == "")
        {
            echo "Please select date!<br>";
            
        }

        elseif ($dr == "")
        {
            echo "please select a number in day!<br>";
        }

        elseif ($address == "" || strlen($address)<=4)  {
            echo "Please Enter your Full Address!<br>";
        } 
        
       else{
        if ($transport == 'Car') {
            $val = 3000;
            $amount = $val*$dr;
        }
        elseif($transport == 'Noah') {
            $val = 4000;
            $amount = $val*$dr;
        }
        elseif($transport == 'Hiace') {
            $val = 5000;
            $amount = $val*$dr;
        }
        elseif($transport == 'Mini') {
            $val = 8000;
            $amount = $val*$dr;
        }
        elseif($transport == 'Bus') {
            $val = 18000;
            $amount = $val*$dr;
        }



        $user = [
                    'username'=> $username,
                    'fullname' => $name,
                    'number'=> $num, 
                    'transport' => $transport, 
                    'date' => $date,
                    'days' => $dr,
                    'address' => $address,
                    'amount' => $amount
                ];

                $status = tbooking($user);
                if ($status== true) {

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Booking Confirmed</title>
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
        <td colspan="2" height="120px"> <h1>Your Booking is Confirmed</h1></td>
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
            <td><?= $_POST['transport'] ?></td>
        </tr>
        <tr height="60px" align="center">
            <td>Date :</td>
            <td><?= $_POST['date'] ?></td>
        </tr>
        <tr height="60px" align="center">
            <td>Day(s) Required :  </td>
            <td><?= $_POST['dr'] ?></td>
        </tr>
        <tr height="60px" align="center">
            <td>Address  </td>
            <td><?= $_POST['address'] ?></td>
        </tr>
        <tr height="60px" align="center">
            <td>Amount  </td>
            <td><?= $amount .' BDT'; ?></td>
        </tr>
        
    </table>

</style>
</body>
</html>

<?php
                }
                else{echo "Transport Booking Failed...!";}

}
}
?>