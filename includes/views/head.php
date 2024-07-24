<base href="">
<meta charset="utf-8" >
<title><?echo $g_projectTitle?> | Dashboard</title>
<meta name="description" content="<?echo $g_projectTitle?> | Dashboard | Anomoz Softwares">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!--begin::Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

<!--begin::Page Vendors Styles(used by this page) -->
<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

<!--begin::Global Theme Styles(used by all pages) -->
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.php" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="<?echo $g_modules_global['faviconlogo']?>" />
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-mzrmE5z5VXn1hRiyl3JfzpJzVU5U4f5l/5er5ncfF5Bx5ii+z5C5C5C5C5C5C5C5C5C5" crossorigin="anonymous">-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

<link rel="manifest" href="./webmanifest.json">
<link rel="apple-touch-icon" href="<?echo $g_modules_global['logo']?>">
<meta name="apple-mobile-web-app-status-bar" content="<?echo $g_primaryColor?>">
<meta name="theme-color" content="<?echo $g_primaryColor?>">
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.png">
<link rel="stylesheet" href="assets/vendor/css/all.min.css">
<link rel="stylesheet" href="assets/vendor/css/jquery-ui.min.css">
<link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="assets/vendor/css/select2.min.css">
<link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">
<link rel="stylesheet" id="rtlStyle" href="#">





<!--contains options for colored navbar, dark theme, and leftnavbar-->
<?require("./includes/views/theming_options.php");?>


<?if($g_modules_global['enablePWA']){?>
    <script>
        if('serviceWorker' in navigator){
      navigator.serviceWorker.register('./sw.js')
        .then(reg => console.log('service worker registered'))
        .catch(err => console.log('service worker not registered', err));
    }
    </script>
<?}?>

<!--general styling-->

<style>
    select {
        background: #112143 !important;
    }

    /* body{
        color:#2f2f2f;
    }
    .kt-portlet__body{
        overflow:auto;
    }
    .kt-login.kt-login--v1 .kt-login__wrapper {
        background:#f9f9fc !important;
    } */
    
</style>
