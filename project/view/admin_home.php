<?php
    require_once('../controller/sessionCheak.php');

    require_once('../model/userModel.php');

   $data=getId($_SESSION['id']);
       $username=$data['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMIN DASH BOARD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        /* Top bar */
        .top-bar {
            background-color: #7DA8B8;
            color: #fff;
            padding: 10px 0;
        }
        .top-bar table {
            width: 100%;
        }
        .top-bar img {
            height: 60px;
            width: 60px;
            vertical-align: middle;
        }
        .top-bar h2 {
            margin: 0;
            display: inline-block;
            vertical-align: middle;
        }
        .top-bar h4 {
            margin: 0;
            display: inline-block;
            float: right;
        }

        /* Main content */
        .main-content {
            padding: 50px;
        }
        
        fieldset {
            border: 1px solid #ccc;
            padding: 50px;
        }

        legend {
            font-weight: bold;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: green;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        /* Footer */
        .footer {
            background-color: #7DA8B8;
            color: #fff;
            padding: 10px 0;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <form>
        <table border="0" align="center" width="100%">

            <!-- top bar -->
            <tr>
                <td class="top-bar">
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="wed.png" alt="">
                            </td>
                            <td align="center">
                                <h2>Bibah.com</h2>
                            </td>
                            <td align="right">
                               <h4><a href="../index.php">Home</a> | 
								 logged as <a href="profile.php"> <?php echo $username;?> </a>|
								<a href="../controller/logout.php">log out</a></h4>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- body -->
            <tr>
                <td class="main-content">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%" >
                        <tr>
                            <td width="25%">ADMIN DASHBOARD

                            <ul>
							<li><a href="profile.php">view Profile</a></li>
							<li><a href="Editprofile.php">Edit Profile</a></li>
                            <li><a href="view_users.php.php">View users</a></li>
							<li><a href="changepic.php">Change profile picture</a></li>
							<li><a href="setting.php">SETTING</a></li>
							<li><a href="tc.php">Terms & Conditions</a></li>
							<li><a href="aboutus.php">about</a></li>
							</ul>
                            </td>

                            <td><h3>welcome</h3></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- bottom bar -->
            <tr align="center">
                <td class="footer">
                    <a href="viewT&C.php">Terms & Conditions</a> |
                    <a href="privacyPolicy.html">Privacy Policy</a> |
                    <a href="viewabout.php">About Us</a><br>
                    &copy; 2023
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

