<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>EVS IIT-R Webportal | Welcome</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="script.js"></script>

</head>

<body style="background-color:#ffc6c7;">

    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-size: 2rem;" href="index.php"><span class="highlight">CEN 105</span>
                IIT-R</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="timeline.php">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="study.php">Study</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inspire.php">Inspire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Intro Section -->
    <div class="container-fluid" style="min-height:100vh;background-color:#ffc6c7;">
        <div class="row" style="background-color:#ffc6c7;">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding:3%;">

                <h2 class="text-center" style="padding:11%;">"The Earth is what we all have in common"
                    <footer class="blockquote-footer" style="color:black;">Wendell Berry</footer>
                </h2>
                <p class="lead text-center" style="font-size:200%">This website serves as a common portal for
                    activities related to CEN-105
                    course.</p>


            </div>
        </div>
    </div>

    <!-- Apps Section -->

    <!-- Apps showcase -->
    <div class="container-fluid" style="background-color:#00918e; min-height:100vh">
        <h1 class="display-1 text-center">Apps</h1>
        <hr>
        <div class="row text-center">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="padding: 50px 20px; background-color:#00918e
;">
                <a href="timeline.php"><img src="img/clock-295201_640.png" style="max-width: 270px;"></a>
                <h3>Timeline</h3>
                <p class="lead text-center">A place to find all the deadlines.</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="padding: 50px 20px; background-color:#00918e
;">
                <a href="study.php">
                    <img src="img/reading-310397_1280.png" style="max-width: 270px;">
                </a>
                <h3>Study</h3>
                <p class="lead text-center">All the study material that you need.</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="padding: 50px 20px; background-color:#00918e
;">
                <a href="inspire.php" style="color:inherit;">
                    <img src="img/question-2519654_1280.png" style="max-width: 270px;">
                </a>
                <h3>Inspire</h3>
                <p class="lead text-center">A space to get inspired.</p>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>

</body>

</html>