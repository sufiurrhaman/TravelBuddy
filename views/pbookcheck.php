<?php
    session_start();
    require_once('header.php');
    require_once('../model/packageModel.php');
if (isset($_POST['submit'])){

          $username = $_COOKIE['loggedInName'];
          $name = $_POST['name'];
          $num = $_POST['number'];
          $loc = $_POST['location'];
          $date = $_POST['date'];
          $adult = $_POST['adult'];
          $child = $_POST['child'];


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


        elseif($loc == "")
        {
            echo "Please select location!<br>";
            
        }

        elseif($date == "")
        {
            echo "Please select date!<br>";
            
        }

        elseif ($adult == "")
        {
            echo "please select a number in adult!<br>";
        }

        elseif ($child == "")  {
            echo "Please Enter a Number in child!<br>";
        } 
       
       else{
        if ($loc == 'Saint' || $loc == 'Kuakata') {
            $val= 9000;
            $amount = ($val*$adult) + ($val*$child); 
        }
        elseif($loc == 'Cox' || $loc == 'Shalbon' || $loc == 'Humhum' || $loc == 'Dhuppani') {
            $val= 3000;
            $amount = ($val*$adult) + ($val*$child); 
        }
        elseif ($loc == 'Sajek' || $loc == 'Boga') {
            $val= 5000;
            $amount = ($val*$adult) + ($val*$child); 
        }
        elseif ($loc == 'Shita' || $loc == 'Mohera') {
            $val= 2000;
            $amount = ($val*$adult) + ($val*$child); 
        }
        elseif ($loc == 'Panam') {
            $val= 1500;
            $amount = ($val*$adult) + ($val*$child); 
        }

         /*$_SESSION['name'] = $_POST['name'];*/

         $user = [
                    'username'=> $username,
                    'fullname' => $name,
                    'number'=> $num, 
                    'location' => $loc, 
                    'date' => $date,
                    'adult' => $adult,
                    'child' => $child,
                    'amount' => $amount
                ];

                $status = pbooking($user);
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
<!--     <table width="100%" >
        <tr align="right">
            <td><a href="../index1.html">Home</a> &nbsp;&nbsp;&nbsp; <a href="../controller/logout.php">Log Out</a></td>
        </tr>
    </table> <br><br><br><br> -->

    <table class="box">
        <tr align="center">
        <td colspan="2" height="120px"><h1>Your Booking is Confirmed</h1></td>
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
            <td><?= $_POST['location'] ?></td>
        </tr>
        <tr height="60px" align="center">
            <td>Date :</td>
            <td><?= $_POST['date'] ?></td>
        </tr>
        <tr height="60px" align="center">
            <td>Adult(s)  </td>
            <td><?= $_POST['adult'] ?></td>
        </tr>
        <tr height="60px" align="center">
            <td>Child(ren)  </td>
            <td><?= $_POST['child'] ?></td>
        </tr>
        <tr height="60px" align="center">
            <td>Amount  </td>
            <td><?= $amount.' BDT'; ?></td>
        </tr>
    </table>

</body>
</html>
<?php
                }
                else{echo "failed";}

}
}
?>