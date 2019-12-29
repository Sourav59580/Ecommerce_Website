<?php
require("../../common_files/php/database.php");

$category_name = $_POST['category_name'];

$get_data = "SELECT * FROM brands WHERE category_name = '$category_name'";
$response = $db->query($get_data);
$brands_name = [];
if($response->num_rows!=0)
{
  while($all_data = $response->fetch_assoc())
  {
      array_push($brands_name,$all_data);
  }
  echo json_encode($brands_name);
}

else
{
    echo "<b>No brands has been created yet in this category</b>";
}








?>