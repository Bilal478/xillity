<? require("./global.php");


if (isset($_POST['create_server'])) {
   $email = mb_htmlentities(($_POST['email']));
   //  $password = mb_htmlentities(md5(md5(sha1( $_POST['password'])).'Anomoz')); 
   $password = mb_htmlentities(($_POST['password']));
   $port_no = mb_htmlentities(($_POST['port_no']));
   $ip_address = mb_htmlentities(($_POST['ip_address']));
   // $ip_address = $_SERVER['REMOTE_ADDR'];
   $actionId = mb_htmlentities(($_POST['actionId']));
   $id = generateRandomString();
   if ($actionId == "") {
      $stmt = $con->prepare("insert into " . $g_projectSlug . "_email_servers (id, email, password, port_no, ip_address, userId) values (?,?,?,?,?,?)");
      $stmt->bind_param("ssssss", $id, $email, $password, $port_no, $ip_address, $session_userId);
      if (!$stmt->execute()) {
         echo "err";
      }
   } else {
      $query = "update " . $g_projectSlug . "_email_servers set email='$email', password = '$password', port_no='$port_no', ip_address = '$ip_address' where id='$actionId'";
      $result = $con->query($query);
   }
?><script>
      location = "email_servers.php"
   </script><?
         }

         if (isset($_GET['delete-record'])) {
            $id = mb_htmlentities($_GET['delete-record']);
            $stmt = $con->prepare("delete from " . $g_projectSlug . "_email_servers where id=?");
            $stmt->bind_param("s", $id);
            if (!$stmt->execute()) {
               echo "err";
            }
         }
         // require("./getEmails.php");   
            ?>

<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<head>

   <? include("./includes/views/head2.php"); ?>
</head>
<!-- end::Head -->

<body class="body-padding body-p-top">
   <? include("./includes/views/navbar.php"); ?>
   <div class="right-sidebar-btn d-lg-block d-none">
      <button class="header-btn theme-settings-btn"><i class="fa-light fa-gear"></i></button>
   </div>
   <? include("./includes/views/leftmenu2.php"); ?>
   <div class="main-content">


      <div class="kt-portlet kt-portlet--mobile">
         <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
               <span class="kt-portlet__head-icon">
               </span>
               <h3 class="kt-portlet__head-title">
                  Email Servers
               </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
               <div class="kt-portlet__head-wrapper">
                  <div class="kt-portlet__head-actions">
                     <a href="#" class="btn btn-primary btn-elevate btn-icon-sm" data-toggle="modal" data-target="#create_record_modal">
                        <i class="la la-plus"></i>
                        New Record
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="kt-portlet__body">
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable add-search" id="kt_table_1">
               <thead>
                  <tr>
                     <th>Email</th>
                     <th>Password</th>
                     <th>Port No.</th>
                     <th>Smtp</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?
                  $query = "select * from jeoXillityCrm_email_servers ";
                  $result = $con->query($query);
                  if (!$result) {
                     die('Error in the query: ' . $con->error);
                  }


                  while ($row = $result->fetch_assoc()) {
                     if (true) {
                  ?>
                        <tr>
                           <td><? echo $row['email']; ?></td>
                           <td><? echo $row['password']; ?></td>
                           <td><? echo $row['port_no']; ?></td>
                           <td><? echo $row['ip_address']; ?></td>
                           <td>
                              <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#create_record_modal" data-mydata='<? echo (json_encode($row, true)); ?>' style="text-decoration:none;">Edit</a>
                              <a href="#" data-bs-target="#delete_record" class="btn btn-danger" data-toggle="modal" data-target="#delete_record" data-url="?delete-record=<? echo $row['id'] ?>" style="text-decoration:none;">Delete</a>
                           </td>
                        </tr>
                  <? }
                  } ?>
               </tbody>
            </table>
            <!--end: Datatable -->
         </div>
      </div>

   </div>

   <script>
      var KTAppOptions = {
         "colors": {
            "state": {
               "brand": "#591df1",
               "light": "#ffffff",
               "dark": "#282a3c",
               "primary": "#5867dd",
               "success": "#34bfa3",
               "info": "#36a3f7",
               "warning": "#ffb822",
               "danger": "#fd3995"
            },
            "base": {
               "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
               "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
         }
      };
   </script>
   <? include("./includes/views/footer.php"); ?>
   <? require("./includes/views/footerjs.php") ?>

   <div class="modal fade" id="create_record_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="modelTitle">Add Email Servers</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form class="kt-form" action="" method="Post" enctype="multipart/form-data">
                  <div class="kt-portlet__body">
                     <div class="form-group ">
                        <div class="row w-100 my-1">
                           <div class="col-md-4">
                              <label>Email</label>
                           </div>
                           <div class="col-md-8 ">
                              <input type="text" name="email" class="form-control" required>

                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="row w-100 my-1">
                           <div class="col-md-4">
                              <label>Password</label>
                           </div>
                           <div class="col-md-8">
                              <input type="text" name="password" class="form-control" required>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="row w-100 my-1">
                           <div class="col-md-4">
                              <label>Port No.</label>
                           </div>
                           <div class="col-md-8">
                              <input type="number" min="1" name="port_no" class="form-control" required>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="row w-100 my-1">
                           <div class="col-md-4">
                              <label>IP Address</label>
                           </div>
                           <div class="col-md-8">
                              <input type="text" name="ip_address" class="form-control" required>
                           </div>
                        </div>
                     </div>
                     <input type="text" name="actionId" value="" hidden>
                  </div>
                  <div class="kt-portlet__foot mt-3">
                     <div class="kt-form__actions ">
                        <input type="submit" name="create_server" value="Submit" class="btn btn-primary">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>
<!-- end::Body -->

<script>
   $(document).ready(function() {
      $("#create_record_modal").on('show.bs.modal', function(e) {
         var mydata = $(e.relatedTarget).data('mydata');
         console.log(mydata);
         if (mydata != null) {
            $("#modelTitle").html("Update");
            $("input[name='email']").val(mydata['email'])
            $("input[name='password']").val(mydata['password'])
            $("input[name='port_no']").val(mydata['port_no'])
            $("input[name='ip_address']").val(mydata['ip_address'])
            $("input[name='actionId']").val(mydata['id'])
         } else {
            $("#modelTitle").html("Insert");
            $("input[name='email']").val("")
            $("input[name='port_no']").val("")
            $("input[name='ip_address']").val("")
            $("input[name='password']").val("")
            $("input[name='actionId']").val("")
         }
      });
   })
</script>

</html>