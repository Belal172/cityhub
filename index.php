<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="login.php" method="post">      
                <div class="input-group">
                    <label for="username">Email</label>
                    <input type="text" id="username" name="username" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="options">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="#">Register</a></p>
            </form>
        </div>
    </div>
    
    <script>
        // Function to set cookies
        function setCookie(name, value, days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            const expires = "expires=" + date.toUTCString();
            document.cookie = name + "=" + value + ";" + expires + ";path=/";
        }

        // Function to get cookies
        function getCookie(name) {
            const decodedCookie = decodeURIComponent(document.cookie);
            const cookies = decodedCookie.split(';');
            for (let cookie of cookies) {
                while (cookie.charAt(0) === ' ') {
                    cookie = cookie.substring(1);
                }
                if (cookie.indexOf(name + "=") === 0) {
                    return cookie.substring(name.length + 1);
                }
            }
            return "";
        }

        // Prefill username if "Remember Me" was used
        window.onload = function() {
            const rememberedUsername = getCookie("username");
            if (rememberedUsername) {
                document.getElementById("username").value = rememberedUsername;
                document.getElementById("rememberMe").checked = true;
            }
        };
    </script>

    
</body>
</html>
 