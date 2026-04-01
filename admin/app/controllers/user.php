<?php


$table = "table_users";




if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // extract($_POST);
    unset($_POST['passwordconf']);
    $_POST['password'] = sha1($_POST['password']);
    // print_r($_POST);

    if(isset($_POST['name'])){        
        include('../models/model.php');
        create($table, $_POST);
        echo"created";

    }


}
