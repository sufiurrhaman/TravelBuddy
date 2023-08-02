<?php
require_once('../views/header.php');
require_once('../model/adminModel.php');
$id = $_GET['id'];

$user = deleteAdmin($id);



if($user)
{
header('location: ../views/adminlist.php');
}
else
{
echo "Error !!";
}




?>