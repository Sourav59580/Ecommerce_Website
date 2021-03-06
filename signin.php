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
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
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
    <div class="container bg-white p-4" style="box-shadow:0px 0px 2px 4px #ccc;margin-top:80px;">
        <h3 style="font-family: 'Righteous', cursive;">SIGNIN</h3>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <form class="signup-form">
                    <div class="form-group mb-3">
                        <label for="email">Email<sup class="text-danger">*</sup></label>
                        <input type="email" name="email" placeholder="er@gmail.com" class="form-control bg-light" id="email"></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Passsword<sup class="text-danger">*</sup></label>
                        <input type="password" name="password" placeholder="*******" class="form-control bg-light" id="password"></input>
                    </div>
                    <button class="btn btn-primary py-2">Login now</button>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h4>NEW CUSTOMER</h4>
                <p>If you have no account please register with us</p>
                <a href="signup.php" class="btn btn-danger">Create a new account</a>
            </div>
        </div>
    </div>



        <?php
        include_once("./assest/footer.php");
        ?>

</body>

</html>