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
            <h1>Ussers</h1>
            <div class="date">
            <?php  echo date("d/m/y");  ?>
            </div>
            <div class="top">
                <div class="search">
                    <input type="text" name="search" id="">
                    <span class="material-symbols-sharp">search </span>
                </div>
                <a href="usersadd.php" >
                    <span class="material-symbols-sharp">person_add </span>
                    <h3>Add users</h3>
                </a>

                <a href="userss_delete.html" target="_self">
                    <span class="material-symbols-sharp">delete </span>
                    <h3>Delete</h3>
                </a>
            </div>
            <!-- top end -->
            <div class="users">
                <div class="listUsers">
                    <table style="width: 100%;">
                        <tr>
                            <th>sn</th>
                            <th>Name</th>
                            <th>userName</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Role</th>
                            <th>Address</th>
                            <th>Edit | Delete</th>

                        </tr>

                        <tr>
                            <td>1.</td>
                            <td>Hari</td>
                            <td>hari123</td>
                            <td>hari555@gmail.com</td>
                            <td>male</td>
                            <td>user</td>
                            <td>kailali,dhangadhi</td>
                            <td><a href="">Edit</a> <a href="">delete</a></td>
                        </tr>
                    </table>

                </div>
                <!-- lisst user end -->

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
           <!-- end right -->

    </div>
    <!-- container -->
</body>
</html>