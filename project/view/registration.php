<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
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
        input[type="password"],
        input[type="email"],
        input[type="date"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            background-color: green;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
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
    <form method="post" action="../controller/regischeak.php" enctype="">
        <table border="0" align="center" width="1080px">

            <!-- top bar -->
            <tr>
                <td class="top-bar">
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="wed.png" alt="" height="60" width="60">
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
                <td>
                    <fieldset>
                        <legend>Registration</legend>
                        <input type="hidden" name="id" value="" />
                        Name:&emsp;
                        <input type="text" name="name" value="" required><br><br>
                        Email:&emsp;
                        <input type="email" name="email" value="" required><br><br>
                        Username:&emsp;
                        <input type="text" name="username" value="" required><br><br>
                        Password:&emsp;
                        <input type="password" name="password" value="" required><br><br>
                        Confirm Password:&emsp;
                        <input type="password" name="confirmpassword" value="" required><br><br>
                        <fieldset>
                            <legend>User Type</legend>
                            <input type="radio" name="usertype" value="Admin" required> Admin
                            <input type="radio" name="usertype" value="user" required> User
                            <input type="radio" name="usertype" value="host" required> Host
                        </fieldset><br>
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value="Male" required> Male
                            <input type="radio" name="gender" value="Female" required> Female
                            <input type="radio" name="gender" value="Other" required> Other
                        </fieldset><br>
                        <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="date" name="dob" value="" required>
                        </fieldset><br>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </fieldset>
                </td>
            </tr>

            <!-- Footer -->
            <tr align="center">
                <td class="footer">
                    <a href="viewT&C.php">Terms & Conditions</a> |
                    <a href="privacyPolicy.html">Privacy Policy</a> |
                    <a href="viewabout.php">About Us</a><br>
                    COPYRIGHT&copy; 2023 Bibah.com
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
