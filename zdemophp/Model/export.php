
<?php

include_once '../Controller/control.php';
$data = new export();
$file = "data.json";
if (file_put_contents($file, $data->select("user"))) {

    header("refresh:1;url=../View/table.php");
} else {
    echo 'There is some error';
}
?>
    
