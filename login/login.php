<?php
/**
 * Created by PhpStorm.
 * User: jonas
 * Date: 2018-09-19
 * Time: 09:27
 */
session_start();

if (isset($_POST['submit'])) {

    $loginCredentials = [
        "username" => "admin",
        "password" => password_hash("admin123",PASSWORD_DEFAULT)
    ];

    if (isset($_POST['username']) && isset($_POST['password'])) {

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        $password = $_POST['password'];

        if ($username == $loginCredentials['username']
            && password_verify($password,$loginCredentials['password'])){

            echo "<h1>Welcome to the secret page.</h1>";

            echo "<pre>" . print_r($_POST,1) . "</pre>";
        }
        elseif ($username != $loginCredentials['username']
                || !password_verify($password, $loginCredentials['password'])) {
            echo "<h1>You have entered wrong username or password.</h1>";
            echo "<h1><a href=\"http://localhost:63342/webbutveckling/site/\">Go back</a></h1>";
        }

    }






} else {
    header("Location: http://localhost:63342/webbutveckling/site/");
        die();
    }

?>

