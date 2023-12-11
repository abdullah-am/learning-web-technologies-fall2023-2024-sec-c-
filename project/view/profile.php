<?php
    require_once('../controller/sessionCheak.php');

	require_once('../model/userModel.php');

	$data=getId($_SESSION['id']);
	    $email=$data['email'];
		$name=$data['name'];
		$usertype=$data['usertype'];
		$username=$data['username'];
?>


<html lang="en">
<head>
    <title>Profile</title>
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
                                <<h4><a href="../index.php">Home</a> | 
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
						<td width="25%">profile<hr>

							<ul>
							<li><a href="profile.php">view Profile</a></li>
							<li><a href="Editprofile.php">Edit Profile</a></li>
                            <li><a href="view_users.php.php">View users</a></li>
							<li><a href="changepic.php">Change profile picture</a></li>
							<li><a href="setting.php">SETTING</a></li>
							</ul>
						</td>

						<td>
							 <table border="1" cellpadding="5" cellspacing="0">
									<tr><td colspan="2" align="CENTER">Profile</td></tr>
									<tr><td>EMAIL</td><td><?php echo $email;?></tr>
									<tr><td>NAME</td><td><?php echo $name;?></td></tr>	
									<tr><td>USER TYPE</td><td><?php echo $usertype;?></td></tr>
									<tr><td colspan="2" align="right">
									<?php
									require_once('../model/userModel.php');
									$users= getUser($username);
										if ($users['usertype']=='user') {
											echo '<a href="user_home.php">Go Home</a>';
										} elseif ($users['usertype']=='Admin') {
											echo '<a href="admin_home.php">Go Home</a>';
										}

										?>
									</td></tr>
							 </table>	
						</td>

					</tr>

				</table>
				</td>
            </tr>
           



			


            <!-- bottom bar -->

            <tr align="center">
                <td>
                        <a href="t&c.html">Terms & Conditions</a> |
                        <a href="privacyPolicy.html">Privacy Policy</a> |
                        <a href="viewabout.php">About Us</a><br>
                        Copyright &copy; 2023
                </td>		
            </tr>


       </table>
    </form>
   </body>
</html>



