<!DOCTYPE html>
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
<div class="table-wrap"><table>
<tr><th>ID</th><th>Full Name</th><th>Email</th><th>Mobile</th><th>Gender</th><th>Status</th><th>Action</th></tr>
<tr><td>001</td><td>Rahul Patel</td><td>rahul@example.com</td><td>9876543210</td><td>Male</td><td><span class="badge green">Active</span></td><td><button class="btn danger">Delete</button></td></tr>
<tr><td>002</td><td>Priya Shah</td><td>priya@example.com</td><td>9876501234</td><td>Female</td><td><span class="badge green">Active</span></td><td><button class="btn danger">Delete</button></td></tr>
<tr><td>003</td><td>Amit Joshi</td><td>amit@example.com</td><td>9898989898</td><td>Male</td><td><span class="badge green">Active</span></td><td><button class="btn danger">Delete</button></td></tr>
<tr><td>004</td><td>Neha Mehta</td><td>neha@example.com</td><td>9812345678</td><td>Female</td><td><span class="badge yellow">Pending</span></td><td><button class="btn danger">Delete</button></td></tr>
</table></div>
</div>
</div>
</main>
</div>
</body>
</html>