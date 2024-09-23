<?php
// Include the database connection file
include 'config.php';

// Fetch all campaigns
$sql = "SELECT id, location, goal, target_amount, raised_amount FROM campaigns";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaigns</title>
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

        .campaign {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .campaign h2 {
            margin-top: 0;
        }

        .campaign p {
            margin: 5px 0;
        }

        .progress-bar {
            width: 100%;
            background-color: #e0e0e0;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 10px;
        }

        .progress-bar-inner {
            height: 15px;
            background-color: #28a745;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container a {
            background-color: #3aa422;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .button-container a:hover {
            background-color: #287c1d;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Our Campaigns</h1>
    </div>

    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            // Output campaign data
            while($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $location = $row['location'];
                $goal = $row['goal'];
                $target_amount = $row['target_amount'];
                $raised_amount = $row['raised_amount'];
                $progress_percentage = ($raised_amount / $target_amount) * 100;
        ?>
        <div class="campaign">
            <h2><?php echo $goal; ?></h2>
            <p><strong>Location:</strong> <?php echo $location; ?></p>
            <p><strong>Target Amount:</strong> $<?php echo number_format($target_amount, 2); ?></p>
            <p><strong>Raised So Far:</strong> $<?php echo number_format($raised_amount, 2); ?></p>

            <!-- Progress Bar -->
            <div class="progress-bar">
                <div class="progress-bar-inner" style="width: <?php echo $progress_percentage; ?>%;"></div>
            </div>
            <p><strong>Progress:</strong> <?php echo round($progress_percentage, 2); ?>%</p>

            <!-- Button to support campaign -->
            <div class="button-container">
                <a href="support.php?campaign_id=<?php echo $id; ?>">Support this Campaign</a>
            </div>
        </div>
        <?php
            }
        } else {
            echo "<p>No campaigns available at the moment.</p>";
        }
        ?>
    </div>
</body>
</html>
