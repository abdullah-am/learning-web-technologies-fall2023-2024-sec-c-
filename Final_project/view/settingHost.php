<?php
    require_once('../controller/sessionCheckHost.php');
     require_once('../model/userModel.php');
     
 
     $data=getId($_SESSION['id']);
         $username=$data['username'];
?>


<html lang="en">
<head>
    <title>SETTING</title>
</head>
<body>
    <form>
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
				<table border="1"   width="100%">
					<tr>
						<td width="25%">setting<hr>

							<ul>
							<li><a href="profile.php">view Profile</a></li>
							<li><a href="Editprofile.php">Edit Profile</a></li>
							<li><a href="changepic.php">Change profile picture</a></li>
							<li><a href="settingHost.php">SETTING</a></li>
							</ul>
						</td>

						<td >
                            <ul>
                            <li><a href="HostChangePassword.php">CHANGEPASSWORD</a></li>
                            <li><a href="delete.php">DELETE</a></li>
                            </ul>
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
                        <a href="aboutUs.html">About Us</a><br>
                        Copyright &copy; 2023
            </tr>


       </table>
    </form>
   </body>
</html>