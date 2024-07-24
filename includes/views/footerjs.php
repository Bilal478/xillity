



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>

<script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>

<script src="assets/vendor/js/ckeditor.js"></script>

<script src="assets/vendor/js/jquery.uploader.min.js"></script>

<script src="assets/vendor/js/select2.min.js"></script>

<script src="assets/vendor/js/moment.min.js"></script>

<script src="assets/vendor/js/bootstrap-material-datetimepicker.js"></script>

<script src="assets/vendor/js/selectize.min.js"></script>

<script src="assets/vendor/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/main.js"></script>

<script src="assets/js/select2-init.js"></script>

<script src="assets/js/add-product.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="assets/vendor/js/jquery-ui.min.js"></script>

<script src="assets/vendor/js/jquery.dataTables.min.js"></script>






    



<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> -->

<!--end::Global Theme Bundle -->
<!--begin::Page Vendors(used by this page) -->
<!--end::Page Vendors -->
<!--begin::Page Scripts(used by this page) -->

<div class="modal fade" id="delete_record" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background:#fd2752">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button type="button" class="btn btn-danger" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">This action cannot be reversed.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <a href="#sd" id="delete-project">
                    <button type="button" class="btn btn-danger">Yes</button>
                </a>
            </div>
        </div>
    </div>
</div>
	
<script>
$(document).ready(function(){
  $("#delete_record").on('show.bs.modal', function (e) {
    console.log("Modal Opened");
    //get data-url attribute of the clicked element
    var url = $(e.relatedTarget).data('url');
    console.log("modal opened", url);
    $("#delete-project").attr("href", url);
  });
});


</script> 
	
<?if($g_modules_global['enableImport']){?>
    <div class="modal fade" id="bulk_import_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modelTitle">Bulk Import</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					
					<form class="kt-form" action="" method="Post" enctype="multipart/form-data">
						<div class="kt-portlet__body">
						    <div>
                                <div class="upload_file_box">
                                   
                                    <div class="form-group">
                                        <label>Bulk Upload Excel File</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="excel_file" name="import_excel_file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                            <label class="custom-file-label" for="excel_file">Choose file</label>
                                        </div>
                                        
                                        <?
                                        $module_and_sample_files = [
                                            "customers.php" => "./includes/sample_import_file.xlsx",
                                            "planes.php" => "./includes/sample_import_file_planes.xlsx",
                                        ];
                                        
                                        $sample_file = $module_and_sample_files[$g_filename];
                                        if($sample_file==""){echo "./includes/sample_import_file.xlsx";}
                                        ?>
                                        
                                        <a href="<?echo $sample_file?>" download=""><small class="text-primary">Sample File</small></a>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <input type="submit" name="submit" id="submit_form" class="btn btn-block btn-primary" value="SUBMIT">
                                 
                                </div>
                            </div>
                              
						</div>
					</form>
				</div>
			
			</div>
		</div>
	</div>
<?}?>









