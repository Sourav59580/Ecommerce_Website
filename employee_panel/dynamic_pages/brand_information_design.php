<?php
echo '<div class="row animated fadeIn">
 <div class="col-md-2"></div>
 <div class="col-md-8 p-4 bg-white rounded-lg shadow-sm">
     <div>
         <form class="branding-form">
             <div class="from-group mb-3">
                 <label class="font-weight-bold" for="brand_name">Enter Brand Name <i class="fa fa-edit edit-btn" style="cursor:pointer;color:yellowgreen">Edit details</i></label>
                 <input type="text" name="brand-name" id="brand-name" class="form-control" placeholder="ecommerce website" />
             </div>
             <div class="from-group mb-3">
                 <label class="font-weight-bold" for="brand_logo">Upload brand logo</label>
                 <input type="file" name="brand-logo" class="form-control" id="brand-logo" />
                 <span style="color:red;" id="brand-logo-message"></span>
             </div>
             <div class="from-group mb-3">
                 <label class="font-weight-bold" for="domain_name">Enter domain name</label>
                 <input type="text" name="domain-name" id="domain-name" class="form-control" placeholder="www.abc.com" />
             </div>
             <div class="from-group mb-3">
                 <label class="font-weight-bold" for="email">Email</label>
                 <input type="email" name="email" id="email" class="form-control" placeholder="www.abc@gmail.com" />
             </div>
             <div class="from-group mb-3">
                 <label class="font-weight-bold" for="social_handels">Social handels</label>
                 <input type="text" name="facebook" id="facebook-url" class="form-control mb-3" placeholder="facebook page url" />
                 <input type="text" name="twitter" id="twitter-url" class="form-control" placeholder="twitter page url" />
             </div>
             <div class="from-group mb-3">
                 <label class="font-weight-bold" for="address">Address</label>
                 <textarea class="form-control" name="address" id="address"></textarea>
             </div>
             <div class="form-group mb-3">
                 <label class="font-weight-bold" for="phone">Phone</label>
                 <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone number" />
             </div>
             <div class="from-group mb-3">
                 <label class="font-weight-bold" for="about-us">About us <small class="about-us-count">0</small><small>/5000</small>
                 </label>
                 <textarea class="form-control" name="about-us" id="about" maxlength="5000" style="height:300px;"></textarea>
             </div>
             <div class="from-group mb-3">
                 <label class="font-weight-bold" for="privacy-policy">Privacy policy <small class="privacy-policy-count">0</small><small>/5000</small></label>
                 <textarea class="form-control" name="privacy-policy" id="privacy-policy" style="height:300px;" maxlength="5000"></textarea>
             </div>
             <div class="from-group mb-3">
                 <label class="font-weight-bold" for="cookies-policy">Cookies policy <small class="cookies-policy-count">0</small><small>/5000</small></label>
                 <textarea class="form-control" name="cookies-policy" style="height:300px;" id="cookies-policy" maxlength="5000"></textarea>
             </div>
             <div class="from-group mb-3">
                 <label class="font-weight-bold" for="terms-and-condition">Terms and Condition <small class="terms-and-condition-count">0</small><small>/5000</small></label>
                 <textarea class="form-control" name="terms-and-condition" style="height:300px;" id="terms-and-condition" maxlength="5000"></textarea>
             </div>
             <button class="btn btn-primary" type="submit">Submit Brand Information</button>
         </form>
     </div>
 </div>
 <div class="col-md-2"></div>
</div>';


?>