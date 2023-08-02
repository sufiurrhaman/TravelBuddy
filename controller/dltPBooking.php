<?php
     require_once('../views/header.php');
     require_once('../model/packageModel.php');
     
     $id = $_GET['id'];

     $status = deletePbooking($id);

     if($status){
          header('location: ../views/myBooking.php');
     }else{
               echo "invalid ";
          }





?>