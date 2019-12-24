<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>EVS IIT-R Webportal | Timeline</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body style="background-color: #110133;">

    <?php include 'header.php'; ?>


    <!-- Timeline -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card text-center" style="margin : 5% 1%  ; padding : 30px; background-color:#c3f0ca;">
                    <h1>25th July</h1>
                    <p class="lead" >First Lecture</p>
                    <p>Time remaining: 0 days</p>
                </div>
                <div class="card text-center" style="margin : 5% 1%  ; padding : 30px; background-color:#c3f0ca;">
                    <h1>13th September</h1>
                    <p class="lead">Mid Term Examination</p>
                    <p>Time remaining: 0 days</p>
                </div>
                <div class="card text-center" style="margin : 5% 1%  ; padding : 30px; background-color:#c3f0ca;">
                    <h1>14th October</h1>
                    <p class="lead">Mid Term answer booklet distribution</p>
                    <p>Time remaining: 0 days</p>
                </div>
                <div class="card text-center" style="margin : 5% 1%  ; padding : 30px; background-color:#c3f0ca;">
                    <h1>25th November</h1>
                    <p class="lead">Projects Submission</p>
                    <p>Time remaining: 0 days</p>
                </div>
                <div class="card text-center" style="margin : 5% 1%  ; padding : 30px; background-color:#c3f0ca;">
                    <h1>13th November</h1>
                    <p class="lead">End Term Examinations</p>
                    <p>Time remaining: 0 days</p>
                </div>
                <div class="card text-center" style="margin : 5% 1%  ; padding : 30px; background-color:#c3f0ca;">
                    <h1>25th November</h1>
                    <p class="lead">BookClub Presentations</p>
                    <p>Time remaining: 0 days</p>
                </div>
                <div class="card text-center" style="margin : 5% 1%  ; padding : 30px; background-color:#c3f0ca;">
                    <h1>29th November</h1>
                    <p class="lead">ETE Answer-Booklet distribution</p>
                    <p>Time remaining: <?php
                                        $now = new DateTime();
                                        $future_date = new DateTime('2019-11-29 12:00:00');

                                        $interval = $future_date->diff($now);

                                        echo $interval->format("%a days");
                                        ?></p>
                </div>
            </div>

            <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
            </div>

        </div>


    </div>


    <?php include 'footer.php' ?>

</body>

</html>