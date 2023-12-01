<?php
   // require_once('../controller/sessionCheak.php');
?>


<html lang="en">
<head>
    <title>ADMIN HOME</title>
</head>
<body>
    <form>
      <table border="1" cellpadding="0" cellspacing="0" align="center" width="1080px">
            

     		 <!-- top bar -->

            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td align="right">
                                <h4><a>Home</a> | 
								 logged as <a></a>|
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
                            <li><a href="search.php">search</a></li>
							<li><a href="addemployee.php">Add employee</a></li>
                            <li><a href="viewemployee.php">View employee</a></li>
							</ul>
						</td>

						<td><h3>welcome admin page</h3></td>

					</tr>

				</table>
				</td>
            </tr>
           



			


            <!-- bottom bar -->

            <tr align="center">
                <td>
                        Copyright &copy; 2023
                </td>		
            </tr>


       </table>
    </form>
   </body>
</html>