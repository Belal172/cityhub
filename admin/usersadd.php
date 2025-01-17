<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="css/adminstyle.css">
<link rel="stylesheet" href="css/userstyle.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin  </title>
</head>
<body>
    <div class="container">
        <!-- aside section start -->

        <?php
        include_once 'includes/sidebar.php'
        ?>
        

        <!-- aside end -->

        <!-- main area start -->
         <main>
            <h1>users Add</h1>
            <div class="date">
            <?php  echo date("d/m/y");  ?>
            </div>
            <div class="form-container">
        
            <form action="" method="post">
            <!-- Name -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <!-- Username -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter a username" required>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter a password" required>
            </div>

            <!-- Address -->
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" placeholder="Enter your address" rows="3" required></textarea>
            </div>

            <!-- Gender -->
            <div class="form-group">
                <label>Gender</label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="male" required> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                    <label><input type="radio" name="gender" value="other"> Other</label>
                </div>
            </div>

            <!-- Date of Birth -->
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <!-- Role -->
            <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role" required>
                    <option value="">Select your role</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <!-- Contact -->
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" required>
            </div>

            <!-- Submit Button -->
            <button type="submit">Submit</button>
        </form>
    </div>

         </main>

          <!-- main area end -->
           <!-- start right -->
           <div class="right">
            <div class="top">
                <div class="profile">
                    <p><b>Milan</b></p>
                    <p>Admin</p>
                </div>
                <div class="profile_photo">
                    <img src="photos/milan1.jpg" alt="photo">
                </div>

            </div>
            <!-- top end -->

            <!-- recent updates -->
            
             
                

               

                
             
             
             <!-- end recent updates -->

             <!-- start analytics -->
              
             <!-- start analytics -->
            
           </div>
           <!-- end right -->

    </div>
    <!-- container -->
</body>
</html>