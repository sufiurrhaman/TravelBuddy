<?php
require_once('../views/header.php');
require_once('../model/usersModel.php');
$id = $_GET['id'];

$user = deleteUser($id);



if($user)
{
header('location: ../views/userlist.php');
}
else
{
echo "Error !!";
}




?>