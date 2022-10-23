<?php

include 'database.php';
$user_id = $_POST['id'];

if(isset($_POST['update_profile'])){

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
   mysqli_query($db, "UPDATE register SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
<nav>
            <div class="nav-links">
                <ul>
                    <li><a href="layout.php">Home</a></li>
                    <li><a href="login.php">SignOut</a></li>
                </ul>
        </nav>

        <?php
      $select = mysqli_query($db, "SELECT * FROM register WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="profile.php" method="post" enctype="multipart/form-data">
      <?php
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }

      ?>
            <span>username :</span>
            <input type="text" name="name" value="<?php echo $name ?>" class="box">
            <span>your email :</span>
            <input type="email" name="email" value="<?php echo $fetch['email']; ?>" class="box">
            <span>your courses :</span>
            <input type="text" name="gender" value="<?php echo $fetch['email']; ?>" class="box">
        
      <input type="submit" value="update profile" name="update_profile" class="btn">
   </form>
        </div>
</body>
</html>