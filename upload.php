<?php

    include 'connection.php';

    // saving the input links and files in database when input method is POST.
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        // Sanitize incoming data to protect from attacks.
        $caption_txt = htmlspecialchars($_POST['caption_txt']);
        $caption_url = htmlspecialchars($_POST['caption_url']);
        $heading_url = htmlspecialchars($_POST['heading_url']);
        $heading_txt = htmlspecialchars($_POST['heading_txt']);


        // SQL query to insert text and caption into database.
        $sql = " INSERT INTO upfiles(caption_txt, caption_url, heading_txt, heading_url) VALUES('$caption_txt', '$caption_url', '$heading_txt', '$heading_url'); ";

        // redirecting to inspire.php page when record is connected successfully.
        if ($conn->query($sql) === true) {
            // echo "New record created successfully";
            header("location: inspire.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // closing the connection.
        $conn->close();
    } else {
        header("location: inspire.php");
    }
?>