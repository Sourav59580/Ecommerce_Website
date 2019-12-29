<?php
require("../../common_files/php/database.php");
$json_data = json_decode($_POST['json_data']);
$length = count($json_data);
$category = $_POST['category'];
$message = "";
$select_brands_table = "SELECT * FROM brands";
$response = $db->query($select_brands_table);
if ($response) {
    for ($i = 0; $i < $length; $i++) {
        $insert_data = "INSERT INTO brands(category_name,brands)
        VALUES('$category','$json_data[$i]')";
        $data_response = $db->query($insert_data);
        if ($data_response) {
            if(mkdir("../../stocks/".$category."/".$json_data[$i]))
            $message = "done";
        } else {
            $message = "Unable to store data in brands";
        }
    }
    echo $message;
    //echo "Success";
} 
else 
{
    $create_table = "CREATE TABLE brands(
     id INT(11) NOT NULL AUTO_INCREMENT,
     category_name VARCHAR(50),
     brands VARCHAR(50),
     PRIMARY KEY(id)
 )";
    $response = $db->query($create_table);
    if ($response) {
        for ($i = 0; $i < $length; $i++) {
            $insert_data = "INSERT INTO brands(category_name,brands)
            VALUES('$category','$json_data[$i]')";
            if ($db->query($insert_data)) {
                if(mkdir("../../stocks/".$category."/".$json_data[$i]))
                $message = "done";
            } else {
                $message = "Unable to store data in brands";
            }
        }
        echo $message;
    } else {
        echo "Unabel to create brands table";
    }
}
