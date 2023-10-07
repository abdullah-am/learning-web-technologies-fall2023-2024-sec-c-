<?php
if(isset($_REQUEST['dob'])){
 $date=$_REQUEST['dd'];
 $month=$_REQUEST['mm'];
 $year=$_REQUEST['yyy'];

echo $date/$month/$year;
}

?>