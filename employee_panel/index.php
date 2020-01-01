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
                         <form>
                             <div class="from-group mb-3">
                                 <label class="font-weight-bold" for="brand_name">Enter Brand Name</label>
                                 <input type="text" name="brand-name" class="form-control" placeholder="ecommerce website"/>
                             </div>
                             <div class="from-group mb-3">
                                 <label class="font-weight-bold" for="brand_logo">Upload brand logo</label>
                                 <input type="file" name="brand-logo" class="form-control"/>
                             </div>
                             <div class="from-group mb-3">
                                 <label class="font-weight-bold" for="domain_name">Enter domain name</label>
                                 <input type="text" name="domain-name" class="form-control" placeholder="www.abc.com"/>
                             </div>
                             <div class="from-group mb-3">
                                 <label class="font-weight-bold" for="email">Email</label>
                                 <input type="email" name="email" class="form-control" placeholder="www.abc@gmail.com"/>
                             </div>
                             <div class="from-group mb-3">
                                 <label class="font-weight-bold" for="social_handels">Social handels</label>
                                 <input type="text" name="facebook" class="form-control mb-3" placeholder="facebook page url"/>
                                 <input type="text" name="twitter" class="form-control" placeholder="twitter page url"/>
                             </div>
                             <div class="from-group mb-3">
                                 <label class="font-weight-bold" for="address">Address</label>
                                 <textarea class="form-control" name="address">

                                 </textarea>
                             </div>
                             <div class="form-group mb-3">
                                 <label class="font-weight-bold" for="phone-number">Phone</label>
                                 <input type="number" name="phone" class="form-control" placeholder="Phone number"/>
                             </div>
                             <div class="from-group mb-3">
                                 <label class="font-weight-bold" for="privacy_policy">Privacy policy</label>
                                 <textarea class="form-control" name="privacy_policy" style="height:300px;">

                                 </textarea>
                             </div>
                             <div class="from-group mb-3">
                                 <label class="font-weight-bold" for="cookies_policy">Cookies policy</label>
                                 <textarea class="form-control" name="cookies_policy" style="height:300px;">

                                 </textarea>
                             </div>
                             <div class="from-group mb-3">
                                 <label class="font-weight-bold" for="terms_and_condition">Terms and Condition</label>
                                 <textarea class="form-control" name="terms_and_condition" style="height:300px;">

                                 </textarea>
                             </div>
                            <button class="btn btn-primary">Submit Brand Information</button>
                         </form>

                     </div>

                </div>
                <div class="col-md-2"></div>
            </div>
           

        </div>
    </div>

</body>

</html>