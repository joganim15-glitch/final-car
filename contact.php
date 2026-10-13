<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav>
    <div class="logo" >Car Shop</div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cars.php">Cars</a></li>
        <li><a href="registration.php">Register</a></li>
        <li><a href="contact.php">Contact</a></li>
		<li><a href="ulogin.php">User Login</a></li>
    </ul>
</nav>

<section class="form-section">

    <form class="form-box">

        <h2>Contact <span>Us</span></h2>

        <div class="form-group">
            <label>Name</label>
            <input type="text" placeholder="Enter your name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label>Message</label>
            <textarea rows="6"
                placeholder="Enter your message"
                style="width:100%;padding:13px;background:#333;color:white;border:0;border-radius:5px;"></textarea>
        </div>

        <button class="btn" type="submit">Send Message</button>

    </form>

</section>

<footer>
    <p>© 2026 <span>Car Shop</span></p>
</footer>

</body>
</html>