<?php
  require_once('../controller/session.php');

  require_once('../model/userModel.php');

   $data=getId($_SESSION['id']);
       $username=$data['username'];
?>


<html lang="en">
<head>
    <title>VIEW STUDENT</title>
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
              <a href="../view/adminhome.php">Back</a>
			  <td>
				<table border="1"   cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td width="25%">view student<hr>

							<ul>
							<li><a href="addstudent.php">Add student</a></li>
                            <li><a href="viewstudent.php">View student</a></li>
                            <li><a href="addcourse.php">Add course</a></li>
							</ul>
						</td>

                        <td>
                            <table width="100%" border="1">
                                <tr>
                                    <th>NAME</th>
                                    <th>USER NAME</th>
                                    <th>EMAIL</th>
                                    <th>Password</th>
                                    <th>Gender</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>

                                <?php  
                                    
                                    $con = getConnection();
                                    $sql = "select * from users";
                                    $result = mysqli_query($con, $sql);

                                    if (!$result) {
                                        echo"error";
                                    } else {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                       
                                        <td><?php echo $row['name']?></td>
                                        <td><?php echo $row['username']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['password']?></td>
                                        <td><?php echo $row['gender']?></td>
                                        <td><?php echo $row['usertype']?></td>
                        
                                      <td>
                                            <a href="edit.php?id=<?php echo $row['id']?>">EDIT</a> 
                                        </td>
                                    </tr>
                                <?php } }?>
                            </table> 
                        </td>

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