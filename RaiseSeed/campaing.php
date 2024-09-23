<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .campaign-header {
            background-color:#28a745;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .campaign-header h1 {
            margin: 0;
        }

        .campaign-details {
            padding: 20px;
            background-color: white;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .campaign-details h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .progress-bar {
            width: 100%;
            background-color: #e0e0e0;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .progress-bar-inner {
            height: 20px;
            background-color: #28a745;
            width: 75%; /* Change this value to represent the progress */
        }

        .campaign-stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .campaign-stat {
            flex: 1;
            text-align: center;
            padding: 10px;
            background-color: #f9f9f9;
            margin: 0 5px;
            border-radius: 8px;
        }

        .campaign-stat h3 {
            margin: 0;
            color: #007BFF;
        }

        .rewards-section {
            padding: 20px;
            background-color: white;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .reward-tier {
            margin-bottom: 15px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        .reward-tier h4 {
            margin: 0 0 10px 0;
        }

        .creator-profile {
            padding: 20px;
            background-color: white;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .creator-profile h4 {
            margin-bottom: 10px;
        }

        .creator-profile p {
            margin: 0;
        }

        .back-now-button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #28a745;
            color: white;
            text-align: center;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .back-now-button:hover {
            background-color: #0056b3;
        }

        .comments-updates {
            padding: 20px;
            background-color: white;
            border-radius: 8px;
        }

        .comments-updates h4 {
            margin-bottom: 15px;
        }

        .comment, .update {
            margin-bottom: 15px;
        }

        .comment p, .update p {
            margin: 5px 0;
        }

        .comment-author, .update-author {
            font-weight: bold;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="campaign-header">
        <h1>Nourish Our Neighbors</h1>
    </div>

    <div class="container">
        <div class="campaign-details">
            <h2>Support Homeless Shelters with Food Supplies</h2>
            <p>
            In our community, many individuals and families face the harsh reality of homelessness. The "Nourish Our Neighbors" campaign aims to provide essential food supplies to local homeless shelters, ensuring that no one has to go hungry.

Our Mission: We believe that access to nutritious food is a fundamental right. This campaign seeks to gather support from compassionate community members like you to help fill the pantry shelves of our local shelters. By donating, you contribute to creating a more supportive and caring environment for those in need.

How You Can Help:

Donate Funds: Your financial contributions will directly support the purchase of fresh produce, canned goods, and non-perishable items. Every dollar counts!
Food Drives: Organize a food drive in your workplace, school, or community group. Collect essential food items and drop them off at designated shelters.
Spread the Word: Share our campaign on social media or with friends and family. The more people know, the more support we can gather.
Impact of Your Support:

Every donation will provide meals to individuals and families struggling with homelessness.
Our goal is to raise [insert fundraising goal] to sustain food supplies for shelters over the next 15 days.
Together, we can help ensure that every neighbor in our community has access to nourishing meals and the support they need to thrive.
Join Us: Stand with us in making a meaningful difference. Let's nourish our neighbors and show that our community cares. Together, we can create a positive impact and bring hope to those who need it most.

For more information, to donate, or to volunteer, please visit our campaign page or contact us at Email: support@raiseseed.com | Phone: +123 456 7890. Thank you for your generosity and support!
            </p>
        </div>

        <div class="progress-bar">
            <div class="progress-bar-inner"></div>
        </div>

        <div class="campaign-stats">
            <div class="campaign-stat">
                <h3>$75,000</h3>
                <p>Funding Goal</p>
            </div>
            <div class="campaign-stat">
                <h3>$56,250</h3>
                <p>Amount Raised</p>
            </div>
            <div class="campaign-stat">
                <h3>1125</h3>
                <p>Backers</p>
            </div>
            <div class="campaign-stat">
                <h3>15 Days</h3>
                <p>Days Remaining</p>
            </div>
        </div>

        <div class="rewards-section">
            <h2>Rewards</h2>
            <div class="reward-tier">
                <h4>$10 - Thank You Email</h4>
                <p>A personalized thank you email from the campaign creator.</p>
            </div>
            <div class="reward-tier">
                <h4>$50 - Early Access</h4>
                <p>Receive early access to the product once it's launched.</p>
            </div>
            <div class="reward-tier">
                <h4>$100 - Exclusive Merchandise</h4>
                <p>Get exclusive campaign merchandise as a token of appreciation.</p>
            </div>
        </div>

        <div class="creator-profile">
            <h4>About the Creator</h4>
            <p>
                This section provides details about the campaign creator, including past campaigns, experience, and other relevant information.
            </p>
        </div>

        <a href="support.php" class="back-now-button">Back Now</a>

        <div class="comments-updates">
            <h4>Comments</h4>
            <div class="comment">
                <p class="comment-author">John Doe:</p>
                <p>Great campaign! Looking forward to seeing the final product.</p>
            </div>

            <div class="comment">
                <p class="comment-author">Jane Smith:</p>
                <p>How do I upgrade my pledge?</p>
            </div>

            <h4>Updates</h4>
            <div class="update">
                <p class="update-author">Campaign Creator:</p>
                <p>We've reached 75% of our goal! Thank you to all our backers!</p>
            </div>

            <div class="update">
                <p class="update-author">Campaign Creator:</p>
                <p>We're excited to share a sneak peek of the product's design. Check it out!</p>
            </div>
        </div>
    </div>
</body>
</html>
