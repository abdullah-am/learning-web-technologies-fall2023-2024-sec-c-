<?php 
    session_start();
     $currentpass = $_REQUEST['currentpass'];
     $newpass = $_REQUEST['newpass'];     
     $repass = $_REQUEST['Repass'];

     if($password == $_SESSION['user']['password'] && $newpass==$repass)
     {
        echo"valid";
     }

?>
