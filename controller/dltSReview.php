<?php
     require_once('../views/header.php');
     require_once('../model/shopModel.php');
     
     $id = $_GET['id'];

     $status = deleteSreview($id);

     if($status){
          header('location: ../views/myReview.php');
     }else{
               echo "invalid ";
          }

?>