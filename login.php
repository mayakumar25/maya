<!DOCTYPE html>
<html>
<head>

    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h7> WELCOME</h7>
   

    <div class="login-container">

        <h2>Login</h2>
        <form id="login-form">
            <input type="text" id="username" placeholder="Username" required><br>
            <input type="password" id="password" placeholder="Password" required><br>
            <input type="submit" value="Login"><br><br>

            <a href="signup.html" >signup</a>
        </form>
    </div>

    <script>
        document.getElementById('login-form').addEventListener('submit', function (event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Replace 'your_username' and 'your_password' with the correct credentials.
            if (username === 'maya' && password === '123') {
                window.location.href = 'home.html'; // Redirect to the home page
            } else {
                alert('Invalid username or password. Please try again.');
            }
        
        

        });
    </script>
</body>
</html>
