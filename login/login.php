<?php
/**
 * Created by PhpStorm.
 * User: jonas
 * Date: 2018-09-19
 * Time: 09:27
 */
session_start();
    if (isset($_POST['submit'])) {
        echo "<pre>" . print_r($_POST,1) . "</pre>";
    } else {
        header("Location: http://localhost:63342/webbutveckling/site/");
        die();
    }

?>

