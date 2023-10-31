<?php
    session_start();
    $id=$_REQUEST['id'];
    $name =$_REQUEST['name'];
    $password =$_REQUEST['password'];
    $confirmPassword =$_REQUEST['confirmpassword'];
    $usertype=$_REQUEST['usertype'];

if($name == " " || $password == " " || $confirmPassword == " " || $id =='' || $usertype==''){
    echo "null user input";
 }
 else if($password != $confirmPassword){
    echo "pass not match";
 }
 else if($password==$confirmPassword) {

    $user=[
            'id'=>$id,
            'name'=>$name,
            'password'=>$password,
            'confirmpassword'=>$confirmPassword,
            'usertype'=>$usertype,
         ];

    $_SESSION['user']=$user;
    
    header('location:../view/login.php');
       
}
else{echo"please input correct info";}

?>