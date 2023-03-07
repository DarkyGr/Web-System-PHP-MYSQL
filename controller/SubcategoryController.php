<?php

require "../model/Subcategory.php";

$subcat = new Subcategory();

switch ($_REQUEST["operator"]) {

    case "list_subcategories":
        $data = $subcat->GetListSubcategories();

        if ($data) {
            for ($i=0; $i < count($data); $i++) { 
                $list[] = array(
                    "ac" => ($data)[$i]['status_sc'] == 1 ? 
                                '<div class="btn-group">
                                    <button class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="icon-gear"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#edit_category" 
                                        onclick="GetSubcategoryById('.$data[$i]['id_subcategory'].",'edit'".');">
                                        <i class="icon-edit"></i> Edit</a>
                                        <a class="dropdown-item" 
                                        onclick="GetSubcategoryById('.$data[$i]['id_subcategory'].",'disable'".');">
                                        <i class="icon-cross"></i> Disable</a>
                                    </div>
                                </div>'
                            :'<div class="btn-group">
                                <button class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="icon-gear"></i>
                                </button>
                                <div class="dropdown-menu">                                   
                                    <a class="dropdown-item" 
                                    onclick="GetSubcategoryById('.$data[$i]['id_subcategory'].",'enable'".');">
                                    <i class="icon-check"></i> Enable</a>
                                </div>
                            </div>',
                    "id" => $data[$i]['id_subcategory'],                    
                    "name" => $data[$i]['name_sc'],     
                    "category" => $data[$i]['category'],               
                    "status" => ($data[$i]['status_sc'] == 1)?'<div class="tag tag-success">Enabled</div>':
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

    /* 
    case "get_subcategory_by_id":
        if (isset($_POST["id_subcategory"]) && !empty($_POST["id_subcategory"])) {
            $data = $cat->GetCategoryById($_POST["id_subcategory"]);
            
            if ($data) {
                $list[] = array(
                    "id" => $data['id_subcategory'],
                    "id_category" => $data['id_category'],
                    "name" => $data['name_sc']                                        
                );

                echo json_encode($list);
            }
        }
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

    case "update_category":
        if (isset($_POST["name_c"], $_POST["description_c"], $_POST["id_subcategory"]) 
        && !empty($_POST["name_c"]) && !empty($_POST["description_c"]) && !empty($_POST["id_subcategory"])) {
            $id_subcategory = $_POST["id_subcategory"];
            $name = $_POST["name_c"];
            $description = $_POST["description_c"];
            
            if ($cat->UpdateCategory($id_subcategory, $name, $description)) {
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
        if (isset($_POST["id_subcategory"]) && !empty($_POST["id_subcategory"])) {
            if ($cat->DisableCategory($_POST["id_subcategory"])) {
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
        if (isset($_POST["id_subcategory"]) && !empty($_POST["id_subcategory"])) {
            if ($cat->EnableCategory($_POST["id_subcategory"])) {
                $response = "success";
            }else {
                $response = "error";
            }
        }else {
            $response = "error";
        }

        echo $response;
    break;
    */
}

?>