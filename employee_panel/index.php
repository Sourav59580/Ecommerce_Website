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
    <link rel="stylesheet" href="./css/index.css">
    <script src="js/indexs.js"></script>
    <style>

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="sidebar">
            <button class="active btn w-100 text-left bg-light mb-2 collapse-item" style="font-size:15px" access-link="brand_information_design.php">
                <i class="fa fa-image"></i>
                Branding details
            </button>
            <button class="btn w-100 text-left bg-light mb-2 home-page-design-btn" style="font-size:15px">
                <i class="fa fa-home"></i>
                Homepage design
                <i class="fa fa-angle-down close mt-2"></i>
            </button>
            <ul class="home-page-design-btn-menu collapse">
                <li class="border-left p-2 collapse-item" access-link="create_category_design.php">Header showcase</li>
                <li class="border-left p-2 collapse-item" access-link="create_brands_design.php">Category showcase</li>
            </ul>
            <button class="btn w-100 text-left stock-update-btn bg-light" style="font-size:15px">
                <i class="fa fa-shopping-cart"></i>
                Stock update
                <i class="fa fa-angle-down close mt-2"></i>
            </button>
            <ul class="stock-update-btn-menu collapse">
                <li class="border-left p-2 collapse-item" access-link="create_category_design.php">Create category</li>
                <li class="border-left p-2 collapse-item" access-link="create_brands_design.php">Create brands</li>
                <li class="border-left p-2 collapse-item" access-link="create_products_design.php">Creat products</li>
            </ul>
        </div>
        <div class="page">
<!--start row coding-->
            <div class="row">
                <div class="col-md-4 p-4 bg-white rounded shadow-sm">
                    <form>
                        <div class="form-group">
                            <label for="title-image">Title image</label>
                            <input type="file" accept="image/*" class="form-control" name="title-image" id="title-image" />
                        </div>
                        <div class="form-group">
                            <label for="title-text">Title text</label>
                            <textarea class="form-control" rows="1" name="title-text" id="title-text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="subtitle-text">Subtitle text</label>
                            <textarea class="form-control" rows="5" name="subtitle-text" id="subtitle-text"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary py-2">Add showcase</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7 p-4 bg-white rounded shadow-sm position-relative showcase-preview">
                    <h1 class="showcase-title target">TITLE</h1>
                    <h4 class="showcase-subtitle target">SUBTITLE</h4>
                    <div class="showcase-formating">
                        <input type="color" class="color-selector bg-light" id="color-selector">
                    </div>
                </div>
            </div>
    <!--end row coding-->

        </div>
    </div>
<script>
$(".target").click(function(event){
    var element = event.target;
    var index_number = $(element).index();
    sessionStorage.setItem("index_number",index_number);
    $(".color-selector").on("change",function(){
        var color = this.value;
        var index = sessionStorage.getItem("index_number");
        var element = document.getElementsByClassName("target")[index];
        element.style.color=color;
        sessionStorage.removeItem("index_number");
    })
});



</script>

</body>

</html>