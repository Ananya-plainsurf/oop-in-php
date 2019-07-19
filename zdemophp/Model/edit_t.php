<?php
include_once '../Controller/control.php';
$data = new update();
        
        if(isset($_POST['edit'])) {

         
            $id = $_POST["id"];
            $where = array("id" => $id);
            $myArray = array(
                "email" => $_POST['email'],
                "pname" => $_POST['pname'],
                "gmember" => $_POST['gmember'],
                "gm_name" => $_POST['gm_name'],
                "startdate" => $_POST['startdate'],
                "enddate" => $_POST['enddate'],
                "status" => $_POST['status']
            );
           if( $data->update_record("user", $where, $myArray)){
              
               header("location:table.php");
           }
              
            
        }
  ?> 