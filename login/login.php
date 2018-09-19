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
        "password" => hash("sha256","admin123")
    ];

    if (isset($_POST['username']) && isset($_POST['password'])) {

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        $password = hash("sha256",$_POST['password']);
        echo $password;

        if ($username == $loginCredentials['username']
            && $password == $loginCredentials['password']){
            echo "<h1>Välkommen to the secret page.</h1>";
        }
        elseif ($username != $loginCredentials['username']
                || $password != $loginCredentials['password']) {
            echo "<h1>Du har entered wrong username or password.</h1>";
        }

    }



    echo "<pre>" . print_r($_POST,1) . "</pre>";



} else {
    header("Location: http://localhost:63342/webbutveckling/site/");
        die();
    }

?>

