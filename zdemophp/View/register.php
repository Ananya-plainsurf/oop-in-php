<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Demo Registration</title>
        <link rel="stylesheet" href="../assets/css/style_register.css" type="text/css">
    </head>
    <body>
        <div>
            <button onclick="window.location.href = '../View/login.php';" class="btn btn-primary">Home</button>
            <form action="../Model/new_register.php" method="post">
                <div class="body-content">
                    <div class="module">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Registration Form</h2>
                                <p>Fill all necessary fields</p>
                                <hr class="mb-6">
                               
                                <label for="email">Email </label> 
                                <input  type="email" name="email" placeholder="Email ID"required>
                                <br> 
                                
                                <label for="pname">Project Name</label> 
                                <input   type="text" name="pname" placeholder="Project Name"required >
                                <br>
                                
                                <label for="gmember">Group Members</label> 
                                <input   type="text" name="gmember" placeholder="Group Member"required>
                                <br>
                                
                                <label for="gm_name">Members name</label> 
                                <input   type="text" name="gm_name" placeholder="Memner Name" required >
                                <br>
                                
                                <label for="startdate">Start Date</label> 
                                <input   type="date" name="startdate"placeholder="Start Date" required >
                                
                                
                                <label for="enddate">End Date</label> 
                                <input   type="date" name="enddate" placeholder="End Date"required>
                                <br>
                                
                                <label for="status">Status</label> 
                                <input   type="text" name="status" placeholder="Status"required>
                                <br>
                                
                                <label for="password">Password</label> 
                                <input   type="password" name="password" placeholder="Password"required>
                                <br>
                                
                                <input type="submit" name="submit" value="sign up" class="btn btn-primary" >

                                <input type="reset" name="reset"value="Reset" class="btn btn-primary">

                                <hr class="mb-3">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
