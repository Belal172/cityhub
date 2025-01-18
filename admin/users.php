<?php
    session_start();
    if(!isset($_SESSION['username']) && !isset($_SESSION['is_admin'])){
        header("Location:login.php");
    }

    require 'classes/User.php';
    $informations = new User();

    $lists = $informations->listUser();
    
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
                            
                            <th>Role</th>
                            <th>Address</th>
                            <th>Edit | Delete</th>

                        </tr>

                        <?php 
                        $i = 1;
                        foreach( $lists as $list){
                        ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $list['name'];?></td>
                                <td><?php echo $list['username'];?></td>
                                
                                <td><?php echo $list['email'];?></td>
                                
                                <td><?php echo $list['role'];?></td>
                                <td><?php echo $list['address'];?></td>
                                
                                
                                <td>
                                    <a href="userupdate.php?id=<?php echo $list['id'];?>">Edit</a> 
                                     | 
                                     <a href="usersdelete.php?id=<?php echo $list['id'];?>" onclick="return confirm('Are you sure want to delete this record?');"> Delete</a>
                                    </td>
                            </tr>
                        <?php $i++ ;} ?>
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