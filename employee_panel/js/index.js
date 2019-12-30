$(document).ready(function() {
  $(".stock-update-btn").click(function() {
    $(".stock-update-btn-menu").collapse("toggle");
  });
});

//dynamic request pages coding

$(document).ready(function() {
  var active_link = $(".active").attr("access-link");
  dynamic_request(active_link);
  $(".collapse-item").each(function() {
    $(this).click(function() {
      var request_link = $(this).attr("access-link");
      dynamic_request(request_link);
    });
  });
});
//Dynamic active page
$(document).ready(function() {
  $(".collapse-item").each(function() {
    $(this).click(function() {
      $(".collapse-item").removeClass("active");
      $(this).addClass("active");
    });
  });
});

function dynamic_request(request_link) {
  $.ajax({
    type: "POST",
    url: "dynamic_pages/" + request_link,
    xhr: function() {
      var request = new XMLHttpRequest();
      request.onprogress = function(e) {
        var percentage = Math.floor((e.loaded * 100) / e.total);
        var loader =
          '<center><button class="btn btn-danger" style="font-size:30px;"><i class="fa fa-circle-o-notch fa-spin"></i> Loading ' +
          percentage +
          "%</button></center>";
        $(".page").html(loader);
      };
      return request;
    },
    beforeSend: function() {
      var loader =
        '<center><button class="btn btn-danger" style="font-size:30px;"><i class="fa fa-circle-o-notch fa-spin"></i></button></center>';
      $(".page").html(loader);
    },
    success: function(response) {
      $(".page").html(response);

      //create products
      $(".create-products-form").submit(function(e) {
        e.preventDefault();
        if ($(".brands-name").val() != "Choose brands") {
          $.ajax({
            type: "POST",
            url: "php/create_products.php",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            xhr: function() {
              var request = new XMLHttpRequest();
              request.upload.onprogress = function(e) {
                var percentage = Math.floor((e.loaded * 100) / e.total);
                $(".create_product_progress .progress-bar").css({
                  width: percentage + "%"
                });
                $(".create_product_progress .progress-bar").html(
                  percentage + "%"
                );
              };
              return request;
            },
            beforeSend: function() {
              $(".create_product_progress").removeClass("d-none");
            },
            success: function(response) {
              if (response.trim() == "Successfully update data in database.") {
                $(".create_product_progress").addClass("d-none");
                $(".create_product_progress .progress-bar").css({width:'0%'});
                $(".create-products-form").trigger('reset');
              } else {
                alert(response);
              }
            }
          });
        } else {
          alert("Please select any brands");
        }
      });

      if (request_link == "create_category_design.php") category_list();

      $(".add-field-btn").click(function() {
        var placeholder = $(".input:first").attr("placeholder");
        var input = document.createElement("INPUT");
        input.type = "text";
        input.className = "form-control input mb-3 border-0";
        input.required = "required";
        input.placeholder = placeholder;
        input.style.backgroundColor = "#F9F9F9";
        $(".add-field-area").append(input);
      });

      $(".create-btn").click(function(e) {
        e.preventDefault();
        var input = [];
        var input_length = $(".input").length;
        var i;
        for (i = 0; i < input_length; i++) {
          input[i] = document.getElementsByClassName("input")[i].value;
        }
        var object = JSON.stringify(input);

        $.ajax({
          type: "POST",
          url: "php/create_category.php",
          cache: false,
          data: {
            json_data: object
          },
          beforeSend: function() {
            $(".create_category_loader").removeClass("d-none");
          },
          success: function(response) {
            $(".create_category_loader").addClass("d-none");
            if (response.trim() == "done") {
              category_list();
              var notice = document.createElement("DIV");
              notice.className = "alert alert-success";
              notice.innerHTML = "<b>Success !</b>";
              $(".create_category_notice").html(notice);
              setTimeout(function() {
                $(".create_category_notice").html("");
                $(".create_category_form").trigger("reset");
              }, 3000);
            } else {
              var notice = document.createElement("DIV");
              notice.className = "alert alert-warning";
              notice.innerHTML = "<b>" + response + "!</b>";
              $(".create_category_notice").html(notice);
              setTimeout(function() {
                $(".create_category_notice").html("");
                $(".create_category_form").trigger("reset");
              }, 3000);
            }
          }
        });
      });
      //add brand field
      $(".add-brand-btn").click(function() {
        var placeholder = $(".brand-input:first").attr("placeholder");
        var input = document.createElement("INPUT");
        input.type = "text";
        input.className = "form-control brand-input mb-3 border-0";
        input.required = "required";
        input.placeholder = placeholder;
        input.style.backgroundColor = "#F9F9F9";
        $(".brand-field-area").append(input);
      });
      //create brands
      $(".create-brand-btn").click(function(e) {
        e.preventDefault();
        var category = $(".brand-category").val();
        if (category == "Choose category") {
          var notice = document.createElement("DIV");
          notice.className = "alert alert-warning";
          notice.innerHTML = "<b>Please select any category!</b>";
          $(".create-brand-notice").html(notice);
          setTimeout(function() {
            $(".create-brand-notice").html("");
          }, 3000);
        } else {
          var input = [];
          var input_length = $(".brand-input").length;
          var i;
          for (i = 0; i < input_length; i++) {
            input[i] = document.getElementsByClassName("brand-input")[i].value;
          }
          var object = JSON.stringify(input);
          $.ajax({
            type: "POST",
            url: "php/create_brands.php",
            cache: false,
            data: {
              json_data: object,
              category: category
            },
            beforeSend: function() {
              $(".create_brand_loader").removeClass("d-none");
            },
            success: function(response) {
              $(".create_brand_loader").addClass("d-none");
              if (response.trim() == "done") {
                //function is call here
                var notice = document.createElement("DIV");
                notice.className = "alert alert-success";
                notice.innerHTML = "<b>Success !</b>";
                $(".create-brand-notice").html(notice);
                setTimeout(function() {
                  $(".create-brand-notice").html("");
                  $(".create_brand_form").trigger("reset");
                }, 3000);
              } else {
                var notice = document.createElement("DIV");
                notice.className = "alert alert-warning";
                notice.innerHTML = "<b>" + response + "!</b>";
                $(".create-brand-notice").html(notice);
                setTimeout(function() {
                  $(".create-brand-notice").html("");
                  $(".create_brand_form").trigger("reset");
                }, 3000);
              }
            }
          });
        }
      });
      //display brands

      $(document).ready(function() {
        $(".display-brand").on("change", function() {
          var selected_cat_name = $(this).val();
          var all_option = $(this)
            .html()
            .replace("<option>Choose category</option>")
            .replace("<option>" + selected_cat_name + "</option>");
          $.ajax({
            type: "POST",
            url: "php/display_brands.php",
            data: {
              category_name: selected_cat_name
            },
            beforeSend: function() {
              $(".display_brand_loader").removeClass("d-none");
            },
            success: function(response) {
              if (
                response.trim() !=
                "<b>No brands has been created yet in this category</b>"
              ) {
                var table = document.createElement("TABLE");
                table.width = "100%";
                table.border = "1";
                table.className = "text-center";
                var top_tr = document.createElement("TR");

                var th_cat = document.createElement("TH");
                th_cat.height = "40";
                th_cat.innerHTML = "CATEGORY";
                th_cat.className = "bg-danger text-light";

                var th_brands = document.createElement("TH");
                th_brands.height = "40";
                th_brands.innerHTML = "BRANDS";
                th_brands.className = "bg-danger text-light";

                var th_edit = document.createElement("TH");
                th_edit.height = "40";
                th_edit.innerHTML = "EDIT";
                th_edit.className = "bg-danger text-light";

                var th_delete = document.createElement("TH");
                th_delete.height = "40";
                th_delete.innerHTML = "DELETE";
                th_delete.className = "bg-danger text-light";

                top_tr.append(th_cat);
                top_tr.append(th_brands);
                top_tr.append(th_edit);
                top_tr.append(th_delete);

                table.appendChild(top_tr);
                //$(".brands_display_area").html(table);
                $(".display_brand_loader").addClass("d-none");
                var brand_list = JSON.parse(response);
                var i;
                for (i = 0; i < brand_list.length; i++) {
                  var tr = document.createElement("TR");
                  var td_cat = document.createElement("TD");
                  var td_brands = document.createElement("TD");

                  td_cat.innerHTML =
                    "<select disabled='disabled' class='w-75 border p-2 dynamic-c-name'><option>" +
                    brand_list[i].category_name +
                    "</option>" +
                    all_option +
                    "</select>";
                  td_brands.innerHTML = brand_list[i].brands;

                  var td_edit = document.createElement("TD");
                  td_edit.innerHTML =
                    "<i class='fa fa-edit brand-edit' b-name='" +
                    brand_list[i].brands +
                    "' c-name='" +
                    brand_list[i].category_name +
                    "'></i><i class='fa fa-save d-none brand-save'></i>";

                  var td_trash = document.createElement("TD");
                  td_trash.innerHTML =
                    "<i class='fa fa-trash brand-delete' b-name='" +
                    brand_list[i].brands +
                    "' c-name='" +
                    brand_list[i].category_name +
                    "'></i>";

                  tr.appendChild(td_cat);
                  tr.appendChild(td_brands);
                  tr.append(td_edit);
                  tr.append(td_trash);
                  table.appendChild(tr);
                  $(".brands_display_area").html(table);

                  //delete brand

                  $(".brand-delete").each(function() {
                    $(this).click(function() {
                      var row = this.parentElement.parentElement;
                      var c_name = $(this).attr("c-name");
                      var b_name = $(this).attr("b-name");

                      $.ajax({
                        type: "POST",
                        url: "php/delete_brands.php",
                        data: {
                          c_name: c_name,
                          b_name: b_name
                        },
                        beforeSend: function() {
                          $(".display_brand_loader").removeClass("d-none");
                        },
                        success: function(response) {
                          if (response.trim() == "Done") {
                            $(".display_brand_loader").addClass("d-none");
                            row.remove();
                          } else {
                            $(".display_brand_loader").addClass("d-none");
                            alert(response);
                          }
                        }
                      });
                    });
                  });

                  //edit brands
                  $(".brand-edit").each(function() {
                    $(this).click(function() {
                      $(this).addClass("d-none");

                      var c_name = $(this).attr("c-name");
                      var b_name = $(this).attr("b-name");

                      var row = this.parentElement.parentElement;
                      var td = row.getElementsByTagName("TD");
                      var selected_tag = td[0].getElementsByClassName(
                        "dynamic-c-name"
                      )[0];
                      selected_tag.disabled = false;

                      td[1].contentEditable = true;
                      td[1].focus();

                      var save_icon = td[2].getElementsByClassName(
                        "brand-save"
                      )[0];
                      var edit_icon = td[2].getElementsByClassName(
                        "brand-edit"
                      )[0];
                      var delete_icon = td[3].getElementsByClassName(
                        "brand-delete"
                      )[0];
                      $(save_icon).removeClass("d-none");

                      save_icon.onclick = function() {
                        $.ajax({
                          type: "POST",
                          url: "php/edit_brand.php",
                          data: {
                            previous_c_name: c_name,
                            previous_b_name: b_name,
                            c_name: selected_tag.value,
                            b_name: td[1].innerHTML
                          },
                          beforeSend: function() {
                            //$(".display_brand_loader").removeClass("d-none");
                          },
                          success: function(response) {
                            if (response.trim() == "Success") {
                              $(edit_icon).removeClass("d-none");
                              $(save_icon).addClass("d-none");

                              selected_tag.disabled = true;
                              td[1].contentEditable = false;

                              $(edit_icon).attr("c_name", selected_tag.value);
                              $(edit_icon).attr("b_name", td[1].innerHTML);

                              $(delete_icon).attr("c_name", selected_tag.value);
                              $(delete_icon).attr("b_name", td[1].innerHTML);

                              //$(".display_brand_loader").addClass("d-none");
                            } else {
                              alert(response);
                              $(".display_brand_loader").addClass("d-none");
                            }
                          }
                        });
                      };
                    });
                  });
                }
              } else {
                $(".brands_display_area").html(
                  "<b>No brands has been created yet in this category</b>"
                );
              }
            }
          });
        });
      });
    }
  });
}

