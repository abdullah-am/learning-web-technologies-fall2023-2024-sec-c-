<?php
    //session_start();
    require_once('../controller/sessionCheak.php');
    require_once('../model/userModel.php');
    if(isset($_REQUEST['terms'])){
       
        $terms=$_REQUEST['terms'];
        $value = insertterms($terms);
        if($value){
            header('location: tc.php');
        }
        else{
            echo 'invalid';
        }
    }

    $data=getId($_SESSION['id']);
        $username=$data['username'];
   
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TERMS AND CONDITIONS</title>
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
            padding: 20px;
        }
        textarea {
            width: 80%;
            height: 50px;
            margin-bottom: 10px;
            resize: vertical;
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
        <table border="1" align="center" width="100%">

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
                    <table width="100%" >
                        <tr>
                            <td>
                                <h3>Post term</h3>
                                <h3>
                                <form action="tc.php" method="post">
                                    <textarea rows="2" cols="50" name="terms" placeholder="Post T&C here.."></textarea><br>
                                    <input type="submit" value="Submit">
                                </form>
                                </h3>
                            <!--</td>
                            <td>-->
                                <h2>TERMS AND CONDITIONS</h2>
                                <?php
                                  //require_once('../model/userModel.php');
                                    $con=getconnection();
                                    $sql="select * from terms";
                                    $result=mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_array($result)){
                                        echo "<table with='100%'><tr><td>".$row['term']."</td></tr></table>";
                                    }
                 
                                ?>
                            </td>
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
                    CopyRight&copy; 2023
                </td>
            </tr>
        </table>
    </form>
</body>
</html>