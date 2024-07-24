<?

$menuItems = [];
// $menuItems[] = ['home.php', 'Home'];


if($logged==1){
    // if(checkGlobalPermission('enableShowNotifications')){$menuItems[] = ['notifications.php', 'notifications'];} // it is custom for count
    // if(checkGlobalPermission('enableMessages')){$menuItems[] = ['messages.php', ''];}
    
    
    if(checkGlobalPermission('enableCustomerManagement')){$menuItems[] = ['customerds.php', ''];}
    
    if(checkGlobalPermission('enableEmployeeManagement') && $session_role=="admin"){$menuItems[] = ['employees.php', ''];}
    if(checkGlobalPermission('enableCalendarReminder')){$menuItems[] = ['calendar_reminders.php', 'Calendar'];}
    if(checkGlobalPermission('enableEmployeeScheduling')){$menuItems[] = ['employee_schedule.php', ''];}
    if(checkGlobalPermission('enableInvoices')){$menuItems[] = ['invoices.php', ''];}
    if(checkGlobalPermission('enableTasksModule')){$menuItems[] = ['tasks.php', ''];}
    if(checkGlobalPermission('enableFileStorage')){$menuItems[] = ['files_storage.php', ''];}
    
    if(checkGlobalPermission('enableCustomerSecondaryFields_crud')){$menuItems[] = ['customer_fields.php', ''];}
    if(checkGlobalPermission('enableleaveManager')){$menuItems[] = ['leave_manager.php', ''];}
    // if(checkGlobalPermission('enableAssets')){$menuItems[] = ['assets.php', ''];}
    if(checkGlobalPermission('enableEmployeeTimeTracking')){$menuItems[] = ['time_tracker.php', ''];}
    if(checkGlobalPermission('enableAnalytics')){$menuItems[] = ['analytics.php', ''];}
    
    if(checkGlobalPermission('enableTicketManagement')){$menuItems[] = ['tickets.php', ''];}
    if(checkGlobalPermission('enableSitesManagement')){$menuItems[] = ['sites.php', ''];}
    if(checkGlobalPermission('enablePipelineManagement')){$menuItems[] = ['view_pipeline.php', 'Pipelines'];}
    if(checkGlobalPermission('enableCampaignsManagement')){$menuItems[] = ['campaigns.php', ''];}
    
    if(checkGlobalPermission('enableProjectsManagement')){$menuItems[] = ['projects.php', ''];}
    if(checkGlobalPermission('enableProductsManagement')){$menuItems[] = ['products.php', ''];}
    if(checkGlobalPermission('enableNewsletters')){$menuItems[] = ['newsletter.php', ''];}
    if(checkGlobalPermission('enableQuestionnaireManagement')){$menuItems[] = ['questionnaires.php', ''];}
    if(checkGlobalPermission('accountSettingsEnabled')){$menuItems[] = ['settings.php', ''];}
    if(checkGlobalPermission('enableViewAllAvailableModules')){$menuItems[] = ['webview.php?u='.urlencode("https://projects.anomoz.com/ke/generate_project_requirements.php?iframe=1"), 'CRM Modules'];}
    if(checkGlobalPermission('enableViewOtherProjects')){$menuItems[] = ['webview.php?u='.urlencode("https://projects.anomoz.com?iframe=1"), 'Other Projects'];}
    
    // $menuItems[] = ['?logout=1', 'Logout'];

}

