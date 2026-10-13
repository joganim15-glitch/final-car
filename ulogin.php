<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
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

    <form class="form-box" action="uloginproccess.php" method="POST">

        <h2>User<span> Login</span></h2>

        <div class="form-group">
            <label>User Name</label>
            <input type="text" placeholder="Enter your name" name="uname">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Enter password" name="upassword">
        </div>

        <button class="btn" type="submit" name="ulogin">Login</button>
        <button class="btn" type="submit" name="alogin">Admin Login</button>

    </form>

</section>

</body>
</html>