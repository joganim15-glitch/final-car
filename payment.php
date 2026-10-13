<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav>
    <div class="logo" >Car Shop</div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cars.php">Cars</a></li>
        <li><a href="registration.php">Register</a></li>
		<li><a href="ulogin.php">User Login</a></li>
    </ul>
</nav>

<section class="form-section">

    <form class="form-box">

        <h2>Car <span>Payment</span></h2>

        <div class="form-group">
            <label>Customer Name</label>
            <input type="text" placeholder="Enter your name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>Payment Method</label>
            <select>
                <option>Credit Card</option>
                <option>Debit Card</option>
                <option>UPI</option>
                <option>Net Banking</option>
            </select>
        </div>

        <div class="form-group">
            <label>Card / UPI Number</label>
            <input type="text" placeholder="Enter payment details">
        </div>

        <button class="btn" type="submit">Pay Now</button>

    </form>

</section>

</body>
</html>