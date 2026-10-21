<?php
  $conn=mysqli_connect("localhost","root","","user_db");
  $did=$_GET['did'];
  echo "hello".$did;
  $q2="Delete from users where id=$did";
   $ans2=mysqli_query($conn,$q2);
   if($ans2){
   header("location:admin-customers.php");
   }
?>