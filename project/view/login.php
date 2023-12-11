<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOG IN</title>
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

        /* Form styling */
        form {
            margin-top: 20px;
        }
        fieldset {
            width: 50%;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
        }
        legend {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: green;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        a {
            text-decoration: none;
            color: #333;
            margin-left: 10px;
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
    <form method="post" action="../controller/logincheak.php" enctype="">
        <table border="1" align="center" width="100%">

            <!-- top bar -->
            <tr>
                <td class="top-bar">
                    <table >
                        <tr>
                            <td>
                                <img src="wed.png" alt="">
                            </td>
                            <td align="center">
                                <h2>Bibah.com</h2>
                            </td>
                            <td align="right">
                                <h4><a href="../index.php">Home</a> |
                                <a href="login.php">Login</a> |
                                <a href="registration.php">Registration</a></h4>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- Form -->
            <tr>
                <td width="100%">
                    <fieldset>
                        <legend>LOG IN</legend>
                        User Name &emsp13;&emsp;&emsp;&emsp; :
                        <input type="text" name="username" value="" /><br><br>
                        Password &emsp;&emsp;&emsp;&emsp; :
                        <input type="password" name="password" value="" /><hr>
                        <input type="checkbox" name="rememberMe" value="lsRemennberMe" /> Remember Me<br>
                        <input type="submit" name="submit" value="Submit"/> &emsp14;<a href="forgotpass.php">Forgot Password?</a>
                    </fieldset>
                </td>
            </tr>

            <!-- Footer -->
            <tr align="center">
                <td class="footer">
                    <a href="viewT&C.php">Terms & Conditions</a> |
                    <a href="privacyPolicy.html">Privacy Policy</a> |
                    <a href="viewabout.php">About Us</a><br>
                    CopyRight&copy; 2023
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
