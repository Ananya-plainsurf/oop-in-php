<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Demo Login</title>
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css">


    </head>
    <body>
        <form action="../Model/check_login.php" method="post">
            <h2> Login Form</h2>
            <div>
                <lable>User Name</lable>
                <input type="text" name="name" placeholder="User Name"required>
            </div>
            <div>
                <lable>Password</lable>
                <input type="password" name="password" placeholder="Password"required>
            </div>
            <button class="btn btn-primary"type="submit" name="login" value="login">Login In</button>
        </form>
        <form action="../View/register.php" method="post">
            <button class="btn btn-primary" >Register</button>  
        </form>
    </body>
</html>
