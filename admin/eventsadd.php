<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="css/adminstyle.css">
<link rel="stylesheet" href="css/eventstyle.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events </title>
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
            <h1>Events</h1>
            <div class="date">
            <?php  echo date("d/m/y");  ?>
            </div>

            <div class="form-container">
                <h2>Event Form</h2>
            <form action="#" method="post">
            <!-- Event Name -->
            <div class="form-group">
                <label for="event_name">Event Name:</label>
                <input type="text" id="event_name" name="event_name" placeholder="Enter event name" required>
            </div>

            <!-- Event Date -->
            <div class="form-group">
                <label for="event_date">Event Date:</label>
                <input type="datetime-local" id="event_date" name="event_date" required>
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" placeholder="Enter event description" required>
            </div>

            <!-- Upload Image -->
            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
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
            </div>
            <!-- right end -->

       

    </div>
    <!-- container -->
</body>
</html>