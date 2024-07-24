<?if(true){?>
<style>
    .kt-notification .kt-notification__item::after {
        display:none;
    }
    .select2 s, .select2-container {
        width: 100% !important;
    }
    
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 15px !important;
    }
    .select2-results__option:first-child {
        color: <?echo $g_primaryColor?> !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
      height: 40px;
      border-radius: 14px;
      line-height: 20px !important;
    }
    .select2-container--default .select2-selection--multiple, .select2-container--default .select2-selection--single {
      border-radius: 14px;
    }
        
    .toast-title{
        color:white !important;
    }
    .btn{
        border-radius: 10px;
    }
    .btn-secondary {
      border: 1px solid #818284;
    }
    .btn-secondary:hover {
      border-color: #4e4f51;
    }
    .modal-body {
      background: #ecf2f9a3;
      border-radius: 10px;
    }
    .modal-header{
     border-radius: 10px 10px 0px 0px;
    }
    .modal .modal-content {
      border-radius: 10px;
    }
    .form-control {
      border-radius: 14px;
    }
    .kt-widget19:hover{
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,0.25) !important;
        transition: transform .5s,opacity 1s,-webkit-transform .5s;
    }
    .dataTables_filter {
       width: 50%;
       float: right;
       text-align: right;
    }
    .kt-login.kt-login--v1 .kt-login__wrapper .kt-login__body .kt-login__form .kt-form .form-group .form-control {
      background-color: #f9f9fc4f !important;
      border: 1px #e8e8e8 solid !important;
    }
    .kt-login.kt-login--v1 .kt-login__wrapper {
	    background:#e3f1ff
	}
	.kt-login.kt-login--v1 .kt-login__wrapper .kt-login__body .kt-login__form .kt-form .form-group .form-control {
        background-color: white;
	}
	.modal-content{
	    border: 1px <?echo $g_primaryColor?> solid;
	}
	.hero-1-padding{
        padding: 54px 4px 4px 44px;
    } 
    .hero-2-padding{
        padding: 20px 24px 24px;
    } 
    .modal-header .close {
      width: 2px; /* Adjust the width and height as needed */
      height: 2px;
      display: inline-block;
      position: relative;
      margin: 0.1px;
    }
    
    /* Define the "close" icon using SVG */
    .modal-header .close::before,
    .modal-header .close::after {
      content: '';
      position: absolute;
      width: 1px;
      height: 60%;
      background-color: #000; /* Adjust the color as needed */
      top: 0;
      left: 50%;
      transform: translateX(-50%);
    }
    .modal-header .close::before {
      transform: rotate(45deg);
    }
    .modal-header .close::after {
      transform: rotate(-45deg);
    }
    .modal .modal-content .modal-header .close::before {
      content: "";
    }
    .modal-header{
        padding-bottom: 5px;
    }
    @media only screen and (max-width: 730px) {
        .hero-1-padding{
            padding: 24px 4px 34px 24px;
        }
        .hero-2-padding{
            padding: 20px 24px 24px;
        }
    }
    .kt-login.kt-login--v1 .kt-login__wrapper .kt-login__body .kt-login__form .kt-login__title {
      margin-bottom: 1rem !important;
    }
    .kt-login.kt-login--v1 .kt-login__wrapper .kt-login__body .kt-login__form .kt-form {
      margin: 20px !important;
    }
    tbody{
    	background-color: #f3f5f7;
    	color: black;
    	font-size: 14px;
    }
    .table-bordered td {
        border: 3px solid white;
    }
    .add-search tbody td:first-child {
        border-left-width: 8px;
        border-left-color: <?echo $g_primaryColor?>;
        margin-left: 3px;
    	display: revert;
    }
    .dataTables_wrapper .dataTable th {
      border: 4px <?echo $g_primaryColor?> solid;
      padding: 4px;
      background: <?echo $g_primaryColor?>;
      color: white;
    }
    .table thead th, .table thead td{
        padding: 8px;
        background: <?echo $g_primaryColor?>;
        color: white;
    }
    .kt-portlet {
      border: 2px <?echo $g_primaryColor?> solid;
    }
    .kt-portlet .kt-portlet__head{
        border-bottom: 2px <?echo $g_primaryColor?> solid;
    }
    .dataTables_wrapper .dataTable th:first-child {
      border-top-left-radius: 10px;
    }
    .dataTables_wrapper .dataTable th:last-child {
      border-top-right-radius: 10px;
    }
    .table thead th:first-child {
      border-top-left-radius: 10px;
    }
    .table thead th:last-child {
      border-top-right-radius: 10px;
    }
    .btn{
        padding: 0.45rem 0.8rem;
    }
    .kt-invoice-1 .kt-invoice__body table tbody tr td {
        padding: 10px !important;
    }
    .kanban-container .kanban-item {
      border: 1px <?echo $g_primaryColor?> solid;
      margin-top: 1px;
      cursor: pointer;
    }
    a.text-danger:hover, a.text-danger:focus {
      color: #fff !important;
    }
    .modal .modal-content .modal-header .modal-title {
      color: white;
    }
    .modal-header {
      background: <?echo $g_primaryColor?>;
    }
    .modal-header .close::before, .modal-header .close::after {
      width: 3px;
      background-color: white;
    }
    .close {
      opacity: .9;
    }
    .kt-portlet{
        box-shadow: 0 .5rem 1rem rgba(0,0,0,0.15) !important;
        border-radius: 10px;
    }
    .alert{
        box-shadow: 0 .5rem 1rem rgba(0,0,0,0.15) !important;
        border-radius: 10px;
    }
    .kt-header-menu .kt-menu__nav > .kt-menu__item > .kt-menu__link .kt-menu__link-icon {
        width: 20px;
    }
    

    
    <?if(isset($_GET['print'])){?>
        .btn {
          display: none !important;
        }
    <?}?>
    
    <?
    function adjustBrightness($colorCode, $percentage) {
        $percentage = max(-100, min(100, $percentage)); // Ensure percentage is within -100 to 100 range
        
        // Extract the red, green, and blue components from the color code
        list($r, $g, $b) = sscanf($colorCode, "#%02x%02x%02x");
        
        // Adjust brightness
        $r = max(0, min(255, $r + $r * $percentage / 100));
        $g = max(0, min(255, $g + $g * $percentage / 100));
        $b = max(0, min(255, $b + $b * $percentage / 100));
        
        // Convert back to a color code
        $newColorCode = sprintf("#%02x%02x%02x", $r, $g, $b);
        
        return $newColorCode;
    }
    ?>
                            
    .shortBlueBackgroundContainer {
      position: relative;
      z-index: -1;
      width: 100%;
      height: 205px;
      margin-top: -20px;
    }
    .useAsMask.lightBlue {
      background: <?echo adjustBrightness($g_primaryColor, 20);?>;
    }
    .shortBlueBackground {
      position: absolute;
      z-index: -1;
      height: 100%;
      width: 100%;
      overflow-y: hidden !important;
    }
    .useAsMask {
      -webkit-clip-path: inset(0);
      clip-path: inset(0);
      background: #0065aa;
      overflow-x: hidden;
    }
    .shape-container {
      width: 100%;
      height: 780px;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .shape-first {
      position: absolute;
      width: 49.37%;
      height: 338.66%;
      top: -129.4%;
      background: <?echo adjustBrightness($g_primaryColor, -5);?>;
      border-radius: 40px;
      -webkit-transform: matrix(.71,.61,-.82,.71,0,0);
      transform: matrix(.71,.61,-.82,.71,0,0);
    }
    .shape-second, .shape-third {
      position: absolute;
      width: 30.5%;
      height: 202.6%;
      border-radius: 40px;
      -webkit-transform: matrix(.71,.61,-.82,.71,0,0);
      transform: matrix(.71,.61,-.82,.71,0,0);
    }
    .shape-second {
      left: 57.01%;
      top: 46.82%;
      background: <?echo adjustBrightness($g_primaryColor, 5);?>;
    }
    .shape-third {
      left: 70.4%;
      top: 23.9%;
      background: <?echo adjustBrightness($g_primaryColor, -10);?>;
    }
    .shape-second, .shape-third {
      position: absolute;
      width: 30.5%;
      height: 202.6%;
      border-radius: 40px;
      -webkit-transform: matrix(.71,.61,-.82,.71,0,0);
      transform: matrix(.71,.61,-.82,.71,0,0);
    }

    .css-1nb25wk {
      display: flex;
      flex-flow: column wrap;
        flex-direction: column;
      -moz-box-pack: justify;
      justify-content: space-between;
      margin-top: -175px;
      margin-bottom: auto;
      margin-inline: auto;
    }
    .greetingCloudTitle {
      font-size: 24px;
      font-weight: 600;
    }
    .greetingCloudText {
      color: #fff;
      font-weight: 500;
      margin: 0;
      display: inline-block;
      clear: both;
      float: left;
      padding-right: 10px;
    }
    .greetingCloudSubtitle {
      font-size: 16px;
    }
    .greetingCloudText {
      color: #fff;
      font-weight: 500;
      margin: 0;
      display: inline-block;
      clear: both;
      float: left;
      padding-right: 10px;
    }
    @media (max-width: 767px) {
      .mb-sm {
        margin-bottom: 10px; /* Adjust the margin size for small screens */
      }
      .kt-login__aside{
          max-height:300px !important;
          margin-bottom: 0px  !important;
      }
    }
    
    .kt-login__aside .shape-first {
        position: absolute;
        width: 49.37%;
        height: 88.66%;
        top: -1.4%;
        border-radius: 40px;
        -webkit-transform: matrix(.71,.61,-.82,.71,0,0);
        transform: matrix(.71,.61,-.82,.71,0,0);
    }
    
    .kt-login__aside .shape-second, .shape-third {
        position: absolute;
        width: 30.5%;
        height: 102.6%;
        border-radius: 40px;
        -webkit-transform: matrix(.71,.61,-.82,.71,0,0);
        transform: matrix(.71,.61,-.82,.71,0,0);
    }
    .kt-login__aside .shape-second {
        left: 27.01%;
        top: 26.82%;
    }
    .kt-login__aside .shape-third {
        left: 30.4%;
        top: 43.9%;
        height: 100% !important;
    }
    .kt-content{
        position: relative;
    }
    @media (min-width: 1025px){
        .kt-content {
            padding: 10px 0;
        }
    }
    .badge-white {
        column-fill: balance;
        background: white;
        padding: 3px;
    }
    
</style>


<!--is colored navigation bar-->
<?if($g_modules_global['enableColoredNavigationBar']){?>
<style>
    .kt-portlet__body{
        overflow:auto;
    }
    .kt-login.kt-login--v1 .kt-login__wrapper {
        background-color: #f5fafa !important;
    }
	.kt-header  .kt-header--fixed {
        background-color: #fcfcfc !important;
    }
	.kt-header{
        background-color: <?echo $g_primaryColor?> !important;
    }
    .kt-login.kt-login--v1 .kt-login__wrapper .kt-login__body .kt-login__form .kt-form .form-group .form-control {
      background-color: #f2f5f5 !important;
      border: 1px #e8e8e8 solid !important;
    }
    .kt-header-menu-wrapper .kt-header-menu .kt-menu__nav > .kt-menu__item > .kt-menu__link .kt-menu__link-text {
      color: #f0f0f0;
      font-weight: 500;
    }
    .kt-header-menu .kt-menu__nav > .kt-menu__item:hover:not(.kt-menu__item--here):not(.kt-menu__item--active) > .kt-menu__link .kt-menu__link-text, .kt-header-menu .kt-menu__nav > .kt-menu__item.kt-menu__item--hover:not(.kt-menu__item--here):not(.kt-menu__item--active) > .kt-menu__link .kt-menu__link-text{
        color: white;
    }
    .kt-aside-toggler span {
      background: #400cc2;
    }
    .kt-aside-toggler span::before, .kt-aside-toggler span::after {
      background: #400cc2;
    }
    .kt-header__topbar .kt-header__topbar-item.kt-header__topbar-item--user .kt-header__topbar-welcome {
      color: white;
    }
    .kt-badge.kt-badge--unified-success {
      color: white;
    }
    .kt-header-menu-wrapper .kt-header-menu .kt-menu__nav > .kt-menu__item > .kt-menu__link .kt-menu__link-text {
          color: white;
        }
     @media only screen and (max-width: 900px) {
        .kt-header-menu-wrapper .kt-header-menu .kt-menu__nav > .kt-menu__item > .kt-menu__link .kt-menu__link-text {
          color: <?echo $g_primaryColor?>;
        }
    }
    .kt-badge.kt-badge--unified-success {
      color: <?echo $g_primaryColor?>;
      background: white;
    }


</style>
<?}?>


<!--enable dark theme-->
<?if($g_modules_global['enableDarkTheme']){?>
<style>
    .kt-portlet__body{
        overflow:auto;
    }
    .kt-login.kt-login--v1 .kt-login__wrapper {
        background:#f9f9fc !important;
    }
    .kt-login.kt-login--v1 .kt-login__wrapper .kt-login__body .kt-login__form .kt-form .form-group .form-control {
      background-color: white !important;
      border: 1px #e8e8e8 solid !important;
    }
    body {
      background: #1f1f1f;
    }
    .kt-footer .kt-footer__wrapper .kt-footer__copyright {
      color: white;
    }
    .kt-footer .kt-footer__wrapper .kt-footer__copyright > a {
      color: white;
    }
    .kt-footer .kt-footer__wrapper .kt-footer__menu a {
      color: white;
    }
    .kt-header-menu-wrapper .kt-header-menu .kt-menu__nav > .kt-menu__item > .kt-menu__link .kt-menu__link-text {
      color: white;
      font-weight: 500;
    }
    .kt-aside-toggler span {
      background: white;
    }
    .kt-aside-toggler span::before, .kt-aside-toggler span::after {
      background: white;
    }
    .kt-portlet {
      border: 2px solid <?echo $g_primaryColor?>;
    }
      @media (max-width: 1024px){
        .kt-header-menu-wrapper {
          background: #000000;
        }
        .kt-header-menu-mobile {
          background-color: #000000;
        }
    
        .kt-header-menu-mobile .kt-menu__nav > .kt-menu__item.kt-menu__item--here > .kt-menu__heading, .kt-header-menu-mobile .kt-menu__nav > .kt-menu__item.kt-menu__item--here > .kt-menu__link {
          background-color: #cd0104;
        }
    }
    .kt-container--fluid{
        background:#000000;
    }
    tbody {
        background-color: black;
    }
    .table-bordered td {
      border: 1.5px solid #353535;
    }
    tbody tr:hover {
        background-color: #202020 !important;
    }
    .kt-portlet {
      background-color: #000000;
    }
    .kt-portlet .kt-portlet__head .kt-portlet__head-label .kt-portlet__head-title {
      color: white;
    }
    .dataTables_wrapper .dataTable th, .dataTables_wrapper .dataTable td {
      color: white;
    }
    body {
      color: white;
    }
    .modal-content {
      background-color: #000000;
    }
    .modal .modal-content .modal-header .modal-title {
      
      color: white;
    }
    .btn-secondary {
    
      color: white;
    }
    
    .form-control{
        background:#1f1f1f;
        color:white;
    }
    
    .kt-header-mobile {
     
      background: #000000;
    }
    .kt-header-mobile .kt-header-mobile__toolbar .kt-header-mobile__toolbar-toggler span {
      background: white;
    }
    .kt-header-mobile .kt-header-mobile__toolbar .kt-header-mobile__toolbar-toggler span::before, .kt-header-mobile .kt-header-mobile__toolbar .kt-header-mobile__toolbar-toggler span::after {
      background: white;
    }
    .kt-header-mobile .kt-header-mobile__toolbar .kt-header-mobile__toolbar-toggler span::before, .kt-header-mobile .kt-header-mobile__toolbar .kt-header-mobile__toolbar-toggler span::before {
      background: white;
    }
    .kt-header__topbar {
      background-color: #000000;
    }
    .btn-primary:hover {
      color: #fff;
      background-color: #e40105 !important;
      border-color: #e40105 !important;
    }
    .btn-brand:hover {
      color: #fff;
      background-color: #e40105 !important;
      border-color: #e40105 !important;
    }
    .kt-user-card {
      background-color: #1f1f1f;
      border: 1px #e40105 solid;
    }
    .kt-user-card.kt-user-card--skin-light .kt-user-card__name {
      color: white;
    }
    .btn.btn-label-primary {
      background-color: rgb(224, 0, 4);
      color: white;
      cursor: text !important;
    }
    .kt-header-mobile .kt-header-mobile__toolbar .kt-header-mobile__toolbar-topbar-toggler.kt-header-mobile__toolbar-topbar-toggler--active i, .kt-header-mobile .kt-header-mobile__toolbar .kt-header-mobile__toolbar-topbar-toggler:hover i {
      color: white;
    }
    .kt-header-mobile .kt-header-mobile__toolbar .kt-header-mobile__toolbar-topbar-toggler i {
      color: white;
    }
    .table {
      color: white;
    }
    .kt-badge.kt-badge--unified-success {
      color: #e40105;
      background: #f5f6fc;
    }
    .kt-badge.kt-badge--lg {
      height: 35px;
      width: auto;
      font-size: 1rem;
      padding: 0px 10px;
    }
    
    .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__head .kt-widget__title {
      color: white;
    }
    .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__subhead a {
      color: white;
    }
    .show > .btn-light.dropdown-toggle, .btn-light:focus, .btn-light.active, .btn-light:active, .btn-light:hover {
      background-color: #000000;
      border-color: #000000;
    }
    .btn-light {
      color: #212529;
      background-color: #000000;
      border-color: #000000;
      color: white;
    }
    a {
      color: white;
      text-decoration: none;
      background-color: #000000;
    }
    .kt-notification .kt-notification__item .kt-notification__item-details .kt-notification__item-title {
      color: white;
    }
    .kt-notification .kt-notification__item .kt-notification__item-details .kt-notification__item-time {
      color: white;
    }
    .kt-invoice-1 .kt-invoice__footer {
      background-color: #000000;
    }
    .kt-invoice-1 .kt-invoice__footer .kt-invoice__bank .kt-invoice__item .kt-invoice__value {
      color: white;
    }
    .kt-invoice-1 .kt-invoice__footer .kt-invoice__bank .kt-invoice__title {
      color: white;
    }
    .kt-invoice-1 .kt-invoice__footer .kt-invoice__bank .kt-invoice__item .kt-invoice__label {
      color: white;
    }
    .kt-invoice-1 .kt-invoice__body table tbody tr td {
     
      color: white;
    }
    .kt-invoice-1 .kt-invoice__body table tbody tr td:last-child {
      color: white;
    }
    .kt-invoice-1 .kt-invoice__footer .kt-invoice__total .kt-invoice__price {
      color: white;
    }
    .kt-invoice-1 .kt-invoice__footer .kt-invoice__total .kt-invoice__title {
      color: white;
    }
    .kt-invoice-1 .kt-invoice__body table thead tr th {
      color: white;
    }
    .kt-header-menu-wrapper .kt-header-menu .kt-menu__nav > .kt-menu__item.kt-menu__item--here > .kt-menu__link, .kt-header-menu-wrapper .kt-header-menu .kt-menu__nav > .kt-menu__item.kt-menu__item--active > .kt-menu__link {
      background-color: transparent;
    }



</style>
<?}?>

<!--enable left bar-->
<?if($g_modules_global['enableLeftMenu']){?>
<style>
    .kt-aside {
      width: 255px !important;
    }
    #kt_aside_menu ul.kt-menu__nav{
        margin-left: 10px;
        margin-right: 10px;
    }
    
    .kt-aside-menu .kt-menu__nav > .kt-menu__item.kt-menu__item--here {
      background: #ebf7ff;
      border-radius: 10px;
      border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
        border: 1px <?echo $g_primaryColor?> solid;
    }
    .kt-aside-menu .kt-menu__nav > .kt-menu__item:hover{
        background: #f4fbff;
         border-radius: 10px;
         border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
    }
    .kt-aside-menu .kt-menu__nav > .kt-menu__item > .kt-menu__link {
      padding: 10px 10px;
    }
    
    .1{
       border-left: 1px <?echo $g_primaryColor?> solid;
    }
   
    
    <?if($g_modules_global['enableColoredLeftMenu']){?>
    #kt_header{
        background-color: #151b22;
    }
    .kt-header-menu-mobile {
      background-color: #151b22;
    }
    .kt-header-menu-wrapper {
      background: #151b22;
    }
    .kt-header-menu-mobile .kt-menu__nav > .kt-menu__item.kt-menu__item--here > .kt-menu__heading, .kt-header-menu-mobile .kt-menu__nav > .kt-menu__item.kt-menu__item--here > .kt-menu__link {
      background-color: #2d3642;
    }
    .kt-header-menu-mobile .kt-menu__nav > .kt-menu__item:not(.kt-menu__item--parent):not(.kt-menu__item--open):not(.kt-menu__item--here):not(.kt-menu__item--active):hover > .kt-menu__heading, .kt-header-menu-mobile .kt-menu__nav > .kt-menu__item:not(.kt-menu__item--parent):not(.kt-menu__item--open):not(.kt-menu__item--here):not(.kt-menu__item--active):hover > .kt-menu__link {
      background-color: #2d3642;
    }
    .kt-header-menu-mobile .kt-menu__nav > .kt-menu__item > .kt-menu__heading .kt-menu__link-text, .kt-header-menu-mobile .kt-menu__nav > .kt-menu__item > .kt-menu__link .kt-menu__link-text {
      color: white;
    }
    .kt-header-menu-mobile .kt-menu__nav > .kt-menu__item.kt-menu__item--here > .kt-menu__heading .kt-menu__link-text, .kt-header-menu-mobile .kt-menu__nav > .kt-menu__item.kt-menu__item--here > .kt-menu__link .kt-menu__link-text {
      color: white;
    }
    .kt-aside-menu .kt-menu__nav > .kt-menu__item > .kt-menu__heading .kt-menu__link-text, .kt-aside-menu .kt-menu__nav > .kt-menu__item > .kt-menu__link .kt-menu__link-text {
      color: white;
    }
    .kt-aside-menu .kt-menu__nav > .kt-menu__item > .kt-menu__heading .kt-menu__link-icon, .kt-aside-menu .kt-menu__nav > .kt-menu__item > .kt-menu__link .kt-menu__link-icon {
      color: white;
    }
    .kt-aside-menu .kt-menu__nav > .kt-menu__item:not(.kt-menu__item--parent):not(.kt-menu__item--open):not(.kt-menu__item--here):not(.kt-menu__item--active):hover > .kt-menu__heading .kt-menu__link-text, .kt-aside-menu .kt-menu__nav > .kt-menu__item:not(.kt-menu__item--parent):not(.kt-menu__item--open):not(.kt-menu__item--here):not(.kt-menu__item--active):hover > .kt-menu__link .kt-menu__link-text {
      color: white;
    }
    .kt-aside-menu .kt-menu__nav > .kt-menu__item:not(.kt-menu__item--parent):not(.kt-menu__item--open):not(.kt-menu__item--here):not(.kt-menu__item--active):hover > .kt-menu__heading .kt-menu__link-icon, .kt-aside-menu .kt-menu__nav > .kt-menu__item:not(.kt-menu__item--parent):not(.kt-menu__item--open):not(.kt-menu__item--here):not(.kt-menu__item--active):hover > .kt-menu__link .kt-menu__link-icon {
      color: white;
    }
    .kt-aside-menu .kt-menu__nav > .kt-menu__item.kt-menu__item--here {
      background: #3c3c3c;
    }
    .kt-aside-menu .kt-menu__nav > .kt-menu__item.kt-menu__item--here {
      background: #061188;
    }
    <?}?>
    @media (min-width: 768px){
    .kt-grid.kt-grid--hor-desktop.kt-grid--desktop{
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        <?if($g_modules_global['enableColoredLeftMenu']){?>
            background-color: <?echo $g_primaryColor?>;
        <?}?>
        overflow-x: hidden;
        overflow-y: hidden;
        transition: 0.5s;
    }
    <?if(!isset($_GET['iframe'])){?>
        #kt_body{
            margin-left: 255px;
        }
        .kt_body{
            margin-left: 255px;
            width: calc(100% - 255px) !important;
        }
    <?}?>
    
    #kt_header{
            display:none;
        }
    
    @media (max-width: 768px){
        .kt-grid.kt-grid--hor-desktop.kt-grid--desktop{
            display:none;
        }
    }
    .kt-container{
        width:100%;
    }
    
    
    
</style>

<?}?>
<?}?>
