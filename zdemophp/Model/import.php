<?php

include_once '../Controller/control.php';


if (isset($_POST['Import'])) {
   
    $obj = new import();
    $obj->importdata("user");
}
?>