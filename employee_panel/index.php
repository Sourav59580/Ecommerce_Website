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
                <li class="border-left p-2 collapse-item" access-link="header-showcase_design.php">Header showcase</li>
                <li class="border-left p-2 collapse-item" access-link="category_showcase_design.php">Category showcase</li>
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
                    <form class="showcase-form">
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
                            <label for="create-button">Create Button</label>
                            <div class="input-group mb-3" id="create-button">
                             <input type="url" class="form-control btn-url" name="btn-url" placeholder="http://www.google.com">
                             <input type="text" class="form-control btn-name" name="btn-name" placeholder="Button 1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">BG Color</label>
                                </div>
                                <input type="color" name="btn-bgcolor" class="form-control py-3 h-100 btn-bgcolor">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Text Color</label>
                                </div>
                                <input type="color" name="btn-textcolor" class="form-control py-3 h-100 btn-textcolor">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text">Size</span></div>
                                <select class="form-control btn-size">
                                    <option value="14px">Small</option>
                                    <option value="18px">Medium</option>
                                    <option value="24px">Large</option>
                                </select>
                                <div class="input-group-append"><span class="input-group-text bg-danger text-light add-btn">Add</span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary py-2" type="submit">Add showcase</button>
                            <button class="btn btn-primary py-2 showcase-preview-btn" type="button">Showcase view</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7 p-4 bg-white rounded shadow-sm position-relative showcase-preview d-flex" style="height: 360px;">
                    <div class="title-box">
                        <h1 class="showcase-title target">TITLE</h1>
                        <h4 class="showcase-subtitle target">SUBTITLE</h4>
                        <div class="title-buttons"></div>
                    </div>
                    <div class="showcase-view"></div>
                    <div class="showcase-formating d-flex justify-content-around align-items-center w-100">
                        <div class="btn-group">
                            <button class="btn bg-light">Color</button>
                            <button class="btn bg-light"><input type="color" class="color-selector bg-light" id="color-selector"></button>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-light">Size</button>
                            <button class="btn bg-light"><input type="range" min="100" max="500" class="font-size w-100" id="font-size"></button>
                        </div>

                        <button class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                            <span>Alignment</span>
                            <div class="dropdown-menu">
                                <span class="dropdown-item alignment" align_position="h" align_value="flex-start">Left</span>
                                <span class="dropdown-item alignment" align_position="h" align_value="center">Center</span>
                                <span class="dropdown-item alignment" align_position="h" align_value="flex-end">Right</span>
                                <span class="dropdown-item alignment" align_position="v" align_value="flex-start">Top</span>
                                <span class="dropdown-item alignment" align_position="v" align_value="center">V-center</span>
                                <span class="dropdown-item alignment" align_position="v" align_value="flex-end">Bottom</span>
                            </div>
                        </button>
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
        })
        $(".font-size").on("input", function() {
            var size = this.value;
            var index = sessionStorage.getItem("index_number");
            var element = document.getElementsByClassName("target")[index];
            element.style.fontSize = size + "%";
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
        //add showcase data
        $(document).ready(function() {
            $(".showcase-form").submit(function(e) {
                e.preventDefault();
                var title = document.querySelector(".showcase-title");
                var subtitle = document.querySelector(".showcase-subtitle");
                var file = document.querySelector("#title-image").files[0];
                var title_color = "";
                var title_size = "";
                if (title.style.color == "") {
                    title_color = "black";
                } else {
                    title_color = title.style.color;
                }
                if (title.style.fontSize == "") {
                    title_size = "300%";
                } else {
                    title_size = title.style.fontSize;
                }

                var subtitle_color = "";
                var subtitle_size = "";
                if (subtitle.style.color == "") {
                    subtitle_color = "black";
                } else {
                    subtitle_color = subtitle.style.color;
                }
                if (subtitle.style.fontSize == "") {
                    subtitle_size = "300%";
                } else {
                    subtitle_size = subtitle.style.fontSize;
                }

                var flex_box = document.querySelector(".showcase-preview");
                var h_align = "";
                var v_align = "";
                if (flex_box.style.justifyContent == "") {
                    h_align = "center"
                } else {
                    h_align = flex_box.style.justifyContent;
                }
                if (flex_box.style.alignItems == "") {
                    v_align = "center"
                } else {
                    v_align = flex_box.style.alignItems;
                }

                var css_data = {
                    title_size : title_size,
                    title_color : title_color,
                    subtitle_size : subtitle_size,
                    subtitle_color : subtitle_color,
                    h_align : h_align,
                    v_align : v_align,
                    title_text : title.innerHTML,
                    subtitle_text : subtitle.innerHTML,
                    buttons : $(".title-buttons").html().trim()   
                }
                console.log(css_data);
                var formdata = new FormData();
                formdata.append("file_data",file);
                formdata.append("css_data",JSON.stringify(css_data));

                $.ajax({
                    type: "POST",
                    url: "php/header_showcase.php",
                    data: formdata,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(response) {
                        alert(response);
                    }
                });
            });
        });
        //alignment
        $(document).ready(function() {
            $(".alignment").each(function() {
                $(this).click(function() {
                    var align_position = $(this).attr("align_position");
                    var align_value = $(this).attr("align_value");
                    if (align_position == "h") {
                        $(".showcase-preview").css({
                            justifyContent: align_value
                        })
                    } else if (align_position == "v") {
                        $(".showcase-preview").css({
                            alignItems: align_value
                        })
                    }
                });
            });
        });
        //add button coding
        $(document).ready(function(){
          $(".add-btn").click(function(){
              var button = document.createElement("BUTTON");
              button.className = "btn py-1 mr-2";
              button.style.backgroundColor = $(".btn-bgcolor").val(); 
              var a = document.createElement("A");
              a.innerHTML = $(".btn-name").val();
              a.href = $(".btn-url").val();
              a.style.color = $(".btn-textcolor").val();
              a.style.fontSize = $(".btn-size").val();
              button.append(a);
              $(".title-buttons").append(button);

          });
        });
        //showcase view 
        $(document).ready(function(){
            var file = document.querySelector("#title-image").files[0];
            var formdata = new FormData();
            formdata.append("photo",file);
            var flex_box = document.querySelector(".showcase-preview");
                var h_align = "";
                var v_align = "";
                if (flex_box.style.justifyContent == "") {
                    h_align = "center"
                } else {
                    h_align = flex_box.style.justifyContent;
                }
                if (flex_box.style.alignItems == "") {
                    v_align = "center"
                } else {
                    v_align = flex_box.style.alignItems;
                }
            var array =[$(".title-box").html().trim(),h_align,v_align];
            formdata.append("data",JSON.stringify(array));
        });
    </script>

</body>

</html>