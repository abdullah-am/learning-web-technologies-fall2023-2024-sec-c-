<?php
    session_start();
    require_once('../model/userModel.php');
    $course =$_REQUEST['course'];
    $detail =$_REQUEST['detail'];

if($course == " " || $detail == " " ){
    echo "null input";
 }
 else {

    $status=getaddcourse($course,$detail);
    if($status){
      echo "succesfull";
    } else{
      echo"invalid";
    }
     
       
}

?>