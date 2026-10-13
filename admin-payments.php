<!DOCTYPE html>
<html>
<head><title>Car Shop - Payments</title><link rel="stylesheet" href="admin-style.css"></head>
<body>
<div class="admin-layout">
<aside class="sidebar">
<div class="logo">Car Shop<small>ADMIN PANEL</small></div>
<div class="menu-title">Main Menu</div>
<ul>
<li><a href="admin-index.php"><span>Dashboard</span></a></li>
<li><a href="admin-cars.php"> <span>Cars</span></a></li>
<li><a href="admin-customers.php"> <span>Customers</span></a></li>
<li><a class="active" href="admin-payments.php"> <span>Payments</span></a></li>
<li><a href="admin-messages.php"> <span>Messages</span></a></li>
</ul>
<div class="menu-title">Website</div><ul><li><a href="../new_app/index.html"> <span>View Website</span></a></li></ul>
</aside>
<main class="main">
<header class="topbar"><div class="page-title">Payments</div><div class="admin-user">Welcome, <span>Admin</span></div></header>
<div class="content">
<div class="cards">
<div class="stat-card"><h4>Total Payments</h4><div class="number">12</div><p>All payment records</p></div>
<div class="stat-card"><h4>Completed</h4><div class="number">9</div><p>Successful payments</p></div>
<div class="stat-card"><h4>Pending</h4><div class="number">3</div><p>Waiting for confirmation</p></div>
<div class="stat-card"><h4>Total Value</h4><div class="number">&#8377;4.2Cr</div><p>Payment amount</p></div>
</div>
<div class="panel">
<div class="panel-head"><h2>Payment <span>Records</span></h2></div>
<div class="table-wrap"><table>
<tr><th>ID</th><th>Customer</th><th>Car</th><th>Amount</th><th>Method</th><th>Status</th><th>Date</th></tr>
<tr><td>#P001</td><td>Rahul Patel</td><td>BMW M4</td><td>&#8377;85,00,000</td><td>UPI</td><td><span class="badge green">Completed</span></td><td>24-09-2026</td></tr>
<tr><td>#P002</td><td>Priya Shah</td><td>Toyota Supra</td><td>&#8377;75,00,000</td><td>Credit Card</td><td><span class="badge green">Completed</span></td><td>23-09-2026</td></tr>
<tr><td>#P003</td><td>Amit Joshi</td><td>Mercedes AMG</td><td>&#8377;95,00,000</td><td>Net Banking</td><td><span class="badge yellow">Pending</span></td><td>22-09-2026</td></tr>
<tr><td>#P004</td><td>Neha Mehta</td><td>Honda Civic</td><td>&#8377;18,00,000</td><td>Debit Card</td><td><span class="badge green">Completed</span></td><td>20-09-2026</td></tr>
</table></div>
</div>
</div>
</main>
</div>
</body>
</html>