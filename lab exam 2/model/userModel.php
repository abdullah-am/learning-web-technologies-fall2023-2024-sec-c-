<?php
    require_once('db.php');

    function login($username, $password)
        {
            $con = getConnection();
            $sql = "select * from users where username='{$username}' and password='{$password}'";
            $result = mysqli_query($con, $sql);
            $count = mysqli_num_rows($result);
            $user=mysqli_fetch_assoc($result);

            if($count == 1){
                session_start();
                $_SESSION['id']=$user['id'];
                return true;
            }else{
                return false;
            }
        }

    function registration($name,$username,$password,$usertype,$email,$dob,$gender)
        {
            $con=getConnection();
            $sql="insert into users(name,username,password,usertype,email,dob,gender)values('$name','$username','$password','$usertype','$email','$dob','$gender')";
            if(mysqli_query($con,$sql)){
                return true;
            }else{
                return false;
            }
        }

    function getUser($username)
        {
            $con=getconnection();
            $sql="select * from users where username='{$username}'";
            $result=mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                return $row;
            } else {
                return null;
            }
        }


        function getId($id)
        {
            $con=getconnection();
            $sql="select * from users where id='{$id}'";
            $result=mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                return $row;
            } else {
                return null;
            }
        }

?>