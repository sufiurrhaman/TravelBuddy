<?php
    session_start();
    require_once('../views/header.php');
    require_once('../model/shopModel.php');

    $id = $_GET['id'];

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

          if ($num == "") {
            echo "Please Enter Mobile Number! <br>";
        }
        elseif (!validNum($num))  {
            echo "Please Enter a Valid Mobile Number!<br>";
        }
        elseif (strlen ($num) != 11) {
            echo "Mobile Number Must Contain 11 Digits!<br>";
        }

         if ($address == "" || strlen($address)<=4)  {
            echo "Please Enter your Full Address!<br>";
        }

         if($product == "")
        {
            echo "Please select product!<br>";
            
        }

         if ($quantity == "")
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
                    'sid' => $id,
                    'username'=> $username,
                    'fullname' => $name,
                    'number'=> $num, 
                    'address' => $address, 
                    'product' => $product,
                    'quantity' => $quantity,
                    'amount' => $amount
                    ];


            $status = editSOrder($user);

            header('location: ../views/myBooking.php');

    }
}
?>