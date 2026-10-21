<!DOCTYPE html>
<?php
  $conn=mysqli_connect("localhost","root","","user_db");
?>
<html>
<head><title>Car Shop - Customers</title><link rel="stylesheet" href="admin-style.css"></head>
<body>
<div class="admin-layout">
<aside class="sidebar">
<div class="logo">Car Shop<small>ADMIN PANEL</small></div>
<div class="menu-title">Main Menu</div>
<ul>
<li><a href="admin-index.php"><span>Dashboard</span></a></li>
<li><a href="admin-cars.php"> <span>Cars</span></a></li>
<li><a class="active" href="admin-customers.php"> <span>Customers</span></a></li>
<li><a href="admin-payments.php"> <span>Payments</span></a></li>
<li><a href="admin-messages.php"> <span>Messages</span></a></li>
</ul>
<div class="menu-title">Website</div><ul><li><a href="../new_app/index.html"> <span>View Website</span></a></li></ul>
</aside>
<main class="main">
<header class="topbar"><div class="page-title">Customers</div><div class="admin-user">Welcome, <span>Admin</span></div></header>
<div class="content">
<div class="panel">
<div class="panel-head"><h2>Registered <span>Customers</span></h2></div>
<div class="search-row"><input type="text" placeholder="Search customer..."><button class="btn">Search</button></div>
<div class="table-wrap">
<form>
<table>
<tr>
 <th>ID</th>
 <th>Full Name</th>
 <th>Email</th>
 <th>Mobile</th>
 <th>Gender</th>
 <th>Action</th>
 </tr>
 <?php 
   $rid=1;
   $q="select * from users";
   $ans=mysqli_query($conn,$q);

  while($row =mysqli_fetch_assoc($ans)){
   ?>
  <tr>
  <td>
  <?php echo $rid; $rid++; ?>
  </td>
  <td>
  <?php echo $row['name']; ?>
  </td>
  <td>
  <?php echo $row['email']; ?>
  </td>
  <td>
  <?php echo $row['mno']; ?>
  </td>
  <td>
  <?php echo $row['gender']; ?>
  </td>
  <td>
  <input type='submit' class='btn danger' value='Delete' name='delet<?php echo $row['id'] ?>'>
  </td>
  </tr>
  <?php
  if(isset($_GET["delet$row[id]"])){
   header("location:delet.php?did=$row[id]");
   die;
   }
  }
  ?>
</table>
</form>
</div>
</div>
</div>
</main>
</div>
</body>
</html>