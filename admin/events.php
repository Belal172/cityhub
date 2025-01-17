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

            <div class="top">
                <div class="search">
                    <input type="text" name="search" id="">
                    <span class="material-symbols-sharp">search </span>
                </div>
                <a href="eventsadd.php" >
                    <span class="material-symbols-sharp">add </span>
                    <h3>Add</h3>
                </a>

                <a href="events_delete.html" target="_self">
                    <span class="material-symbols-sharp">delete </span>
                    <h3>Delete</h3>
                </a>
            </div>
            <div class="events">


                <!-- Event Card 1 -->
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" alt="Event Image">
                    <div class="card-content">
                        <h2>Music Festival</h2>
                        <span class="date">Date: January 15, 2025</span>
                        <span class="category">Entertainment</span>
                        <p>Join us for an evening filled with music, food, and fun at the annual music festival held in
                            City Park.</p>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" alt="Event Image">
                    <div class="card-content">
                        <h2>Blood Donation Camp</h2>
                        <span class="date">Date: January 20, 2025</span>
                        <span class="category">Social Cause</span>
                        <p>Help save lives by participating in the blood donation camp at Community Hall.</p>
                    </div>
                </div>
                <!-- Event Card 3 -->
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" alt="Event Image">
                    <div class="card-content">
                        <h2>Sports Meet</h2>
                        <span class="date">Date: February 5, 2025</span>
                        <span class="category">Sports</span>
                        <p>Show your athletic skills and team spirit by participating in the annual sports meet.</p>
                    </div>
                </div>
                <!-- Event Card 4 -->
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" alt="Event Image">
                    <div class="card-content">
                        <h2>Art Exhibition</h2>
                        <span class="date">Date: March 10, 2025</span>
                        <span class="category">Art</span>
                        <p>Discover local talent and enjoy amazing artwork at the city art gallery.</p>
                    </div>
                </div>
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