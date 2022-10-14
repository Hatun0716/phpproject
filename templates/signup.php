<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body{ background-color: #46689A; }
        .signup-box{
            width: 380px;
            height: 550px;
            margin: auto;
            background-color: white;
            border-radius: 6px;
            position: relative;
            top: 150px;
        }
        p,h2{ text-align: center;}
        p a{color: #10DABC;}
    
        form input[type="text"],[type="email"],[type="password"]{ margin-left: 20px; width: 320px; padding: 7px; border-radius: 5px; outline: none;}
        input[type="submit"]{  margin-left: 20px; width: 340px; margin-top: 20px; border: none; background-color: #10DABC; color: white;padding: 7px;border-radius: 5px;}
        input[type="radio"]{margin-left: 20px; margin-top: 5px; margin-bottom: 10px;}
        </style>
    <title>Project</title>
</head>
<body dir="rtl">
    <?php
    #connect to database
    $host='localhost';
    $user='root';
    $pass='';
    $db='student';
    $con=mysqli_connect($host,$user,$pass,$db);
    $res=mysqli_query($con,"select * from studentregister");
    # button varriable:
    $id='';
    $name='';
    $password='';
    $email='';
    $likes='';

    if(isset($_POST['id'])){
        $id=$_POST['id'];
    }
    if(isset($_POST['name'])){
        $name=$_POST['name'];
    }
    if(isset($_POST['password'])){
        $password=$_POST['password'];
    }
    if(isset($_POST['email'])){
        $email=$_POST['email'];
    }
    if(isset($_POST['likes'])){
        $likes=$_POST['likes'];
    }
    $sqls='';
    if(isset($_POST['submit'])){
        $sqls="insert into studentregister value($id,'$name','$password','$email','$likes')";
        mysqli_query($con, $sqls);
        header("location:signup.php");
    }
    
    ?>
    <div class="signup-box">
        <form action="layout.php" method='POST'>
            <h2>Sign Up</h2>
          
            <label for="usern" style="width: 200px;  margin-left: 20px; display: flex; margin-top: 10px ; font-size: 18px;">User Name</label>
            <input type="text" name="User" id="name"><br>
            <label for="mail" style="width: 200px;  margin-left: 20px; display: flex; margin-top: 10px ; font-size: 18px;">Email</label>
            <input type="email" name="email" id="email"><br>
            <label for="password" style="width: 200px;  margin-left: 20px; display: flex; margin-top: 10px ; font-size: 18px;">Password</label>
            <input type="password" name="Password" id="password"><br>
            <p>Select Your best web language you likes: </p>
            <input type="radio" name="courses" id="likes" value="Html">
            <label for="likes">HTML</label><br>
            <input type="radio" name="courses" id="likes" value="Java">
            <label for="likes">JAVAL</label><br>
            <input type="radio" name="courses" id="likes" value="React">
            <label for="likes">React</label><br>
            <input type="radio" name="courses" id="likes" value="JavaScript">
            <label for="likes">JavaScript</label><br>
            <input type="submit" value="Submit" name="submit">
            <p>You have an account?<a href="login.html">LogIn</a></p>
        </form>
    </div>
</body>
</html>