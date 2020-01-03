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
    <div class="container p-5 bg-white " style="margin-top: 80px;box-shadow:0px 0px 2px 4px #ccc;">
    <h3 style="font-family: 'Righteous', cursive;">TERMS AND CONDITION</h3>
    <hr>
       <?php
       $get_branding_data = "SELECT * FROM branding";
       $response = $db->query($get_branding_data);
       $data ="";
       if ($response) {
           $data = $response->fetch_assoc();
       }
       echo $data['terms_and_condition'];
       ?>
    </div>



    <?php
    include_once("./assest/footer.php");
    ?>

</body>

</html>