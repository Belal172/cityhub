<?php
require_once '../config/Database.php';
include_once "classes/User.php";
   $user= new User();
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['is_admin'])){
    header("Location:login.php");
}
$db=new Database();
$conn=$db->getConnection();

$id = $_GET['id'];
$listRecord = $user->getRecordById($id);

if(isset($_POST['name'])){
   

    $updated = $user->updateUser($_POST,$id);
    if($updated){
        header("Location:users.php");
    }else{
        echo "try again";
    }
}

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
                <input type="text" id="name" name="name"value="<?php echo $listRecord['name']?>" >
            </div>

            <!-- Username -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?php echo $listRecord['username']?>">
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="<?php echo $listRecord['password']?>">
            </div>

            <!-- Address -->
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" value="<?php echo $listRecord['address']?>"></textarea>
            </div>

            <!-- Gender -->
           

            <!-- Date of Birth -->
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" value="<?php echo $listRecord['dob']?>">
            </div>

            <!-- Role -->
            <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role" value="<?php echo $listRecord['role']?>">
                    <option value="">Select your role</option>
                    <option value="student">admin</option>
                    <option value="teacher">user</option>
                   
                </select>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $listRecord['email']?>">
            </div>

            <!-- Contact -->
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="tel" id="contact" name="contact"value="<?php echo $listRecord['contact']?>">
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