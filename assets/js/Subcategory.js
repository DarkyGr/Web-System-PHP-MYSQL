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
            data = $.parseJSON(response);
            if (data.length > 0) {
                if (op == "edit") {                    
                    $('#edit_subcategory_id').val(data[0]['id_subcategory']);
                    $('#edit_subcategory_name').val(data[0]['name']);
                    GetListCategoriesSelectEdit(data[0]['id_subcategory']);
                }    
            }        
        }
    });    
}

// Function to Get List subcategories select to edit
function GetListCategoriesSelectEdit(id_subcategory) {
    $.ajax({
        data: {"id_subcategory": id_subcategory},
        url:'../controller/CategoryController.php?operator=list_categories_select_edit',
        type:'POST',
        beforeSend:function(){},
        success:function(response){
            data = $.parseJSON(response);
            if (data.length > 0) {
                select = "";
                $.each(data, function(key, value){
                    select = select + "<option value=" + value[0] +">" + value[1] + "</option>"
                })
                $('#edit_corresponding_category').html(select);
            }
        }
    });  
}

// Function to save the changes of editing a category
function UpdateSubcategory() {    
    idSubcategory = $('#edit_subcategory_id').val();
    subName = $('#edit_subcategory_name').val();
    subIdCategory = $('#edit_corresponding_category').val();

    parameters = {
        "name_sc":subName, "id_category":subIdCategory, "id_subcategory":idSubcategory
    }

    $.ajax({
        data:parameters,
        url:'../controller/SubcategoryController.php?operator=update_subcategory',
        type:'POST',
        beforeSend:function(){},
        success:function(response){            
            if (response == "success") {
                table.ajax.reload();                
                $('#edit_subcategory').modal('hide');
                toastr.success("The data has been saved successfully", "Subcategory edited successfully");
            }else if (response == "required") {
                toastr.warning("Fill in the fields", "Required");
            }else{
                toastr.danger("Please, refresh the page and fill in the fields", "Error");
            }
        }
    });  
}
//==================================================================   

/*
// Function to Clean Form of Login
function CleanController() {
    $("#category-name").val("");
    $("#category-description").val("");
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