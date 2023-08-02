<?php
require_once('../views/header.php');
require_once('../model/transadminModel.php');
$id = $_GET['id'];

$user = deleteTransAdmin($id);



if($user)
{
header('location: ../views/transAdminlist.php');
}
else
{
echo "Error !!";
}




?>