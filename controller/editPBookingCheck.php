<?php
    session_start();
    require_once('../views/header.php');
    require_once('../model/packageModel.php');
    $id = $_GET['id'];
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

          if ($num == "") {
            echo "Please Enter Mobile Number! <br>";
        }
        elseif (!validNum($num))  {
            echo "Please Enter a Valid Mobile Number!<br>";
        }
        elseif (strlen ($num) != 11) {
            echo "Mobile Number Must Contain 11 Digits!<br>";
        }


         if($loc == "")
        {
            echo "Please select location!<br>";
            
        }

         if($date == "")
        {
            echo "Please select date!<br>";
            
        }

         if ($adult == "")
        {
            echo "please select a number in adult!<br>";
        }
        
        

         
        if ($child == "")  {
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

        $user = [   
                    'pid' => $id,
                    'username'=> $username,
                    'fullname' => $name,
                    'number'=> $num, 
                    'location' => $loc, 
                    'date' => $date,
                    'adult' => $adult,
                    'child' => $child,
                    'amount' => $amount
                    ];


            $status = editPBooking($user);

                header('location: ../views/myBooking.php');
}
}
?>