$icons_array = [
    "?logout=1" => "la la-sign-out",  
    'all_functions.php' => 'la la-cogs',
    'analytics.php' => 'la la-chart-bar',
    'api.php' => 'la la-code',
    'assets.php' => 'la la-image',
    'attendance.php' => 'la la-calendar-check',
    'calendar_reminders.php' => 'la la-bell',
    'campaignView.php' => 'la la-bullhorn',
    'campaigns.php' => 'la la-bullhorn',
    'chatGPT.php' => 'la la-comments',
    'coupons.php' => 'la la-tags',
    'cronjob_campaign.php' => 'la la-clock',
    'cronjob_email.php' => 'la la-clock',
    'crud.php' => 'la la-database',
    'cruds.php' => 'la la-database',
    'customer_fields.php' => 'la la-users',
    'customers.php' => 'la la-users',
    'database.php' => 'la la-database',
    'email_inbox.php' => 'la la-envelope',
    'email_servers.php' => 'la la-server',
    'embed_lead_form.php' => 'la la-code',
    'employee_schedule.php' => 'la la-calendar',
    'employees.php' => 'la la-user',
    'files_storage.php' => 'la la-folder',
    'forget_password.php' => 'la la-lock',
    'formpage.php' => 'la la-clipboard',
    'g_edit.php' => 'la la-edit',
    'getEmails.php' => 'la la-envelope',
    'global.php' => 'la la-globe',
    'home.php' => 'la la-home',
    'index.php' => 'la la-list',
    'inventory_action.php' => 'la la-boxes',
    'invoices.php' => 'la la-file-invoice',
    'knowledge_base.php' => 'la la-book',
    'lead_generation.php' => 'la la-handshake',
    'leads.php' => 'la la-user-plus',
    'leave_manager.php' => 'la la-calendar-times',
    'login.php' => 'la la-sign-in-alt',
    'mailbox.php' => 'la la-inbox',
    'menu.php' => 'la la-bars',
    'messages.php' => 'la la-comments',
    'newPermission.php' => 'la la-user-lock',
    'newsletters.php' => 'la la-newspaper',
    'notifications.php' => 'la la-bell',
    'orders.php' => 'la la-shopping-cart',
    'password_reset.php' => 'la la-key',
    'payment.php' => 'la la-money-bill',
    'payment_webook.php' => 'la la-money-bill-wave',
    'pdf.php' => 'la la-file-pdf',
    'permission.php' => 'la la-user-lock',
    'permission_data.php' => 'la la-lock-open',
    'pipelines.php' => 'la la-tasks',
    'pricing.php' => 'la la-dollar-sign',
    'print.php' => 'la la-print',
    'products.php' => 'la la-shopping-bag',
    'project_view.php' => 'la la-project-diagram',
    'projects.php' => 'la la-folder-open',
    'questionnaires.php' => 'la la-question',
    'questionnaires_questions.php' => 'la la-question-circle',
    'questionnaires_submit.php' => 'la la-clipboard-check',
    'referrals.php' => 'la la-share',
    'responses.php' => 'la la-comments',
    'settings.php' => 'la la-cog',
    'signup.php' => 'la la-user-plus',
    'tasks.php' => 'la la-tasks',
    'test.php' => 'la la-flask',
    'tickets.php' => 'la la-ticket-alt',
    'time_tracker.php' => 'la la-stopwatch',
    'update_pipeline.php' => 'la la-tasks',
    'view_order.php' => 'la la-file-invoice',
    'view_pipeline.php' => 'la la-tasks',
    'view_user.php' => 'la la-user-circle',
    'webview.php' => 'la la-globe',
    'widget.php' => 'la la-puzzle-piece',

];


$menuItemTemp = [];
foreach($menuItems as $menuItem){
    $menuTitle = ucfirst($menuItem[1]);
    if($menuTitle==""){
        $menuTitle =  str_replace("_"," ", $menuItem[0]);
        $menuTitle =  ucwords(str_replace(".php","", $menuTitle));
    }
    $menuItemTemp[] = [$menuItem[0], $menuTitle];
}
$menuItems = $menuItemTemp;
?>

<style>

.kt-header-menu .kt-menu__nav > .kt-menu__item {
    white-space: pre;
}

.badge-more-menu {
  color: #212529;
  background-color: #4968a012;
  border: 1px #4968a0 solid;
}
    
