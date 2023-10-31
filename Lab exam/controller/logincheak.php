<?php 
    session_start();
    require_once('../model/userModel.php');
     $userId = $_REQUEST['userId'];
     $password = $_REQUEST['password'];

   if($userId == "" || $password == ""){
        echo "null username/password!";

    }else { 
      $status=login($userId,$password);
        if($status){  
              $_SESSION['flag'] = "true";
  
              $row=userType($userId);
  
              if($row['usertype']=="user")
              {
                  header('location: ../view/user_home.php');
              }
              elseif($row['usertype']=="Admin")
              {
                  header('location: ../view/admin_home.php');
              }
              
              }
              else{
              echo "invaid user!";
              
              
          }
  }
?>