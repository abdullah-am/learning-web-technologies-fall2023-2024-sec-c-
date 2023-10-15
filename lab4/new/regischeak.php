<?php
    session_start();
    $name =$_REQUEST['name'];
    $email =$_REQUEST['email'];
    $username =$_REQUEST['username'];
    $password =$_REQUEST['password'];
    $confirmPassword =$_REQUEST['confirmpassword'];
    $gender =$_REQUEST['gender'];
    $dd =$_REQUEST['dd'];
    $mm =$_REQUEST['mm'];
    $yyy =$_REQUEST['yyy'];

    function ispassvalid($password){
      $specialchar=['@','#','$','%'];
      if(strlen($password)>=8){
         for($i=0;$i<strlen($password);$i++){
            if(in_array($password[$i],$specialchar)){
               return true;
            }
         }
      }
      return false;
    }



    function isusernamevalid($username){
      $validchar='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.-_';
      if(strlen($username)>=2){
         for($i=0;$i<strlen($username);$i++){
            if(strpos($validchar,$username[$i])===false){
               return false;
            }
         }
         return true;
      }
      return false;
    }


    
if($name == " " || $email == " " || $username==" " || $password == " " || $confirmPassword == " " || $gender == " "  || $dd == " "|| $mm == " " || $yyy == " "){
    echo "null user input";
 }
 else if($password != $confirmPassword){
    echo "pass not match";
 }
 else if($username==isusernamevalid($username) && $password== ispassvalid($password) &&$password==$confirmPassword) {

    $user=[
            'name'=>$name,
            'email'=>$email,
            'username'=>$username,
            'password'=>$password,
            'confirmpassword'=>$confirmPassword,
            'gender'=>$gender,
            'dd'=>$dd,
            'mm'=>$mm,
            'yyy'=>$yyy,
         ];

    $_SESSION['user']=$user;
    
    header('location:login.php');
       
}
else{echo"please input correct info";}

?>