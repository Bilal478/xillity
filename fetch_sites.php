<?
require("./global.php");

    $company_id = $_POST['companyId'];
    $query = "SELECT * FROM jeoXillityCrm_sites WHERE company_id = '$company_id'";
    $results = getall($con, $query);
    $output = '';
    foreach ($results as $row) {
        $output .= '<option value="' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['site_name']) . '</option>';
    }
    echo $output;

?>
