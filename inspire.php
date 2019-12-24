<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>EVS IIT-R Webportal | Inspire</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>

    <?php include 'header.php'; ?>


    <div class="continer-fluid">
        <!-- Upload space -->
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 " style=" background-color :#ff8ba7;">

                <h1 class="text-center">Have something inspirational to share?</h1>
                <hr class="my-4">

                <h3 class="lead text-center" style="padding-bottom: 20px;">A YouTube Video?</h3>
                <img src="img/youtube.png" class="center" style="max-width:100px;">
                <hr class="my-4">

                <h3 class="lead text-center" style="padding-bottom: 20px;">An Article?</h3>
                <img src="img/write.png" class="center" style="max-width:100px;">
                <hr class="my-4">
                <h3 class="lead text-center" style="padding-bottom: 20px;">Something Else?</h3>
                <img src="img/upload.png" class="center" style="max-width:100px;">

                <div class="col text-center" style="padding: 10px;">
                    <a href="upload.html">
                        <button type="button" class="btn btn-dark">Click Here</button></a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10" style="background-color:#110133;">

                <?php

                include "connection.php";

                $sql = 'SELECT `heading_txt` AS `heading_txt`,`caption_txt` AS `caption_txt` FROM upfiles;';
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        print_r('
        
                        <div class = "card" style = "margin : 5% 3%  ; padding : 60px; background-color:#c3f0ca">
                            <h1>' . $row["heading_txt"] . '</h1>
                            <p class = "lead">' . $row["caption_txt"] . '</p>
                        </div>
                    ');
                    }
                }
                ?>
            </div>


        </div>
    </div>

    <?php include 'footer.php' ?>



</body>

</html>