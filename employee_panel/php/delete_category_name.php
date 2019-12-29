<?php
require "../../common_files/php/database.php";
$id = $_POST['id'];
$delete_row = "DELETE FROM category WHERE id = '$id'";
if ($db->query($delete_row)) {
    echo "success";
} else {
    echo "failed to delete";
}
