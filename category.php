<?require("./global.php");


$main_category = convertArrayToIndexArray(["fashion","jewellery","Bag","Smart Phone","Watch"]);
$display_type = convertArrayToIndexArray(["Default","Products","subcategories","Both"]);

if(isset($_POST['save'])){
    $actionId      = $_POST['actionId'];
    $name          = $_POST['cat_name'];
    $main_category = $_POST['main_category'];
    $icon          = $_POST['icon'];
    $description   = $_POST['description'];
    $display_type  = $_POST['display_type'];
    $thumbnail     = $_POST['thumbnail'];

    if($actionId==""){
        $id = generateRandomString();
        $actionId = $id;
        $query = "insert into jeoXillityCrm_category set id='$id' , category_name='$name', main_category='$main_category', category_icon='$icon', description='$description', display_type='$display_type', category_thumbnail='$thumbnail',  timeAdded='$timeAdded', userId='$session_userId' ";
    }else{
        $query = "update jeoXillityCrm_category set category_name='$name', main_category='$main_category', category_icon='$icon', description='$description', display_type='$display_type', category_thumbnail='$thumbnail' where id='$actionId' ";
    }
    runQuery($query);

    header("Location: ./category.php?".generateUrlParams_return(["m"=>"Data was saved successfully!","type"=>"success"]));exit();

}

if(isset($_GET['delete-category'])){
    $id = escape($_GET['delete-category']);
        $stmt = $con->prepare("delete from jeoXillityCrm_category where id='$id'");
        mysqli_query($con,"delete from jeoXillityCrm_category where id='$id'");
        // runQuery($query);
        // $stmt->bind_param("s", $id);
        // if(!$stmt->execute()){echo "err";}
    
}
// Check if the apply button is clicked
if (isset($_POST['applyBulkAction'])) {
    $selectedCategoriesJSON = $_POST['selectedCategoriesJSON'];
    $selectedCategories = json_decode($selectedCategoriesJSON);

    $choice = $_POST['choice'];

    foreach ($selectedCategories as $categoryId) {
        // Perform the bulk action based on the selected choice
        switch ($choice) {
            case 'delete':
                // Delete operation for each selected category ID
                $stmt = $con->prepare("DELETE FROM jeoXillityCrm_category WHERE id = ?");
                $stmt->bind_param("s", $categoryId);
                $stmt->execute();
                break;
           
        }
    }

    header("Location: ./category.php?" . generateUrlParams_return(["m" => "Bulk action performed successfully!", "type" => "success"]));
    exit();
}


?>

<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">
<head>
<?include("./includes/views/head2.php");?>
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
    <?include("./includes/views/navbar.php"); ?>
    <!-- header end -->


    <!-- profile right sidebar start -->
    <?include("./includes/views/rightsidebar.php"); ?>
    <!-- right sidebar end -->



    <!-- main sidebar start -->
    <?include("./includes/views/leftmenu2.php"); ?>
    <!-- main sidebar end -->



    <!-- main content start -->
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Categories</h2>
        </div>

        <div class="row g-4">
            <div class="col-xxl-4 col-md-5">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Add New Category</h5>
                    </div>
                    <div class="panel-body">
						<form method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12 mb-3">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" name="cat_name" class="form-control form-control-sm" id="categoryTitle">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Main Category</label>
                                    <select name="main_category" class="form-control form-control-sm" data-placeholder="Select">
                                        <?php foreach($main_category as $i=> $option){?>
                                            <option value="<?php echo $i?>"><?php echo $option?></option>
                                        <?}?>
                                    </select>
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Custom Category Icon</label>
                                    <input type="text" name="icon" class="form-control form-control-sm" placeholder="Fontawesome 6 pro icon name">
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea rows="5" name="description" class="form-control form-control-sm"></textarea>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Display Type</label>
                                    <select name ="display_type" class="form-control form-control-sm">
                                        <?php 
                                            foreach($display_type as $i=> $option){?>
                                                <option value="<?php echo $i?>"><?php echo $option?></option>
                                            <?}
                                        ?>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <div class="upload-category-thumbnail">
                                        <label class="form-label" id="addCatThumb">Add Category Thumbnail</label>
                                        <input  name="thumbnail"type="text" id="thumbUpload" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <div class="btn-box">
                                        <button name="save" class="btn btn-sm btn-primary">Save Category</button>
                                    </div>
                                </div>
                            </div>	
                        </form>    						
                    </div>
                </div>
            </div>

            <div class="col-xxl-8 col-md-7">
                <div class="panel">
                    <div class="panel-header">
                        <h5>All Categories</h5>
                        <div class="btn-box d-flex gap-2">
                            <div id="tableSearch"></div>
                        </div>
                    </div>


                       

                    <!-- <form action="" method="post">
                                    <button  name="delete" class="btn btn-sm btn-danger">Delete Selected Categories</button>
                                    </form> -->
                    <div class="panel-body">
                        <div class="table-filter-option">
                            <div class="row justify-content-between g-3">
                                <div class="col-xxl-4 col-6 col-xs-12">
                                <form class="row g-2 " method="post" >
                        <div class="col-8">
                            <input type="hidden" name="selectedCategoriesJSON" id="selectedCategoriesJSON">
                            <select name="choice" class="form-control form-control-sm" data-placeholder="Bulk action" required>
                                <option value="" selected disabled>Bulk action</option>
                                <!-- <option value="0">Edit</option> -->
                                <option value="delete">Move To Trash</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <button type="submit" name="applyBulkAction" class="btn btn-sm btn-primary w-100">Apply</button>
                        </div>
                    </form>
                                </div>
                                <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                                    <div id="productTableLength"></div>
                                </div>
                            </div>
                        </div>

                        <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped" id="allProductTable">
                            <thead>
                                <tr>
                                <th class="no-sort">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="markAllProduct" onchange="selectAllCheckboxes()">
                                    </div>
                                </th>

                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $query = "select * from jeoXillityCrm_category t order by t.timeAdded desc";
                                $results = getAll($con, $query);
                                foreach($results as $row){?>
                                    <tr>
                                    <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="selectedCategories[]" value="<?php echo $row['id']; ?>" onchange="updateSelectedCategories()">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-category-card">
                                                <div class="part-icon">
                                                    <span><i class="fa <?echo $row['category_icon']?>"></i></span>
                                                </div>
                                                <div class="part-txt">
                                                    <span class="category-name"><?echo $row['category_name']?></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="table-dscr"><?echo $row['description']?></span></td>
                                        <td><?echo $row['main_category']?></td>
                                        <td>
                                            <div class="btn-box">
                                                <button><i class="fa-light fa-eye"></i></button>
                                                <a href="#" class="fa-light fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#create_record_modal" data-mydata='<?php echo  htmlspecialchars(json_encode($row, JSON_UNESCAPED_UNICODE));?>' ></a>
                                                
                                                <a href="#" class="fa-light fa-trash" data-toggle="modal" data-target="#delete_record" data-url="?<?echo generateUrlParams()?>delete-category=<?php echo $row['id']?>"></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?}?>
                            </tbody>
                        </table>
                                   
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer start -->
        <?include("./includes/views/footer.php"); ?>
        <!-- footer end -->
    </div>

    <!-- main content end -->
    <?include("./includes/views/footerjs.php"); ?>
