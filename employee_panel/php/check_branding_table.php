<?php
require_once("../../common_files/database/database.php");
$check_data = "SELECT id,brand_name,domain_name,email,facebook_url,twitter_url,address,phone,about_us,privacy_policy,cookies_policy,terms_and_condition FROM branding";
$response = $db->query($check_data);
$all_data = [];
if($response)
{
    $data = $response->fetch_assoc();
    array_push($all_data,$data);
    echo json_encode($all_data);
}










?>