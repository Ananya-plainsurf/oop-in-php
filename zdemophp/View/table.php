<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Project Table</title>
        <link rel="stylesheet" href="../assets/css/style_table.css" type="text/css"> 
    </head>
    <body>
        <a href="../Controller/logout.php" class="btn btn-primary">Logout</a>
        <table action=" " id="project" align="center">
            <div>
                <div class="body-content">
                    <div class="module">
                        <div class="row">
                            <div class="col-md-6">

                                <tr>
                                    <th colspan="9">
                                        <h2>Project List</h2>
                                    </th>
                                </tr>

                                <tr>

                                    <th>Email</th>
                                    <th>Project Name</th>
                                    <th>Group Members</th>
                                    <th>Members name's</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Action</th>

                                </tr>
                                <?php
                                include_once '../Controller/control.php';
                                //$result = mysqli_query($conn, "SELECT * FROM user");
                                ?>


                                <?php
                                $data = new display;
                                $post_data = $data->select('user');
                                //  print_r($post_data);
                                foreach ($post_data as $row) {
                                    ?>
                                    <tr id="<?php echo $row['id'] ?>">

                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['pname']; ?></td>
                                        <td><?php echo $row['gmember']; ?></td>
                                        <td><?php echo $row['gm_name']; ?></td>
                                        <td><?php echo $row['startdate']; ?></td>
                                        <td><?php echo $row['enddate']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><a href="edit_table.php?update=1&id=<?php echo $row['id']; ?>" class="btn btn-success btn-lg"> Edit</a></td>
                                        <td><a href="../Model/delete.php?delete=1&id=<?php echo $row["id"]; ?>" class="btn btn-primary" name="delete">Delete</a> </td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                </table>
        <div align="center">
                                <a href="../Model/export.php" method="post" >
                                    <input type="button" class="btn btn-primary" id="json"  value="Export" name="export">

                                </a>

                                <form action="../Model/import.php"  method="POST" enctype="multipart/form-data" class="ba">

                                    <input type="submit" id="button" value="Import" name="Import" class="btn btn-success btn-lg ae  af"> 
                                </form>
        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </table>
    </body>
</html>
