
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RaiseSeed - Crowdfunding Platform</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <style>
        body, h1, h2, h3, h4, h5, h6 {font-family: "Karma", sans-serif;}
        .w3-bar-block .w3-bar-item {padding:20px;}

        /* Header and Hero Section Styles */
        .header-hero-section {
            background: url('assests/hero.jpg') no-repeat center center;
            background-size: cover;
            height: 500px; /* Combined height for header and hero */
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            
        }
        .header-buttons {
            display: flex;
            gap: 10px;
        }
        .header-buttons a {
            padding: 10px 20px;
            border-radius: 25px;
            border: 2px solid #fff;
            background-color: transparent;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }
        .header-buttons a:hover {
            background-color: #fff;
            color: #000;
        }

        .hero-content {
            text-align: center;
            padding-bottom: 40px;
        }
        .hero-content h1 {
            font-size: 3em;
        }
        .hero-content p {
            font-size: 1.5em;
        }
        .hero-content button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2em;
        }

        /* Section Styles */
        .section {
            padding: 40px 20px;
        }
        .section h2 {
            margin-bottom: 20px;
        }
        .section p {
            margin-bottom: 10px;
        }
        .campaign-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .campaign-card {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
        }
        .campaign-card img {
            max-width: 100%;
            border-radius: 8px;
        }
        .progress-bar {
            height: 8px;
            background-color: #ddd;
            border-radius: 4px;
            margin-top: 10px;
        }
        .progress-bar-inner {
            height: 100%;
            width: 50%; /* Replace with dynamic progress percentage */
            background-color: #4CAF50;
            border-radius: 4px;
        }
        /* Footer Styles */
        .footer {
            display: flex;
            justify-content: space-between;
            padding: 40px 20px;
            background-color: #333;
            color: white;
        }
        .footer-section {
            width: 45%;
        }
        .footer-section h2 {
            margin-bottom: 10px;
        }
        .footer-section p {
            margin: 5px 0;
        }
        .right-footer {
            text-align: right;
        }

    </style>
</head>
<body>
<!-- Header and Hero Section -->
<div class="header-hero-section">
    <!-- Header -->
    <div class="header">
        <h1>RaiseSeed</h1>
        <div class="header-buttons">
            <a href="signin.php">Sign In</a>
            <a href="signup.php">Sign Up</a>
        </div>
    </div>

    <!-- Hero Content -->
    <div class="hero-content">
        <h1>Support Innovative Ideas on RaiseSeed</h1>
        <p>Join us in funding the future</p>
        <button class="w3-button w3-black w3-large"><a href="support.php">Support Now</a></button>
    </div>
</div>
<!-- Campaign Grid -->
<div class="w3-container w3-padding-64">
    <h2 class="w3-center"><a href="champ.php">Popular Campaigns</a></h2>
    <div class="campaign-grid">
        <div class="campaign-card">
            <img src="assests/campaign1.jpg" alt="Campaign Image">
    <h2 class="w3-center"></h2>
            <h3><a href="campaing.php">Nourish Our Neighbors</a></h3>
            <p>$5,000 raised of $10,000 goal</p>
            <div class="progress-bar">
                <div class="progress-bar-inner" style="width: 50%;"></div>
            </div>
        </div>
        <div class="campaign-card">
            <img src="assests/campaign2.jpg" alt="Campaign Image">
            <h3>Feed Hope</h3>
            <p>$7,500 raised of $15,000 goal</p>
            <div class="progress-bar">
                <div class="progress-bar-inner" style="width: 50%;"></div>
            </div>
        </div>
        <div class="campaign-card">
            <img src="assests/campaign3.jpg" alt="Campaign Image">
            <h3>Health & Hope</h3>
            <p>$2,000 raised of $5,000 goal</p>
            <div class="progress-bar">
                <div class="progress-bar-inner" style="width: 40%;"></div>
            </div>
        </div>
    </div>
</div>

<!-- About Us Section -->
<div class="footer">
    <!-- About Us Section -->
    <div class="footer-section left-footer">
        <h2>About Us</h2>
        <p>RaiseSeed is a crowdfunding platform dedicated to supporting innovative ideas and creative projects. Our mission is to empower individuals to bring their projects to life through the support of a global community.</p>
    </div>

    <!-- Contact Us and Help Section -->
    <div class="footer-section right-footer">
        <h2>Contact Us</h2>
        <p>Email: support@raiseseed.com</p>
        <p>Phone: +123 456 7890</p>
        <h2>Help</h2>
        <p><a href="#" style="color: #fff; text-decoration: underline;">Visit Help Center</a></p>
    </div>
</div>

</body>
</html>
