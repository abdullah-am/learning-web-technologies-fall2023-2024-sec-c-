<?php
    session_start();
    //require_once('../model/userModel.php');
    $name =$_REQUEST['name'];
    $email =$_REQUEST['email'];
    $username =$_REQUEST['username'];
    $password =$_REQUEST['password'];
    $confirmpassword =$_REQUEST['confirmpassword'];
    $gender =$_REQUEST['gender'];

    
    
    function ispassvalid($password){
      $specialchar=['@','#','$','%'];
      if(strlen($password)>=4){
         for($i=0;$i<strlen($password);$i++){
            if(in_array($password[$i],$specialchar)){
               return true;
            }
         }
      }
      return false;
    }


if($name == " " || $email == " " || $username==" " || $password == " " || $confirmpassword == " " || $gender == " " ){
    echo "null user input";
 }else if($password != $confirmpassword){
    echo "pass not match";
 }
 else if($password==ispassvalid($password) && $password==$confirmpassword){

   $user=[
            'name'=>$name,
            'email'=>$email,
            'username'=>$username,
            'password'=>$password,
            'confirmpassword'=>$confirmPassword,
            'gender'=>$gender,
         ];

    $_SESSION['user']=$user;
    $status=registration($name,$username,$password,$email,$gender);
    if($status){
      header('location:../view/login.php');
    } else{
      echo"invalid user!";
    }
    
    echo "password incorrect";  
       
}

?>