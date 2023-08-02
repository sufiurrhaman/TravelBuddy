<?php
     require_once('../views/header.php');
     require_once('../model/packageModel.php');
     
     $id = $_GET['id'];

     $status = deletePreview($id);

     if($status){
          header('location: ../views/myReview.php');
     }else{
               echo "invalid ";
          }


?>