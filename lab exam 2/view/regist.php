<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <form method="post" action="../controller/registcheck.php" enctype="">
        <table border="0" align="center" width="1080px">

            <!-- top bar -->
            <tr>
                <td >
                    <table width="100%">
                        <tr>
                            <td align="center">
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
                            <input type="radio" name="usertype" value="student" required> student
                        </fieldset><br>
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value="Male" required> Male
                            <input type="radio" name="gender" value="Female" required> Female
                        </fieldset><br>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </fieldset>
                </td>
            </tr>

        </table>
    </form>
</body>
</html>
