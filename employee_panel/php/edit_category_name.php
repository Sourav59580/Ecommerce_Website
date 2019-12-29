<?php
 require("../../common_files/php/database.php");
 $id = $_POST['id'];
 $changed_name = $_POST['changed_name'];

$update_data = "UPDATE category SET category_name = '$changed_name' WHERE id = '$id'";
if($db->query($update_data))
{
    echo "success";
}
else
{
    echo "unable to change category_name";
}








?>