<?php
    session_start();
    require_once('../model/userModel.php');
    $name =$_REQUEST['name'];
    $email =$_REQUEST['email'];
    $username =$_REQUEST['username'];
    $password =$_REQUEST['password'];
    $usertype=$_REQUEST['usertype'];
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


if($name == " " || $email == " " || $username==" " || $password == " " || $gender == " "){
    echo "null user input";
 }
 else if($password==ispassvalid($password)){

   $user=[
            'name'=>$name,
            'email'=>$email,
            'username'=>$username,
            'password'=>$password,
            'usertype'=>$usertype,
            'gender'=>$gender,
         ];

    $_SESSION['user']=$user;
    $status=getadd($name,$username,$password,$usertype,$email,$gender);
    if($status){
      header('location:../view/viewstudent.php');
    } else{
      echo"invalid user!";
    }
     
       
}else{
    echo "password incorrect";
  }

?>