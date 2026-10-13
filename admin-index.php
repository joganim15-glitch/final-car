<!DOCTYPE html>
<html>
<head>
    <title>Car Shop - Admin Dashboard</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
<div class="admin-layout">
<aside class="sidebar">
    <div class="logo">Car Shop<small>ADMIN PANEL</small></div>
    <div class="menu-title">Main Menu</div>
    <ul>
        <li><a class="active" href="admin-index.php"> <span>Dashboard</span></a></li>
        <li><a href="admin-cars.php"><span>Cars</span></a></li>
        <li><a href="admin-customers.php"> <span>Customers</span></a></li>
        <li><a href="admin-payments.php"><span>Payments</span></a></li>
        <li><a href="admin-messages.php"><span>Messages</span></a></li>
    </ul>
    <div class="menu-title">Website</div>
    <ul>
        <li><a href="index.php"> <span>View Website</span></a></li>
    </ul>
</aside>

<main class="main">
<header class="topbar">
    <div class="page-title">Dashboard</div>
    <div class="admin-user">Welcome, <span>Admin</span></div>
</header>

<div class="content">
    <div class="cards">
        <div class="stat-card"><h4>Total Cars</h4><div class="number">6</div><p>Cars listed on website</p></div>
        <div class="stat-card"><h4>Customers</h4><div class="number">24</div><p>Registered customers</p></div>
        <div class="stat-card"><h4>Payments</h4><div class="number">12</div><p>Payment records</p></div>
        <div class="stat-card"><h4>Messages</h4><div class="number">8</div><p>Contact messages</p></div>
    </div>

    <div class="summary-grid">
        <div class="panel">
            <div class="panel-head"><h2>Recent <span>Cars</span></h2><a class="btn" href="admin-cars.html">Manage Cars</a></div>
            <div class="table-wrap">
            <table>
                <tr><th>Car</th><th>Year</th><th>Type</th><th>Price</th></tr>
                <tr><td>BMW M4</td><td>2025</td><td><span class="badge green">New</span></td><td>&#8377;85,00,000</td></tr>
                <tr><td>Toyota Supra</td><td>2024</td><td><span class="badge green">New</span></td><td>&#8377;75,00,000</td></tr>
                <tr><td>Mercedes AMG</td><td>2025</td><td><span class="badge green">New</span></td><td>&#8377;95,00,000</td></tr>
                <tr><td>Honda Civic</td><td>2020</td><td><span class="badge yellow">Old</span></td><td>&#8377;18,00,000</td></tr>
            </table>
            </div>
        </div>

        <div class="panel">
            <div class="panel-head"><h2>Quick <span>Info</span></h2></div>
            <div class="notice"><strong>New Cars:</strong> 3</div>
            <div class="notice"><strong>Old Cars:</strong> 3</div>
            <div class="notice"><strong>Pending Payments:</strong> 3</div>
            <div class="notice"><strong>Unread Messages:</strong> 5</div>
        </div>
    </div>
</div>
</main>
</div>
</body>
</html>