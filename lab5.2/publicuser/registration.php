<?php
session_start();
if(isset($_REQUEST['submit'])){

    $name =$_REQUEST['name'];
    $email =$_REQUEST['email'];
    $username =$_REQUEST['username'];
    $password =$_REQUEST['password'];
    $confirmPassword =$_REQUEST['cpassword'];
    $gender =$_REQUEST['gender'];
    $dd =$_REQUEST['dd'];
    $mm =$_REQUEST['mm'];
    $yyy =$_REQUEST['yyy'];
    
if($name==""||$email==""||$username==""|| $gender ==""  || $dd ==""|| $mm ==""|| $yyy ==""){
    //$_SESSION['flag'] = "false";
    echo "null user input";
 }else if($password != $confirmPassword){
   // $_SESSION['flag'] = "false";
    //header("Location:registration.php");
   echo "password not match";
  }else{echo "invalid user!";}

 //$_SESSION['flag'] = "true";
    header("Location: login.php");
       
}

?>


<html lang="en">
<head>
    <title>REGISTRATION</title>
</head>
<body>
    
      <table border="1" cellpadding="0" cellspacing="0" height="65%" width="65%" >
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
                    <form  method="POST" action="registration.php" enctype="">
                        <fieldset height="35%" width="35%" >
                                <legend>REGISTRATION</legend>
                                Name &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :
                                <input type="text" name="name" value="" /><hr>
                                Email &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :
                                <input type="email" name="email" value="" /><hr>
                                username &emsp;&emsp;&emsp;&emsp; :
                                <input type="text" name="username" value="" /><hr>
                                Password &emsp;&emsp;&emsp;&emsp;&emsp; :
                                <input type="password" name="password" value="" /><hr>
                                confirmPassword &emsp;&emsp; :
                                <input type="password" name="cpassword" value="" /><hr>
                            <fieldset>
                                <legend>Gender</legend>
                                <input type="radio" name="gender" value="" /> Male
                                <input type="radio" name="gender" value="" /> female
                                <input type="radio" name="gender" value="" /> other
                            </fieldset><hr>
                            <fieldset>
                                <legend>Date of birth</legend>
                                <input type="text" name="dd" value="" size= 1 /> /
                                <input type="text" name="mm" value="" size= 1 /> / 
                                <input type="text" name="yyy" value="" size= 1 />(dd/mm/yyy)
                            </fieldset><hr>
                            <input type="submit" name="submit" value="submit"/>
                            <input type="reset" name="reset" value="Reset"/>
                        </fieldset>
                    </form>
                    </td>
                </tr>
                <tr>
                    <td align="center" height = "65px">Copyright &copy;2023</td>
                </tr>
       </table>
     
   </body>
</html>