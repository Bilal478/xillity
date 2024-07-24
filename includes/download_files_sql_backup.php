<?require("../database.php");
//this file to be removed once development is complete and no new features or updates are needed on the software.

//function to take backup during development
if(isset($_GET['take_backup'])){
    ?><h3>Make sure to enable popup to download the sql backup.</h3><?
    
    if($_GET['take_backup']=="files" || $_GET['take_backup']=="both"){
        function url_to_filename($url) {
          // Remove any query string from the URL
          $url_parts = explode('?', $url);
          $path = $url_parts[0];
        
          // Get the last segment of the path (which should be the filename)
          $path_segments = explode('/', $path);
          $filename = end($path_segments);
        
          return $filename;
        }
        $randomString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz1234567890"), 0, 4);
        $backup_file = $g_projectSlug."-".date("d-m-Y").$randomString."_files.zip";
        $zip = new ZipArchive();
        if ($zip->open('../uploads/' . $backup_file, ZipArchive::CREATE) !== true) {
            die("Failed to create backup archive");
        }
        
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator("../", RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::LEAVES_ONLY,
            RecursiveIteratorIterator::CATCH_GET_CHILD // Ignore "Permission denied" errors
        );
        ?>
        <div>
        <?
        foreach ($iterator as $path => $file) {
            
            if ((strpos(basename($file->getRealPath()), '.php') !== false) || $_POST['assets_backup']=="Yes") {
                
                if (true) {
                    
                    $file_path = $file->getRealPath();
                    $relative_path = substr($file_path, strlen($directory));
    
                    // if (contains_word($relative_path, $forbidden_directories) == false){
                    if (strpos($relative_path, "/vendor/") === false && strpos($relative_path, "/vendorA/") === false && strpos($relative_path, "/Twilio/") === false && strpos($relative_path, "/assets/") === false){
                        $n_files_backed_up+=1;
                        if($n_files_backed_up%1000 == 0){
                            $message.= "Files backedup so far: $n_files_backed_up<br>";
                        }
                        
                        $file_name = url_to_filename($file_path);

                        if($_POST['assets_backup']!="Yes"){
                            $message.= "Adding: $relative_path<br>";
                        }
                        
                        // Add the file to the zip archive with the relative path
                        
                        $filename_zip = str_replace("/files/","",$relative_path);
                        $zip->addFile($file_path, $filename_zip);
                        
                    }
                }
            }
        }
        ?>
        </div>
        <script>
            window.open('../uploads/<?echo $backup_file?>', "_blank");
        </script>
        <?
        
        // header("Location: './file_downloads/' . $backup_file", true, 302);
    }
    
    
    if($_GET['take_backup']=="database" || $_GET['take_backup']=="both"){
            
        $tableFound = false;
        // Get the tables that were updated within the last 1 day
        $query = "SELECT TABLE_NAME, UPDATE_TIME FROM information_schema.tables WHERE TABLE_SCHEMA = '{$database_in_use}' AND TABLE_NAME like '%$g_projectSlug%'";
        $result = $con->query($query);
        
        $sqlFilename = "../uploads/".$g_projectSlug ."-".date("d-m-Y"). '.sql';
        $sqlFile = fopen($sqlFilename, 'w');
        
        // Loop through the tables and take a backup of each one
        while ($row = $result->fetch_array()) {
            $tableFound = true;
            $tableName = $row[0];
            $update_time = $row[1];
            // $backup_file = "./db_backups/" . $tableName . ".sql";
           
            $queryTable = "SHOW CREATE TABLE {$tableName}";
            $resultTable = $con->query($queryTable);
            $rowTable = $resultTable->fetch_assoc();
            $create_query = $rowTable["Create Table"];
        
            $sqlData = "SELECT * FROM $tableName";
            $resultData = $con->query($sqlData);
            
            fwrite($sqlFile, "\n\n". $create_query. ";\n\n");
        
            while ($row = $resultData->fetch_assoc()) {
                $insertStatement = "INSERT INTO $tableName VALUES (";
                $values = array();
                foreach ($row as $value) {
                    $values[] = "'" . $con->real_escape_string($value) . "'";
                }
                $insertStatement .= implode(", ", $values);
                $insertStatement .= ");\n";
                fwrite($sqlFile, $insertStatement);
            }
        }
        
        fclose($sqlFile);
        if($tableFound){
            ?>
            <script>
                window.open('<?echo $sqlFilename?>', "_blank");
            </script>
            
            <?
            // header("Location: $sqlFilename");
            // echo "SQL file generated successfully: $sqlFilename<br>";
        }else{
            echo "No tables found";
        }
    }
    
    ?>
    <a href="https://projects.anomoz.com/portal/download_project.php">https://projects.anomoz.com/portal/download_project.php</a>
    <?
    
        
    exit();
    
}?>