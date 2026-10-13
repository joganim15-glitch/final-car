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

    <form class="form-box" action="register.php" method="POST">

        <h2>Create <span>Account</span></h2>

        <div class="form-group">
            <label>Full Name</label>
            <input type="text" placeholder="Enter your name" name="name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" placeholder="Enter your email" name="email">
        </div>

        <div class="form-group">
            <label>Mobile Number</label>
            <input type="tel" placeholder="Enter mobile number" name="mno">
        </div>

        <div class="form-group">
            <label>Gender</label>
            <select name="gender">
                <option>Select Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Enter password" name="p">
        </div>

        <button class="btn" type="submit" name="submit">Register</button>

    </form>

</section>

</body>
</html>