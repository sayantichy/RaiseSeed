<?php
// Start the session to get user info
session_start();

// Assuming user is already logged in, otherwise redirect to login page
if (!isset($_SESSION['user_id'])) {
    header('Location: signin.php');
    exit();
}

// Database connection
require 'config.php'; // include your DB connection file

$user_id = $_SESSION['user_id'];

// Fetch user information
$sql_user = "SELECT first_name, last_name, email FROM users WHERE id = ?";
$stmt_user = $conn->prepare($sql_user);
$stmt_user->bind_param("i", $user_id);
$stmt_user->execute();
$user_result = $stmt_user->get_result();
$user_info = $user_result->fetch_assoc();

// Fetch the campaigns the user has supported
$sql_support = "
    SELECT campaigns.id AS campaign_id, campaigns.goal, support.amount, campaigns.location
    FROM support
    JOIN campaigns ON support.campaign_id = campaigns.id
    WHERE support.user_id = ?
";
$stmt_support = $conn->prepare($sql_support);
$stmt_support->bind_param("i", $user_id);
$stmt_support->execute();
$support_result = $stmt_support->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .header {
            background-color: #125d1c;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
        }

        .user-info {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .user-info h2 {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #125d1c;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .support-button {
            background-color: #3aa422;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }

        .support-button:hover {
            background-color: #288a1e;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome, <?php echo $user_info['first_name'] . ' ' . $user_info['last_name']; ?>!</h1>
        <p>Email: <?php echo $user_info['email']; ?></p>
    </div>

    <div class="container">
        <div class="user-info">
            <h2>Your Supported Campaigns</h2>
            <table>
                <thead>
                    <tr>
                        <th>Campaign Goal</th>
                        <th>Location</th>
                        <th>Amount Donated</th>
                        <th>Support More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($support_result->num_rows > 0) {
                        while ($row = $support_result->fetch_assoc()) {
                            while ($row = $support_result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['goal'] . "</td>";
                                echo "<td>" . $row['location'] . "</td>";
                                echo "<td>$" . $row['amount'] . "</td>";
                                echo "<td><button class='support-button'> Support More</button></td>"; // You can link the button to support more
                                echo "</tr>";
                            }
                        }
                    } else {
                        echo "<tr><td colspan='4'>You have not supported any campaigns yet.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php
$stmt_user->close();
$stmt_support->close();
$conn->close();
?>