</style>
<?if(!isset($_GET['print'])){?>
<div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
	<div class="kt-container  kt-grid__item kt-grid__item--fluid">

		<!-- begin: Header Menu -->
		<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
		<div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
		    
		    <?if(checkGlobalPermission('enableLeftMenu')){?>
			<button class="kt-aside-toggler kt-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
			<?}?>
			<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
			    <div class="col-3 mx-auto my-auto" >
					<a href="./crm-dashboard.php.php" class="" style="width: 80px;display:block;">
						<img src="<?echo $g_modules_global['logo']?>" height="40px" class=""></span>
					</a>
				</div>
				<ul class="kt-menu__nav">
				    <?if($logged==1){?>
					    <li class="kt-menu__item <?if($filenameLink=='home.php'){echo 'kt-menu__item--here';}?>" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                            <a href="./home.php" class="kt-menu__link"><i class="kt-menu__link-icon <?echo $icons_array["home.php"]?> text-primary"></i><span class="kt-menu__link-text">Home</span></a>
                        </li>
                        
                        <?if(checkGlobalPermission('enableMessages') ){?>
                            <?$unreadNotf = getRow($con, "select *, count(*) cnt from " . $g_projectSlug . "_messages where toUser='$session_userId' and status='new' limit 1")['cnt'];?>
                            <li class="kt-menu__item <?if($filenameLink=='messages.php'){echo 'kt-menu__item--here';}?>" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                <a href="./messages.php" class="kt-menu__link"><span class="kt-menu__link-text">Messages</span>
                                    <?if($unreadNotf>0){?>
                                    <i class=" ml-2 badge badge-info"><?echo $unreadNotf?></i>
                                    <?}?>
                                </a>
                            </li>
                        <?}?>
                        
                        <?
                        $allowedItemsonNavbar = 9;
                        $nItemsDisplayed = 0;
                        foreach($menuItems as $menuItem){
                            if($nItemsDisplayed<$allowedItemsonNavbar){?>
                            <li class="kt-menu__item <?if($filenameLink==$menuItem[0]){echo 'kt-menu__item--here';}?>" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                <a href="./<?echo $menuItem[0]?>" class="kt-menu__link"><i class="kt-menu__link-icon <?echo $icons_array[$menuItem[0]]?> text-primary"></i><span class="kt-menu__link-text"><?echo $menuItem[1]?></span></a>
                            </li>
                        <?}$nItemsDisplayed+=1;}?>
                        
                        <?if($nItemsDisplayed>$allowedItemsonNavbar){?>
                            <li class=" kt-menu__item <?if($filenameLink=='menu.php'){echo 'kt-menu__item--here';}?>" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                <a href="./menu.php" class="kt-menu__link badge badge-more-menu"><span class="kt-menu__link-text">Menu</span></a>
                            </li>
                        <?}?>

                        <?if($session_role=="admin"){?>
                            
                        <?}?>
                        
                        <!--dropdown start-->
                    	<? $dropdownItems = [
						    ['projects.php', 'Project'],
						    ['projects1.php', 'Project 1'],
						    ['projects3.php', 'Project 3'],
						 ];?>
                        <li class=" <?if(isActiveMenuItem($dropdownItems, $filenameLink)){echo 'kt-menu__item--here';}?> kt-menu__item  kt-menu__item--open  kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open no" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                            <span class="kt-menu__link-text"><i class="la la-comments"></i>Dropdown Example <i class="fa fa-chevron-down"></i></span></a>
							<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left p-0">
								<ul style="display: grid;" class="kt-menu__subnav">
									<?foreach ($dropdownItems as $dropdownItem) { ?>
										<li class="kt-menu__item <?if($filenameLink==$dropdownItem[0]){echo 'kt-menu__item--here';}?>" aria-haspopup="true">
											<a href="./<? echo $dropdownItem[0] ?>" class="kt-menu__link">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text"><? echo ($dropdownItem[1]) ?></span>
											</a>
										</li>
									<? } ?>
								</ul>
							</div>
						</li>
						<!--dropdown end-->
                        
						
						<?if($logged==1){?>
						    <!--<li class=" kt-menu__item" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
								<a href="./?logout=1" class="kt-menu__link btn btn-label-danger text-danger btn-sm btn-bold btn-font-md"><span class=" ">Logout</span></a>
                            </li>-->
						<?}?>

                    <?}else{?>
                        <li class="kt-menu__item <?if($filenameLink=='login.php'){echo 'kt-menu__item--here';}?>" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                            <a href="./login.php" class="kt-menu__link"><span class="kt-menu__link-text">Login</span></a>
                        </li>
                        <?if(checkGlobalPermission('signupEnabled')){?>
                            <li class="kt-menu__item <?if($filenameLink=='signup.php'){echo 'kt-menu__item--here';}?>" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                <a href="./signup.php" class="kt-menu__link"><span class="kt-menu__link-text">Signup</span></a>
                            </li>
                        <?}?>
                    <?}?>
                </ul>
			</div>
		</div>

		<?if($logged==1){?>
		    <div class="kt-header__topbar kt-grid__item">
            
            <?if(checkGlobalPermission('enableShowNotifications')){?>
            <?$unreadNotf = getRow($con, "select count(*) cnt from ".$g_projectSlug."_notifications where to_user_id='$session_userId' and status='new' order by created_at desc")['cnt'];?>
            <div class="kt-header__topbar-item dropdown">
				<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
					<span class="kt-header__topbar-icon"><i class="la la-bell"></i></span>
					<?if($unreadNotf>0){?>
					<span class="kt-badge kt-badge--danger"></span>
					<?}?>
				</div>
				<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl" style="">
					<form>

						<!--begin: Head -->
						<div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b" style="padding-bottom: 25px !important;">
							<h3 class="kt-head__title">
								Notifications
								<?if($unreadNotf>0){?>
								&nbsp;
								<span class="btn btn-label-primary btn-sm btn-bold btn-font-md"><?echo $unreadNotf?> new</span>
								<?}?>
							</h3>
							
						</div>

						<!--end: Head -->
						<div class="tab-content">
							<div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
							    <?if($unreadNotf==0){?>
								<div class="kt-grid kt-grid--ver" style="min-height: 200px;">
									<div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
										<div class="kt-grid__item kt-grid__item--middle kt-align-center">
											All caught up!
											<br>No new notifications.
										</div>
									</div>
								</div>
								<?}else{?>
								<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll ps" data-scroll="true" data-height="300" data-mobile-height="200" style="height: 300px; overflow: hidden;">
									<?$query= "select * from ".$g_projectSlug."_notifications where to_user_id='$session_userId' and status='new' order by created_at desc";
                                    $result = $con->query($query);
                                    while($row = $result->fetch_assoc()) { ?>
									<a href="./notifications.php" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="la la-chevron-right  kt-font-success"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title">
												<?echo $row['title']?>
											</div>
											<div class="kt-notification__item-time">
												<?echo $row['created_at']?>
											</div>
										</div>
									</a>
									<?}?>
									
								    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div>
								</div>
							    <?}?>
							</div>
							<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
							    
							</div>
						</div>
					</form>
				</div>
			</div>
			<?}?>
								
								
			<!--begin: User bar -->
			<div class="kt-header__topbar-item kt-header__topbar-item--user">
			    
									
									
				<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
					<span class="kt-header__topbar-welcome kt-visible-desktop">Hi,</span>
					<span class="kt-header__topbar-username kt-visible-desktop"></span>
				    <?if($session_data['profile_pic']!=''){?>
					    <img src="./uploads/<?echo $session_data['profile_pic']?>" alt="Pic" style="width: 42px;object-fit: cover;" class=" kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold" onerror="this.src='https://cdn-icons-png.flaticon.com/512/3177/3177440.png';" />
					<?}else{?>
					    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><?echo substr($session_name, 0, 1);?></span>
				    <?}?>
				</div>
				<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

				<div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
						<div class="kt-user-card__avatar">
						    <?if($session_data['profile_pic']!=''){?>
							    <img alt="Pic" src="./uploads/<?echo $session_data['profile_pic']?>" style="width: 60px;object-fit: cover;" class=" kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold" onerror="this.src='https://cdn-icons-png.flaticon.com/512/3177/3177440.png';" />
							<?}else{?>
						        <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><?echo substr($session_name, 0, 1);?></span>
						    <?}?>
						</div>
						<div class="kt-user-card__name">
							<?echo $session_name?>
						</div>
						<div class="kt-user-card__badge">
							<a href="./?logout=1" class="btn btn-label-danger btn-sm btn-bold btn-font-md">Logout</a>
						</div>
					</div>

                    <?if(checkGlobalPermission('accountSettingsEnabled')){?>
                    <style>
                        .kt-notification .kt-notification__item::after {display: none;}
                    </style>
                    <div class="kt-notification">
						<a href="./settings.php" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="fa fa-gear kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title kt-font-bold">
									Settings
								</div>
								<div class="kt-notification__item-time">
									Account settings 
								</div>
							</div>
						</a>
					</div>
					<?}?>
					<!--end: Navigation -->
				</div>
			</div>

		</div>
		<?}else{?>
		<?}?>

		<!-- end:: Header Topbar -->
	</div>
</div>
<?}?>


