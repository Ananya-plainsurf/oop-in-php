

<html>
    <head>
        <title>Update Project info</title>
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    </head>
    <body>
        

        <a href="table.php" class="btn btn-primary">project info</a>
         <?php
       
          
            if (isset($_GET["update"])) {

                $id = $_GET["id"] ?? null;
                $where = array("id" => $id);
               
                $row = $data->select_record("user", $where);
               
                ?>

        <form name="frmUser" method="post" action="">
          
            <h2> Update List</h2>
            
            <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
            <br>
            email:<br>
            <input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
            <br>
            Project Name: <br>
            <input type="text" name="pname" class="txtField" value="<?php echo $row['pname']; ?>">
            <br>
            Group Members :<br>
            <input type="text" name="gmember" class="txtField" value="<?php echo $row['gmember']; ?>">
            <br>
            Members name's:<br>
            <input type="text" name="gm_name" class="txtField" value="<?php echo $row['gm_name']; ?>">
            <br>
            Start Date:<br>
            <input type="text" name="startdate" class="txtField" value="<?php echo $row['startdate']; ?>">
            <br>
            End Date:<br>
            <input type="text" name="enddate" class="txtField" value="<?php echo $row['enddate']; ?>">
            <br>
            Status:<br>
            <input type="text" name="status" class="txtField" value="<?php echo $row['status']; ?>">
            <br>
            <input type="submit" name="edit" value="update" class="btn btn-primary">

        </form>
<?php
            }
            ?>
    </body>
</html>
