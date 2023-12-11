<?php 
    session_start();
    require_once('../model/userModel.php');
     $username = $_REQUEST['username'];
     $password = $_REQUEST['password'];

     if (isset($_REQUEST['usertype'])) {
      $usertype = $_REQUEST['usertype'];
  }else{

   if($username == "" || $password == ""){
        echo "null username/password!";

    }else { 
      $status=login($username, $password);
        if($status){ 
           $_SESSION['flag']="true";
             $users= getUser($username);
             if($users){
                 if($users['usertype']=='Admin'){
                  header('location: ../view/adminhome.php');
                 }else if($users['usertype']=='student'){
                  header('location: ../view/studenthome.php');
                 }else{
                  echo "usertype not recognized";
                 }
               }else{
                echo "user not found.";
               }
         }else{
          echo "Falied.Invalid ID or Password.";
         }
  }
}
?>