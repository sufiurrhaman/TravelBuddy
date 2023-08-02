<?php
     require_once('../views/header.php');
     require_once('../model/shopModel.php');
     
     $id = $_GET['id'];

     $status = deleteSOrders($id);

     if($status){
          header('location: ../views/myBooking.php');
     }else{
               echo "invalid ";
          }



?>