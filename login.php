<?php
// Replace 'your_username' and 'your_password' with the actual credentials
$validUsername = 'your_username';
$validPassword = 'your_password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $validUsername && $password === $validPassword) {
        // Authentication successful
        session_start();
        $_SESSION['authenticated'] = true;
        header('Location: staff_dashboard.php'); // Redirect to the staff dashboard or another authorized page
        exit;
    } else {
        $errorMessage = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Login</title>
    <style>
        /* Add your styles for the login page here */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #1a1a1a;
            color: #fff;
        }

        h2 {
            color: #bb86fc;
            text-align: center;
        }

        form {
            background-color: #121212;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #fff;
        }

        input {
            margin-bottom: 15px;
            width: 100%;
            padding: 10px;
            border: 1px solid #333;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #333;
            color: #fff;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        #errorMessage {
            color: #ff6961;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h2>Staff Login</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <?php if (isset($errorMessage)) : ?>
        <div id="errorMessage"><?= $errorMessage ?></div>
    <?php endif; ?>
</body>

</html>
