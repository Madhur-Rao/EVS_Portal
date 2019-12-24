<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>EVS IIT-R Webportal | FAQ</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <?php include 'header.php' ?>

    <div class="container-fluid" style=" background-color :#e9ea77;">
        <div class="row text-center" style="min-height:100px;">
            <div class="col-12">
                <h1 style=" padding:3%">Welcome to the FAQ Section!</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color :#110133;">
        <div class="row text-center">
            <div class="col-12">
                <div class="card" style="margin : 5% 3%  ; padding : 30px; background-color:#c3f0ca">
                    <p class="lead" style="font-size:30px;">Didn't find the answer to your doubt?</p>
                    <div class="col text-center" style="padding:5px;">
                        <a href="upload_question.html">
                            <button type="button" class="btn btn-dark">Click Here to post a question</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid" style=" background-color :#110133;">
        
        <?php

        include 'connection.php';

        $sql = 'SELECT' `first_name` AS `first_name`,`last_name` AS `last_name` 

        print_r('
        <div class="row text-center" style="min-height:100px;">
            <div class="col-12">
                <h1 style=" padding:3%">hello</h1>
            </div>
        </div>');

        ?>
    </div>

    <?php include 'footer.php' ?>


</body>

</html>