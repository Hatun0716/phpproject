<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <style>
 * { margin: 0px; padding: 0px; }
  body {font-size: 120%;background: #F8F8FF; }
  form, .content { width: 50%; height: 150px; margin: 0px auto;padding: 20px;border: 1px solid #B0C4DE;background: white;border-radius: 10px; margin-top:150px;}
  .btn { padding: 10px; font-size: 15px; color: white; background: #7E6FC3; border: none; border-radius: 5px;}
  table{border-collapse:collapse; margin: 25px 0; font-size: 18px; min-width: 400px;box-shadow:0 0 20px rgba(0,0,0,0.15);border-radius:5px 5px 0 0;overflow:hidden;} 
  thead tr{background-color:#7C64E7; color:white; text-align:center; font-weight:bold;}
  th,td{padding:12px 15px;}
  tbody tr{border-bottom:1px solid #7C64E7}
    </style>
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

        <form action="layout.php"  method="POST"enctype="multipart/form-data">
                    <?php
                        $currentUser = $_SESSION['name'];
                        $sql = "SELECT * FROM register WHERE name ='$currentUser'";

                        $gotResuslts = mysqli_query($db,$sql);

                        if($gotResuslts){
                            if(mysqli_num_rows($gotResuslts)>0){
                                while($row = mysqli_fetch_array($gotResuslts)){
                                    ?>
                                    <TAble>
                                        <thead>
                                        <tr>
                                        <TH>Name</TH>
                                        <TH>Email</TH>
                                        <TH>courses</TH>
                                        <TH>gender</TH>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['courses']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        </tr>
                                        </tbody>
                                    </TAble>
                                        <div class="form-group">
                                            <input type="submit" name="Home"  class="btn btn-info" value="Home">
                                        </div>
                                    <?php
                                }
                            }
                        }


                    ?>
                
                </form>
        </div>
</body>
</html>