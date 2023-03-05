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
function SaveCategory() {
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
            console.log(response);
        }
    });    
}