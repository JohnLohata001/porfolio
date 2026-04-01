<?php

$email = "";
$password = "";
$errors = [];
$success = [];
$table = " table_users";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    function loginUser($user){
        $errors = [];
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['user_img'] = $user['user_img'];
        $_SESSION['status'] = $user['status'];
        $_SESSION['date_saved'] = $user['date_saved'];


        if ($_SESSION['status'] > 0) {
            header("Location: dashboard.php");
        }else{
            $_SESSION['sms'] = "actions denied you are not allow";
            header("Location: index.php");
        }

    }
    

    if (isset($_POST['btn-sigin'])) {
        
        if(empty($_POST['email'])){array_push($errors, "email is required");}else {
            $email = $_POST['email'];
        }
        if(empty($_POST['password'])){array_push($errors, "password is required");}else {
            $password = $_POST['password']; 
        }
        if (count($errors) == 0) {

            array_push($success, "Work done");
            unset($_POST['btn-sigin']);            

            $user = selectOne($table, ['email'=> $_POST['email']]);

            if ($user) {
                $password = selectOne($table, ['password'=> $_POST['password']]);
                if ($user && $password) {
                    loginUser($user);
                }
            }else{
                array_push($errors, "this email does exist in our database"); 
            }
            
            
        }
        
          

    }
}