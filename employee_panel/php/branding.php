<?php
require_once("../../common_files/database/database.php");
$file = $_FILES['brand-logo'];
$location = "";
$logo = "";
if ($file['name'] == "") {
    $location = "";
    $logo = "";
} else {
    $location = $file['tmp_name'];
    $logo = addslashes(file_get_contents($location));
}

// $string = base64_encode(file_get_contents($location));
// $complete_url = "data:image/png;base64,".$string;
//  echo "<img src='".$complete_url."'>";
$brand_name = $_POST['brand-name'];
$email = $_POST['email'];
$domain_name = $_POST['domain-name'];
$facebook_url = $_POST['facebook'];
$twitter_url = $_POST['twitter'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$about_us = addslashes($_POST['about-us']);
$privacy_policy = addslashes($_POST['privacy-policy']);
$cookies_policy = addslashes($_POST['cookies-policy']);
$terms_and_condition = addslashes($_POST['terms-and-condition']);

$check_branding_table = "SELECT * FROM branding";
$response = $db->query($check_branding_table);

if ($response) {
    if ($logo == "") {
        $update_data = "UPDATE branding SET brand_name='$brand_name',domain_name='$domain_name',email='$email',facebook_url='$facebook_url',twitter_url='$twitter_url',phone='$phone',address='$address',about_us='$about_us',privacy_policy='$privacy_policy',cookies_policy='$cookies_policy',terms_and_condition='$terms_and_condition'";
        $response = $db->query($update_data);
        if ($response) {
            
            echo "Edit success".$phone;
        } else {
            echo "Failed edit";
        }
    } else {
        $update_data = "UPDATE branding SET brand_name='$brand_name',brand_logo='$logo',domain_name='$domain_name',email='$email',facebook_url='$facebook_url',twitter_url='$twitter_url',address='$address',phone='$phone',about_us='$about_us',privacy_policy='$privacy_policy',cookies_policy='$cookies_policy',terms_and_condition='$terms_and_condition'";
        $response = $db->query($update_data);
        if ($response) {
            echo "Edit success";
        } else {
            echo "Failed edit";
        }
    }
} else {
    $create_branding_table = "CREATE TABLE branding(
    id INT(11) NOT NULL AUTO_INCREMENT,
    brand_name VARCHAR(50),
    brand_logo MEDIUMBLOB,
    domain_name VARCHAR(100),
    email VARCHAR(100),
    facebook_url VARCHAR(255),
    twitter_url VARCHAR(255),
    address VARCHAR(255),
    phone VARCHAR(12),
    about_us MEDIUMTEXT,
    privacy_policy MEDIUMTEXT,
    cookies_policy MEDIUMTEXT,
    terms_and_condition MEDIUMTEXT,
    PRIMARY KEY(id)
    )";
    $response = $db->query($create_branding_table);
    if ($response) {
        $store_data = "INSERT INTO branding(brand_name,brand_logo,domain_name,email,facebook_url,twitter_url,address,phone,about_us,privacy_policy,cookies_policy,terms_and_condition)
        VALUES('$brand_name','$logo','$domain_name','$email','$facebook_url','$twitter_url','$address','$phone','$about_us','$privacy_policy','$cookies_policy','$terms_and_condition')";
        $response = $db->query($store_data);
        if ($response) {
            echo "success";
        } else {
            echo "Failed to store data";
        }
    } else {
        echo "Unable to create table";
    }
}
