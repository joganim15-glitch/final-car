<?php
  if(isset($_POST["alogin"])){
	  $aname=$_POST["aname"];
	  $apassword=$_POST["apassword"];
	  $name="admin";
	  $password="admin123";
	  if($aname==$name && $apassword==$password){
		  echo "<script>alert('Login successfully'); window.location.href = 'admin-index.php';</script>";
	  }else{
		  echo "<script>alert('Login filed try again');window.location.href = 'alogin.php';</script>";
	  }
  }
?>