<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOG IN</title>
</head>
<body>
    <form method="post" action="../controller/logincheck.php" enctype="">
        <table border="0" align="center" width="1080px">

            <!-- top bar -->
            <tr>
                <td >
                    <table width="100%">
                        <tr>
                            <td align="center">
                                <h4><a href="../index.php">Home</a> |
                                <a href="login.php">Login</a> |
                                <a href="regist.php">Registration</a></h4>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- Form -->
            <tr>
                <td>
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
        </table>
    </form>
</body>
</html>