<?if(!in_array($g_filename, ["login.php","signup.php", "forget_password.php", "password_reset.php"])){?>

<!--top blue bar-->
<div class="shortBlueBackgroundContainer kt_body">
    <div class="shortBlueBackground useAsMask lightBlue">
        <div class="shape-container">
            <div class="shape-first"></div>
            <div class="shape-second"></div>
            <div class="shape-third"></div>
        </div>
    </div>
</div>
<div class="css-1nb25wk pt-3 kt-container kt_body">
    <div class="row">
        <div class="col-md-6">
            <div class="css-1meepih">
                <h1 class="greetingCloudText greetingCloudTitle">
                    <?
                    if($page_name==""){$page_name = ucwords(str_replace("_", " ", str_replace(".php", "", $g_filename)));}?>
                    <a href="./home.php" class="text-white"><i class="fa fa-home"></i></a> > <i class="kt-menu__link-icon <?echo $icons_array[$g_filename]?> text-white"></i> <a href="" class="bold text-white font-weight-bold" ><?echo $page_name?></a>  
                </h1>
                <h4 class="greetingCloudText greetingCloudSubtitle">Hi there,
                    <?if($session_name==""){?>Visitor
                    <?}else{echo $session_name;}?>! Let's make your business journey a
                    success.</a>
                </h4>
            </div>
        </div>
        <div class="col-md-6">
            <div class=" float-right">
                <a href="<?if(!$g_modules_global['accountSettingsEnabled']){?>#<?}?>./settings.php"
                    class="mt-3 btn btn-light">Account Settings</a>
                <a href="./?logout=1" class="mt-3 btn btn-danger ml-2">Logout</a>
            </div>
        </div>
    </div>
</div>
<?}?>