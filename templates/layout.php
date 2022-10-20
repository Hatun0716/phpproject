<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Project</title>
</head>
<body>
    <section class="header">
        <nav>
            <div class="nav-links">
                <ul>
                    <li><a href="layout.php">Home</a></li>
                    <li><a href="login.php">SignOut</a></li>
                </ul>
            </div>
            <img style="position: absolute; right:90px;" src="../images/Programming.png" alt="the image is progrmming icon">
            <div class="text-box">
               
<h2 style="color: yellow; text-align: center; ">Website Project!</h2>
<p style="color: white; text-align: center;">This our website project we created it by using Html,Css and PHP<br>
we are CCS college student.
</p>
            </div>
        </nav>

    </section>
    <form>
    <section class="course-info">
 
        <div class="container">

            <div class="card">
                <div class="card-image html1">
                <h2>HTML Course</h2>
                <p>HTML is the standard markup language for Web pages,With HTML you can create your own Website.HTML is easy to learn - You will enjoy it! <a href="course.php">Click Here</a> </p> 
                
                </div>
            </div>
            <div class="card">
                <div class="card-image css1">
                <h2>CSS Course</h2>
                <p>CSS stands for Cascading Style Sheets,describes how HTML elements are to be displayed on screen, paper, or in other media <a href="course.php">Click Here</a></p>    
                </div>
            </div>
            <div class="card">
                <div class="card-image javascript1">
                <h2>JavaScript Course</h2>
                <p>JavaScript is the world's most popular programming language. JavaScript is the programming language of the Web and easy to learn.<a href="course.php">Click Here</a></p>  
                </div>
            </div>


        </div>
    </section>
   </form>
</body>
</html>