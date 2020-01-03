<?php
$get_branding_data = "SELECT * FROM branding";
$response = $db->query($get_branding_data);
if ($response) {
    $data = $response->fetch_assoc();
    $brand_name = $data['brand_name'];
}


?>

<div class="container-fluid shadow-sm bg-white" style="box-shadow: 0px 0px 5px rgba(0, 0, 0, .5);">
    <nav class="container navbar navbar-expand-sm bg-white shadow-sm">
        <ul class="navbar-nav">
            <a href="#" class="navbar-brand text-uppercase p-1 d-flex flex-column align-items-center font-weight-bold" style="box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);color:#F0266B;">
                <?php 
                $logo_string = base64_encode($data['brand_logo']);
                $complete_url = "data:image/png;base64,".$logo_string;
                echo "<img src='".$complete_url."' style='width:30px;'>";
                echo $brand_name 
                ?>
            </a>
            <li class="nav-item mt-3"><a href="#" class="nav-link">HOME</a></li>
            <?php
            $get_category = "SELECT category_name FROM category";
            $response = $db->query($get_category);
            if ($response) {
                while ($data = $response->fetch_assoc()) {
                    echo "<li class='nav-item mt-3'><a href='#' class='nav-link text-uppercase'>" . $data['category_name'] . "</a></li>";
                }
            }
            ?>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a class="nav-link"><i class="fa fa-search"></i></a></li>
            <li class="nav-item "><a class="nav-link"><i class="fa fa-shopping-bag"></i></a></li>
            <li class="nav-item "><a class="nav-link"><i class="fa fa-user-circle-o"></i></a></li>
        </ul>
    </nav>
</div>