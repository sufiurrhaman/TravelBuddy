<?php
    session_start();
    require_once('header.php');
    require_once('../model/transModel.php');
if (isset($_POST['submit'])){

          $username = $_COOKIE['loggedInName'];
          $name = $_POST['name'];
          $review = $_POST['treview'];

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

         
        if ($review == "" || strlen($review)<=4)  {
            echo "Please Enter your Review!";
        } 
        
       else{
        $user = [
                    'username'=> $username,
                    'fullname' => $name,
                    'review'=> $review
                ];

                $status = treview($user);
                if ($status== true) {
?>
        

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Review Confirmed</title>
</head>
<body>
    <table width="100%" >
        <tr align="right">
            <td><a href="../index1.html">Home</a> &nbsp;&nbsp;&nbsp; <a href="../controller/logout.php">Log Out</a></td>
        </tr>
    </table> <br><br><br><br>

    <table align="center" width="40%">
        <tr align="center">
        <td colspan="2" height="120px"><h1> Your Review is Noted! </h1></td>
        </tr>
        <tr height="60px" align="center">
            <td >Name :</td>
            <td><?= $_POST['name'] ?></td>
        </tr>
        
        <tr height="60px" align="center">
            <td>Review  </td>
            <td><?= $_POST['treview'] ?></td>
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