//category list request
$(document).ready(function() {
  category_list();
});

function category_list() {
  $.ajax({
    type: "POST",
    url: "php/create_category_list.php",
    cache: false,
    success: function(response) {
      var category_list = JSON.parse(response);
      var i;
      for (i = 0; i < category_list.length; i++) {
        var id = category_list[i].id;
        var name = category_list[i].category_name;

        var ul = document.createElement("UL");
        ul.className = "list-group";

        var li = document.createElement("LI");
        li.className = "list-group-item mb-3 border-0";
        ul.append(li);

        var div = document.createElement("DIV");
        div.className = "btn-group";
        li.append(div);

        var id_btn = document.createElement("BUTTON");
        id_btn.innerHTML = id;
        id_btn.className = "btn btn-danger id";
        div.append(id_btn);

        var name_btn = document.createElement("BUTTON");
        name_btn.innerHTML = name;
        name_btn.className = "btn btn-dark name";
        div.append(name_btn);

        var edit_btn = document.createElement("BUTTON");
        edit_btn.innerHTML =
          "<i class='fa fa-edit edit-icon'></i> <i class='fa fa-save save-icon d-none'></i>";
        edit_btn.className = "btn btn-info";
        div.append(edit_btn);

        var delete_btn = document.createElement("BUTTON");
        delete_btn.innerHTML = "<i class='fa fa-trash delete-icon'></i>";
        delete_btn.className = "btn btn-danger";
        div.append(delete_btn);

        $(".category-area").append(ul);

        //edit category name
        edit_btn.onclick = function() {
          var parent = this.parentElement;
          var id = parent.getElementsByClassName("id")[0];
          var cat_name = parent.getElementsByClassName("name")[0];
          var save_icon = parent.getElementsByClassName("save-icon")[0];
          var edit_icon = parent.getElementsByClassName("edit-icon")[0];
          cat_name.contentEditable = true;
          cat_name.focus();
          $(edit_icon).addClass("d-none");
          $(save_icon).removeClass("d-none");

          $(save_icon).click(function() {
            var change_name = cat_name.innerHTML;
            $.ajax({
              type: "POST",
              url: "php/edit_category_name.php",
              data: {
                id: id.innerHTML,
                changed_name: change_name
              },
              cache: false,
              success: function(response) {
                if (response.trim() == "success") {
                  $(save_icon).addClass("d-none");
                  $(edit_icon).removeClass("d-none");
                  cat_name.contentEditable = false;
                } else {
                  alert(response);
                }
              }
            });
          });
        };
        //delete category
        delete_btn.onclick = function() {
          var parent = this.parentElement;
          var id = parent.getElementsByClassName("id")[0].innerHTML.trim();
          $.ajax({
            type: "POST",
            url: "php/delete_category_name.php",
            data: {
              id: id
            },
            cache: false,
            success: function(response) {
              if (response.trim() == "success") {
                parent.parentElement.parentElement.remove();
              } else {
                alert(response);
              }
            }
          });
        };
      }
    }
  });
}
