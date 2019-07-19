<?php

include_once '../Controller/control.php';
session_start();
$data = new database1;
$message = '';

if (isset($_POST["login"])) {
    $field = array(
        'name' => $_POST["name"],
        'password' => $_POST["password"]
    );

    if ($data->required_validation($field)) {

        if ($data->can_login("admin", $field)) {

            $_SESSION["name"] = $_POST["name"];
            header("location:../View/table.php");
        } else {
            $message = $data->error;
           // header("location:/index.php");
        }
    } else {
        $message = $data->error;
    }
}
?> 