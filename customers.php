<? require("./global.php");

$primaryTableName = "users";

array(
    // field_name [type, isrequired, array_select, inner_type] <= "template"
    "name" => ["input", "", "", "text"],
    "email" => ["input", "", "", "text"],
    "phone" => ["input", "", "", "text"],
    "credit_limit" => ["input", "", "", "text"],
    "opening_balance" => ["input", "", "", "text"],
    "debit" => ["select", "", "", ""],
    "credit" => ["select", "", ["Complete", "Incomplete"], ""],
    "closing_balance" => ["select", "", ["Complete", "Incomplete"], ""],
);;

$status_options = convertArrayToIndexArray(["Active", "Inactive"]);


if (isset($_POST['check_email'])) {
    $email = escape($_POST['email']);

    // Query to check if the email exists, excluding the current record if it's an update
    $query = "SELECT COUNT(*) as count FROM jeoXillityCrm_users WHERE email='$email'";


    $result = getOne($con, $query);

    if ($result > 0) {
        echo json_encode(['exists' => true]);
    } else {
        echo json_encode(['exists' => false]);
    }
    exit();
}

if (isset($_POST['create_package'])) {
    parse_str($_POST['formData'], $form_data);

    $actionId = escape(($form_data['actionId']));
    $name = escape($form_data['name']);
    $email = escape($form_data['email']);
    $country = escape($form_data['country']);
    $city = escape($form_data['city']);
    $region = escape($form_data['region']);
    $postal_code = escape($form_data['postal_code']);
    $status = escape($form_data['status']);
    $role = 'customer';
    $post_office = escape($form_data['postcode']);
    $city = escape($form_data['city']);
    $country = escape($form_data['country']);


    $phone = escape($form_data['phone']);
    $relationship = escape($form_data['relationship']);
    $security_pin = escape($form_data['security_pin']);
    $notes = escape($form_data['notes']);


    if (isset($_POST['password'])) {
        $password = mb_htmlentities(md5(md5(sha1($_POST['password'])) . 'Anomoz'));
    }



    if ($actionId == "") {
        $id = generateRandomString();
        $actionId = $id;
        $query = "insert into `jeoXillityCrm_users` set id='$id', role='$role', post_office='$post_office',description='$notes', phone='$phone',security_pin='$security_pin', relationship='$relationship', name='$name', email='$email', country='$country', city='$city', zip='$postal_code', state='$region', status='$status', timeAdded='$timeAdded', userId='$session_userId' ";
    } else {
        $query = "update jeoXillityCrm_users set name='$name', email='$email', post_office='$post_office',city='$city', country='$country',description='$notes', phone='$phone',security_pin='$security_pin', relationship='$relationship', zip='$postal_code', state='$region', status='$status' where id='$actionId'";
    }
    runQuery($query);

    // header("Location: ?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
    // exit();
}

if (isset($_GET['delete-customer'])) {
    $id = escape($_GET['delete-customer']);
    $query = "delete from jeoXillityCrm_users where id='$id'";
    runQuery($query);
}

