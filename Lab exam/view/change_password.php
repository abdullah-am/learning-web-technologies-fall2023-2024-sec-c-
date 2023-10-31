<html lang="en">
    <head>
        <title>CHANGE PASSWORD</title>
    </head>
			<body>
				<center>
					<form method="post" action="../controller/changepasscheak.php" enctype="">
						<table border="0" cellspacing="0" cellpadding="5">
							<tr>
								<td>
									<fieldset>
										<legend>CHANGE PASSWORD</legend>
										Current Password<br />
										<input type="password" name="currentpass" value=""/><br />
										New Password<br />
										<input type="password" name="newpass" value=""/><br />
										Retype New Password<br />
										<input type="password"name="repass" value=""/>								
										<hr />
										<input type="button" value="Change" />     
										<a href="home.php">Home</a>						
									</fieldset>
								</td>
							</tr>
						</table>
					</form>
				</center>
		   </body>
</html>