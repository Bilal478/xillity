<?php
require("./global.php");
if (isset($_POST['create_package'])) {

    $name = $_POST['name'];
    // $actionId = $_POST['actionId'];
    $actionId = isset($_POST['actionId']) ? $_POST['actionId'] : null;
    if ($actionId) {
        $query = "UPDATE jeoxillitycrm_departments 
          SET name = '$name' 
          WHERE id = '$actionId'";
    } else {
        $query = "INSERT INTO jeoxillitycrm_departments (name) 
              VALUES ('$name')";
    }
    runQuery($query);
    header("Location: ?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
}

if (isset($_GET['delete-record'])) {
    $id = escape($_GET['delete-record']);
    $query = "delete from jeoxillitycrm_departments where id='$id'";
    runQuery($query);
}
?>

<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head><? include("./includes/views/head2.php"); ?></head>

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
        <div class="row">
            <div class="col-12">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Departments List</h5>
                        <div class="btn-box d-flex flex-wrap gap-2">
                            <div id="tableSearch"></div>
                            <button class="btn btn-sm btn-icon btn-outline-primary"><i class="fa-light fa-arrows-rotate"></i></button>


                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addDepartmentModal"><i class="fa-light fa-plus"></i> Add New
                            </button>

                        </div>

                    </div>

                    <div class="panel-body">


                        <table class="table table-dashed table-hover digi-dataTable task-table table-striped" id="taskTable">

                            <thead>

                                <tr>


                                    <th>#</th>

                                    <th>Name</th>

                                    <th>Action</th>

                                </tr>

                            </thead>

                            <tbody>


                                <?php
                                $result = getAll($con, "select * from jeoxillitycrm_departments");
                                foreach ($result as $index => $department) {
                                ?>
                                    <tr>

                                        <td>

                                            <div class="form-check">

                                                <?= ++$index ?>

                                            </div>

                                        </td>

                                        <td><a role="button" class="text-decoration-underline" data-bs-toggle="modal" data-bs-target="#viewTaskModal"><?= $department['name'] ?></a></td>

                                        <td>

                                            <div class="btn-box">

                                                <!-- Button to trigger the modal -->
                                                <button data-mydata='<? echo (json_encode($department, true)); ?>' class="btn btn-sm btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
                                                    <i class="fa-light fa-edit"></i>
                                                </button>
                                                <button data-toggle="modal" data-target="#delete_record" data-url="?<? if (isset($_GET['id'])) {
                                                                                                                        echo "id=" . $_GET['id'] . "&";
                                                                                                                    } ?>delete-record=<? echo $department['id'] ?>" class="btn btn-sm btn-icon btn-danger"><i class="fa-light fa-trash-can"></i></button>

                                            </div>

                                        </td>

                                    </tr>
                                <? } ?>


                            </tbody>

                        </table>

                        <div class="table-bottom-control"></div>

                    </div>

                </div>

            </div>

        </div>


        <!-- footer start -->

        <? include("./includes/views/footer.php"); ?>

        <!-- footer end -->

    </div>

    <!-- main content end -->


    <!-- add new task modal -->

    <div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">

            <div class="modal-content">

                <div class="modal-header">

                    <h2 class="modal-title" id="addDepartmentModalLabel">Add Department</h2>

                    <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal" aria-label="Close"><i class="fa-light fa-times"></i></button>

                </div>

                <div class="modal-body">

                    <form method="post">
                        <input name="actionId" id="actionId" class="form-control" type="hidden">
                        <div class="row g-3">

                            <div class="col-12">

                                <label for="name" class="form-label">Name</label>

                                <input name="name" type="text" id="name" class="form-control form-control-sm" placeholder="Task Name">

                            </div>

                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>

                            <input type="submit" class="btn btn-sm btn-primary" name="create_package" value="Save Department">

                        </div>
                    </form>

                </div>



            </div>

        </div>

    </div>

    <!-- add new task modal -->

    <? include("./includes/views/footerjs.php"); ?>
    <script>
        $(document).ready(function() {
            $('#addDepartmentModal').on('show.bs.modal', function(e) {
                var modal = $(this);
                var mydata = $(e.relatedTarget).data('mydata');
                console.log(mydata);
                $('#actionId').val(null);
                $('#actionId').val(null);
                // Check if mydata is not null and not undefined
                if (mydata !== null && mydata !== undefined) {
                    modal.find('.modal-title').text('Update Department');
                    $('#addDepartmentModal').modal().show();

                    // Set values if mydata properties are not null or undefined
                    if (mydata.id !== null && mydata.id !== undefined) {
                        $('#actionId').val(mydata.id);
                    }
                    if (mydata.name !== null && mydata.name !== undefined) {
                        $('input[name="name"]').val(mydata.name);


                        // Access specific properties of the task data
                        console.log('Task ID:', mydata.id);
                        console.log('Task Name:', mydata.name);

                    }
                }
            });

        });
    </script>
</body>

</html>