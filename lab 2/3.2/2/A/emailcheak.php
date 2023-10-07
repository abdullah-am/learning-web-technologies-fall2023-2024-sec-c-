<?php
if(isset($_REQUEST['email'])){
    $email = $_REQUEST['email'];
     echo $email;
 }
?>
<html lang="en">
<head>
    <title>email</title>
</head>
<body>
    <form method="post" action="emailcheak.php" enctype="">
        email:<br>
        <input type="email" name="email" value="" /><br>
        <input type="submit" name="submit" value="submit" />

    </form>
</body>
</html>