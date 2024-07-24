<? require("./global.php");

if (!isset($_GET['folderId'])) {
    header("Location: ?folderId=/");
}
$parentFolder = escape($_GET['folderId']);

$folder_info = getRow($con, "SELECT * FROM " . $g_projectSlug . "_folders WHERE id='$parentFolder'");

if (isset($_POST['create_folder_package'])) {
    $actionId = escape($_POST['actionId']);
    $folder = escape($_POST['folder_name']);
    $parentFolder = escape($_GET['folderId']);

    // Assuming you have a function to generate a unique ID like 'generateRandomString()'
    if (empty($actionId)) {
        $id = generateRandomString();
        $query = "INSERT INTO " . $g_projectSlug . "_folders (id, title, timeAdded, userId, parent_folder) VALUES ('$id', '$folder', NOW(), '$session_userId','$parentFolder')";
    } else {
        $query = "UPDATE " . $g_projectSlug . "_folders SET title='$folder',parent_folder='$parentFolder' WHERE id='$actionId'";
    }

    runQuery($query);



    header("Location:./file-manager.php?folderId=$parentFolder&m=Data was saved successfully!");
}

if (isset($_GET['delete-record'])) {
    $id = escape($_GET['delete-record']);
    $query = "delete from " . $g_projectSlug . "_folders where id='$id'";
    runQuery($query);

    // Specify the parent directory where the folder was deleted from.
    $parentDirectory = './uploads';

    // Delete the child folder within the parent folder
    $childDirectory = $parentDirectory . '/' . $folder;

    if (is_dir($childDirectory)) {
        rmdir($childDirectory);
    }
}


if (isset($_POST['uploadfile'])) {

    $timeAdded = time();
    $files = $_FILES['files'];
    foreach ($files['tmp_name'] as $index => $tmpName) {
        $fileName = $files['name'][$index];
        $fileType = $files['type'][$index];
        $fileSize = $files['size'][$index];
        $fileError = $files['error'][$index];

        if ($fileError === UPLOAD_ERR_OK) {
            $destination = './uploads/' . $fileName; // Set the destination path
            move_uploaded_file($tmpName, $destination); // Move the uploaded file to the destination

            // Insert file details into the database
            $id = generateRandomString();
            if ($fileName != "") {
                $stmt = $con->prepare("INSERT INTO " . $g_projectSlug . "_files set id='$id', file='$destination', file_size='$fileSize', folder='$parentFolder', timeAdded='$timeAdded', userId='$session_id'");
                if (!$stmt) {
                    echo "err: <code>$query</code>";
                }
                if (!$stmt->execute()) {
                    echo "err: <code>$query</code>";
                }
            }
        }
    }



    header("Location:./file-manager.php?folderId=$parentFolder&m=File Has Been Uploaded successfully!");
}

if (isset($_POST['updatefile'])) {
    $alternative_text = $_POST['file_alternative_text'];
    $title = $_POST['file_title'];
    $file_caption = $_POST['file_caption'];
    $file_description = $_POST['file_description'];
    $url = $_POST['file_url'];
    $actionId = $_POST['file_actionId'];

    $stmt = $con->prepare("UPDATE " . $g_projectSlug . "_files SET alternative_text='$alternative_text', title='$title', caption='$file_caption', description='$file_description', url='$url' WHERE id='$actionId'");
    if (!$stmt) {
        echo "err: <code>$query</code>";
    }
    if (!$stmt->execute()) {
        echo "err: <code>$query</code>";
    }

    header("Location:./file-manager.php?folderId=$parentFolder&m=File Has Been Updated successfully!");
}


