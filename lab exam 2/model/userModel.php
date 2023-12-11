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

    function registration($name,$username,$password,$usertype,$email,$gender)
        {
            $con=getConnection();
            $sql="insert into users(name,username,password,usertype,email,gender)values('$name','$username','$password','$usertype','$email','$gender')";
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

        function getAllUser()
        {
            $con = getConnection();
            $sql = "select * from users";
            $result = mysqli_query($con, $sql);
            $users = [];
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($users, $row);
            }

            return $users;
        }

        function getadd($name,$username,$password,$usertype,$email,$gender)
        {
            $con=getConnection();
            $sql="insert into users(name,username,password,usertype,email,gender)values('$name','$username','$password','$usertype','$email','$gender')";
            if(mysqli_query($con,$sql)){
                return true;
            }else{
                return false;
            }
        }

        function getaddcourse($course,$detail)
        {
            $con=getConnection();
            $sql="insert into course(course,detail)values('$course','$detail')";
            if(mysqli_query($con,$sql)){
                return true;
            }else{
                return false;
            }
        }


?>