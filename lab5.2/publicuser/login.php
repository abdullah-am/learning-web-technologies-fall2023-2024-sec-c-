<?php 
    session_start();
     $username = $_REQUEST['username'];
     $password = $_REQUEST['password'];

   if($username == "" || $password == ""){
        echo "null username/password!";
    }else if($username == $password){
    //echo "valid user!";
        $_SESSION['flag'] = "true";
       header('location:../loggeduser/dashboard.php');
    }else{
   echo "invaid user!";
   }
?>

<html lang="en">
<head>
    <title>LOG IN</title>
</head>
<body>
    <form method="post" action="login.php" enctype="">

      <table border="1" cellpadding="0" cellspacing="0" height="65%" width="90%" >
            <tr>
                <td  height = "15%" align="right" >
                        <img align="left" src="photo.png"  alt="">
                        <h4><a href="public home.php">Home</a> |
                        <a href="login.php">login</a>|
                        <a href="registration.php">Registration</a></h4>
                </td>
            </tr>
                <tr>
                    <td>
                        <fieldset>
                                <legend>LOG IN</legend>
                                User Name &emsp13;&emsp;&emsp;&emsp; :
                                <input type="text" name="username" value="" /><br><br>
                                Password &emsp;&emsp;&emsp;&emsp; :
                                <input type="password" name="password" value="" /><hr>
                                <input type="checkbox" name="rememberMe" value="lsRemennberMe" /> Remember Me<br>
                                <input type="submit" name="submit" value="submit"/> &emsp14;<a href="forgotpass.php">Forgot Password?</a>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td align="center" height = "85px">Copyright &copy;2023</td>
                </tr>
       </table>
    </form>
   </body>
</html>