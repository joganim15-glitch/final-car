<!DOCTYPE html>
<html>
<head>
    <title>Car Shop - Manage Cars</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
<div class="admin-layout">
<aside class="sidebar">
    <div class="logo">Car Shop<small>ADMIN PANEL</small></div>
    <div class="menu-title">Main Menu</div>
    <ul>
        <li><a href="admin-index.php"><span>Dashboard</span></a></li>
        <li><a class="active" href="admin-cars.php"><span>Cars</span></a></li>
        <li><a href="admin-customers.php"> <span>Customers</span></a></li>
        <li><a href="admin-payments.php"><span>Payments</span></a></li>
        <li><a href="admin-messages.php"> <span>Messages</span></a></li>
    </ul>
    <div class="menu-title">Website</div>
    <ul><li><a href="../new_app/index.html"> <span>View Website</span></a></li></ul>
</aside>

<main class="main">
<header class="topbar"><div class="page-title">Manage Cars</div><div class="admin-user">Welcome, <span>Admin</span></div></header>
<div class="content">
    <div class="panel">
        <div class="panel-head"><h2>Car <span>List</span></h2><a class="btn" href="#add-car">+ Add New Car</a></div>
        <div class="search-row">
            <input type="text" placeholder="Search car name...">
            <select><option>All Categories</option><option>New</option><option>Old</option><option>Asian</option></select>
            <button class="btn">Search</button>
        </div>
        <div class="table-wrap">
        <table>
            <tr><th>Car Name</th><th>Year</th><th>Fuel</th><th>Transmission</th><th>Condition</th><th>Price</th><th>Action</th></tr>
            <tr><td>BMW M4</td><td>2025</td><td>Petrol</td><td>Automatic</td><td><span class="badge green">New</span></td><td>&#8377;85,00,000</td><td><div class="actions"><button class="btn">Edit</button><button class="btn danger">Delete</button></div></td></tr>
            <tr><td>Toyota Supra</td><td>2024</td><td>Petrol</td><td>Automatic</td><td><span class="badge green">New</span></td><td>&#8377;75,00,000</td><td><div class="actions"><button class="btn">Edit</button><button class="btn danger">Delete</button></div></td></tr>
            <tr><td>Mercedes AMG</td><td>2025</td><td>Petrol</td><td>Automatic</td><td><span class="badge green">New</span></td><td>&#8377;95,00,000</td><td><div class="actions"><button class="btn">Edit</button><button class="btn danger">Delete</button></div></td></tr>
            <tr><td>Honda Civic</td><td>2020</td><td>Petrol</td><td>Automatic</td><td><span class="badge yellow">Old</span></td><td>&#8377;18,00,000</td><td><div class="actions"><button class="btn">Edit</button><button class="btn danger">Delete</button></div></td></tr>
            <tr><td>Nissan GTR</td><td>2019</td><td>Petrol</td><td>Automatic</td><td><span class="badge yellow">Old</span></td><td>&#8377;60,00,000</td><td><div class="actions"><button class="btn">Edit</button><button class="btn danger">Delete</button></div></td></tr>
            <tr><td>Hyundai i20</td><td>2021</td><td>Petrol</td><td>Manual</td><td><span class="badge yellow">Old</span></td><td>&#8377;9,00,000</td><td><div class="actions"><button class="btn">Edit</button><button class="btn danger">Delete</button></div></td></tr>
        </table>
        </div>
    </div>

    <div class="panel" id="add-car">
        <div class="panel-head"><h2>Add <span>Car</span></h2></div>
        <div class="form-grid">
            <div class="form-group"><label>Car Name</label><input type="text" placeholder="Enter car name"></div>
            <div class="form-group"><label>Price</label><input type="text" placeholder="Enter price"></div>
            <div class="form-group"><label>Model Year</label><input type="number" placeholder="2025"></div>
            <div class="form-group"><label>Fuel</label><select><option>Petrol</option><option>Diesel</option><option>Electric</option><option>Hybrid</option></select></div>
            <div class="form-group"><label>Transmission</label><select><option>Automatic</option><option>Manual</option></select></div>
            <div class="form-group"><label>Condition</label><select><option>New</option><option>Old</option></select></div>
            <div class="form-group full"><label>Description</label><textarea rows="4" placeholder="Enter car description"></textarea></div>
        </div>
        <div class="form-actions"><button class="btn">Save Car</button><button class="btn dark">Reset</button></div>
    </div>
</div>
</main>
</div>
</body>
</html>