<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .signin-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .signin-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8em;
        }

        .signin-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .signin-container input[type="email"],
        .signin-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .signin-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1.2em;
            cursor: pointer;
        }

        .signin-container button:hover {
            background-color: #45a049;
        }

        .signin-container .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .signin-container .form-footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        .signin-container .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="signin-container">
    <h2>Sign In</h2>
    <?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'config.php'; // Database connection

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL query
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['id']; // Store user ID
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['email'] = $user['email'];

            // Redirect to dashboard
            header("Location: x2.php");
            exit();
        } else {
            echo "<p>Invalid password. Please try again.</p>";
        }
    } else {
        echo "<p>No account found with that email address.</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
    <form action="signin.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <button type="submit">Sign In</button>
        
        <div class="form-footer">
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </form>
</div>

</body>
</html>
