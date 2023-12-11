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
    <form >
        <table border="0" align="center" width="100%" height="100%">

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
                                <h4><a href="index.php">Home</a> |
                                <a href="view/login.php">login</a>|
                                <a href="view/registration.php">Registration</a></h4>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- Form -->
            <tr height="400" width="100%">
                <td align="center" ><h3>Welcome to Bhibah.com</h3></td>
            </tr>

            <!-- Footer -->
            <tr align="center">
                <td class="footer">
                    <a href="view/viewT&C.php">Terms & Conditions</a> |
                    <a href="privacyPolicy.html">Privacy Policy</a> |
                    <a href="view/viewabout.php">About Us</a><br>
                    COPYRIGHT&copy; 2023 Bibah.com
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
