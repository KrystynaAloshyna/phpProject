<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <?php include('includes/connectDB.php') ?>
</head>
<body>
  <!-- Form register   -->
  <form action="includes/register-functions.php" method="post" enctype="multipart/form-data">
    <label>FULL NAME</label>
    <input type="text" name="fullName" placeholder="Enter your Full Name">
    <label>EMAIL</label>
    <input type="email" name="email" placeholder="Enter your Email">
    <label>PHOTO</label>
    <input type="file" name="photo">
    <label>PASSWORD</label>
    <input type="password" name="pass" placeholder="Enter pass">
    <label>CONFIRM PASSWORD</label>
    <input type="password" name="confirmPass" placeholder="Comfirm pass">
    <button>REGISTER</button>
    <p>
        U already have an account?
        <a href="index.php">Click here for LOG IN</a>
    </p>
    <p class="message">
        Message:
        <?php echo($_SESSION['message']);
        // вывести сообщение и сразу уничтожить, без этого сообщение видно постоянно
        unset($_SESSION['message']);?> 
        
    </p>
  </form>
</body>
</html>