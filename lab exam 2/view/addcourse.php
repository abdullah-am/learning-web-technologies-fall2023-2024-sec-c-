

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADD COURSE</title>
</head>
<body>
    <form method="post" action="../controller/coursecheck.php" enctype="">
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
                <a href="../view/adminhome.php">Back</a>
                <td>
                    <fieldset>
                        <legend>ADD COURSE</legend>
                        course:&emsp;
                        <input type="text" name="course" value="" required><br><br>
                        detail:&emsp;
                        <input type="text" name="detail" value="" required><br><br>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </fieldset>
                </td>
            </tr>

        </table>
    </form>
</body>
</html>
