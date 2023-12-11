<?php
    require_once('../controller/sessionCheak.php');

    require_once('../model/userModel.php');

    $data=getId($_SESSION['id']);
        $username=$data['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>CHANGE PASSWORD</title>
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
            padding: 50px;
        }
        
        fieldset {
            border: 1px solid #ccc;
            padding: 50px;
        }

        legend {
            font-weight: bold;
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
    
    <!-- Inside the <head> tag of your HTML file -->

    <script>
  function validateForm() {
    var currentPassword = document.getElementById('currentpassword').value;
    var newPassword = document.getElementById('newpassword').value;
    var rePassword = document.getElementById('repassword').value;

    if (currentPassword === '' || newPassword === '' || rePassword === '') {
      alert('Please fill in all fields.');
      return false;
    }

    if (newPassword !== rePassword) {
      alert('New password and retype password do not match.');
      return false;
    }

    // If validation passes, initiate the AJAX request
    changePasswordAJAX(currentPassword, newPassword, rePassword);
    return false;
  }

  function changePasswordAJAX(currentPassword, newPassword, rePassword) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          var response = xhr.responseText;
          if (response.trim() === 'success') {
            window.location.href = 'logout.php';
          } else {
            alert('Error: ' + response);
          }
        } else {
          alert('Error: ' + xhr.status);
        }
      }
    };

    xhr.open('POST', '../controller/changepasscheak.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('currentpassword=' + currentPassword + '&newpassword=' + newPassword + '&repassword=' + rePassword);
  }
</script>


    
    

</head>
<body>

        <table border="0" align="center" width="100%">

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
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%" >
                        <tr>
                         <a href="setting.php">Back</a>
                            <td width="25%">dashboard

                                <ul>
                                <li><a href="viewprofile.php">view Profile</a></li>
                                <li><a href="Editprofile.php">Edit Profile</a></li>
                                <li><a href="changepic.php">Change profile picture</a></li>
                                <li><a href="setting.php">SETTING</a></li>
                                </ul>
                            </td>

                            <td >
                                <form method="post" action="../controller/changepasscheak.php" onsubmit="return validateForm()">
                                    <fieldset >
                                            <legend>CHANGE PASSWORD</legend>
                                            <table width="100%">
                                                <tr>
                                                    <td>
                                                        Current password:
                                                    </td>
                                                    <td>:
                                                        <!--<input type="password" name="currentpassword" value="" required/>-->
                                                        <input type="password" id="currentpassword" name="currentpassword" value="" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        New password
                                                    </td>
                                                    <td>:
                                                       <!-- <input type="password" name="newpassword" value="" required/>-->
                                                        <input type="password" id="newpassword" name="newpassword" value="" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Retype New password
                                                    </td>
                                                    <td>:
                                                        <!--<input type="password" name="repassword" value="" required/>-->
                                                        <input type="password" id="repassword" name="repassword" value="" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="250">
                                                        <input type="submit" name="submit" value="submit" />
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
                <td class="footer">
                    <a href="viewT&C.php">Terms & Conditions</a> |
                    <a href="privacyPolicy.html">Privacy Policy</a> |
                    <a href="viewabout.php">About Us</a><br>
                    &copy; 2023
                </td>
            </tr>
        </table>
</body>
</html>
