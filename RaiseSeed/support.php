<?php
// Assuming you have a database connection file like db_connect.php
include 'config.php';

// Fetch campaigns from the database
$sql = "SELECT id, location, goal, target_amount, raised_amount FROM campaigns";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Now</title>
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

        .content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .campaign-details {
            margin-bottom: 20px;
        }

        .campaign-details h2 {
            margin: 0;
        }

        .campaign-details p {
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
            width: 60%; /* Progress percentage */
        }

        .reward-tiers {
            margin-bottom: 30px;
        }

        .reward-tiers h3 {
            margin-bottom: 10px;
        }

        .reward-tier {
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .reward-tier input {
            margin-right: 10px;
        }

        .back-now {
            display: flex;
            flex-direction: column;
        }

        .back-now h3 {
            margin-bottom: 10px;
        }

        .back-now input[type="text"], 
        .back-now input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .back-now button {
            background-color: #3aa422;
            color: #ffffff;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .back-now button:hover {
            background-color: #0f52ba;
        } 
        .select-campaign {
            margin-bottom: 20px;}
        .select-campaign h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }

.select-campaign select {
    width: 100%;
    padding: 10px;
    font-size: 13px;
    border-radius: 4px;
    border: 1px solid #ddd;
    background-color: #fff;
    appearance: none; /* Hide the default dropdown arrow */
    -webkit-appearance: none;
    -moz-appearance: none;
    cursor: pointer;
    outline: none;
    transition: border-color 0.3s ease;
}

.select-campaign select:focus {
    border-color: #3aa422; /* Change border color when focused */
}

.select-campaign select option {
    padding: 10px;
}

.select-campaign::after {
    content: '▼'; /* Custom arrow */
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
}
    </style>
</head>
<body>
    <div class="header">
        <h1>Support Now</h1>
    </div>

    <div class="container">
        <div class="content">
            <!-- Campaign Selection Section -->
            <div class="select-campaign">
                <h2>Select a Campaign</h2>
                <form action="process_support.php" method="POST">
                    <label for="campaign">Choose a campaign:</label>
                    <select name="campaign_id" id="campaign" required>
                        <option value="">Select a campaign</option>
                        <?php
                        // Populate campaigns in the dropdown
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<option value='{$row['id']}'>Campaign: {$row['goal']} (Location: {$row['location']})</option>";
                            }
                        } else {
                            echo "<option value=''>No campaigns available</option>";
                        }
                        ?>
                    </select>

                    <!-- Backing Amount Section -->
                    <div class="back-now">
                        <h3>Enter Your Backing Amount</h3>
                        <input type="number" name="amount" placeholder="Enter the amount you want to pledge" required>

                        <!-- User ID - Normally you'd get this from session after login -->
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" />

                        <h3>Payment Information</h3>
                        <input type="text" name="cardholder-name" placeholder="Cardholder Name" required>
                        <input type="text" name="card-number" placeholder="Card Number" required>
                        <input type="text" name="expiry-date" placeholder="Expiry Date (MM/YY)" required>
                        <input type="text" name="cvv" placeholder="CVV" required>

                        <button type="submit">Back Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
