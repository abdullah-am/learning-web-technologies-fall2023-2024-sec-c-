<?php
  require_once('../controller/session.php');

  require_once('../model/userModel.php');

   $data=getId($_SESSION['id']);
       $username=$data['username'];
?>


<html lang="en">
<head>
    <title>VIEW COURSE</title>
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
              <a href="../view/studenthome.php">Back</a>
			  <td>
				<table border="1"   cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td width="25%">view student<hr>

							<ul>
                            <li><a href="viewcourse.php">View course</a></li>
							</ul>
						</td>

                        <td>
                            <table width="100%" border="1">
                                <tr>
                                    <th>COURSE</th>
                                    <th>DETAIL</th>
                                </tr>

                                <?php  
                                    
                                    $con = getConnection();
                                    $sql = "select * from course";
                                    $result = mysqli_query($con, $sql);

                                    if (!$result) {
                                        echo"error";
                                    } else {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                       
                                        <td><?php echo $row['course']?></td>
                                        <td><?php echo $row['detail']?></td>
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