if (isset($_GET['delete-record'])) {
    $id = mb_htmlentities($_GET['delete-record']);
    if ($id != "admin") {
        $stmt = $con->prepare("delete from " . $g_projectSlug . "_users where id=?");
        $stmt->bind_param("s", $id);
        if (!$stmt->execute()) {
            echo "err";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <? include("./includes/views/head2.php"); ?>
</head>

<body class="body-padding body-p-top">

    <!-- header start -->
    <? include("./includes/views/navbar.php"); ?>
    <!-- header end -->

    <!-- profile right sidebar start -->
    <!-- profile right sidebar end -->

    <div class="right-sidebar-btn d-lg-block d-none">
        <button class="header-btn theme-settings-btn"><i class="fa-light fa-gear"></i></button>
    </div>

    <!-- right sidebar start -->
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
                        <h5>Customers</h5>
                        <div class="btn-box d-flex gap-2">
                            <div class="col mr-3">
                                <buton class="btn btn-sm btn-primary w-100 " data-toggle="modal" data-target="#create_record_modal">
                                    <i class="fas fa-plus"></i>
                                    New Record</button>
                            </div>
                            <div id="tableSearch"></div>

                        </div>
                    </div>

                    <!-- Table Body -->
                    <div class="panel-body">
                        <div class="table-filter-option">
                            <div class="row g-3">
                                <div class="col-xl-10 col-9 col-xs-12" hidden>
                                    <form class="row g-2" method="post">
                                        <div class="col">
                                            <select class="form-control form-control-sm" name="bulk_actions">
                                                <option value="0">Bulk action</option>
                                                <option value="1">Move to trash</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                                    <div id="employeeTableLength">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-dashed table-hover digi-dataTable all-customer-table table-striped" id="allCustomerTable">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>Last Active</th>
                                    <th>Date Registered</th>
                                    <th>Email</th>
                                    <!-- <th>Orders</th>
                                    <th>Total Spend</th>
                                    <th>AOV</th> -->
                                    <th>Country/Region</th>
                                    <th>City</th>
                                    <th>Postal Code</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "select t.*, count(o.id) as total, sum(o.price) as total_spend, avg(o.price) as avg_price from jeoXillityCrm_users t LEFT JOIN jeoXillityCrm_orders o on t.id=o.customer where t.role='customer' GROUP BY t.id order by t.timeAdded desc";

                                $results = getAll($con, $query);
                                foreach ($results as $row) { ?>
                                    <tr>

                                        <td>
                                            <div class="digi-dropdown dropdown d-inline-block">
                                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="fa-regular fa-angle-down"></i></button>
                                                <ul class="digi-dropdown-menu dropdown-menu dropdown-slim dropdown-menu-sm">
                                                    <li>
                                                        <a href="edit-profile.php?customer_id=<?php echo $row['id']; ?>" class="btn">
                                                            <span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span>
                                                            View/Edit</a>
                                                        <a href="#" class="btn" data-toggle="modal" data-target="#create_record_modal" data-mydata='<?php echo  htmlspecialchars(json_encode($row, JSON_UNESCAPED_UNICODE)); ?>'><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span>Edit</a>

                                                    </li>
                                                    <li>
                                                        <a href="view-profile.php?customer_id=<?php echo $row['id']; ?>" class="btn">
                                                            <span class="dropdown-icon"><i class="fa fa-eye"></i></span>
                                                            View</a>
                                                    </li>
                                                    <a href="#" data-toggle="modal" data-target="#delete_record" data-url="?<? echo generateUrlParams() ?>delete-record=<?php echo $row['id'] ?>" class="btn">
                                                        <span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span>
                                                        Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <?php
                                        $date = $row['timeAdded'];
                                        $original_date = date('F d, Y', $date);
                                        ?>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?= $original_date ?></td>
                                        <td><?= $original_date ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <!-- <td><?php echo $row['total'] ?></td>
                                        <td>$<?php echo $row['total_spend'] != "" ? $row['total_spend'] : 0; ?></td>
                                        <td>$<?php echo $row['avg_price'] != "" ? $row['avg_price'] : 0; ?></td> -->
                                        <td><?php echo $row['country'] ?></td>
                                        <td><?php echo $row['city'] ?></td>
                                        <td><?php echo $row['zip'] ?></td>
                                        <td>
                                            <?php if ($row['status'] == 'Inactive') : ?>
                                                <span class="badge bg-danger">Inactive</span>
                                            <?php endif; ?>
                                            <?php if ($row['status'] == 'Active') : ?>
                                                <span class="badge bg-success">Active</span>
                                            <?php endif; ?>
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

    <div class="modal fade" id="create_record_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Add/Edit</h5>
                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-dismiss="modal" aria-label="Close"><i class="fa-light fa-xmark"></i></button>
                    </div>
                    <div class="modal-body row">

                        <div class=" col-6 mb-3">
                            <label>Customer Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="col-6 mb-3">
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="col-6 mb-3">
                            <label id="">Phone Number</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="col-6 mb-3">
                            <label id="">Customer Relationship</label>
                            <select name="relationship" id="relationship" class="form-control">
                                <option value="Owner">Owner</option>
                                <option value="Manager">Manager</option>
                                <option value="Employee">Employee</option>
                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label id="">Country</label>
                            <input type="text" name="country" class="form-control">
                        </div>

                        <div class="col-6 mb-3">
                            <label id="">City</label>
                            <input type="text" name="city" class="form-control">
                        </div>
                        <div class="col-6 mb-3">
                            <label id="">Postcode</label>
                            <input type="text" name="postcode" class="form-control">
                        </div>
                        <div class="col-6 mb-3">
                            <label id="">Internal Notes</label>
                            <textarea name="notes" col="5" rows="6" class="form-control">

                            </textarea>
                        </div>


                        <div class="mb-3">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <?php foreach ($status_options as $i => $option) { ?>
                                    <option value="<?php echo $i ?>"><?php echo $option ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <input type="text" name="actionId" value="" hidden>

                        <div class="row">
                            <div class="col-6">
                                <!-- <button type="button" class="btn btn-sm btn-danger"
                                    id="btn-delete-event">Delete</button> -->
                            </div>
                            <div class="col-6 text-end">
                                <button type="button" class="btn btn-sm btn-light me-1" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-sm btn-success" name="create_package" value="Submit">
                                <!-- <button type="submit" class="btn btn-sm btn-success" id="btn-save-event">Save</button> -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $('form').on('submit', function(e) {
                e.preventDefault();

                var formData = $(this).serialize();
                var email = $("input[name='email']").val();
                var actionId = $("input[name='actionId']").val();

                if (email == "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please Add Email addrres',
                    });
                }
              else{
                $.ajax({
                    url: '', // same page
                    type: 'POST',
                    data: {
                        check_email: true,
                        email: email,
                        actionId: actionId
                    },
                    success: function(response) {
                        var data = JSON.parse(response);
                        if (data.exists && (actionId == "")) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'This email already exists!',
                            });
                        } else {
                            // Proceed with form submission if the email doesn't exist
                            $.ajax({
                                url: '', // same page
                                type: 'POST',
                                data: {
                                    formData: formData, // Spread the existing form data
                                    create_package: true // Add the create_package key with a value of true
                                },
                                success: function(response) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: 'Customer saved successfully!',
                                    }).then(() => {
                                        location.reload(); // Reload the page or close the modal as needed
                                    });
                                }
                            });
                        }
                    }
                });
              }
            });

            $("#create_record_modal").on('show.bs.modal', function(e) {
                var mydata = $(e.relatedTarget).data('mydata');
                $("input[type='checkbox']").prop('checked', false);
                if (mydata != null) {
                    $("#modelTitle").html("Update");
                    $("input[name='name']").val(mydata['name'])
                    $("input[name='email']").val(mydata['email'])
                    $("input[name='phone']").val(mydata['phone'])
                    $("input[name='relationship']").val(mydata['relationship'])
                    $("input[name='country']").val(mydata['country'])
                    $("input[name='city']").val(mydata['city'])
                    $("input[name='postcode']").val(mydata['post_office'])
                    // $("input[name='country']").val(mydata['country'])
                    $("select[name='status']").val(mydata['status'])
                    $("textarea[name='notes']").val(mydata['description'])

                    $("input[name='actionId']").val(mydata['id'])
                } else {
                    $("#modelTitle").html("Insert");
                    $("input[name='name']").val("")
                    $("input[name='email']").val("")
                    $("input[name='phone']").val("")
                    $("input[name='relationship']").val("")
                    $("input[name='country']").val("")
                    $("select[name='status']").val("")
                    $("select[name='notes']").val("")


                    $("input[name='actionId']").val("")
                }
            });
        })
    </script>

    <? include("./includes/views/footerjs.php"); ?>


</body>



</html>