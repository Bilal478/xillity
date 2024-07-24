<?
//for atts in diff table, use blueDrop
$filename_exported = "";
if(isset($_GET['export'])){
    global $filename_exported;
    $id = rand();
    $filename_exported = './uploads/exported_data_'.$id.'.csv';
    $f_log = fopen($filename_exported, 'w');

    if($table=="user"){
       
    }else{
        $not_columns = array("created_at");
        $query  = "SELECT * FROM ".$g_projectSlug."_crud";
    }
    
    //adding header
    $log = [];
    $results = getAll($con, "$query limit 1");
    foreach($results as $row){
        foreach($row as $i=>$r){
            if(!in_array($i, $not_columns)){
                $log[] = $i;
            }
        }                                        
    }
    fputcsv($f_log, ($log), ",");
    
    //adding body
    $results = getAll($con, "$query limit 1");
    foreach($results as $row){
        $log = [];
        foreach($row as $i=>$r){
            if(!in_array($i, $not_columns)){
                $log[] = $r;
            }
        }  
        fputcsv($f_log, ($log), ",");
    }
    
}


function storeUsingExcelFile($con,$fileForImport){
    global $g_projectSlug;
    $message = "";
    $import_columns = ["name", "email","phone","address"];
    $import_columns = array_values($import_columns);
    $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
    if(in_array($fileForImport["type"],$allowedFileType)){
        $targetPath = './uploads/'.$fileForImport['name'];
        move_uploaded_file($fileForImport['tmp_name'], $targetPath);
        $Reader = new SpreadsheetReader($targetPath);
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            $Reader->ChangeSheet($i);
            foreach ($Reader as $Row)
            {
                $queryExtra = "";
                foreach($import_columns as  $i => $colname){
                    
                    if($colname=="password"){
                        $val =mb_htmlentities( md5(md5(sha1($Row[$i])).'Anomoz')); 
                    }else{
                        $val = mb_htmlentities($Row[$i]);
                    }
                    $queryExtra.= ", $colname='".$val."' ";
                }
                /*
                if(isset($Row[0])) {
                    $name = mysqli_real_escape_string($con,$Row[0]);
                }
                */
                $timeAdded = time(); 
                if (!empty($Row[0])) {
                    $id = generateRandomString();
                    $session_userId = generateRandomString();
                    $time = time();
                    $query = "insert into ".$g_projectSlug."_".$table_name." set id='$id' $queryExtra,  timeAdded='$timeAdded', role='customer'; ";
                    $result = mysqli_query($con, $query);
                    if (! empty($result)) {
                        $type = "success";
                        $message .= "Record added. <br>";
                    } else {
                        $type = "error";
                        $message .= "Problem in Importing Excel Data: ".$con->error."<br>";
                        $message .= "$query"."<br>";
                        
                    }
                }
            }
        }
    }
    else{ 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
    }
    return json_encode(['type'=>$type,'msg'=>$message]);
}

function storeUsingExcelFile_planes($con,$fileForImport){
    $message = "";
    $table_name = "planes";
    global $g_projectSlug;
    $import_columns = ["name", "email","phone","address"];
    $import_columns = array_values($import_columns);
    $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
    if(in_array($fileForImport["type"],$allowedFileType)){
        $targetPath = './uploads/'.$fileForImport['name'];
        move_uploaded_file($fileForImport['tmp_name'], $targetPath);
        $Reader = new SpreadsheetReader($targetPath);
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            $Reader->ChangeSheet($i);
            foreach ($Reader as $Row)
            {
                $queryExtra = "";
                foreach($import_columns as  $i => $colname){
                    
                    if($colname=="password"){
                        $val =mb_htmlentities( md5(md5(sha1($Row[$i])).'Anomoz')); 
                    }else{
                        $val = mb_htmlentities($Row[$i]);
                    }
                    $queryExtra.= ", $colname='".$val."' ";
                }
                $timeAdded = time();
                
                if (!empty($Row[0])) {
                    $id = generateRandomString();
                    $session_userId = generateRandomString();
                    $time = time();
                    $query = "insert into ".$g_projectSlug."_".$table_name." set id='$id' $queryExtra,  timeAdded='$timeAdded'; ";
                    $result = mysqli_query($con, $query);
                    if (! empty($result)) {
                        $type = "success";
                        $message .= "Record added. <br>";
                    } else {
                        $type = "error";
                        $message .= "Problem in Importing Excel Data: ".$con->error."<br>";
                        $message .= "$query"."<br>";
                        
                    }
                }
            }
        }
    }else{ 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
    }
    return (['type'=>$type,'msg'=>$message]);
}


if(!empty($_FILES['import_excel_file']['name'])){
    $fileForImport = $_FILES['import_excel_file'];
    
    if($g_filename=="customers.php"){
        $m = storeUsingExcelFile($con,$fileForImport);
    }
    if($g_filename=="planes.php"){
        $m = storeUsingExcelFile_planes($con,$fileForImport);
    }
    header("Location: ?m=".$m['msg']);
}
    
  
function renderImportExportButtons(){
    global $g_modules_global, $primaryTableName, $g_filename;
    
    $enable_import_export_pages = ["planes.php"];
    if(in_array($g_filename, $enable_import_export_pages)){
        if($g_modules_global['enableImport'] || $g_modules_global['enableExport']){
            ?>
            <div class="d-inline-block dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                    </span>
                    <?if($g_modules_global['enableImport']){echo "Import ";}?>
                    <?if($g_modules_global['enableExport']){echo "Export ";}?>
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right" style="">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <?if($g_modules_global['enableImport']){?>
                                <a  href="#" class="nav-link" data-toggle="modal" data-target="#bulk_import_modal" class="nav-link">
                                    <span> Import </span>
                                </a>
                            <?}if($g_modules_global['enableExport']){?>
                                <a href="./home.php?export=1" class="nav-link">
                                    <span> Export </span>
                                </a>
                            <?}?>
                        </li>
                      
                    </ul>
                </div>
            </div>
            <?
        }
    }
}
?>