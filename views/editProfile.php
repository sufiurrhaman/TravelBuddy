<?php
    session_start();
    require_once('header.php');
    require_once('../model/usersModel.php');

    $id = $_REQUEST['id'];
    $user = getUserByID($id);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
    <body>
    <div class="navbar">
    <ul>
        <img src="../assets/l.jpg" alt="logo">
        <div class="back"><a href="profile.php">Back</a></div>  
        <h1 class="title">EDIT PROFILE</h1>     
    </ul>
    </div><br><br><br><br>
        <form method="post" action="../controller/editProfileCheck.php?id=<?= $user['uid'] ?>">
            <div class="reg">
                <h1>EDIT</h1>
                <table width="400px">
                    <tr>
                        <td class="label">Name:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="name" value="<?= $user['name'] ?>"></td>
                    </tr>
                    <tr>
                       <td class="label">User Name:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="username" value="<?= $user['username'] ?>"></td>
                    </tr>
                    <tr>
                        <td class="label">email:</td>
                    </tr>
                    <tr>
                        <td><input type="email" name="email" value="<?=$user['email'] ?>"></td>
                    </tr>
                    <tr>
                        <td class="label">Contact Number:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="number" value="<?=$user['num']?>"></td>
                    </tr>
                    <tr>
                        <td class="label">Password:</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" value="<?= $user['password']?>"></td>
                    </tr>
                    
                    <tr>
                        <td><input type="submit" class="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </div>
        </form>
    </body>
</html>