<?php
session_start();
include('config.php'); // Database connection

// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $firstName = $_SESSION['first_name'];
    $lastName = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $userId = $_SESSION['user_id']; // Assuming user_id is stored in session
} else {
    header("Location: signin.php");
    exit();
}

// Fetch user-funded campaigns
$campaignsQuery = "SELECT campaigns.title, campaigns.goal, campaigns.funds_raised, user_campaigns.amount_funded 
                   FROM user_campaigns 
                   JOIN campaigns ON user_campaigns.campaign_id = campaigns.id 
                   WHERE user_campaigns.user_id = ?";
$stmt = $conn->prepare($campaignsQuery);
$stmt->bind_param("i", $userId);
$stmt->execute();
$campaignsResult = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - RaiseSeed</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .profile-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        h2 {
            text-align: center;
        }
        .campaigns-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .campaigns-table th, .campaigns-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .campaigns-table th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <h2>Profile Information</h2>
    <p><strong>First Name:</strong> <?php echo htmlspecialchars($firstName); ?></p>
    <p><strong>Last Name:</strong> <?php echo htmlspecialchars($lastName); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>

    <h2>Funded Campaigns</h2>
    <table class="campaigns-table">
        <thead>
            <tr>
                <th>Campaign Title</th>
                <th>Goal Amount</th>
                <th>Funds Raised</th>
                <th>Your Contribution</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($campaignsResult->num_rows > 0): ?>
                <?php while ($campaign = $campaignsResult->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($campaign['title']); ?></td>
                        <td><?php echo htmlspecialchars($campaign['goal']); ?></td>
                        <td><?php echo htmlspecialchars($campaign['funds_raised']); ?></td>
                        <td><?php echo htmlspecialchars($campaign['amount_funded']); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">You have not funded any campaigns yet.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
// Close the connection
$conn->close();
?>
