<?php

require "../model/Category.php";

$cat = new Category();

switch ($_REQUEST["operator"]) {

    case "list_categories":
        $data = $cat->GetListCategories();

        if ($data) {
            for ($i=0; $i < count($data); $i++) { 
                $list[] = array(
                    "ac" => ($data)[$i]['status_c'] == 1 ? 
                                '<div class="btn-group">
                                    <button class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="icon-gear"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#edit_category" 
                                        onclick="GetCategoryById('.$data[$i]['id_category'].",'edit'".');">
                                        <i class="icon-edit"></i> Edit</a>
                                        <a class="dropdown-item" 
                                        onclick="GetCategoryById('.$data[$i]['id_category'].",'disable'".');">
                                        <i class="icon-cross"></i> Disable</a>
                                    </div>
                                </div>'
                            :'<div class="btn-group">
                                <button class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="icon-gear"></i>
                                </button>
                                <div class="dropdown-menu">                                   
                                    <a class="dropdown-item" 
                                    onclick="GetCategoryById('.$data[$i]['id_category'].",'enable'".');">
                                    <i class="icon-check"></i> Enable</a>
                                </div>
                            </div>',
                    "id" => $data[$i]['id_category'],
                    "name" => $data[$i]['name_c'],
                    "description" => $data[$i]['description_c'],
                    "status" => ($data[$i]['status_c'] == 1)?'<div class="tag tag-success">Enabled</div>':
                        '<div class="tag tag-danger">Disabled</div>'
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

    case "get_category_by_id":
        if (isset($_POST["id_category"]) && !empty($_POST["id_category"])) {
            $data = $cat->GetCategoryById($_POST["id_category"]);
            
            if ($data) {
                $list[] = array(
                    "id" => $data['id_category'],
                    "name" => $data['name_c'],
                    "description" => $data['description_c']                                        
                );

                echo json_encode($list);
            }
        }
    break;

    case "update_category":
        if (isset($_POST["name_c"], $_POST["description_c"], $_POST["id_category"]) 
        && !empty($_POST["name_c"]) && !empty($_POST["description_c"]) && !empty($_POST["id_category"])) {
            $id_category = $_POST["id_category"];
            $name = $_POST["name_c"];
            $description = $_POST["description_c"];
            
            if ($cat->UpdateCategory($id_category, $name, $description)) {
                $response = "success";
            }else {
                $response = "error";
            }
        }else {
            $response = "required";
        }
        
        echo $response;
    break;

    case "disable_category":
        if (isset($_POST["id_category"]) && !empty($_POST["id_category"])) {
            if ($cat->DisableCategory($_POST["id_category"])) {
                $response = "success";
            }else {
                $response = "error";
            }
        }else {
            $response = "error";
        }

        echo $response;
    break;

    case "enable_category":
        if (isset($_POST["id_category"]) && !empty($_POST["id_category"])) {
            if ($cat->EnableCategory($_POST["id_category"])) {
                $response = "success";
            }else {
                $response = "error";
            }
        }else {
            $response = "error";
        }

        echo $response;
    break;

    case "list_categories_select":
        $data = $cat->GetListCategoriesSelect();
        if ($data) {
            for ($i=0; $i < count($data); $i++) { 
                $list[] = array(
                    "0" => $data[$i]['id_category'],
                    "1" => $data[$i]['name_c']
                );
            }

            echo json_encode($list);
        }        
    break;
}

?>