<?php
require "../../common_files/php/database.php";
$get_category_name = "SELECT * FROM category";
$response = $db->query($get_category_name);
$multi_result = [];
if ($response) {
    while ($data = $response->fetch_assoc()) {
      array_push($multi_result,$data['category_name']);
    }
}
echo ' <div class="row animated fadeIn">
<div class="col-md-4 bg-white rounded py-2 shadow-sm">
    <h5>
      CREATE BRANDS
      <i class="fa fa-circle-o-notch close d-none fa-spin create_brand_loader"></i>
    </h5>
    <form class="create_brand_form">
        <select class="form-control mb-3 brand-category" style="border:none;background-color:#F9F9F9">
            <option>Choose category</option>';
for($i=0;$i<count($multi_result);$i++)
{
    echo '<option>'.$multi_result[$i].'</option>';
}
echo '</select>
        <input type="text" class="form-control mb-3 brand-input" placeholder="Nokia" style="border:none;background-color:#F9F9F9">
        <div class="brand-field-area"></div>
        <button class="add-brand-btn btn btn-primary mb-3" type="button">
           <i class="fa fa-plus"></i>
           Add field
        </button>
        <button class="btn btn-danger mb-3 create-brand-btn" type="submit">
          Create
        </button>
        <div class="create-brand-notice"></div>
    </form>

</div>
<div class="col-md-2"></div>
<div class="col-md-6 bg-white rounded py-2 shadow-sm">
<select class="form-control my-3 display-brand" >
<option>Choose category</option>';
for($i=0;$i<count($multi_result);$i++)
{
    echo '<option>'.$multi_result[$i].'</option>';
}
echo '</select>

    <h5 class="my-3">BRNADS LIST
    <i class="fa fa-circle-o-notch close  fa-spin display_brand_loader d-none"></i>
    </h5>
    <div class="brands_display_area">
    </div>
</div>
</div>';
