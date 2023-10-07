<?php
if(isset($_REQUEST['dob'])){
    $date=$_REQUEST['dd'];
    $month=$_REQUEST['mm'];
    $year=$_REQUEST['yyy'];
   
   echo $date/$month/$year;
   }
?>

<html lang="en">
<head>
    <title>dob</title>
</head>
<body>

    <form method="post" action="#" enctype="">
        <fieldset>
         <legend>Date of Birth:</legend> 
         dd    mm     yyyy  <br/>
         <input type="text" name="dd" value="<?php echo $date/ ?>" size= 1 /> /
         <input type="text" name="mm" value="<?php echo $month/?>" size= 1 /> / 
         <input type="text" name="yyy" value="<?php echo $year ?>" size= 1 /> <br/> <hr> 
         <input type="submit" name="submit" value="submit" />
        </fieldset>
    </form>
</body>
</html>