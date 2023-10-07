<?php
 if(isset($_REQUEST['name'])){
    $name = $_REQUEST['name'];
     
 }

?>
<html lang="en">
<head>
    <title>name</title>
</head>
<body>
    <form method="post" action="namecheak.php" enctype="">
        Name:<br>
        <input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>" /><br>
        <input type="submit" name="submit" value="submit" />

    </form>
</body>
</html>