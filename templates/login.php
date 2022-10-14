<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{ background-color: #46689A; }
.login-box{
    width: 380px;
    height: 350px;
    margin: auto;
    background-color: white;
    border-radius: 6px;
    position: relative;
    top: 150px;
}
p,h2{ text-align: center;}
p a{color: #10DABC;}
form label{   width: 200px;  margin-left: 20px; display: flex; margin-top: 10px ; font-size: 18px;}
form input{ margin-left: 20px; width: 320px; padding: 7px; border-radius: 5px; outline: none;}
input[type="submit"]{  margin-left: 20px; width: 340px; margin-top: 20px; border: none; background-color: #10DABC; color: white;}

    </style>
    <title>Project</title>
</head>
<body>

<?php
    #connect to database
    $host='localhost';
    $user='root';
    $pass='';
    $db='student';
    $con=mysqli_connect($host,$user,$pass,$db);
    $res=mysqli_query($con,"select * from studentregister");
    # button varriable:
    $name='';
    $password='';
    
    $name=$_POST['user'];
    $password=$_POST['password'];
    $s="select * from usertable where name ='$name' && password ='$password'";
    $res=mysqli_query($con, $s);
    $num=mysqli_num_rows($res);
    if($num ==1){
        header('location:layout.php');
    }else{
        header('location:login.php');
    }
    
    ?>


    <div class="login-box">
        <form action="layout.html">
            <h2>LogIn</h2>
          
            <label for="user">User Name</label>
            <input type="text" name="User" id="user"><br>
            <label for="mail">Email</label>
            <input type="password" name="Password" id="password"><br>
            <input type="submit" value="Submit">
            <p>Don't have account?<a href="signup.html">Register</a></p>
        </form>
    </div>
</body>
</html>