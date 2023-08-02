<?php
session_start();
require_once('../model/transAdminModel.php');

        $json = json_decode($_REQUEST['data']);
   
          $name = $json->name;
          $username = $json->username;
          $email = $json->email;
          $num = $json->num;
          $password = $json->password;
          $Cpassword = $json->Cpassword;

          
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
                        if ($c < 97 || $c > 122) {
                          return false; 
                        } else{ return true; } 
                }
            }

            function validUserName($username)
                {
                    for ($i = 0; $i < strlen($username); ++$i) {
                        $c = ord(strtolower($username)[$i]);
                        if (($c < 97 || $c > 122 ) && ($c < 48 || $c > 57 )) {
                  return false; 
                } else{ return true; } 
                }
            }

            function validNum($num)
                {
                    for ($i = 0; $i < strlen($num); ++$i) {
                        $c = ord(strtolower($num)[$i]);
                        if ($c < 48 || $c > 57 ) {
                          return false; 
                        } else{ return true; } 
                }
            }

             function validEmail($email)
            {
               $indexOfA = -1;
                    $indexOfDot = -1;
                    for ($i = 0; $i < strlen($email); ++$i) {
                        if ($email[$i] == '@') {
                            $indexOfA = $i;
                        }
                        if ($email[$i] == '.') {
                            $indexOfDot = $i;
                        }
                    }

                    if ($indexOfA == -1 || $indexOfDot == -1) {
                        return false;
                    }

                    if ($indexOfA < 1 || $indexOfDot == strlen($email) - 1 || $indexOfDot - $indexOfA < 2) {
                        return false;
                    }
                    return true;    
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

         elseif($username == "")
        {
            echo "Please Enter Your User Name!<br>";
            
        }
          
        elseif(strlen($username)<=4)
            {
             echo "Length is too Short For User Name!<br>";
            
            }   
        elseif(!validUserName($username))
         {
              echo "Please Enter User Name as String that should start with a letter and may contain number!<br>";
         }

         elseif($email == "")
        {
            echo "Please enter your email!<br>";
            
        }


        elseif (!validEmail($email))
        {
            echo " Please Enter Valid Email Address!<br>";
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



        elseif($password == "")
        {
            echo "Password is required!<br>";
            
        }
        elseif(strlen($password)<=3)
        {
            echo "Password is too short!<br>";
        }
        elseif($Cpassword == "")
        {
            echo "Please type your password again in Confirm Password!<br>";
        }
        elseif($password != $Cpassword)
        {
            echo "Passwords do not match!<br>";
        }
     
       
       else{
        $user = [
                    'name' => $name,
                    'username'=> $username, 
                    'email'=> $email,
                    'num' => $num,
                    'password'=> $password
                                
                ];
                            
                    $status = addTransAdmin($user);
                    if($status){
                        $data = "Trasport Admin Added Successfully";
                        echo $data;
                    }else{
                        echo "try again...";
                    }
}

?>