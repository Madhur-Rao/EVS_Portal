<?php
include 'config.php';
$login_button = '';

if (isset($_GET["code"])) {
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET["code"]);

    // if no error, then run the following code...
    if (!isset($token['error'])) {

        $gClient->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];

        $google_service = new Google_Service_Oauth2($gClient);

        //Taking user data like Name, ageand stuff from user and storing it in $data variable...
        $data = $google_service->userinfo->get();

        // First Name...
        if (!empty($data['given_name'])) {
            // saving first name of user in the _SESSION array...
            $_SESSION['user_first_name'] = $data['given_name'];
        }

        //Last Name...
        if (!empty($data['family_name'])) {
            // saving last name of user in the _SESSION array...
            $_SESSION['user_last_name'] = $data['family_name'];
        }

        if (!empty($data['email'])) {
            // saving email of user in the _SESSION array...
            $_SESSION['user_email_address'] = $data['email'];
        }
    }
}

if (!isset($_SESSION['access_token'])) {
    $login_button = '<a href = "' . $gClient->createAuthUrl() . '"><img src = "img/googlesign.png"></a>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EVS IITR Webportal | Login</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</head>

<body style="background-color:#110133;">

    <div class="container-fluid">
        <h2 class="text-center" style="color:azure; padding-top:  300px">Login using Google Account</h2>
        <div class="panel panel-default">
            <?php
            if ($login_button == '') {
                print_r('<div class="panel-heading">Welcome</div>
                         <div class="panel-body">
                         <h3><b>Name :</b> ' . $_SESSION['user_first_name'] . ' ' . $_SESSION['user_last_name'] . '</h3>
                         <h3><b>Email :</b> ' . $_SESSION['user_email_address'] . '</h3>
                         <h3><a href="logout.php">Logout</h3></div>');
            } else {
                echo '<div align="center">' . $login_button . '</div>';
            }
            ?>
        </div>
    </div>
</body>

</html>