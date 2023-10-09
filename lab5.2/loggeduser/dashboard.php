<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location:../publicuser/login.php");
    //exit;
}
?>
<html lang="en">
    <head>
        <title>dashboard</title>
    </head>
    <body>
    <form method="POST" action="#" enctype="">
        <table border="1" cellpadding="0" cellspacing="0" height="65%" width="60%" >
                <tr>
                    <td colspan="3" height = "15%" align="right" >
                        <img align="left" src="photo.png"  alt="">
                            <h4>logged as  |
                            <a href="dashboard.php"><?php echo $_SESSION["username"]; ?></a>|
                            <a href="../publicuser/login.php">log out</a></h4>
                    </td>
                </tr>
                <tr>
                    <td width="25%">Account<hr>

                        <ul>
                        <li><a href="dashboard.php">dashboard</a></li>
                        <li><a href="viewprofile.php">view Profile</a></li>
                        <li><a href="Editprofile.php">Edit Profile</a></li>
                        <li><a href="changepic.php">Change profile picture</a></li>
                        <li><a href="changepass.php">Change password</a></li>
                        <li><a href="../publicuser/login.php">LogOut</a></li>
                        </ul>
                    </td>

                    <td ><h3>Welcome to X</h3></td>
                </tr>
                <tr>
                    <td colspan="3" align="center" height = "65px">Copyright &copy;2023</td>
                </tr>
            

            </table>
        </form>
    </body>
</html>