<?php

session_start();
require_once('../model/userModel.php');


         $user=getId($_SESSION['id']);
        $oldpassword=$user['password'];

        if(isset($_REQUEST['submit']))
        {
            $currentpassword = $_REQUEST['currentpassword'];
            
            if($currentpassword==$oldpassword)
            {
                
                    $con = getConnection();
                    $update = "delete from users where id=".$_SESSION['id'];
                    $result = mysqli_query($con, $update);
                    if($result)
                    {
                        header('location:../index.php');
                    }
                    else
                    {
                        echo"error";
                    }
                
               
            }
            else
            {
                echo"entered worng current pass";
            }
        } 

?>




















<?php/*

session_start();
require_once('../model/userModel.php');


         $user=getId($_SESSION['id']);
        $oldpassword=$user['password'];

        if(isset($_REQUEST['submit']))
        {
            $confirmpassword = $_REQUEST['confirmpassword'];

            if($confirmpassword==$oldpassword)
            {
                
                    $con = getConnection();
                    $delete = "delete from users  where id=".$_SESSION['id'];
                    $result = mysqli_query($con, $delete);
                    if($result)
                    {
                        header('location:logout.php');
                    }
                    else
                    {
                        echo"error";
                    }
            }
            else
            {
                echo"entered worng pass";
            }
        } else{
            echo"error";
        }*/

?>



























<?php/*
require_once('../controller/sessionCheak.php');
require_once('../model/userModel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the submit button was clicked
    if (isset($_POST['submit'])) {
        // Assuming your UserModel.php has a function to delete the user by ID
        $userId = $_SESSION['id'];

        // Delete the user
        $sql = "DELETE FROM users WHERE id = $userId"; // Replace 'users_table' with your actual table name
        if ($conn->query($sql) === TRUE) {
            // Account deleted successfully
            // Redirect or perform any additional actions after deletion
            header("Location: ../index.php");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
    } else {
        // Handle if the submit button was not clicked
        echo "Form submission error!";
    }
} else {
    // Handle if it's not a POST request
    echo "Invalid request method!";
}*/
?>






<?php/*
session_start();
//require_once('../controller/sessionCheak.php');
require_once('../model/userModel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        // Assuming you have a function to delete the user account from the database in your userModel.php file.
        $deleted = Delete($_SESSION['id']); // Adjust this function name to match your implementation.

        if ($deleted) {
            // Perform additional actions after successful deletion, such as logging the user out or redirecting to a different page.
            // For example, you might have a logout function in your sessionCheak.php file.
           // logoutUser(); // Adjust this function name to match your implementation.

            // Redirect to a confirmation page or homepage after successful deletion.
            header("Location:logout.php");
           // exit();
        } else {
            // Handle deletion failure, maybe show an error message.
            echo "Failed to delete the account.";
        }
    } else {
        echo "Invalid request.";
    }
} else {
    echo "Access denied.";
}*/
?>







<?php/*
session_start();
require_once('../model/userModel.php');
if(isset($_POST['submit'])) 
{
   Delete($_SESSION['username']); 
}*/
?>



<?php
/*
session_start();
require_once('../model/userModel.php');

$data=getId($_SESSION['id']);
        $username=$data['username'];
if(isset($_POST['submit'])) {
   //$id = $_SESSION['username'];
   Delete($username); 
}else{
   echo "error";
}*/
?>





