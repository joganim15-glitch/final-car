<?php
$conn=mysqli_connect("localhost","root","","user_db");
 if(isset($_POST["submit"])){
	 $name=$_POST["name"];
	 $email=$_POST["email"];
	 $mno=$_POST["mno"];
	 $gender=$_POST["gender"];
	 $password=$_POST["p"];
	 $count=0;
	 $se="select email from users";
	 $result2=mysqli_query($conn,$se);
     
	 while($row=mysqli_fetch_assoc($result2)){	 
	 if($row["email"]==$email){
          $count=$count+1;	
	  }
	 }
		 if($count>0){
		echo "<script>alert('This email already used try again with another email'); window.location.href = 'registration.php';</script>";
		 
	 }else{
		 $ins="insert into users(name,email,mno,gender,password) values('$name','$email','$mno','$gender','$password')";
	     $result=mysqli_query($conn,$ins);
		 echo "<script>alert('Register successfully'); window.location.href = 'ulogin.php';</script>";
	 }
 }
?>