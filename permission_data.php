<?php
include('./global.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

switch ($_REQUEST['type']) {
    case 'add_right':
        $details = $_POST['detail'];
        $userId = $_POST['userId'];
        $stmt1 = $con->prepare("DELETE FROM " . $g_projectSlug . "_module where userId =?");
        $stmt1->bind_param("s", $userId);
        if (!$stmt1->execute()) {
            echo "err";
        }


        foreach ($details as $value) {
            $modeules   =  $value["modules"];
            $view       =  $value["view"];
            $insert     =  $value["insert"];
            $update     =  $value["update"];
            $delete     =  $value["delete"];

            echo $delete . "" . $update . "" . $insert . "" . $view . "", $modeules;
            echo "<pre>";
            echo $sql = "INSERT INTO " . $g_projectSlug . "_module set module_name = '$modeules', view='$view' ,inserts='$insert' , updates='$update',deletes ='$delete', userId = '$userId' ";
            echo "</pre>";
            $stmt2 = $con->prepare($sql);
            if (!$stmt2) {
                echo "err: <code>$query</code>";
            }
            if (!$stmt2->execute()) {
                echo "err: <code>$query</code>";
            }
        }

        return;
        break;

    case 'get_rights':

        $user = $_REQUEST['user'];
        $Qry = "SELECT * FROM smsCampaigner_module where userId='" . $user . "'";
        $data =  getAll($con, $Qry);
        $respons = '';
        $i = 0;

        foreach ($data as $value) {
            $i++;
            $check = "";

            $checkview = "";
            $checkinsert = "";
            $checkupdate = "";
            $checkdelete = "";
            if ($value['view'] == "Y") {
                $checkview = "checked";
            }

            if ($value['inserts'] == "Y") {
                $checkinsert = "checked";
            }

            if ($value['updates'] == "Y") {
                $checkupdate = "checked";
            }

            if ($value['deletes'] == "Y") {
                $checkdelete = "checked";
            }


            $respons .= '<tr>
      <th scope="row">
        
         

       ' . $i . '
      </th>
      <td>' . $value['module_name'] . '</td>
      <td><input type="checkbox" value = "' . $value['view'] . '" onclick = "add_value(this)" aria-label="Checkbox for following text input" ' . $checkview . ' ></td>
      <td><input type="checkbox" value = "' . $value['inserts'] . '" onclick = "add_value(this)"  aria-label="Checkbox for following text input" ' . $checkinsert . ' ></td>
      <td><input type="checkbox" value = "' . $value['updates'] . '" onclick = "add_value(this)"  aria-label="Checkbox for following text input" ' . $checkupdate . ' ></td>
      <td><input type="checkbox" value = "' . $value['deletes'] . '" onclick = "add_value(this)"  aria-label="Checkbox for following text input" ' . $checkdelete . ' ></td>
    </tr>';
        }
        echo  $respons;
        return;
        break;
}
