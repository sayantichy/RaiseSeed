<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

        .signup-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .signup-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8em;
        }

        .signup-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .signup-container input[type="text"],
        .signup-container input[type="email"],
        .signup-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .signup-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1.2em;
            cursor: pointer;
        }

        .signup-container button:hover {
            background-color: #45a049;
        }

        .signup-container .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .signup-container .form-footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        .signup-container .form-footer a:hover {
            text-decoration: underline;
        }
    
    </style>
</head>
<body>

<div class="signup-container">
    <h2>Sign Up</h2>
    
    <?php
    include('config.php'); 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
    
        // Check if passwords match
        if ($password == $confirmPassword) {
            // Check if the email already exists
            $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $checkEmailQuery);
    
            if (mysqli_num_rows($result) > 0) {
                // Email already exists
                echo "This email is already registered. Please use a different email.";
            } else {
                // Hash the password
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
                // Insert user data into the database
                $sql = "INSERT INTO users (first_name, last_name, email, password) 
                        VALUES ('$first_name', '$last_name', '$email', '$hashedPassword')";
    
                if (mysqli_query($conn, $sql)) {
                    echo "Registration successful!";
                    // Optionally, redirect to the sign-in page
                    header("Location: signin.php");
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        } else {
            echo "Passwords do not match.";
        }
    }
    
    // Close the connection
    mysqli_close($conn);
    ?>
    
    <form action="signup.php" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" required>
    
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
    
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
    
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
    
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
    
        <button type="submit">Sign Up</button>
        
        <div class="form-footer">
            <p>Already have an account? <a href="signin.php">Sign In</a></p>
        </div>
    </form>
</div>

</body>
</html>
