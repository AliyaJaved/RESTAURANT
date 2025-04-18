

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><b>Signup Page</b></title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="login-container">
        <h1>Signup</h1>
        <form action="home.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <button type="submit">Signup</button>
            <p>Already have an account?</p> <a href="login.php">LOGIN</a>
        </form>
    </div>
</body>
</html>
