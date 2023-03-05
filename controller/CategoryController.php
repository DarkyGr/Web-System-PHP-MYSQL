<?php

require "../model/Category.php";

$cat = new Category();

switch ($_REQUEST["operator"]) {

    case "list_categories":
        $data = $cat->GetListCategories();

        if ($data) {
            for ($i=0; $i < count($data); $i++) { 
                $list[] = array(
                    "ac" => '<div class="btn-group">
                                <button class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="icon-gear"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"><i class="icon-edit"></i> Edit</a>
                                    <a class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                </div>
                            </div>',
                    "id" => $data[$i]['id_category'],
                    "name" => $data[$i]['name_c'],
                    "description" => $data[$i]['description_c'],
                    "status" => ($data[$i]['status_c'] == 1)?'<div class="tag tag-success">Active</div>':
                        '<div class="tag tag-danger">Inactive</div>'
                );
            }

            $results = array(
                "sEcho" => 1,
                "iTotalRecords" => count($list),
                "iTotalDisplayRecords" => count($list),
                "aaData" => $list
            );
        }

        echo json_encode($results);
    break;

    case "new_category":
        if (isset($_POST["name_c"], $_POST["description_c"]) && !empty($_POST["name_c"]) && !empty($_POST["description_c"])) {
            $name = $_POST["name_c"];
            $description = $_POST["description_c"];
            
            if ($cat->NewCategory($name, $description)) {
                $response = "success";
            }else {
                $response = "error";
            }
        }else {
            $response = "required";
        }
        
        echo $response;
    break;
}

?>