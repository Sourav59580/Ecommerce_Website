<?php
require "../../common_files/php/database.php";

$get_category = "SELECT * FROM category";
$response = $db->query($get_category);
$category_list = [];
if ($response) {
    while ($data = $response->fetch_assoc()) {
        array_push($category_list, $data);
    }
    echo json_encode($category_list);

} else {
    echo "<b>No category found !</b>";
}
?>