<!-- begin::Page loader -->

<!-- end::Page Loader -->

<!-- begin:: Page -->
<?if(!isset($_GET['print'])){?>
<style>
    .kt-header__topbar--mobile-on .kt-header__topbar{
        z-index:1;
    }
</style>
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
	<div class="kt-header-mobile__logo">
		<a href="./">
			<img alt="Logo" src="<?echo $g_modules_global['logo']?>"  style="height:40px"/>
		</a>
	</div>
	<div class="kt-header-mobile__toolbar">
	    <!--
		<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
		-->
		<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
		<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="fa fa-ellipsis-v"></i></button>
	</div>
</div>

<!-- end:: Header Mobile -->


<!-- end:: Page -->

<!-- begin::Quick Panel -->
<?require("./includes/views/quickpanel.php")?>

<!-- end::Quick Panel -->

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
	<i class="fa fa-arrow-up"></i>
</div>

<!-- end::Scrolltop -->
<?}?>

<? if ($session_role != "admin" && $session_userId != $_SESSION['user_original_id'] && $_SESSION['user_original_id'] != "") { ?>
	<a href="./home.php?access_account=<? echo $_SESSION['user_original_id']; ?>&nosetorg=1" class="alert alert-info mb-0" style="background: #1ad91a;background: #1ad91a;
border-radius: 0px;
border: 1px solid #1ad91a;
padding: 5px;">Logged in as: <?echo $session_name?>. Click here to return to your account</a>
<? } ?>

