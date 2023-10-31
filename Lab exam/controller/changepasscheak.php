
<?php
session_start();

$currentpass = $_REQUEST['currentpass'];
$newpass = $_REQUEST['newpass'];
$repass = $_REQUEST['repass'];

$password = $_SESSION['user']['paassword'];

if($currentpass == $password) {
    if($newpass != $currentpass) {
        if($newpass == $repass) {
            $_SESSION['user']['password'] = $newpass;
            echo "Password updated successfully!";
        } else {
            echo "Error: New Password and Retyped Password do not match!";
        }
    } else {
        echo "Error: New Password should not be the same as the Current Password!";
    }
} else {
    echo "Error: Current Password is incorrect!";
}
?>
