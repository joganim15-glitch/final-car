<!DOCTYPE html>
<html>
<head>
    <title>Car Shop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav>
    <div class="logo" href="inde">Car Shop</div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cars.php">Cars</a></li>
        <li><a href="registration.php">Register</a></li>
        <li><a href="contact.php">Contact</a></li>
		<li><a href="ulogin.php">User Login</a></li>
    </ul>
</nav>

<section class="hero">
    <div class="hero-content">
        <h1>Find Your <span>Dream Car</span></h1>

        <p>
            Welcome to Car Shop. Explore new, old and
            Asian cars at the best prices.
        </p>

        <a href="cars.html" class="btn">Explore Cars</a>
    </div>
</section>

<section>
    <div class="title">
        <h2>Featured <span>Cars</span></h2>
    </div>

    <div class="car-container">

        <div class="car-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyizshZ6sY-w2IV_aWxmZJhDHdZ2oSwfKvZgFRts-ujvwMywGVsL6VruUhLTwCbzxuRhfcZbIm4uM-0bNxo5iJuvJT11TpmeVnMFSuxw&s=10">
            <div class="car-info">
                <h3>BMW M4</h3>
                <p>2025  Petrol  Automatic</p>
                <div class="price">&#8377;85,00,000 </div>
                <a href="car-details.html" class="btn">View Details</a>
            </div>
        </div>

        <div class="car-card">
            <img src="https://cdn.motor1.com/images/mgl/3ykxx/s3/the-fast-and-the-furious-toyota-supra-auction-three-quarters.jpg">
            <div class="car-info">
                <h3>Toyota Supra</h3>
                <p>2024  Petrol  Automatic</p>
                <div class="price">&#8377;75,00,000</div>
                <a href="car-details.html" class="btn">View Details</a>
            </div>
        </div>

        <div class="car-card">
            <img src="https://www.motorbeam.com/wp-content/uploads/2024-Mercedes-AMG-GT.jpg">
            <div class="car-info">
                <h3>Mercedes AMG</h3>
                <p>2025  Petrol  Automatic</p>
                <div class="price">&#8377;95,00,000</div>
                <a href="car-details.html" class="btn">View Details</a>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="title">
        <h2>Car <span>Categories</span></h2>
    </div>

    <div class="categories">

        <div class="category"
             style="background-image:url('images/new-car.jpg')">
            <h3>New Cars</h3>
        </div>

        <div class="category"
             style="background-image:url('images/old-car.jpg')">
            <h3>Old Cars</h3>
        </div>

        <div class="category"
             style="background-image:url('images/asian-car.jpg')">
            <h3>Asian Cars</h3>
        </div>

    </div>
</section>

<footer>
    <p>&copy; 2026 <span>Car Shop</span> | All Rights Reserved</p>
</footer>

</body>
</html>