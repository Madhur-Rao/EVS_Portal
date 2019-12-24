<?php

    require_once "GoogleAPI/vendor/autoload.php";

    $gClient = new Google_Client();
    $gClient->setClientId("122012916397-21poa2o4l9i2g0d7il49eqkq6v7v1ksp.apps.googleusercontent.com");
    $gClient->setClientSecret("-WnqQbs-_9rT0zRwaLdBoROq");

    $gClient->setRedirectUri("http://localhost/evsproject1/index.php"); //Redirect to index.html after login
    $gClient->addScope("email");
    $gClient->addScope("profile");
    session_start();
    
?>