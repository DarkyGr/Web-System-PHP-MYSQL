var table;

init();

// Function executed at startup
function init() {
    FillTableCategories();
}

// Function for Get List categories
function FillTableCategories() {
    table = $('#table_category').DataTable({
        pageLength: 10,
        responsive: true,
        processing: true,
        ajax: "../controller/CategoryController.php?operator=list_categories",
        columns: [
            { data : 'ac'},
            { data : 'id'},
            { data : 'name'},
            { data : 'description'},
            { data : 'status'},
        ]
    });
}

// Function for new category
function NewCategory() {
    cName = $('#category_name').val();
    cDescription = $('#category_description').val();

    parameters = {
        "name_c":cName, "description_c":cDescription
    }

    $.ajax({
        data:parameters,
        url:'../controller/CategoryController.php?operator=new_category',
        type:'POST',
        beforeSend:function(){},
        success:function(response){
            if (response == "success") {
                table.ajax.reload();
                CleanController();
                $('#create_category').modal('hide');
                toastr.success("The category has been added successfully", "Category created successfully");
            }else if (response == "required") {
                toastr.warning("Fill in the fields", "Required");
            }else{
                toastr.danger("Please, refresh the page and fill in the fields", "Error");
            }
        }
    });    
}

// Function for Clean Form of Login
function CleanController() {
    $("#category-name").val("");
    $("#category-description").val("");
}

// Function for Get Category by ID
function GetCategoryById(id_category) {
    $.ajax({
        data: { "id_category" : id_category},
        url:'../controller/CategoryController.php?operator=get_category_by_id',
        type:'POST',
        beforeSend:function(){},
        success:function(response){            
            data = $.parseJSON(response);

            if (data.length > 0) {
                $('#edit_category_id').val(data[0]['id']);
                $('#edit_category_name').val(data[0]['name']);
                $('#edit_category_description').val(data[0]['description']);
            }
        }
    });    
}

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