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
        include_once '../Controller/control.php';
        $data = new update();
        if (isset($_GET["delete"])) {
            
            $id= $_GET["id"] ?? null;
            $where = array("id" => $id);
            if ($data->delete_record("user", $where)) {
                header("location:../View/table.php");
            }
        }
        ?>

    </body>
</html>
