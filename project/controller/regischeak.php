<?php
    session_start();
    require_once('../model/userModel.php');
    $id=$_REQUEST['id'];
    $name =$_REQUEST['name'];
    $email =$_REQUEST['email'];
    $username =$_REQUEST['username'];
    $password =$_REQUEST['password'];
    $usertype=$_REQUEST['usertype'];
    $confirmpassword =$_REQUEST['confirmpassword'];
    $gender =$_REQUEST['gender'];
    $dob =$_REQUEST['dob'];
    
    
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


if($name == " " || $email == " " || $username==" " || $password == " " || $confirmpassword == " " || $gender == " "  || $dob == " "){
    echo "null user input";
 }else if($password != $confirmpassword){
    echo "pass not match";
 }
 else if($password==ispassvalid($password) && $password==$confirmpassword){

   $user=[
            'id'=>$id,
            'name'=>$name,
            'email'=>$email,
            'username'=>$username,
            'password'=>$password,
            'usertype'=>$usertype,
            'confirmpassword'=>$confirmPassword,
            'gender'=>$gender,
            'dob'=>$dob,
         ];

    $_SESSION['user']=$user;
    $status=registration($name,$username,$password,$usertype,$email,$dob,$gender);
    if($status){
      header('location:../view/login.php');
    } else{
      echo"invalid user!";
    }
    
    echo "password incorrect";  
       
}

?>