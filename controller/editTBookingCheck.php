<?php
    session_start();
    require_once('../views/header.php');
    require_once('../model/transModel.php');
    $id = $_GET['id'];

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

          if ($num == "") {
            echo "Please Enter Mobile Number! <br>";
        }
        elseif (!validNum($num))  {
            echo "Please Enter a Valid Mobile Number!<br>";
        }
        elseif (strlen ($num) != 11) {
            echo "Mobile Number Must Contain 11 Digits!<br>";
        }

         if($transport == "")
        {
            echo "Please select transport!<br>";
            
        }

         if($date == "")
        {
            echo "Please select date!<br>";
            
        }

         if ($dr == "")
        {
            echo "please select a number in day!<br>";
        }
        
        

         
        if ($address == "" || strlen($address)<=4)  {
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
                    'tid' => $id,
                    'username'=> $username,
                    'fullname' => $name,
                    'number'=> $num, 
                    'transport' => $transport, 
                    'date' => $date,
                    'days' => $dr,
                    'address' => $address,
                    'amount' => $amount
                    ];


            $status = editTBooking($user);

            header('location: ../views/myBooking.php');
}
}
?>