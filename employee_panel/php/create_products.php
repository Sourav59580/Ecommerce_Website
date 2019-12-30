<?php
require "../../common_files/php/database.php";

$product_title = $_POST['title'];
$product_description = $_POST['description'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$dir = "";
$status = "";
$get_category = "SELECT category_name FROM brands WHERE brands = '$brand'";
$response = $db->query($get_category);
if ($response) {
    $data = $response->fetch_assoc();
    $category = $data['category_name'];
}


$all_files = [$_FILES['thumb'], $_FILES['front'], $_FILES['top'], $_FILES['bottom'], $_FILES['left'], $_FILES['right']];
$file_path = ['thumb_pic', 'front_pic', 'top_pic', 'bottom_pic', 'left_pic', 'right_pic'];

$check_dir = is_dir("../../stocks/" . $category . "/" . $brand . "/" . $product_title);
if ($check_dir) {
    echo "File already exits";
} else {
    $dir = mkdir("../../stocks/" . $category . "/" . $brand . "/" . $product_title);
}

$select_data = "SELECT * FROM products";
$response = $db->query($select_data);

if ($response) {

    $store_data = "INSERT INTO products(brands,title,description,price,quantity)
                   VALUES('$brand','$product_title','$product_description','$price','$quantity')";

    if ($db->query($store_data)) {
        $current_id = $db->insert_id;
        if ($dir) {
            for ($i = 0; $i < count($all_files); $i++) {
                $file = $all_files[$i];
                $filename = $file['name'];
                $location = $file['tmp_name'];
                $current_url = "stocks/" . $category . "/" . $brand . "/" . $product_title . "/" . $filename;
                if (move_uploaded_file($location, "../../stocks/" . $category . "/" . $brand . "/" . $product_title . "/" . $filename)) {
                    $updata_path = "UPDATE products SET $file_path[$i]= '$current_url' WHERE id = '$current_id'";
                    $response = $db->query($updata_path);
                    if ($response) {
                        $status = "success";
                    } else {
                        $status = "failed";
                    }
                }
            }
            if ($status == "success") {
                echo "Successfully update data in database.";
            } else {
                echo "failed to update";
            }
        }
    } else {
        echo "Failed to save data in database !";
    }
} else {
    $create_table = "CREATE TABLE products(
    id INT(11) NOT NULL AUTO_INCREMENT,
    brands VARCHAR(50),
    title VARCHAR(100),
    description VARCHAR(255),
    price FLOAT(20),
    quantity INT(10),
    thumb_pic VARCHAR(255),
    front_pic VARCHAR(255),
    top_pic VARCHAR(255),
    bottom_pic VARCHAR(255),
    left_pic VARCHAR(255),
    right_pic VARCHAR(255),
    PRIMARY KEY(id)
)";
    $response = $db->query($create_table);
    if ($response) {
        $store_data = "INSERT INTO products(brands,title,description,price,quantity)
                       VALUES('$brand','$product_title','$product_description','$price','$quantity')";

        if ($db->query($store_data)) {
            if ($dir) {
                for ($i = 0; $i < count($all_files); $i++) {
                    $file = $all_files[$i];
                    $filename = $file['name'];
                    $location = $file['tmp_name'];
                    $current_url = "stocks/" . $category . "/" . $brand . "/" . $product_title . "/" . $filename;
                    if (move_uploaded_file($location, "../../stocks/" . $category . "/" . $brand . "/" . $product_title . "/" . $filename)) {
                        $updata_path = "UPDATE products SET $file_path[$i]= '$current_url' WHERE id = '$current_id'";
                        $response = $db->query($updata_path);
                        if ($response) {
                            $status = "success";
                        } else {
                            $status = "failed";
                        }
                    }
                }
                if ($status == "success") {
                    echo "Successfully update data in database.";
                } else {
                    echo "failed to update";
                }


            }
        } else {
            echo "Failed to save data in database !";
        }
    } else {
        echo "Unable to create products table";
    }
}
