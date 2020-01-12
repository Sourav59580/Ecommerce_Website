<?php
require("../../common_files/database/database.php");
 $file = ($_FILES['file_data']);
 $location = $file['tmp_name'];
 $files_binary = addslashes(file_get_contents($location));
 $json_data = json_encode($_POST['css_data']);
 $tmp_data = json_decode($json_data,true);
 $all_data =json_decode($tmp_data,true); 
 
 $title_text = addslashes($all_data['title_text']);
 $title_size = $all_data['title_size'];
 $title_color = $all_data['title_color'];

 $subtitle_text = addslashes($all_data['subtitle_text']);
 $subtitle_size = $all_data['subtitle_size'];
 $subtitle_color = $all_data['subtitle_color'];

 $h_align = $all_data['h_align'];
 $v_align = $all_data['v_align'];

 $buttons = addslashes($all_data['buttons']);

 $check_data = "SELECT * FROM header_showcase";
 $response = $db->query($check_data);
 if($response){
    $data_insert = "INSERT INTO header_showcase(title_image,title_text,title_color,title_size,subtitle_text,
         subtitle_color,subtitle_size,h_align,v_align,buttons)VALUES('$files_binary','$title_text','$title_color',
         '$title_size','$subtitle_text','$subtitle_color','$subtitle_size','$h_align','$v_align','$buttons')";
         $response=$db->query($data_insert);
         if($response){
             echo "success";
         }
         else{
             echo "failed";
         }
 }
 else{
     $create_table = "CREATE TABLE header_showcase(
         id INT(11) NOT NULL AUTO_INCREMENT,
         title_image MEDIUMBLOB,
         title_text VARCHAR(255),
         title_color VARCHAR(10),
         title_size VARCHAR(10),
         subtitle_text VARCHAR(255),
         subtitle_color VARCHAR(10),
         subtitle_size VARCHAR(10),
         h_align VARCHAR(20),
         v_align VARCHAR(20),
         buttons MEDIUMTEXT,
         PRIMARY KEY(id)
     )";
     $response= $db->query($create_table);
     if($response){
         $data_insert = "INSERT INTO header_showcase(title_image,title_text,title_color,title_size,subtitle_text,
         subtitle_color,subtitle_size,h_align,v_align,buttons)VALUES('$files_binary','$title_text','$title_color',
         '$title_size','$subtitle_text','$subtitle_color','$subtitle_size','$h_align','$v_align','$buttons')";
         $response=$db->query($data_insert);
         if($response){
             echo "success";
         }
         else{
             echo "failed";
         }

     }
     else{
         echo "Failed to create table";
     }
 }
















?>