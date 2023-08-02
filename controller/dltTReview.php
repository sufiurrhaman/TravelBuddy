<?php
     require_once('../views/header.php');
     require_once('../model/transModel.php');

     $id = $_GET['id'];

     $status = deleteTreview($id);

     if($status){
          header('location: ../views/myReview.php');
     }else{
               echo "invalid ";
          }

?>