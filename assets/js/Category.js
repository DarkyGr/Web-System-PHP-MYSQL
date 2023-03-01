var table;

init();

// Function executed at startup
function init() {
    FillTableCategories();
}

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