<!DOCTYPE html>
<html>
<head><title>Car Shop - Messages</title><link rel="stylesheet" href="admin-style.css"></head>
<body>
<div class="admin-layout">
<aside class="sidebar">
<div class="logo">Car Shop<small>ADMIN PANEL</small></div>
<div class="menu-title">Main Menu</div>
<ul>
<li><a href="admin-index.php"><span>Dashboard</span></a></li>
<li><a href="admin-cars.php"> <span>Cars</span></a></li>
<li><a href="admin-customers.php"> <span>Customers</span></a></li>
<li><a href="admin-payments.php"><span>Payments</span></a></li>
<li><a class="active" href="admin-messages.php"> <span>Messages</span></a></li>
</ul>
<div class="menu-title">Website</div><ul><li><a href="../new_app/index.html"><span>View Website</span></a></li></ul>
</aside>
<main class="main">
<header class="topbar"><div class="page-title">Contact Messages</div><div class="admin-user">Welcome, <span>Admin</span></div></header>
<div class="content">
<div class="panel">
<div class="panel-head"><h2>Customer <span>Messages</span></h2></div>
<div class="table-wrap"><table>
<tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Status</th><th>Action</th></tr>
<tr><td>#M001</td><td>Rahul Patel</td><td>rahul@example.com</td><td>I want more details about BMW M4.</td><td><span class="badge red">Unread</span></td><td><div class="actions"><button class="btn">Read</button><button class="btn danger">Delete</button></div></td></tr>
<tr><td>#M002</td><td>Priya Shah</td><td>priya@example.com</td><td>Please tell me about available new cars.</td><td><span class="badge red">Unread</span></td><td><div class="actions"><button class="btn">Read</button><button class="btn danger">Delete</button></div></td></tr>
<tr><td>#M003</td><td>Amit Joshi</td><td>amit@example.com</td><td>Is Toyota Supra available?</td><td><span class="badge green">Read</span></td><td><div class="actions"><button class="btn dark">Read</button><button class="btn danger">Delete</button></div></td></tr>
<tr><td>#M004</td><td>Neha Mehta</td><td>neha@example.com</td><td>I need help with payment.</td><td><span class="badge red">Unread</span></td><td><div class="actions"><button class="btn">Read</button><button class="btn danger">Delete</button></div></td></tr>
</table></div>
</div>
<div class="panel">
<div class="panel-head"><h2>Reply / <span>Message</span></h2></div>
<div class="form-grid">
<div class="form-group"><label>Customer Email</label><input type="email" placeholder="customer@example.com"></div>
<div class="form-group"><label>Subject</label><input type="text" placeholder="Enter subject"></div>
<div class="form-group full"><label>Message</label><textarea rows="6" placeholder="Write your reply..."></textarea></div>
</div>
<div class="form-actions"><button class="btn">Send Reply</button></div>
</div>
</div>
</main>
</div>
</body>
</html>