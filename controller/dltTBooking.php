<?php
     require_once('../views/header.php');
     require_once('../model/transModel.php');

     $id = $_GET['id'];

     $status = deleteTbooking($id);

     if($status){
          header('location: ../views/myBooking.php');
     }else{
               echo "invalid ";
          }

?>