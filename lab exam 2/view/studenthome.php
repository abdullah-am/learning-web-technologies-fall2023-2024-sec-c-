<?php
   require_once('../controller/session.php');

   require_once('../model/userModel.php');
 
    $data=getId($_SESSION['id']);
        $username=$data['username'];
?>


<html lang="en">
<head>
    <title>STUDENT HOME</title>
</head>
<body>
    <form>
      <table border="0" cellpadding="0" cellspacing="0" align="center" width="1080px">
            

     		 <!-- top bar -->

            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td align="center">
                               <h4><a href="../index.php">Home</a> | 
								 logged as <a> <?php echo $username;?> </a>|
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
						<td width="25%">STUDENT DASHBOARD<hr>

							<ul>
                            <li><a href="profile.php">profile</a></li>
							<li><a href="viewcourse.php">view courses</a></li>
							</ul>
						</td>

						<td><h3>welcome student page</h3></td>

					</tr>

				</table>
				</td>
            </tr>
           



	

            <!-- bottom bar

            <tr align="center">
                <td>
                        Copyright &copy; 2023
                </td>		
            </tr> -->


       </table>
    </form>
   </body>
</html>