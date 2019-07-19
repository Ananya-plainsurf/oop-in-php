<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include '../Controller/control.php';
        $insertdata = new User();
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $pname = $_POST['pname'];
            $gmember = $_POST['gmember'];
            $gm_name = $_POST['gm_name'];
            $startdate = $_POST['startdate'];
            $enddate = $_POST['enddate'];
            $status = $_POST['status'];
            $password = $_POST['password'];
            $sql = $insertdata->insert($email, $pname, $gmember, $gm_name, $startdate, $enddate, $status, $password);
            if ($sql) {
                echo "<script>alert('Data inserted');</script>";
                header("location:/View/register.php", 301);
            } else {
                echo "<script>alert('Data not inserted');</script>";
            }
        }
        ?>

    </body>
</html>
