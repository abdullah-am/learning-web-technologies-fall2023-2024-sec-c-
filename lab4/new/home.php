<?php
session_start();

if (!isset($_SESSION['flag'])) {
    header("Location:login.php");
}
?>
<html lang="en">
    <head>
        <title>dashboard</title>
    </head>
    <body>
    <form method="POST" action="#" enctype="">
        <table>
                <tr>
                    <td>Home
                        <ul>
                        <li><a href="home.php">home</a></li>
                        <li><a href="viewprofile.php">view Profile</a></li>
                        <li><a href="profilepic.php">Change profile picture</a></li>
                        <li><a href="changepass.php">Change password</a></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>