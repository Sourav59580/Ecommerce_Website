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
                            <label for="title-image">Title image <span>200kb (1920*978)</span></label>
                            <input type="file" accept="image/*" class="form-control" name="title-image" id="title-image" />
                        </div>
                        <div class="form-group">
                            <label for="title-text">Title text <span class="title-limit">0</span><span>/40</span></label>
                            <textarea class="form-control" rows="1" name="title-text" id="title-text" maxlength="40"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="subtitle-text">Subtitle text <span class="subtitle-limit">0</span><span>/100</span></label>
                            <textarea class="form-control" rows="5" name="subtitle-text" id="subtitle-text" maxlength="100"></textarea>
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
                    <div class="showcase-view"></div>
                    <div class="showcase-formating d-flex justify-content-around align-items-center w-100">
                        <div class="btn-group">
                            <button class="btn bg-light">Color</button>
                            <button class="btn bg-light"><input type="color" class="color-selector bg-light" id="color-selector"></button>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-light">Font size</button>
                            <button class="btn bg-light"><input type="number" class="font-size w-50" id="font-size"></button>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-light">Align</button>
                            <button class="btn btn-light">
                                <i class="fa fa-align-left"></i>
                            </button>
                            <button class="btn btn-light">
                                <i class="fa fa-align-center"></i>
                            </button>
                            <button class="btn btn-light">
                                <i class="fa fa-align-right"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <!--end row coding-->

        </div>
    </div>
    <script>
        $(".target").each(function() {
            $(this).click(function(event) {
                var element = event.target;
                var index_number = $(element).index();
                sessionStorage.setItem("index_number", index_number);
                var i;
                for (i = 0; i < $(".target").length; i++) {
                    $(".target").css({
                        border: "",
                        boxShadow: "",
                        width: "",
                        padding: ""
                    })
                }
                $(this).css({
                    border: "5px solid red",
                    boxShadow: "0px 0px 4px grey",
                    width: "fit-content",
                    padding: "2px"
                });
            });
            $(this).on("dblclick", function() {
                var i;
                for (i = 0; i < $(".target").length; i++) {
                    $(".target").css({
                        border: "",
                        boxShadow: "",
                        width: "",
                        padding: ""
                    })
                }
            });
        });

        $(".color-selector").on("change", function() {
            var color = this.value;
            var index = sessionStorage.getItem("index_number");
            var element = document.getElementsByClassName("target")[index];
            element.style.color = color;
            sessionStorage.removeItem("index_number");
        })
        //start title image upload
        $(document).ready(function() {
            $("#title-image").on("change", function() {
                var file = this.files[0];
                if (file.size < 200000) {
                    var url = URL.createObjectURL(file);
                    var image = new Image();
                    image.src = url;
                    image.onload = function() {
                        var o_width = image.width;
                        var o_height = image.height;
                        if (o_width <= 1920 && o_height <= 978) {
                            image.style.width = "100%";
                            image.style.position = "absolute";
                            image.style.top = "0";
                            image.style.left = "0";

                            $(".showcase-view").append(image);
                        } else {
                            alert("Please upload 1920*978 size file");
                        }
                    }

                } else {
                    alert("Please upload file less than 200kb");
                }
            });
        });
        //title text-limit count 
        $(document).ready(function() {
            $("#title-text").on("input", function() {
                var length = this.value.length;
                $(".showcase-title").html(this.value)
                $(".title-limit").html(length);
            });
        })
        //subtitle text-limit count
        $(document).ready(function() {
            $("#subtitle-text").on("input", function() {
                var length = this.value.length;
                $(".showcase-subtitle").html(this.value)
                $(".subtitle-limit").html(length);
            });
        })
    </script>

</body>

</html>