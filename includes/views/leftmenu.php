<?
$menuItems = [];
// $menuItems[] = ['home.php', 'Home'];
if ($logged == 1) {
	$allowedRoles = ['employee'];
	// echo $session_role;
	$userId = $session_userId;

}
?>
<div class="main-sidebar">
	<div class="main-menu">
		<ul class="sidebar-menu scrollable">
			<li class="sidebar-item">
				<a role="button" class="sidebar-link-group-title has-sub">My Favorites</a>
				<ul class="sidebar-link-group">
					<li class="sidebar-dropdown-item">
						<a href="home.php" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-headset"></i></span> <span class="sidebar-txt">CRM Dashboard</span></a>
					</li>
					<li class="sidebar-dropdown-item">
						<!-- <a href="hrm-dashboard.php" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-tie"></i></span> <span class="sidebar-txt">HRM</span></a> -->
					</li>
					<li class="sidebar-dropdown-item">
						<a href="calendar.php" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-calendar"></i></span> <span class="sidebar-txt">Calendar</span></a>
					</li>
					<li class="sidebar-dropdown-item">
						<a href="attendance.php" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-clock"></i></span> <span class="sidebar-txt">Attendance</span></a>
					</li>
				</ul>
			</li>

			<li class="sidebar-item">
				<a role="button" class="sidebar-link-group-title has-sub">Applications</a>
				<ul class="sidebar-link-group">
					<li class="sidebar-dropdown-item">
						<a role="button" class="sidebar-link has-sub" data-dropdown="crmDropdown"><span class="nav-icon"><i class="fa-light fa-user-headset"></i></span> <span class="sidebar-txt">Services</span></a>
						<ul class="sidebar-dropdown-menu" id="crmDropdown">
							<li class="sidebar-dropdown-item"><a href="company.php" class="sidebar-link">Company</a></li>
							<li class="sidebar-dropdown-item"><a href="sites.php" class="sidebar-link">Sites</a></li>
							<li class="sidebar-dropdown-item"><a href="customers.php" class="sidebar-link">Customers</a></li>
							<li class="sidebar-dropdown-item"><a href="Tickets.php" class="sidebar-link">Tickets</a></li>
							<li class="sidebar-dropdown-item"><a href="knowlageBaseArticles.php" class="sidebar-link">Knowlagebase articles</a></li>
							<li class="sidebar-dropdown-item"><a href="error-404.php" class="sidebar-link">TimeEntry</a></li>
							<li class="sidebar-dropdown-item"><a href="calendar.php" class="sidebar-link">Calendar</a></li>
							<li class="sidebar-dropdown-item"><a href="task.php" class="sidebar-link">Task</a></li>
							<li class="sidebar-dropdown-item"><a href="task_statuses.php" class="sidebar-link">Manage Task Status</a></li>
							<li class="sidebar-dropdown-item"><a href="task_priorities.php" class="sidebar-link">Manage Task Priority</a></li>
							<li class="sidebar-dropdown-item"><a href="task.php" class="sidebar-link">Manage Departments</a></li>
						</ul>
					</li>

					<li class="sidebar-dropdown-item">
						<a role="button" class="sidebar-link has-sub" data-dropdown="ecommerceDropdown"><span class="nav-icon"><i class="fa-light fa-cart-shopping-fast"></i></span> <span class="sidebar-txt">Inventory</span></a>
						<ul class="sidebar-dropdown-menu" id="ecommerceDropdown">
							<!-- <li class="sidebar-dropdown-item"><a href="add-product.php" class="sidebar-link">Add Product</a></li> -->
							<li class="sidebar-dropdown-item"><a href="all-product.php" class="sidebar-link">All Product</a></li>
							<li class="sidebar-dropdown-item"><a href="category.php" class="sidebar-link">Category</a></li>
							<li class="sidebar-dropdown-item"><a href="orders.php" class="sidebar-link">Order</a></li>
						</ul>
					</li>

					<li class="sidebar-dropdown-item">
					<li class="sidebar-dropdown-item">
						<a href="chat.php" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-messages"></i></span> <span class="sidebar-txt">Chat</span></a>
					</li>
					<li class="sidebar-dropdown-item">
						<a href="email.php" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-envelope"></i></span> <span class="sidebar-txt">Email</span></a>
					</li>
					<li class="sidebar-dropdown-item">
						<a href="invoices.php" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-file-invoice"></i></span> <span class="sidebar-txt">Invoices</span></a>
					</li>
					<li class="sidebar-dropdown-item">
					</li>
				</ul>
			</li>

			<li class="sidebar-item">
				<a role="button" class="sidebar-link-group-title has-sub">Configurations</a>
				<ul class="sidebar-link-group">
					<li class="sidebar-dropdown-item">
						<a role="button" class="sidebar-link has-sub" data-dropdown="authDropdown"><span class="nav-icon"><i class="fa-light fa-user-cog"></i></span> <span class="sidebar-txt">Settings</span></a>
						<ul class="sidebar-dropdown-menu" id="authDropdown">
							<!-- <li class="sidebar-dropdown-item"><a href="add-employee.php" class="sidebar-link">User Rolls</a></li> -->
							<li class="sidebar-dropdown-item"><a href="add-employee.php" class="sidebar-link">Department Management</a></li>
							<!-- <li class="sidebar-dropdown-item"><a href="add-employee.php" class="sidebar-link">User Rolls</a></li> -->
							<!-- <?php
									$session_userId = $_SESSION['userId'];
									?>
							<li class="sidebar-dropdown-item">
								<a href="./SystemConfigurations.php?id=<?php echo $session_userId; ?>" class="sidebar-link">System Configurations</a>
							</li> -->
							<li class="sidebar-dropdown-item"><a href="SystemConfigurations.php" class="sidebar-link">System Configurations</a></li>
							<li class="sidebar-dropdown-item"><a href="edit-profile.php" class="sidebar-link">Edit Profile</a></li>
						</ul>
					</li>
					<li class="sidebar-dropdown-item">
						<a role="button" class="sidebar-link has-sub" data-dropdown="userDropdown"><span class="nav-icon"><i class="fa-light fa-user"></i></span> <span class="sidebar-txt">Users</span></a>
						<ul class="sidebar-dropdown-menu" id="userDropdown">
							<li class="sidebar-dropdown-item"><a href="add-employee.php" class="sidebar-link">Add Users</a></li>
							<li class="sidebar-dropdown-item"><a href="add-employee.php" class="sidebar-link">User Roles</a></li>
							<!-- <li class="sidebar-dropdown-item"><a href="view-profile.php" class="sidebar-link">View Profile</a></li>
						<li class="sidebar-dropdown-item"><a href="edit-profile.php" class="sidebar-link">Edit Profile</a></li> -->
						</ul>
					</li>
				</ul>
			</li>

			<li class="sidebar-item">
				<a role="button" class="sidebar-link-group-title has-sub">Components</a>
				<ul class="sidebar-link-group">
					<!-- <li class="sidebar-dropdown-item">
					<a role="button" class="sidebar-link has-sub" data-dropdown="advanceUiDropdown"><span class="nav-icon"><i class="fa-light fa-layer-group"></i></span> <span class="sidebar-txt">Advance UI</span></a>
					<ul class="sidebar-dropdown-menu" id="advanceUiDropdown">
						<li class="sidebar-dropdown-item"><a href="sweet-alert.php" class="sidebar-link">Sweet Alert</a></li>
						<li class="sidebar-dropdown-item"><a href="nestable-list.php" class="sidebar-link">Nestable List</a></li>
						<li class="sidebar-dropdown-item"><a href="animation.php" class="sidebar-link">Animation</a></li>
						<li class="sidebar-dropdown-item"><a href="animation.php" class="sidebar-link">Chat</a></li>
						<li class="sidebar-dropdown-item"><a href="animation.php" class="sidebar-link">Email</a></li>
						<li class="sidebar-dropdown-item"><a href="animation.php" class="sidebar-link">File Manager</a></li>

						<li class="sidebar-dropdown-item"><a href="swiper-slider.php" class="sidebar-link">Swiper Slider</a></li>
					</ul>
				</li>
				<li class="sidebar-dropdown-item">
					<a href="form.php" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-memo-pad"></i></span> <span class="sidebar-txt">Forms</span></a>
				</li>
				</li> -->
					<li class="sidebar-dropdown-item">
						<a href="file-manager.php" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open"></i></span> <span class="sidebar-txt">File Manager</span></a>
					</li>
					<li class="sidebar-dropdown-item">
						<ul class="sidebar-dropdown-menu" id="levelDropdown">
						</ul>
					</li>
				</ul>
		</ul>
	</div>
</div>