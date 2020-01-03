<?php
$get_branding_data = "SELECT * FROM branding";
$response = $db->query($get_branding_data);
$data = $response->fetch_assoc();
$Venue = $data['address'];
$call = $data['phone'];
$email = $data['email'];
$website = $data['domain_name'];
$facebook = $data['facebook_url'];
$twitter = $data['twitter_url'];

?>
    <div class="container-fluid bg-white border-top py-3" style="margin-top: 100px">
        <div class="container d-flex justify-content-between">
            <div class="input-group w-50">
                <input type="email" class="form-control" placeholder="email@gmail.com" name="subcribed-email" />
                <div class="input-group-append">
                    <span class="input-group-text subscribe-btn">SUBSCRIBE</span>
                </div>
            </div>
            <div class="btn-group">
                <button class="btn btn-dark">FOLLOW US</button>
                <button class="btn border"><i class="fa fa-facebook"></i></button>
                <button class="btn border"><i class="fa fa-twitter"></i></button>
                <button class="btn border"><i class="fa fa-instagram"></i></button>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color:#172337;height:300px;">
        <div class="container py-3">
            <div class="row">
                <div class="col-3">
                    <h5 class="text-light">CATEGORY</h5>
                    <?php
                    $get_category = "SELECT category_name FROM category";
                    $response = $db->query($get_category);
                    if ($response) {
                        while ($data = $response->fetch_assoc()) {
                            echo "<a href='#' class='d-block py-2 text-capitalize'>" . $data['category_name'] . "</a>";
                        }
                    }
                    ?>
                </div>
                <div class="col-1"></div>
                <div class="col-3">
                    <h5 class="text-light">POLICY</h5>
                    <a href="privacy.php" class="d-block my-2">Privacy policy</a>
                    <a href="cookies.php" class="d-block my-2">Cookies policy</a>
                    <a href="terms.php" class="d-block my-2">Terms and condition</a>
                </div>
                <div class="col-1"></div>
                <div class="col-4">
                    <h5 class="text-light">CONTACT</h5>
                    <p class="d-block my-2 text-light">Venue : <?php echo $Venue  ?></p>
                    <p class="d-block my-2 text-light">Call : <?php echo $call  ?></p>
                    <p class="d-block my-2 text-light">Email : <?php echo $email  ?></p>
                    <p class="d-block my-2 text-light">Website : <?php echo $website  ?></p>
                </div>
            </div>

        </div>
    </div>

    <script>
     function demo()
     {
         
     }
    </script>
