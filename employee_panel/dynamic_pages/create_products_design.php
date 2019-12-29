<?php
require "../../common_files/php/database.php";
echo '<div class="row animated fadeIn">
<div class="col-md-12 bg-white rounded shadow-sm py-2">
<h5 class="my-3">CREATE PRODUCTS
   <i class="fa fa-circle-o-notch close fa-spin"></i>
</h5>
<form class="create-products-form">
<div class="row">
   <div class="col-md-6">
       <input type="text" class="form-control mb-3" placeholder="Enter Product Title" style="border:none;background-color:#F9F9F9">
   </div>
   <div class="col-md-3"></div>
   <div class="col-md-3">
      <select class="form-control mb-3" style="border:none;background-color:#F9F9F9">
         <option>Choose brands</option>';
         $get_brands_name = "SELECT brands FROM brands";
         $response = $db->query($get_brands_name);
         if ($response) {
            while ($data = $response->fetch_assoc()) {
               echo "<option>".$data['brands']."</option>";
            }
         }
  echo '</select>
   </div>
</div>

<div class="row mb-3">
   <div class="col-md-12">
      <h6 style="color:grey;">DESCRIPTION</h6>
      <textarea class="form-control" style="height:150px;"></textarea>
   </div>
</div>

<div class="row mb-5">
   <div class="col-md-6">
      <div class="form-group">
         <label for="price">PRICE</label>
         <input type="text" class="form-control" placeholder="Enter Price" id="price">
      </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">
      <label for="quantity">QUANTITY</label>
      <input type="text" class="form-control" placeholder="Enter Quantity" id="quantity">
   </div>
</div>

<div class="row w-100 mb-3 px-2">
   <div class="col-12 d-flex justify-content-around flex-wrap">
      <div style="width:75px;height:100px;" class="bg-dark text-light rounded mt-2 text-center">
         <input type="file" accept="image/*" style="width:75px;height:100px;opacity:0;position:absolute;">
         <i class="fa fa-camera mx-2 mt-1" style="font-size:52px;color:grey;"></i>
         <h6 class="mb-0">THUMB</h6>
         <small>150*150</small>
      </div>
      <div style="width:75px;height:100px;" class="bg-dark text-light rounded mt-2 text-center">
         <input type="file" accept="image/*" style="width:75px;height:100px;opacity:0;position:absolute;">
         <i class="fa fa-camera mx-2 mt-1" style="font-size:52px;color:grey;"></i>
         <h6 class="mb-0">FRONT</h6>
         <small>274*274</small>
      </div>
      <div style="width:75px;height:100px;" class="bg-dark text-light rounded mt-2 text-center">
         <input type="file" accept="image/*" style="width:75px;height:100px;opacity:0;position:absolute;">
         <i class="fa fa-camera mx-2 mt-1" style="font-size:52px;color:grey;"></i>
         <h6 class="mb-0">TOP</h6>
         <small>447*446</small>
      </div>
      <div style="width:75px;height:100px;" class="bg-dark text-light rounded mt-2 text-center">
         <input type="file" accept="image/*" style="width:75px;height:100px;opacity:0;position:absolute;">
         <i class="fa fa-camera mx-2 mt-1" style="font-size:52px;color:grey;"></i>
         <h6 class="mb-0">BOTTOM</h6>
         <small>447*446</small>
      </div>
      <div style="width:75px;height:100px;" class="bg-dark text-light rounded mt-2 text-center">
        <input type="file" accept="image/*" style="width:75px;height:100px;opacity:0;position:absolute;">
        <i class="fa fa-camera mx-2 mt-1" style="font-size:52px;color:grey;"></i>
        <h6 class="mb-0">LEFT</h6>
        <small>447*446</small>
      </div>
      <div style="width:75px;height:100px;" class="bg-dark text-light rounded mt-2 text-center">
        <input type="file" accept="image/*" style="width:75px;height:100px;opacity:0;position:absolute;">
        <i class="fa fa-camera mx-2 mt-1" style="font-size:52px;color:grey;"></i>
        <h6 class="mb-0">RIGHT</h6>
        <small>447*446</small>
      </div>
   </div>
</div>

<div class="row w-100 px-3">
   <div class="col-md-10 pt-3">
     <div class="progress">
       <div class="progress-bar w-50 strip">50%</div>
     </div>
   </div>
   <div class="col-md-2 pt-2">
     <button class="btn btn-danger">SUBMIT</button>
   </div>
</div>


</form>

</div>

</div>';
