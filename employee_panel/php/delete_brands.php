<?php
require("../../common_files/php/database.php");
$c_name = $_POST['c_name'];
$b_name = $_POST['b_name'];

$delete_brand = "DELETE FROM brands WHERE category_name = '$c_name' AND brands = '$b_name'";
$response = $db->query($delete_brand);
if($response)
{
    echo "Done";
}
else
{
    echo "failed";
}














?>