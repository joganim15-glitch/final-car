<?php
  $conn=mysqli_connect("localhost","root","","user_db");
  if(isset($_POST["ulogin"])){
	  $uname=$_POST["uname"];
	  $upassword=$_POST["upassword"];
	  $q="select * from users";
	  $re=mysqli_query($conn,$q);
	  $c=mysqli_num_rows($re);
	  $login=0;

	  if($c){
		  while($row=mysqli_fetch_assoc($re)){
			   if($uname==$row['name'] && $upassword==$row['password']){
				   $login=$login+1;
			   }
		  }
		  if($login>0){
			  echo "<script>alert('Login successfully'); window.location.href = 'index.php';</script>";
		  }else{
		  echo "<script>alert('Login filed try again'); window.location.href = 'ulogin.php';</script>";
	      }
	  }
  }
  if(isset($_POST["alogin"])){
	  header("location:alogin.php");
	  exit;
  }
?>