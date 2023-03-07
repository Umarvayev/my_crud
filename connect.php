<?php 

$con=new mysqli('localhost','root','','crud');

if($con){
   echo "Connection successfull";
}else{
    die(mysqli_error($con));
}

?>