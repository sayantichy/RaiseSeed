
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
          /* Popular Campaigns Section */
          .campaign-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 40px 0;
        }
        .campaign-card {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }
        .campaign-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .campaign-card img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .campaign-card h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }
        .campaign-card p {
            font-size: 1.2em;
            margin-bottom: 15px;
            color: #666;
        }
        .progress-bar {
            height: 8px;
            background-color: #ddd;
            border-radius: 4px;
            margin-top: 10px;
        }
        .progress-bar-inner {
            height: 100%;
            width: 50%;
            background-color: #4CAF50;
            border-radius: 4px;
        }

        /* Join Section */
        .join-section {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 50px 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            margin-bottom: 40px;
        }
        .join-section div {
            width: 45%;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .join-section div:hover {
            background-color: #f1f1f1;
            transform: translateY(-5px);
        }
        .join-section h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
        }
        .join-section p {
            font-size: 1.2em;
            color: #666;
        }

        /* How to Join Section */
        .how-to-join {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 40px 20px;
            background-color: #fff;
        }
        .how-step {
            flex: 1;
            padding: 30px;
            text-align: center;
            background-color: #f4f4f4;
            border-radius: 10px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .how-step:hover {
            background-color: #e0e0e0;
            transform: scale(1.05);
        }
        .how-step h3 {
            font-size: 1.7em;
            margin-bottom: 15px;
            color: #333;
        }
        .how-step p {
            font-size: 1.2em;
            color: #666;
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
            <h3><a href="campaign.php">Nourish Our Neighbors</a></h3>
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

<!-- Join Section -->
<div class="join-section">
    <div>
        <h2>Why Join Us?</h2>
        <p>RaiseSeed is the perfect platform for anyone with innovative ideas, enabling you to connect with investors who can make your vision a reality.</p>
        <p>You'll be part of a growing community, get access to industry experts, and have the tools you need to succeed.</p>
    </div>
    <div>
        <h2>Why Support Us?</h2>
        <p>By supporting RaiseSeed, you are empowering creative minds and contributing to the development of groundbreaking projects.</p>
        <p>Be a part of the next big innovation!</p>
    </div>
</div>

<!-- How to Join Us Section -->
<div class="w3-container w3-padding-64">
    <h2 class="w3-center">How To Join RaiseSeed?</h2>
    <div class="how-to-join">
        <div class="how-step">
            <h3>Step 1: Create an Account</h3>
            <p>Sign up to become a member of our platform and get access to exciting opportunities.</p>
        </div>
        <div class="how-step">
            <h3>Step 2: Explore Projects</h3>
            <p>Browse through various innovative projects and find the ones that resonate with you.</p>
        </div>
        <div class="how-step">
            <h3>Step 3: Contribute or Launch</h3>
            <p>Whether you're supporting a project or launching your own, the process is simple and rewarding.</p>
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
