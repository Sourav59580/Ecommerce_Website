<?php
require("../../common_files/php/database.php");
$previous_c_name = $_POST['previous_c_name'];
$previous_b_name = $_POST['previous_b_name'];
$c_name = $_POST['c_name'];
$b_name = $_POST['b_name'];

$update_brand = "UPDATE brands SET category_name = '$c_name', brands = '$b_name' WHERE category_name = '$previous_c_name' AND brands ='$previous_b_name'";
$response = $db->query($update_brand);
if($response)
{
    echo "Success";
}
else
{
    echo "Failed";
}


















?>