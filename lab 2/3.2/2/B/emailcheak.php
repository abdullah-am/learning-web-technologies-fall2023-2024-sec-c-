<?php
if(isset($_REQUEST['email'])){
    $email = $_REQUEST['email'];
 }
?>
<html lang="en">
<head>
    <title>email</title>
</head>
<body>
    <form method="post" action="emailcheak.php" enctype="">
        email:<br>
        <input type="email" name="email" value="<?php if(isset($email)){echo $email;}?>" /><br>
        <input type="submit" name="submit" value="submit" />

    </form>
</body>
</html>