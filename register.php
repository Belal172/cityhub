<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <form action="" class="form">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" onblur="validateUsername()" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" onblur="validateEmail()" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" onblur="validatePhone()" required>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" onblur="validateAddress()" required>
            
            <label for="birthdate">Birthdate:</label>
            <input type="date" id="birthdate" name="birthdate" onblur="validateBirthdate()" required>
            
                    
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" onblur="validatePassword()" required>
            
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" onblur="validateConfirmPassword()" required>

            <!-- Submit button -->
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
