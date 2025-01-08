<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="css/adminstyle.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard </title>
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
            <h1>Dashboard</h1>
            <div class="date">
            <?php  echo date("d/m/y");  ?>
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
             <div class="recent_updates">
                <h2>recent updates</h2>
                <div class="updates">
                    <div class="profile_photo">
                        <img src="photos/milan2.JPG" alt="">
                    </div>
                    <div class="message">
                      <p><b>milan</b>changes password</p>
                    </div>
                </div>
               
             
                <div class="updates">
                    <div class="profile_photo">
                        <img src="photos/milan2.JPG" alt="">
                    </div>
                    <div class="message">
                      <p><b>milan</b>changes password</p>
                    </div>
                </div>

                <div class="updates">
                    <div class="profile_photo">
                        <img src="photos/milan2.JPG" alt="">
                    </div>
                    <div class="message">
                      <p><b>ramesh</b>changes password</p>
                    </div>
                </div>

                <div class="updates">
                    <div class="profile_photo">
                        <img src="photos/milan2.JPG" alt="">
                    </div>
                    <div class="message">
                      <p><b>roshan</b>changes password</p>
                    </div>
                </div>

                
             </div>
             
             <!-- end recent updates -->

             <!-- start analytics -->
              <div class="analytics">
                <h2>Analytics </h2>


              </div>
             <!-- start analytics -->
            
           </div>
           <!-- end right -->

    </div>
    <!-- container -->
</body>
</html>