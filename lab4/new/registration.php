


<html lang="en">
<head>
    <title>REGISTRATION</title>
</head>
<body>
    <form  method="post" action="regischeak.php" enctype="">
         <table >
                <tr>
                    <td>
                        <fieldset height="35%" width="35%" >
                                <legend>REGISTRATION</legend>
                                Name &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :
                                <input type="text" name="name" value="" /><hr>
                                Email &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :
                                <input type="email" name="email" value="" /><hr>
                                username &emsp;&emsp;&emsp;&emsp; :
                                <input type="text" name="username" value="" /><hr>
                                Password &emsp;&emsp;&emsp;&emsp;&emsp; :
                                <input type="password" name="password" value="" /><hr>
                                confirmPassword &emsp;&emsp; :
                                <input type="password" name="confirmpassword" value="" /><hr>
                            <fieldset>
                                <legend>Gender</legend>
                                <input type="radio" name="gender" value="" /> Male
                                <input type="radio" name="gender" value="" /> female
                                <input type="radio" name="gender" value="" /> other
                            </fieldset><hr>
                            <fieldset>
                                <legend>Date of birth</legend>
                                <input type="text" name="dd" value="" size= 1 /> /
                                <input type="text" name="mm" value="" size= 1 /> / 
                                <input type="text" name="yyy" value="" size= 1 />(dd/mm/yyy)
                            </fieldset><hr>
                            <input type="submit" name="submit" value="submit"/>
                            <input type="reset" name="reset" value="Reset"/>
                        </fieldset>
                    
                    </td>
                </tr>
       </table>
    </form>
   </body>
</html>