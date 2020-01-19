<?php
require_once("./common_files/database/database.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./common_files/css/animate.min.css">
    <link rel="stylesheet" href="./common_files/css/bootstrap.min.css">
    <script src="./common_files/js/jquery.min.js"></script>
    <script src="./common_files/js/popper.min.js"></script>
    <script src="./common_files/js/bootstrap.min.js"></script>


</head>

<body class="bg-light">
    <?php
    include_once("./assest/nav.php");
    ?>

    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./photo-1499084732479-de2c02d45fcc.jpg" class="w-100 d-block h-50"/>
            </div>
            <div class="carousel-item">
                <img src="./photo-1499084732479-de2c02d45fcc.jpg" class="w-100 d-block"/>
            </div>

        </div>
    </div>
    


    <?php
    include_once("./assest/footer.php");
    ?>

</body>

</html>