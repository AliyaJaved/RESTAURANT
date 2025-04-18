<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="home.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
            <p>Don't have an account?</p><a href="signup.php">Sign Up</a>
        </form>
    </div>
    <script>
        function loginUser() {
            var email = document.getElementById('emailInput').value;
            var password = document.getElementById('passwordInput').value;

            if (email === 'admin12@gmail.com' && password === './/admin') {
                // Redirect to admin panel (replace with your actual URL)
                window.location.href = 'admin.html';
         }
            else if (email === 'user@gmail.com' && password === 'user') {
                // Redirect to admin panel (replace with your actual URL)
                window.location.href = 'index.html';
            }
            else if (email === "" || password === "") {
                status.innerText = 'Empty Fields';
                status.style.color = 'red';
            }
            else {
                status.innerText = 'Incorrect Username or Email Address';
                status.style.color = 'red';
            }
    }

    </script>
</body>
</html>