<?php
    session_start();
    // require_once '../config/Database.php';
    require_once '../config/Database.php';
// if (file_exists($path)) {
//     echo "File exists!";
// } else {
//     echo "File not found!";
// }
// exit;
    $db=new Database();
    $conn=$db->getConnection();

    if ($_POST){
       include_once "classes/User.php";
       $user= new User();
       $user->login($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body class="hold-transition login-page">
<div class="login-container">
        <h2>Login</h2>
        <form action="" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p> <a href="#">Forget Password?</a></p>
    </div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/admin/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/assets/dist/js/adminlte.min.js"></script>
</body>
</html>
