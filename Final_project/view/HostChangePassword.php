<?php
    require_once('../controller/sessionCheckHost.php');

    require_once('../model/userModel.php');

    $data=getId($_SESSION['id']);
        $username=$data['username'];
?>


<html lang="en">
<head>
    <title>CHANGE PASSWORD</title>
</head>
<body>
    <!-- <form method="post" action="../controller/changepasscheak.php" enctype=""> -->
      <table border="1" cellpadding="0" cellspacing="0" align="center" width="1080px">
            

      <!-- top bar -->

            <tr>
                <td>
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
								 logged as <a href="profile.php"> <?php echo $username;?> </a>|
								<a href="../controller/logout.php">log out</a></h4>
                            </td>
                           
                        </tr>
                    </table>
                   
                </td>
            </tr>




            <!-- body -->

            <tr>
			  <td>
				<table border="1"   cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td width="25%">admin dashboard<hr>

							<ul>
							<li><a href="viewprofile.php">view Profile</a></li>
							<li><a href="Editprofile.php">Edit Profile</a></li>
							<li><a href="changepic.php">Change profile picture</a></li>
							<li><a href="settingHost.php">SETTING</a></li>
							</ul>
						</td>

						<td >
                            <form method="post" action="../controller/HostChangePasswordCheck.php" enctype="">
						        <fieldset >
                                        <legend>PROFILE</legend>
                                        <table >
                                            <tr>
                                                <td>
                                                    Current password:
                                                </td>
                                                <td>:
                                                    <input type="password" name="currentpassword" value="" required/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    New password
                                                </td>
                                                <td>:
                                                    <input type="password" name="newpassword" value="" required/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Retype New password
                                                </td>
                                                <td>:
                                                    <input type="password" name="repassword" value="" required/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="250"><hr>
                                                    <input type="submit" name="submit" value="submit" required/>
                                                </td>
                                            </tr>
                                            
                                        </table>
                                        
                                </fieldset> 
                            </form>
                        </td>

					</tr>

				</table>
				</td>
            </tr>
           





            <!-- bottom bar -->

            <tr align="center">
                <td>
                        <a href="viewT&C.php">Terms & Conditions</a> |
                        <a href="privacyPolicy.html">Privacy Policy</a> |
                        <a href="viewabout.php">About Us</a><br>
                        Copyright &copy; 2023
            </tr>


       </table>
    <!--</form>-->
   </body>
</html>