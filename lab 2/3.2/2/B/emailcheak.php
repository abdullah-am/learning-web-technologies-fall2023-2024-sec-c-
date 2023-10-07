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
    <form method="post" action="#" enctype="">
        <fieldset>
            <legend>Email:</legend>
           <input type="email" name="email" value="<?php if(isset($email)){echo $email;}?>" /><input type="button" name="" value="i" /><br><hr>
            <input type="submit" name="submit" value="submit" />
        </fieldset>
    </form>
</body>
</html>