</body>
<script>
    function updateSelectedCategories() {
        var selectedCategories = [];
        $("input[name='selectedCategories[]']:checked").each(function () {
            selectedCategories.push($(this).val());
        });
        $("#selectedCategoriesJSON").val(JSON.stringify(selectedCategories));
    }

    function selectAllCheckboxes() {
        var isChecked = $("#markAllProduct").prop("checked");
        $("input[name='selectedCategories[]']").prop("checked", isChecked);
        updateSelectedCategories();
    }
</script>


<div class="modal fade" id="create_record_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modelTitle">Insert</h5>

				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<form class="kt-form" action="" method="Post" enctype="multipart/form-data">

					<div class="kt-portlet__body row">

                        <!-- modal -->
                        <div class="col-12 form-group mb-3">
                            <label>Cat name</label>
                            <input type="text" name="cat_name" class="form-control form-control-sm" >
                        </div>
                            
                        <div class="form-group col-12 mb-3">
                            <label>Main category</label>
                            <select name="main_category" class="form-control form-control-sm" >
                                <?php foreach($main_category as $i=> $option){?>
                                    <option value="<?php echo $i?>"><?php echo $option?></option>
                                <?php }?>
                            </select>
                        </div>
                            
                        <div class="form-group col-12 mb-3">
                            <label>Display type</label>
                            <select name="display_type" class="form-control form-control-sm" >
                                <?php foreach($display_type as $i=> $option){?>
                                    <option value="<?php echo $i?>"><?php echo $option?></option>
                                <?php }?>
                            </select>
                        </div>
	
                        <div class="form-group col-12 mb-3">
                            <label>Icon</label>
                            <input type="text" name="icon" class="form-control form-control-sm" >
                        </div>
                            
                        <div class="form-group col-12 mb-3">
                            <label>Description</label>
                            <textarea type="text" name="description" class="form-control"   ></textarea>
                        </div>
                            
                        <div class="form-group col-12 mb-3">
                            <label>Thumbnail</label>
                            <input type="text" name="thumbnail" class="form-control"   >
                        </div>
	
                        <input type="text" name="actionId" value="" hidden>

                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <input type="submit" name="save" value="Submit" class="btn btn-primary">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
			    </form>
		    </div>
	    </div>
    </div>
</div>


<script>
    $(document).ready(function(){
          $("#create_record_modal").on('show.bs.modal', function (e) {
            var mydata = $(e.relatedTarget).data('mydata');
            console.log("mydata->",mydata);
            $("input[type='checkbox']").prop('checked', false);
            if(mydata!= null){
            	$("#modelTitle").html("Update");            	
                $("input[name='cat_name']").val(mydata['category_name'])                
                $("select[name='main_category']").val(mydata['main_category'])                
                $("select[name='display_type']").val(mydata['display_type'])                
                $("input[name='icon']").val(mydata['category_icon'])                
                $("textarea[name='description']").val(mydata['description'])                
                $("input[name='thumbnail']").val(mydata['thumbnail'])                                
                $("input[name='actionId']").val(mydata['id'])
            }
        });
    })
</script>

</html>