$all_file_category = getRow($con, "SELECT
    SUM(CASE WHEN RIGHT(`file`, 4) IN ('.jpg', 'jpeg', '.png', '.gif', '.bmp') THEN file_size ELSE 0 END) AS pic_size,
    SUM(CASE WHEN RIGHT(`file`, 4) IN ('.mp4', '.flv', '.avi', '.mov', '.wmv') THEN file_size ELSE 0 END) AS video_size,
    SUM(CASE WHEN RIGHT(`file`, 4) IN ('.mp3', '.wav', '.aac', '.ogg', '.wma') THEN file_size ELSE 0 END) AS audio_size,
    SUM(CASE WHEN RIGHT(`file`, 4) NOT IN ('.jpg', 'jpeg', '.png', '.gif', '.bmp', '.mp4', '.flv', '.avi', '.mov', '.wmv', '.mp3', '.wav', '.aac', '.ogg', '.wma') THEN file_size ELSE 0 END) AS doc_size,
    SUM(file_size) as all_files_size
FROM
" . $g_projectSlug . "_files WHERE userId='$session_id';");


?>
<!DOCTYPE html>

<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <link rel="stylesheet" href="assets/vendor/css/dropzone.min.css">

    <? include("./includes/views/head2.php"); ?>

</head>

<body class="body-padding body-p-top">

    <!-- preloader start -->

    <div class="preloader d-none">

        <div class="loader">

            <span></span>

            <span></span>

            <span></span>

        </div>

    </div>

    <!-- preloader end -->



    <!-- header start -->

    <? include("./includes/views/navbar.php"); ?>

    <!-- header end -->



    <!-- profile right sidebar start -->

    <? include("./includes/views/rightsidebar.php"); ?>

    <!-- right sidebar end -->



    <!-- main sidebar start -->

    <? include("./includes/views/leftmenu2.php"); ?>

    <!-- main sidebar end -->



    <!-- main content start -->

    <div class="main-content">

        <div class="dashboard-breadcrumb mb-25">

            <h2>File Manager</h2>

        </div>

        <div class="row g-4 position-relative">

            <div class="col-xxl-2 col-lg-3 file-manager-sidebar-col">

                <div class="file-manager-sidebar">

                    <div class="panel mb-25">

                        <div class="panel-body">

                            <div class="d-flex gap-1">

                                <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#fileUploadModal"><i class="fa-regular fa-plus"></i> Upload File</button>

                                <button class="btn btn-icon btn-primary close-file-manager-menu-btn d-lg-none"><i class="fa-light fa-bars"></i></button>

                            </div>

                            <nav>

                                <div class="nav" id="nav-tab" role="tablist">

                                    <button class="file-manager-tab-btn w-100 all-files-tab active" id="nav-all-files-tab" data-bs-toggle="tab" data-bs-target="#nav-all-files" type="button" role="tab" aria-controls="nav-all-files" aria-selected="true">All Folders <i class="fa-light fa-angle-right"></i></button>

                                    <div class="divider-dash"></div>


                                    <?php
                                    $query = "SELECT * FROM $g_projectSlug" . "_folders WHERE parent_folder = '$parentFolder'";
                                    $folders = getAll($con, $query);
                                    foreach ($folders as $folder) {
                                        $files = getRow($con, "SELECT COUNT(*) as total_files, SUM(file_size) as file_size FROM " . $g_projectSlug . "_files WHERE folder='{$folder['id']}'");
                                    ?>




                                        <div class="bottom">

                                            <div class="left">

                                                <a href="?folderId=<?php echo $folder['id']; ?>" class="folder-name"><?= $folder['title'] ?></a><br>

                                                <span class="file-quantity"><? echo $files['total_files'] ?? 0 ?> Files</span>

                                            </div>

                                            <div class="right">

                                                <span class="storage-used"><? echo formatBytes($files['file_size']) ?? "0B" ?></span>

                                            </div>

                                        </div>
                                        <div class="divider-dash"></div>
                                    <?php }; ?>

                                    <!-- <ul class="connected-app">

                                        <li class="file-manager-sidebar-title">Connected Apps</li>

                                        <li><a href="https://drive.google.com/"><span class="text-warning"><i class="fa-brands fa-google-drive"></i></span> Google Drive</a></li>

                                        <li><a href="https://www.dropbox.com"><span class="text-info"><i class="fa-brands fa-dropbox"></i></span> Dropbox</a></li>

                                    </ul> -->

                                    <div class="divider-dash"></div>

                                    <!-- <div class="other-files">

                                        <button class="file-manager-tab-btn w-100" id="nav-shared-files-tab" data-bs-toggle="tab" data-bs-target="#nav-shared-files" type="button" role="tab" aria-controls="nav-shared-files" aria-selected="false"><span><i class="fa-light fa-share-nodes"></i></span> Shared Files</button>

                                        <button class="file-manager-tab-btn w-100" id="nav-recent-files-tab" data-bs-toggle="tab" data-bs-target="#nav-recent-files" type="button" role="tab" aria-controls="nav-recent-files" aria-selected="false"><span><i class="fa-light fa-clock"></i></span> Recent Files</button>

                                        <button class="file-manager-tab-btn w-100" id="nav-starred-files-tab" data-bs-toggle="tab" data-bs-target="#nav-starred-files" type="button" role="tab" aria-controls="nav-starred-files" aria-selected="false"><span><i class="fa-light fa-star"></i></span> Starred</button>

                                        <button class="file-manager-tab-btn w-100" id="nav-trash-files-tab" data-bs-toggle="tab" data-bs-target="#nav-trash-files" type="button" role="tab" aria-controls="nav-trash-files" aria-selected="false"><span><i class="fa-light fa-trash"></i></span> Trash</button>

                                        <button class="file-manager-tab-btn w-100" id="nav-file-manager-settings-tab" data-bs-toggle="tab" data-bs-target="#nav-file-manager-settings" type="button" role="tab" aria-controls="nav-file-manager-settings" aria-selected="false"><span><i class="fa-light fa-gear"></i></span> Settings</button>

                                    </div> -->

                                </div>

                            </nav>

                            <div class="divider-dash"></div>

                            <!-- <ul class="file-category-status">

                                <li>

                                    <div class="progress-txt">

                                        <div class="file-category-name">

                                            <span class="text-success"><i class="fa-regular fa-image"></i></span>

                                            <p>Images</p>

                                        </div>

                                        <span class="using-storage"><? echo formatBytes($all_file_category['pic_size']) ?? "0B" ?></span>

                                    </div>

                                    <div class="progress" role="progressbar" aria-label="storage-using-amount" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                        <div class="progress-bar bg-success" style="width: <? echo calculate_percentage($all_file_category['all_files_size'], $all_file_category['pic_size']); ?>%"></div>

                                    </div>

                                </li>

                                <li>

                                    <div class="progress-txt">

                                        <div class="file-category-name">

                                            <span class="text-danger-emphasis"><i class="fa-regular fa-video"></i></span>

                                            <p>Videos</p>

                                        </div>

                                        <span class="using-storage"><? echo formatBytes($all_file_category['video_size']) ?? "0B" ?></span>

                                    </div>

                                    <div class="progress" role="progressbar" aria-label="storage-using-amount" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                        <div class="progress-bar bg-danger" style="width: <? echo calculate_percentage($all_file_category['all_files_size'], $all_file_category['video_size']) ?>%"></div>

                                    </div>

                                </li>

                                <li>

                                    <div class="progress-txt">

                                        <div class="file-category-name">

                                            <span class="text-primary"><i class="fa-regular fa-file"></i></span>

                                            <p>Docs</p>

                                        </div>

                                        <span class="using-storage"><? echo formatBytes($all_file_category['doc_size']) ?? "0B" ?></span>

                                    </div>

                                    <div class="progress" role="progressbar" aria-label="storage-using-amount" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                        <div class="progress-bar bg-primary" style="width: <? echo calculate_percentage($all_file_category['all_files_size'], $all_file_category['doc_size']); ?>%"></div>

                                    </div>

                                </li>

                                <li>

                                    <div class="progress-txt">

                                        <div class="file-category-name">

                                            <span class="text-warning"><i class="fa-regular fa-music"></i></span>

                                            <p>Music</p>

                                        </div>

                                        <span class="using-storage"><? echo formatBytes($all_file_category['audio_size']) ?? "0B" ?></span>

                                    </div>

                                    <div class="progress" role="progressbar" aria-label="storage-using-amount" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                        <div class="progress-bar bg-warning" style="width: <? echo calculate_percentage($all_file_category['all_files_size'], $all_file_category['audio_size']); ?>%"></div>

                                    </div>

                                </li>


                            </ul> -->

                        </div>

                    </div>

                    <!-- <div class="panel">

                        <div class="panel-body">

                            <div class="storage-status">

                                <div class="progress-txt">

                                    <div class="file-category-name">

                                        <span><i class="fa-light fa-hard-drive"></i></span>

                                        <p>Total Storage</p>

                                    </div>

                                </div>

                                <div class="progress-stacked">

                                    <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">

                                        <div class="progress-bar bg-success"></div>

                                    </div>

                                    <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">

                                        <div class="progress-bar bg-danger"></div>

                                    </div>

                                    <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">

                                        <div class="progress-bar bg-primary"></div>

                                    </div>

                                    <div class="progress" role="progressbar" aria-label="Segment four" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">

                                        <div class="progress-bar bg-warning"></div>

                                    </div>

                                    <div class="progress" role="progressbar" aria-label="Segment five" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%">

                                        <div class="progress-bar bg-info"></div>

                                    </div>

                                    <div class="progress" role="progressbar" aria-label="Segment six" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">

                                        <div class="progress-bar bg-secondary"></div>

                                    </div>

                                </div>

                                <p>13 GB of 15 GB Available </p>

                            </div>

                        </div>

                    </div> -->

                </div>

            </div>

            <div class="col-xxl-10 col-lg-9">

                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="nav-all-files" role="tabpanel" aria-labelledby="nav-all-files-tab" tabindex="0">

                        <div class="panel mb-25">

                            <div class="panel-header">

                                <div class="d-flex align-items-center gap-1">

                                    <button class="btn btn-sm btn-icon btn-primary file-manager-menu-btn d-lg-none"><i class="fa-light fa-bars"></i></button>

                                    <h5><? if ($parentFolder == "/") {
                                            echo "All Folders";
                                        } else {
                                            echo $folder_info['title'];
                                        } ?></h5>

                                </div>

                                <form class="file-search">

                                    <input type="search" id="fileSearch" class="form-control" placeholder="Search....">

                                    <button><i class="fa-light fa-magnifying-glass"></i></button>

                                </form>

                            </div>

                            <div id="selectedFiles"></div>

                            <script>
                                document.getElementById('fileUploadDiv').addEventListener('click', function() {
                                    // Create input element
                                    var input = document.createElement('input');
                                    input.type = 'file';
                                    input.name = 'file[]';
                                    // Add event listener for file selection
                                    input.addEventListener('change', function(event) {
                                        var file = event.target.files[0]; // Get the selected file
                                        var filename = file.name; // Get the filename
                                        console.log('Selected file:', filename);
                                        // Set the selected file name as the input field value
                                        this.value = filename;
                                    });
                                    // Append the input element to the selected div
                                    var selectedFilesDiv = document.getElementById('selectedFiles');
                                    selectedFilesDiv.appendChild(input);
                                    // Trigger click event on the input element to open file selection dialog
                                    input.click();
                                });
                            </script>
                            <div class="panel-body">

                                <div class="row g-3">

                                    <?php
                                    $query = "SELECT * FROM $g_projectSlug" . "_folders WHERE parent_folder = '$parentFolder'";
                                    $folders = getAll($con, $query);
                                    foreach ($folders as $folder) {
                                        $files = getRow($con, "SELECT COUNT(*) as total_files, SUM(file_size) as file_size FROM " . $g_projectSlug . "_files WHERE folder='{$folder['id']}'");
                                    ?>
                                        <div class="col-md-3 col-sm-4 col-6">

                                            <div class="file-manager-card">

                                                <div class="top">

                                                    <div class="part-icon">

                                                        <span><i class="fa-duotone fa-folder-open"></i></span>

                                                    </div>

                                                    <div class="dropdown">

                                                        <button class="action" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>

                                                        <ul class="dropdown-menu">

                                                            <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-regular fa-eye"></i></span> Details</a></li>

                                                            <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-regular fa-share-nodes"></i></span> Share</a></li>

                                                            <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-regular fa-copy"></i></span> Copy</a></li>

                                                            <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-regular fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                            <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-regular fa-download"></i></span> Download</a></li>

                                                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#createFolder" data-mydata='<?php echo  htmlspecialchars(json_encode($folder, JSON_UNESCAPED_UNICODE)); ?>'><span class="dropdown-icon"><i class="fa-regular fa-pen"></i></span> Rename</a></li>

                                                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_record" data-url="?<? echo generateUrlParams() ?>delete-record=<?php echo $folder['id'] ?>"><span class="dropdown-icon"><i class="fa-regular fa-trash"></i></span> Delete</a></li>

                                                        </ul>

                                                    </div>

                                                </div>

                                                <div class="bottom">

                                                    <div class="left">

                                                        <a href="?folderId=<?php echo $folder['id']; ?>" class="folder-name"><?= $folder['title'] ?></a>

                                                        <span class="file-quantity"><? echo $files['total_files'] ?? 0 ?> Files</span>

                                                    </div>

                                                    <div class="right">

                                                        <span class="storage-used"><? echo formatBytes($files['file_size']) ?? "0B" ?></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    <?php }; ?>


                                    <div class="col-12">

                                        <div class="d-flex justify-content-between">

                                            <a href="?folderId=/" class="btn btn-sm btn-primary"><i class="fa-light fa-eye"></i> Show All</a>


                                            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#createFolder"><i class="fa-light fa-plus"></i> Create Folder</button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="panel">

                            <div class="panel-header">

                                <h5>Files</h5>

                                <div class="btn-box">

                                    <button class="btn btn-sm btn-icon btn-outline-primary btn-grid-view active"><i class="fa-solid fa-grid-2"></i></button>

                                    <button class="btn btn-sm btn-icon btn-outline-primary btn-list-view"><i class="fa-regular fa-bars"></i></button>

                                </div>

                            </div>


                            <div class="panel-body">

                                <div class="table-responsive">

                                    <div class="file-manager-row">

                                        <div class="file-manager-col-head">

                                            <span>Thumbnail</span>

                                            <span>Name</span>

                                            <span>File Size</span>

                                            <span>Type</span>

                                            <span></span>

                                        </div>

                                        <? foreach (getAll($con, "SELECT * FROM jeoXillityCrm_files WHERE folder='$parentFolder' AND userId='$session_id'") as $file) {
                                            $extension = pathinfo($file['file'], PATHINFO_EXTENSION);
                                            $file['uploaded_by'] = $g_allUsersInfo[$file['userId']]['name'];
                                            $file['uploaded_date'] = date("M-d-Y", $file['timeAdded']);
                                            $file['file_size'] = formatBytes($file['file_size']);
                                            $file['file'] = basename($file['file']);
                                            $file['file_icon'] = $file_extension_icons[$extension];


                                        ?>
                                            <div class="file-manager-col">

                                                <div class="file-card">

                                                    <div class="part-img">

                                                        <button class="btn-flush" data-mydata='<?php echo  htmlspecialchars(json_encode($file, JSON_UNESCAPED_UNICODE)); ?>' data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><i class="fa <? echo $file_extension_icons[$extension] ?>" style="font-size:40px;"></i></button>
                                                        <button onclick="downloadFile('uploads/<?php echo trim($file['file']); ?>')">Download File</button>
                                                    </div>

                                                    <div class="part-txt">

                                                        <div class="d-flex justify-content-between">

                                                            <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><? echo $file['file']; ?></button>

                                                            <span class="file-size"><? echo $file['file_size'] ?></span>

                                                        </div>

                                                    </div>

                                                    <div class="file-type">

                                                        <span><? echo ucwords($extension) ?> File</span>

                                                    </div>

                                                    <div class="dropdown action">

                                                        <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                            <i class="fa-regular fa-ellipsis-vertical"></i>

                                                        </button>

                                                        <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                            Action <i class="fa-regular fa-angle-down"></i>

                                                        </button>

                                                        <ul class="dropdown-menu">

                                                            <li><button class="dropdown-item" data-mydata='<?php echo  htmlspecialchars(json_encode($file, JSON_UNESCAPED_UNICODE)); ?>' data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                            <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                            <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>

                                                            <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                        </ul>

                                                    </div>

                                                </div>

                                            </div>
                                        <? } ?>


                                    </div>

                                </div>

                                <!-- <div class="part-btn text-center">

                                    <p>Showing 10 of 100 items</p>

                                    <button class="btn btn-sm btn-primary">Load More</button>

                                </div> -->

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="nav-shared-files" role="tabpanel" aria-labelledby="nav-shared-files-tab" tabindex="0">

                        <div class="panel">

                            <div class="panel-header">

                                <div class="d-flex align-items-center gap-1">

                                    <button class="btn btn-sm btn-icon btn-primary file-manager-menu-btn d-lg-none"><i class="fa-light fa-bars"></i></button>

                                    <h5>Shared Files</h5>

                                </div>

                                <div class="btn-box">

                                    <button class="btn btn-sm btn-icon btn-outline-primary btn-list-view active"><i class="fa-regular fa-bars"></i></button>

                                    <button class="btn btn-sm btn-icon btn-outline-primary btn-grid-view"><i class="fa-solid fa-grid-2"></i></button>

                                </div>

                            </div>

                            <div class="panel-body">

                                <div class="table-responsive">

                                    <div class="file-manager-row list-view">

                                        <div class="file-manager-col-head">

                                            <span>Thumbnail</span>

                                            <span>Name</span>

                                            <span>File Size</span>

                                            <span>Type</span>

                                            <span></span>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/auth-bg.png" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">background.jpg</button>

                                                        <span class="file-size">375KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>JPG file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/pdf.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">document.pdf</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>PDF file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/css.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">style.css</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>CSS file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/doc.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">document.docx</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>DOCX file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/gif.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">image.gif</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>GIF file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/html.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">index.php</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>HTML file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/js.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">script.js</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>JS file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/php.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">index.php</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>PHP file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/svg.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">shape.svg</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>SVG file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/txt.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">note.txt</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>TXT file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="part-btn text-center">

                                    <p>Showing 10 of 100 items</p>

                                    <button class="btn btn-sm btn-primary">Load More</button>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="nav-recent-files" role="tabpanel" aria-labelledby="nav-recent-files-tab" tabindex="0">

                        <div class="panel">

                            <div class="panel-header">

                                <div class="d-flex align-items-center gap-1">

                                    <button class="btn btn-sm btn-icon btn-primary file-manager-menu-btn d-lg-none"><i class="fa-light fa-bars"></i></button>

                                    <h5>Recent Files</h5>

                                </div>

                                <div class="btn-box">

                                    <button class="btn btn-sm btn-icon btn-outline-primary btn-list-view active"><i class="fa-regular fa-bars"></i></button>

                                    <button class="btn btn-sm btn-icon btn-outline-primary btn-grid-view"><i class="fa-solid fa-grid-2"></i></button>

                                </div>

                            </div>

                            <div class="panel-body">

                                <div class="table-responsive">

                                    <div class="file-manager-row list-view">

                                        <div class="file-manager-col-head">

                                            <span>Thumbnail</span>

                                            <span>Name</span>

                                            <span>File Size</span>

                                            <span>Type</span>

                                            <span></span>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/auth-bg.png" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">background.jpg</button>

                                                        <span class="file-size">375KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>JPG file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/pdf.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">document.pdf</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>PDF file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/css.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">style.css</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>CSS file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/doc.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">document.docx</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>DOCX file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/gif.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">image.gif</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>GIF file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/html.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">index.php</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>HTML file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/js.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">script.js</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>JS file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/php.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">index.php</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>PHP file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/svg.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">shape.svg</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>SVG file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/txt.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">note.txt</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>TXT file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="part-btn text-center">

                                    <p>Showing 10 of 100 items</p>

                                    <button class="btn btn-sm btn-primary">Load More</button>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="nav-starred-files" role="tabpanel" aria-labelledby="nav-starred-files-tab" tabindex="0">

                        <div class="panel">

                            <div class="panel-header">

                                <div class="d-flex align-items-center gap-1">

                                    <button class="btn btn-sm btn-icon btn-primary file-manager-menu-btn d-lg-none"><i class="fa-light fa-bars"></i></button>

                                    <h5>Starred Files</h5>

                                </div>

                                <div class="btn-box">

                                    <button class="btn btn-sm btn-icon btn-outline-primary btn-list-view active"><i class="fa-regular fa-bars"></i></button>

                                    <button class="btn btn-sm btn-icon btn-outline-primary btn-grid-view"><i class="fa-solid fa-grid-2"></i></button>

                                </div>

                            </div>

                            <div class="panel-body">

                                <div class="table-responsive">

                                    <div class="file-manager-row list-view">

                                        <div class="file-manager-col-head">

                                            <span>Thumbnail</span>

                                            <span>Name</span>

                                            <span>File Size</span>

                                            <span>Type</span>

                                            <span></span>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/auth-bg.png" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">background.jpg</button>

                                                        <span class="file-size">375KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>JPG file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-star starred"><i class="fa-solid fa-star"></i></button>

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/pdf.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">document.pdf</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>PDF file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-star starred"><i class="fa-solid fa-star"></i></button>

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/css.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">style.css</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>CSS file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-star starred"><i class="fa-solid fa-star"></i></button>

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/doc.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">document.docx</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>DOCX file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-star starred"><i class="fa-solid fa-star"></i></button>

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/gif.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">image.gif</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>GIF file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-star starred"><i class="fa-solid fa-star"></i></button>

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/html.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">index.php</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>HTML file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-star starred"><i class="fa-solid fa-star"></i></button>

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/js.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">script.js</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>JS file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-star starred"><i class="fa-solid fa-star"></i></button>

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/php.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">index.php</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>PHP file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-star starred"><i class="fa-solid fa-star"></i></button>

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/svg.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">shape.svg</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>SVG file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-star starred"><i class="fa-solid fa-star"></i></button>

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/txt.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">note.txt</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>TXT file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-star starred"><i class="fa-solid fa-star"></i></button>

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</button></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Rename</a></li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrows-up-down-left-right"></i></span> Move</a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="part-btn text-center">

                                    <p>Showing 10 of 100 items</p>

                                    <button class="btn btn-sm btn-primary">Load More</button>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="nav-trash-files" role="tabpanel" aria-labelledby="nav-trash-files-tab" tabindex="0">

                        <div class="panel">

                            <div class="panel-header">

                                <div class="d-flex align-items-center gap-1">

                                    <button class="btn btn-sm btn-icon btn-primary file-manager-menu-btn d-lg-none"><i class="fa-light fa-bars"></i></button>

                                    <h5>Trash Files</h5>

                                </div>

                                <div class="btn-box">

                                    <button class="btn btn-sm btn-icon btn-outline-primary btn-list-view active"><i class="fa-regular fa-bars"></i></button>

                                    <button class="btn btn-sm btn-icon btn-outline-primary btn-grid-view"><i class="fa-solid fa-grid-2"></i></button>

                                </div>

                            </div>

                            <div class="panel-body">

                                <div class="table-responsive">

                                    <div class="file-manager-row list-view">

                                        <div class="file-manager-col-head">

                                            <span>Thumbnail</span>

                                            <span>Name</span>

                                            <span>File Size</span>

                                            <span>Type</span>

                                            <span></span>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/auth-bg.png" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">background.jpg</button>

                                                        <span class="file-size">375KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>JPG file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrow-rotate-left"></i></span> Restore Back</a></li>

                                                        <li><a class="dropdown-item text-danger" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Permanently Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/pdf.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">document.pdf</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>PDF file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrow-rotate-left"></i></span> Restore Back</a></li>

                                                        <li><a class="dropdown-item text-danger" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Permanently Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/css.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">style.css</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>CSS file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrow-rotate-left"></i></span> Restore Back</a></li>

                                                        <li><a class="dropdown-item text-danger" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Permanently Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/doc.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">document.docx</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>DOCX file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrow-rotate-left"></i></span> Restore Back</a></li>

                                                        <li><a class="dropdown-item text-danger" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Permanently Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/gif.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">image.gif</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>GIF file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrow-rotate-left"></i></span> Restore Back</a></li>

                                                        <li><a class="dropdown-item text-danger" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Permanently Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/html.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">index.php</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>HTML file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrow-rotate-left"></i></span> Restore Back</a></li>

                                                        <li><a class="dropdown-item text-danger" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Permanently Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/js.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">script.js</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>JS file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrow-rotate-left"></i></span> Restore Back</a></li>

                                                        <li><a class="dropdown-item text-danger" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Permanently Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/php.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">index.php</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>PHP file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrow-rotate-left"></i></span> Restore Back</a></li>

                                                        <li><a class="dropdown-item text-danger" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Permanently Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/svg.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">shape.svg</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>SVG file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrow-rotate-left"></i></span> Restore Back</a></li>

                                                        <li><a class="dropdown-item text-danger" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Permanently Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="file-manager-col">

                                            <div class="file-card">

                                                <div class="part-img">

                                                    <button class="btn-flush" data-bs-toggle="modal" data-bs-target="#fileDetailsModal"><img src="assets/images/txt.png" class="file-icon" alt="Image"></button>

                                                </div>

                                                <div class="part-txt">

                                                    <div class="d-flex justify-content-between">

                                                        <button class="btn-flush file-name" data-bs-toggle="modal" data-bs-target="#fileDetailsModal">note.txt</button>

                                                        <span class="file-size">573KB</span>

                                                    </div>

                                                </div>

                                                <div class="file-type">

                                                    <span>TXT file</span>

                                                </div>

                                                <div class="dropdown action">

                                                    <button class="btn-flush" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="fa-regular fa-ellipsis-vertical"></i>

                                                    </button>

                                                    <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        Action <i class="fa-regular fa-angle-down"></i>

                                                    </button>

                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-light fa-arrow-rotate-left"></i></span> Restore Back</a></li>

                                                        <li><a class="dropdown-item text-danger" href="#"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Permanently Delete</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="part-btn text-center">

                                    <p>Showing 10 of 100 items</p>

                                    <button class="btn btn-sm btn-primary">Load More</button>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="nav-file-manager-settings" role="tabpanel" aria-labelledby="nav-file-manager-settings-tab" tabindex="0">

                        <div class="panel">

                            <div class="panel-header">

                                <div class="d-flex align-items-center gap-1">

                                    <button class="btn btn-sm btn-icon btn-primary file-manager-menu-btn d-lg-none"><i class="fa-light fa-bars"></i></button>

                                    <h5>Settings</h5>

                                </div>

                            </div>

                            <div class="panel-body">

                                <nav>

                                    <div class="btn-box" id="nav-tab2" role="tablist">

                                        <button class="btn btn-sm btn-outline-primary active" id="nav-general-tab" data-bs-toggle="tab" data-bs-target="#nav-general" type="button" role="tab" aria-controls="nav-general" aria-selected="true">General</button>

                                        <button class="btn btn-sm btn-outline-primary" id="nav-billings-tab" data-bs-toggle="tab" data-bs-target="#nav-billings" type="button" role="tab" aria-controls="nav-billings" aria-selected="false">Billings</button>

                                        <button class="btn btn-sm btn-outline-primary" id="nav-notification-tab" data-bs-toggle="tab" data-bs-target="#nav-notification" type="button" role="tab" aria-controls="nav-notification" aria-selected="false">Notification</button>

                                    </div>

                                </nav>

                                <div class="tab-content" id="nav-tabContent2">

                                    <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab" tabindex="0">

                                        <div class="file-manager-user">

                                            <div class="avatar">

                                                <img src="assets/images/admin.png" class="border border-2 border-primary" alt="Image">

                                            </div>

                                            <div class="part-txt">

                                                <div class="name"><span>Shaikh Abu Dardah</span> <button class="btn-flush"><i class="fa-light fa-pen"></i></button></div>

                                                <div class="email"><span>info@example.com</span> <button class="btn-flush"><i class="fa-light fa-pen"></i></button></div>

                                            </div>

                                        </div>

                                        <div class="file-manager-settings-group">

                                            <div class="file-manager-settings-subtitle">

                                                <h6>Subscription Plan</h6>

                                            </div>

                                            <div class="d-flex justify-content-between align-items-center">

                                                <div class="about-plan">

                                                    <h3 class="plan-name">

                                                        <span class="text-primary"><i class="fa-light fa-database"></i></span>

                                                        <span>Omuk Basic</span>

                                                    </h3>

                                                    <span class="used-storage">13.00 GB / 15.00 GB</span>

                                                </div>

                                                <a href="#" class="btn btn-sm btn-primary">Upgrade Plan</a>

                                            </div>

                                        </div>

                                        <div class="file-manager-settings-group mb-25">

                                            <div class="file-manager-settings-subtitle">

                                                <h6>Personal Basic</h6>

                                            </div>

                                            <div class="table-responsive">

                                                <table class="table file-manager-settings-table">

                                                    <tbody>

                                                        <tr>

                                                            <td>Recovery Email</td>

                                                            <td>info@example.com</td>

                                                            <td><button class="btn-flush">Edit</button></td>

                                                        </tr>

                                                        <tr>

                                                            <td>Phone Number</td>

                                                            <td>Not added yet</td>

                                                            <td><button class="btn-flush">Add Number</button></td>

                                                        </tr>

                                                        <tr>

                                                            <td>Date of birth</td>

                                                            <td>21 Jan. 1999</td>

                                                            <td><button class="btn-flush">Change</button></td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                        <div class="file-manager-settings-group mb-0">

                                            <div class="file-manager-settings-subtitle">

                                                <h6>Preferences</h6>

                                            </div>

                                            <div class="table-responsive">

                                                <table class="table file-manager-settings-table">

                                                    <tbody>

                                                        <tr>

                                                            <td>Language</td>

                                                            <td>English (United State)</td>

                                                            <td><button class="btn-flush">Change Language</button></td>

                                                        </tr>

                                                        <tr>

                                                            <td>Date Format</td>

                                                            <td>DD/MM/YYYY</td>

                                                            <td><button class="btn-flush">Change</button></td>

                                                        </tr>

                                                        <tr>

                                                            <td>Timezone</td>

                                                            <td>Bangladesh (GMT +6)</td>

                                                            <td><button class="btn-flush">Change</button></td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="nav-billings" role="tabpanel" aria-labelledby="nav-billings-tab" tabindex="0">

                                        <div class="table-responsive pt-4">

                                            <table class="table">

                                                <thead>

                                                    <tr>

                                                        <th>Invoice ID</th>

                                                        <th>Client</th>

                                                        <th>Due Date</th>

                                                        <th>Total</th>

                                                        <th>Status</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                    <tr>

                                                        <td>#INV-0001</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0002</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0003</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0004</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0005</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0006</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="nav-notification" role="tabpanel" aria-labelledby="nav-notification-tab" tabindex="0">

                                        <ul class="notification-dropdown border-top mt-4">

                                            <li class="d-flex align-items-center gap-20 py-3 border-bottom">

                                                <div class="avatar">

                                                    <img src="assets/images/avatar.png" alt="image">

                                                </div>

                                                <div class="notification-txt fs-14">

                                                    <span class="notification-icon text-primary"><i class="fa-solid fa-thumbs-up"></i></span> <span class="fw-medium">Archer</span> Likes your post

                                                </div>

                                            </li>

                                            <li class="d-flex align-items-center gap-20 py-3 border-bottom">

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-2.png" alt="image">

                                                </div>

                                                <div class="notification-txt fs-14">

                                                    <span class="notification-icon text-success"><i class="fa-solid fa-comment-dots"></i></span> <span class="fw-medium">Cody</span> Commented on your post

                                                </div>

                                            </li>

                                            <li class="d-flex align-items-center gap-20 py-3 border-bottom">

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-3.png" alt="image">

                                                </div>

                                                <div class="notification-txt fs-14">

                                                    <span class="notification-icon"><i class="fa-solid fa-share"></i></span> <span class="fw-medium">Zane</span> Shared your post

                                                </div>

                                            </li>

                                            <li class="d-flex align-items-center gap-20 py-3 border-bottom">

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-4.png" alt="image">

                                                </div>

                                                <div class="notification-txt fs-14">

                                                    <span class="notification-icon text-primary"><i class="fa-solid fa-thumbs-up"></i></span> <span class="fw-medium">Christopher</span> Likes your post

                                                </div>

                                            </li>

                                            <li class="d-flex align-items-center gap-20 py-3 border-bottom">

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-5.png" alt="image">

                                                </div>

                                                <div class="notification-txt fs-14">

                                                    <span class="notification-icon text-success"><i class="fa-solid fa-comment-dots"></i></span> <span class="fw-medium">Charlie</span> Commented on your post

                                                </div>

                                            </li>

                                            <li class="d-flex align-items-center gap-20 py-3 border-bottom">

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-6.png" alt="image">

                                                </div>

                                                <div class="notification-txt fs-14">

                                                    <span class="notification-icon"><i class="fa-solid fa-share"></i></span> <span class="fw-medium">Jayden</span> Shared your post

                                                </div>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- footer start -->

        <? include("./includes/views/footer.php"); ?>

        <!-- footer end -->

    </div>

    <!-- main content end -->



    <!-- upload file modal start -->

    <!-- <div class="modal fade" id="fileUploadModal" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-body" id="fileUploadDiv">

                    <form action="/file-upload.php" class="dropzone" id="file-manager-upload"></form>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>

                    <button type="button" class="btn btn-sm btn-success">Upload</button>

                </div>

            </div>

        </div>

    </div> -->


    <div class="modal fade" id="fileUploadModal" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content">
                <form action="" method="POST" enctype="multipart/form-data" class="" id="">

                    <div class="modal-body" id="">

                        <div class="form-group">
                            <input type="file" name="files[]" class="form-control" multiple>
                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>

                        <input type="submit" name="uploadfile" value="Upload" class="btn btn-sm btn-success">

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- upload file modal end -->



    <!-- create folder modal start -->

    <div class="modal fade" id="createFolder" tabindex="-1" aria-labelledby="createFolderLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-header">

                    <h1 class="modal-title" id="createFolderLabel">Create New Folder</h1>

                    <button type="button" class="btn btn-sm btn-outline-primary btn-icon" data-bs-dismiss="modal" aria-label="Close"><i class="fa-light fa-xmark"></i></button>

                </div>

                <div class="modal-body">

                    <form method="post">

                        <label for="newFolderName" class="form-label">Folder Name</label>

                        <input type="text" id="newFolderName" class="form-control" name="folder_name" placeholder="Enter Folder Name" required>
                        <input type="text" name="actionId" hidden>


                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>

                    <button type="submit" name="create_folder_package" class="btn btn-sm btn-success">Create</button>

                </div>
                </form>
            </div>

        </div>

    </div>



    <!-- create folder modal end -->




    <!-- file details modal start -->

    <div class="modal fade" id="fileDetailsModal" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content">
                <form method="POST">

                    <div class="modal-body file-details-modal">

                        <div class="row g-4 align-items-center">

                            <div class="col-sm-6">


                                <div class="modal-part-img" style="display: flex; justify-content: center; align-items: center;">

                                    <img src="assets/images/product-img-2.png" alt="Image">

                                </div>

                            </div>

                            <div class="col-sm-6">

                                <div class="part-txt">

                                    <ul class="file-details">

                                        <li><span>Uploaded on:</span><span id='file_create_date'></span></li>

                                        <li><span>Uploaded by:</span><span id="file_creater"></span></li>

                                        <li><span>File name:</span><span id="file_name"></span></li>

                                        <li><span>File size:</span><span id="file_size"></span></li>


                                    </ul>


                                    <input type="text" name="file_alternative_text" class="form-control mb-15" placeholder="Alternative Text">

                                    <input type="text" name="file_title" class="form-control mb-15" placeholder="Title">

                                    <input type="text" name="file_caption" class="form-control mb-15" placeholder="Caption">

                                    <textarea name="file_description" class="form-control mb-15" placeholder="Description"></textarea>

                                    <input type="url" name="file_url" class="form-control" placeholder="File URL: www.imagename.com">
                                    <input type="text" name="file_actionId" class="form-control" hidden>


                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>

                        <input type="submit" name="updatefile" value="Update" class="btn btn-sm btn-success">

                    </div>
                </form>

            </div>

        </div>

    </div>

    <!-- file details modal end -->

    <? include("./includes/views/footerjs.php"); ?>
    <script src="assets/vendor/js/dropzone.min.js"></script>
    <script src="assets/js/dropzone-init.js"></script>
    <script>
        $(document).ready(function() {
            $("#createFolder").on('show.bs.modal', function(e) {
                var mydata = $(e.relatedTarget).data('mydata');
                console.log("mydata->", mydata);
                $("input[type='checkbox']").prop('checked', false);
                if (mydata != null) {
                    $(".modal-title").html("Rename Folder");
                    $("button[name='create_folder_package']").html("Rename");
                    $("input[name='folder_name']").val(mydata['title'])
                    $("input[name='actionId']").val(mydata['id'])
                } else {
                    $(".modal-title").html("Create New Folder");
                    $("input[name='folder_name']").val("")
                    $("input[name='actionId']").val("")
                }
            });
        })
    </script>

    <script>
        $(document).ready(function() {

            $("#fileDetailsModal").on('show.bs.modal', function(e) {
                var mydata = $(e.relatedTarget).data('mydata');
                console.log("mydata->", mydata);
                $("input[type='checkbox']").prop('checked', false);
                if (mydata != null) {
                    $(".modal-title").html("Rename Folder");
                    $("input[name='file_alternative_text']").val(mydata['alternative_text'])
                    $("input[name='file_title']").val(mydata['title'])
                    $("input[name='file_caption']").val(mydata['caption'])
                    $("textarea[name='file_description']").val(mydata['description'])
                    $("input[name='file_url']").val(mydata['url'])
                    $("#file_create_date").text(mydata['uploaded_date']);
                    $("#file_creater").text(mydata['uploaded_by']);
                    $("#file_name").text(mydata['file']);
                    $("#file_size").text(mydata['file_size']);
                    $(".modal-part-img").html("<li class='fa " + mydata['file_icon'] + "' style='font-size:40vh;'></li>");

                    $("input[name='file_actionId']").val(mydata['id'])
                } else {
                    $(".modal-title").html("Create New Folder");
                    $("input[name='file_alternative_text']").val("")
                    $("input[name='file_title']").val("")
                    $("input[name='file_caption']").val("")
                    $("textarea[name='file_description']").val("")
                    $("input[name='file_url']").val("")
                    $(".modal-part-img").html("")
                    $("input[name='file_actionId']").val("")
                }
            });
        })
    </script>



    <script>
        function downloadFile(url) {

            var downloadLink = document.createElement("a");
            downloadLink.href = url;
            downloadLink.download = url.split("/").pop();
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
        }
    </script>

</body>

</html>