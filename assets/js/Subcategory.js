var table;

init();

// Function executed at startup
function init() {
    FillTableSubcategories();    
}

$('#btn_new_subcategory').on("click", function() {
    GetListCategoriesSelect();
});

//============================ LIST ================================
// Function to Get List subcategories
function FillTableSubcategories() {
    table = $('#table_subcategory').DataTable({
        pageLength: 10,
        responsive: true,
        processing: true,
        ajax: "../controller/SubcategoryController.php?operator=list_subcategories",
        columns: [
            { data : 'ac'},
            { data : 'id'},
            { data : 'name'},
            { data : 'category'},
            { data : 'status'},
        ]
    });
}

// Function to Get List subcategories select
function GetListCategoriesSelect() {
    $.ajax({        
        url:'../controller/CategoryController.php?operator=list_categories_select',
        type:'GET',
        beforeSend:function(){},
        success:function(response){
            data = $.parseJSON(response);
            if (data.length > 0) {
                select = "<option>SELECT A CATEGORY...</option>";
                $.each(data, function(key, value){
                    select = select + "<option value=" + value[0] +">" + value[1] + "</option>"
                })
                $('#corresponding_category').html(select);
            }
        }
    });  
}
//==================================================================   

//============================ CREATE ================================
// Function to new category
function NewSubcategory() {
    cName = $('#subcategory_name').val();
    cIdCategory = $('#corresponding_category').val();

    parameters = {
        "name_sc":cName, "id_category":cIdCategory
    }

    $.ajax({
        data:parameters,
        url:'../controller/SubcategoryController.php?operator=new_subcategory',
        type:'POST',
        beforeSend:function(){},
        success:function(response){
            if (response == "success") {
                table.ajax.reload();
                $('#create_subcategory').modal('hide');
                toastr.success("The subcategory has been added successfully", "Subcategory created successfully");
            }else if (response == "required") {
                toastr.warning("Fill in the fields", "Required");
            }else{
                toastr.danger("Please, refresh the page and fill in the fields", "Error");
            }
        }
    });    
}
//==================================================================   


//============================ EDIT ================================
// Function to Get Subcategory by ID
function GetSubcategoryById(id_subcategory, op) {
    $.ajax({
        data: { "id_subcategory" : id_subcategory},
        url:'../controller/SubcategoryController.php?operator=get_subcategory_by_id',
        type:'POST',
        beforeSend:function(){},
        success:function(response){
            console.log(response);
            // data = $.parseJSON(response);

            // if (data.length > 0) {
            //     if (op == "edit") {
            //         $('#edit_subcategory_id').val(data[0]['id']);
            //         $('#edit_subcategory_name').val(data[0]['name']);
            //         GetListCategoriesSelectEdit(data[0]['id_subcategory']);
            //     }else if (op == "disable") {                
            //         AlertDisableCategory(data[0]['id'], data[0]['name']);
            //     }else if (op == "enable") {
            //         AlertEnableCategory(data[0]['id'], data[0]['name']);
            //     }                
            // }           
        }
    });    
}

// Function to Get List subcategories select to edit
// function GetListCategoriesSelectEdit(id_subcategory) {
//     $.ajax({
//         data: {"id_subcategory": id_subcategory},
//         url:'../controller/CategoryController.php?operator=list_categories_select_edit',
//         type:'POST',
//         beforeSend:function(){},
//         success:function(response){
//             data = $.parseJSON(response);
//             if (data.length > 0) {
//                 select = "";
//                 $.each(data, function(key, value){
//                     select = select + "<option value=" + value[0] +">" + value[1] + "</option>"
//                 })
//                 $('#edit_corresponding_category').html(select);
//             }
//         }
//     });  
// }
//==================================================================   

/*
// Function to Clean Form of Login
function CleanController() {
    $("#category-name").val("");
    $("#category-description").val("");
}

// Function to save the changes of editing a category
function UpdateCategory() {    
    idCategory = $('#edit_category_id').val();
    cName = $('#edit_category_name').val();
    cDescription = $('#edit_category_description').val();

    parameters = {
       "id_category":idCategory, "name_c":cName, "description_c":cDescription
    }

    $.ajax({
        data:parameters,
        url:'../controller/CategoryController.php?operator=update_category',
        type:'POST',
        beforeSend:function(){},
        success:function(response){            
            if (response == "success") {
                table.ajax.reload();                
                $('#edit_category').modal('hide');
                toastr.success("The data has been saved successfully", "Category edited successfully");
            }else if (response == "required") {
                toastr.warning("Fill in the fields", "Required");
            }else{
                toastr.danger("Please, refresh the page and fill in the fields", "Error");
            }
        }
    });  
}

// Function to Disable category
function DisableCategory(id_category, category_name) {
    $.ajax({
        data: {"id_category" : id_category},
        url: '../controller/CategoryController.php?operator=disable_category',
        type:'POST',
        beforeSend:function(){},
        success:function(response){            
            if (response == "success") {
                table.ajax.reload();
                Swal.fire({
                    title: 'Disabled!',
                    html: "The category: <h5>" + category_name + "</h5> has been disabled.",
                    icon: 'success'
                });
            }else{
                toastr.danger("Please, contact admin", "Error");
            }
        }
    });
}

// Function to Alert Disable category
function AlertDisableCategory(id_category, category_name) {
    Swal.fire({
        title: 'Are you sure?',
        html: "Do you want to disable the category: <h5>" + category_name + "?</h5>",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, disable it!'
    }).then((result) => {
        if (result.value) {
            DisableCategory(id_category, category_name);
        }
    })
}

// Function to Enable category
function EnableCategory(id_category, category_name) {
    $.ajax({
        data: {"id_category" : id_category},
        url: '../controller/CategoryController.php?operator=enable_category',
        type:'POST',
        beforeSend:function(){},
        success:function(response){            
            if (response == "success") {
                table.ajax.reload();
                Swal.fire({
                    title: 'Enabled!',
                    html: "The category: <h5>" + category_name + "</h5> has been enabled.",
                    icon: 'success'
                });
            }else{
                toastr.danger("Please, contact admin", "Error");
            }
        }
    });
}

// Function to Alert Enable category
function AlertEnableCategory(id_category, category_name) {
    Swal.fire({
        title: 'Are you sure?',
        html: "Do you want to enable the category: <h5>" + category_name + "?</h5>",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, enable it!'
    }).then((result) => {
        if (result.value) {
            EnableCategory(id_category, category_name);
        }
    })
}
 */