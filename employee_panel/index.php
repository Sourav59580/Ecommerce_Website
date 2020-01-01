<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../common_files/css/animate.min.css">
    <link rel="stylesheet" href="../common_files/css/bootstrap.min.css">
    <script src="../common_files/js/jquery.min.js"></script>
    <script src="../common_files/js/popper.min.js"></script>
    <script src="../common_files/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/indexs.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="sidebar">
            <button class="btn w-100 text-left bg-light mb-4" style="font-size:20px">
                <i class="fa fa-image"></i>
                Branding details
            </button>
            <button class="btn w-100 text-left stock-update-btn bg-light" style="font-size:20px">
                <i class="fa fa-shopping-cart"></i>
                Stock update
                <i class="fa fa-angle-down close mt-2"></i>
            </button>
            <ul class="stock-update-btn-menu collapse show">
                <li class="border-left p-2 collapse-item active" access-link="create_category_design.php">Create category</li>
                <li class="border-left p-2 collapse-item" access-link="create_brands_design.php">Create brands</li>
                <li class="border-left p-2 collapse-item" access-link="create_products_design.php">Creat products</li>
            </ul>
        </div>
        <div class="page">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 p-4 bg-white rounded-lg shadow-sm">
                    <div>
                        <form class="branding-form">
                            <div class="from-group mb-3">
                                <label class="font-weight-bold" for="brand_name">Enter Brand Name</label>
                                <input type="text" name="brand-name" class="form-control" placeholder="ecommerce website" />
                            </div>
                            <div class="from-group mb-3">
                                <label class="font-weight-bold" for="brand_logo">Upload brand logo</label>
                                <input type="file" name="brand-logo" class="form-control" id="brand-logo" />
                                <span style="color:red;" id="brand-logo-message"></span>
                            </div>
                            <div class="from-group mb-3">
                                <label class="font-weight-bold" for="domain_name">Enter domain name</label>
                                <input type="text" name="domain-name" class="form-control" placeholder="www.abc.com" />
                            </div>
                            <div class="from-group mb-3">
                                <label class="font-weight-bold" for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="www.abc@gmail.com" />
                            </div>
                            <div class="from-group mb-3">
                                <label class="font-weight-bold" for="social_handels">Social handels</label>
                                <input type="text" name="facebook" class="form-control mb-3" placeholder="facebook page url" />
                                <input type="text" name="twitter" class="form-control" placeholder="twitter page url" />
                            </div>
                            <div class="from-group mb-3">
                                <label class="font-weight-bold" for="address">Address</label>
                                <textarea class="form-control" name="address" id="address"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold" for="phone-number">Phone</label>
                                <input type="number" name="phone" class="form-control" placeholder="Phone number" />
                            </div>
                            <div class="from-group mb-3">
                                <label class="font-weight-bold" for="about-us">About us <small class="about-us-count">0</small><small>/5000</small>
                                </label>
                                <textarea class="form-control" name="about-us" id="about-us" maxlength="5000" style="height:300px;"></textarea>
                            </div>
                            <div class="from-group mb-3">
                                <label class="font-weight-bold" for="privacy-policy">Privacy policy <small class="privacy-policy-count">0</small><small>/5000</small></label>
                                <textarea class="form-control" name="privacy-policy" id="privacy-policy" style="height:300px;" maxlength="5000"></textarea>
                            </div>
                            <div class="from-group mb-3">
                                <label class="font-weight-bold" for="cookies-policy">Cookies policy <small class="cookies-policy-count">0</small><small>/5000</small></label>
                                <textarea class="form-control" name="cookies-policy" style="height:300px;" id="cookies-policy" maxlength="5000"></textarea>
                            </div>
                            <div class="from-group mb-3">
                                <label class="font-weight-bold" for="terms-and-condition">Terms and Condition <small class="terms-and-condition-count">0</small><small>/5000</small></label>
                                <textarea class="form-control" name="terms-and-condition" style="height:300px;" id="terms-and-condition" maxlength="5000"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit Brand Information</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <!--start lenght count-->
    <script>
        $(document).ready(function() {
            $("#about-us").on("input", function() {
                var length = $(this).val().length;
                $(".about-us-count").html(length);
            });
        });

        $(document).ready(function() {
            $("#privacy-policy").on("input", function() {
                var length = $(this).val().length;
                $(".privacy-policy-count").html(length);
            });
        });

        $(document).ready(function() {
            $("#cookies-policy").on("input", function() {
                var length = $(this).val().length;
                $(".cookies-policy-count").html(length);
            });
        });

        $(document).ready(function() {
            $("#terms-and-condition").on("input", function() {
                var length = $(this).val().length;
                $(".terms-and-condition-count").html(length);
            });
        });
//branding form upload

$(document).ready(function(){
$(".branding-form").submit(function(e){
    e.preventDefault();
    var file = document.querySelector("#brand-logo");
    var file_size = file.files[0].size;
    if(200000>file_size)
    {
        $.ajax({
         type : "POST",
         url : "php/branding.php",
         data : new FormData(this),
         processData : false,
         contentType : false,
         cache : false,
         success : function(response){
             document.write(response);
             //$(".branding-form").trigger('reset');
         }

        });
        
    }
    else
    {
        $("#brand-logo-message").html("Please upload file less then 200kb");
    }
})
});

    </script>

</body>

</html>