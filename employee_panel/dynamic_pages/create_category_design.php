<?php

echo '<div class="row animated fadeIn">
        <div class="col-md-4 bg-white py-2 rounded shadow-sm">
            <h5 class="my-3">CREATE CATEGORY
                <i class="create_category_loader fa fa-circle-o-notch close d-none fa-spin"></i>
            </h5>
            <form class="create_category_form">
                <input type="text" class="input form-control mb-3" placeholder="Mobiles"
                    style="border:none;background-color:#F9F9F9" required="required">
                <div class="add-field-area"></div>
                <button type="button" class="add-field-btn btn btn-primary mb-3">
                    <i class="fa fa-plus"></i>
                    Add field
                </button>
                <button type="submit" class="create-btn btn btn-danger mb-3">
                Create
                </button>
                <div class="create_category_notice my-3">
               
                </div>
            </form>

        </div>
        <div class="col-md-2"></div>
        <div class="col-md-6 bg-white py-2 rounded shadow-sm">
            <h5 class="my-3">CREATE LIST</h5>
            <hr>
            <div class="category-area" style="height:400px;overflow:auto;">

            </div>
        </div>
    </div>';
