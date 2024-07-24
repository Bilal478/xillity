<? require("./global.php");

if (isset($_POST['submit'])) {
	$timeAdded = time();
	$id = generateRandomString();
	$email = $_POST['to_email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	sendEmailNotification_mailjet($subject, $message, $email);
	$query = "insert into " . $g_projectSlug . "_emails set id='$id' ,subject='$subject',message='$message',email='$email',from_email='dev.email.sender2@anomoz.com',date='$timeAdded',category='sent', userId='$session_userId' ";
	$stmt = $con->prepare($query);
	if (!$stmt) {
		echo "err: <code>$query</code>";
	}
	if (!$stmt->execute()) {
		echo "err: <code>$query</code>";
	}
}

?>
<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->

<head>
	<? require("./includes/views/head.php") ?>
	<link href="//projects.anomoz.com/commonAssets/email-inbox.css" rel="stylesheet" type="text/css" />
	<style>
		.kt-inbox .kt-inbox__list .kt-inbox__items .kt-inbox__item .kt-inbox__datetime {
			width: 270px;
		}
	</style>
</head>

<!-- end::Head -->

<body class="<? echo $g_body_class ?>" onload="">

	<? require("./includes/views/header.php") ?>

	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

				<!-- begin:: Header -->

				<? require("./includes/views/topmenu.php") ?>
				<!-- end:: Header -->

				<!-- begin:: Aside -->
				<? require("./includes/views/leftmenu.php") ?>

				<!-- end:: Aside -->

				<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Content -->
						<div class="kt-container  kt-grid__item kt-grid__item--fluid">
							<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

								<!-- begin:: Subheader -->
								<div class="kt-subheader   kt-grid__item" id="kt_subheader">
									<div class="kt-container ">
										<div class="kt-subheader__main">
											<h3 class="kt-subheader__title">
												<button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
												<? echo (($filenameLink == "email_inbox.php") && ($_GET['category'] == "inbox" || !isset($_GET['category'])) ) ? ucfirst('inbox') : ucfirst($_GET['category']) ?>
											</h3>
											<span class="kt-subheader__separator kt-hidden"></span>
											<div class="kt-subheader__breadcrumbs">
												<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
												<span class="kt-subheader__breadcrumbs-separator"></span>
												<a href="" class="kt-subheader__breadcrumbs-link">
													Apps </a>
												<span class="kt-subheader__breadcrumbs-separator"></span>
												<a href="" class="kt-subheader__breadcrumbs-link">
													<? echo (($filenameLink == "email_inbox.php") && ($_GET['category'] == "inbox" || !isset($_GET['category'])) ) ? ucfirst('inbox') : ucfirst($_GET['category']) ?>
												</a>

												<!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
											</div>
										</div>
										<div class="kt-subheader__toolbar">
											<div class="kt-subheader__wrapper">
												<a href="./email_servers.php" class="btn kt-subheader__btn-primary">
													Email Servers
												</a>
											</div>
										</div>
									</div>
								</div>

								<!-- end:: Subheader -->

								<!-- begin:: Content -->
								<div class="kt-container  kt-grid__item kt-grid__item--fluid">

									<!--Begin::Inbox-->
									<div class="kt-grid kt-grid--desktop kt-grid--ver-desktop  kt-inbox" id="kt_inbox">

										<!--Begin::Aside Mobile Toggle-->
										<button class="kt-inbox__aside-close" id="kt_inbox_aside_close">
											<i class="la la-close"></i>
										</button>

										<!--End:: Aside Mobile Toggle-->

										<!--Begin:: Inbox Aside-->
										<div class="kt-grid__item   kt-portlet  kt-inbox__aside" id="kt_inbox_aside">
											<button type="button" class="btn btn-brand  btn-upper btn-bold  kt-inbox__compose" data-toggle="modal" data-target="#kt_inbox_compose">new message</button>
											<div class="kt-inbox__nav">
												<ul class="kt-nav">
													<li class="kt-nav__item  <? echo (($filenameLink == "email_inbox.php") && ($_GET['category'] == "inbox" || !isset($_GET['category'])) ) ? 'kt-nav__item--active' : '' ?> ">
														<a href="?category=inbox" class="kt-nav__link" data-action="list" data-type="inbox">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M13.8,4 C13.1562,4 12.4033,4.72985286 12,5.2 C11.5967,4.72985286 10.8438,4 10.2,4 C9.0604,4 8.4,4.88887193 8.4,6.02016349 C8.4,7.27338783 9.6,8.6 12,10 C14.4,8.6 15.6,7.3 15.6,6.1 C15.6,4.96870845 14.9396,4 13.8,4 Z" fill="#000000" opacity="0.3"></path>
																	<path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"></path>
																</g>
															</svg> <span class="kt-nav__link-text">Inbox</span>
															<span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--rounded kt-badge--boldest">3</span>
															</span>
														</a>
													</li>
													<li class="kt-nav__item  <? echo (($filenameLink == "email_inbox.php") && ($_GET['category'] == "sent") ) ? 'kt-nav__item--active' : '' ?> ">
														<a href="?category=sent" class="kt-nav__link" data-action="list" data-type="sent">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M8,13.1668961 L20.4470385,11.9999863 L8,10.8330764 L8,5.77181995 C8,5.70108058 8.01501031,5.63114635 8.04403925,5.56663761 C8.15735832,5.31481744 8.45336217,5.20254012 8.70518234,5.31585919 L22.545552,11.5440255 C22.6569791,11.5941677 22.7461882,11.6833768 22.7963304,11.794804 C22.9096495,12.0466241 22.7973722,12.342628 22.545552,12.455947 L8.70518234,18.6841134 C8.64067359,18.7131423 8.57073936,18.7281526 8.5,18.7281526 C8.22385763,18.7281526 8,18.504295 8,18.2281526 L8,13.1668961 Z" fill="#000000"></path>
																	<path d="M4,16 L5,16 C5.55228475,16 6,16.4477153 6,17 C6,17.5522847 5.55228475,18 5,18 L4,18 C3.44771525,18 3,17.5522847 3,17 C3,16.4477153 3.44771525,16 4,16 Z M1,11 L5,11 C5.55228475,11 6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L1,13 C0.44771525,13 6.76353751e-17,12.5522847 0,12 C-6.76353751e-17,11.4477153 0.44771525,11 1,11 Z M4,6 L5,6 C5.55228475,6 6,6.44771525 6,7 C6,7.55228475 5.55228475,8 5,8 L4,8 C3.44771525,8 3,7.55228475 3,7 C3,6.44771525 3.44771525,6 4,6 Z" fill="#000000" opacity="0.3"></path>
																</g>
															</svg> <span class="kt-nav__link-text"> Sent</span>
														</a>
													</li>
													<? if (false) { ?>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link" data-action="list" data-type="trash">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																		<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																	</g>
																</svg> <span class="kt-nav__link-text">Trash</span>
															</a>
														</li>
													<? } ?>

												</ul>
											</div>
										</div>

										<!--End::Aside-->

										<!--Begin:: Inbox List-->
										<!-- <div class="kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown" id="kt_inbox_list"> -->


											<div class="kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown" id="kt_inbox_list">
												<div class="kt-portlet__body kt-portlet__body--fit-x" style="overflow-x: hidden; padding: 15px;max-height: 500px;">
													<div class="kt-inbox__items " data-type="inbox">
														<? if (!(isset($_GET['mail_id']))) { ?>
															<?
															if ($_GET['category'] == 'sent') {
																$query = "select * from " . $g_projectSlug . "_emails where category='sent'";
																// echo $query;
															} else {
																$serverId = $_GET['serverId'];
																/* $query="select * from ".$g_projectSlug."_emails where category!='sent'"; */
																$query = "select * from " . $g_projectSlug . "_emails where server_id like '%$serverId%' ";
																//echo $query;
															}

															foreach (getAll($con, $query) as $row) {
															?>
																<div class="kt-inbox__item" data-type="inbox" onclick="window.location='?<?php generateUrlParams(['mail_id'=>$row['id']])?>'">
																	<a href="?<?generateUrlParams(["mail_id"=>$row['id']])?>">
																		<div class="kt-inbox__info">
																			<div class="kt-inbox__sender">
																				<span class="kt-media kt-media--sm kt-media--brand">
																					<span><? echo substr($row['from_email'], 0, 1) ?></span>
																				</span>
																				<a href="?<?generateUrlParams(["mail_id"=>$row['id']])?>" class="kt-inbox__author" style="word-break: break-all;" ><? echo ($row['from_email']) ?></a>
																			</div>
																		</div>
																		<div class="kt-inbox__details">
																			<div class="kt-inbox__message">
																				<span class="kt-inbox__subject"><? echo $row['subject'] ?></span>
																				<span class="kt-inbox__summary"><? echo ucfirst($row['message']) ?></span>
																			</div>
																		</div>
																		<div class="kt-inbox__datetime">
																			<strong><? if (preg_match("/[a-zA-Z]/", $row['date'])) {
                                                                                echo $row['date'];
                                                                            } else {
                                                                                echo date('D, d M Y H:i:s', ($row['date']));
                                                                            }?></strong>
																		</div>
																	</a>
																</div>
														<? }
														} ?>
														<div class="kt-inbox__messages  ">

															<? if ($_GET['mail_id']) {
																$id = $_GET['mail_id'];
																foreach (getAll($con, "select *from " . $g_projectSlug . "_emails where id='$id'") as $row)	?>
																<!-- <? print_r($row); ?> -->
																<div class="kt-inbox__message kt-inbox__message--expanded">
																	<div class="kt-inbox__head">
																		<!-- <span class="kt-media" data-toggle="expand" style="background-image: url('uploads/<? echo $g_allUsersInfo[$row['userId']]['profile_pic'] ?>')">
																			<span></span>
																		</span> -->
																		<div class="row">
																			<div class="col-2">
																				<? if ($g_allUsersInfo[$row['userId']]['profile_pic'] == '') { ?>
																					<span class="kt-media kt-media--sm kt-media--brand">
																						<span><? echo ucfirst(substr($g_allUsersInfo[$row['userId']]['name'], 0, 1)) ?></span>
																					</span>
																				<? } else { ?>
																					<img src="./uploads/<? echo ($g_allUsersInfo[$row['userId']]['profile_pic']) ?>" width="50" height="50" onerror="this.src='//projects.anomoz.com/commonAssets/Generic-profile-Pic.png'">
																				<? } ?>
																			</div>
																			<div class="col-4">
																				<div class="kt-inbox__author" data-toggle="expand">
																					<a href="#" class="kt-inbox__name"><? echo $row['from_email'] ?></a>
																					<div class="kt-inbox__status">
																						<span class="kt-badge kt-badge--success kt-badge--dot"></span> <? echo date('Y-m-d H:i',$row['date']) ?>
																					</div>
																				</div>
																				<div class="kt-inbox__details">
																						<div class="kt-inbox__tome">
																							<span class="kt-inbox__label" data-toggle="dropdown">
																								to me <i class="fa fa-angle-down"></i>
																							</span>
																							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-left">
																								<table class="kt-inbox__details  m-2 ">
																									<tbody>
																										<tr>
																											<td>From</td>
																											<td><? echo $row['from_email'] ?></td>
																										</tr>
																										<tr>
																											<td>Date:</td>
																											<td><? echo date('m/d/Y H:i:s', $row['date']) ?></td>
																										</tr>

																										<tr>
																											<td>subject:</td>
																											<td><? echo $row['subject'] ?></td>
																										</tr>

																									</tbody>
																								</table>
																							</div>
																						</div>
																						
																						<div class="kt-inbox__desc" data-toggle="expand">
																							<? echo substr(ucfirst($row['message']), 0,100) ?>...
																						</div> 
																					
																					</div>
																			</div>
																			<div class="col-6">
																			
																			</div>
																		</div>
																	</div>
																	<div class="kt-inbox__body border-top pt-5">
																		<div class="kt-inbox__text">
																			<? echo ucfirst($row['message']) ?>
																		</div>
																		
																		<button type="button" class="btn btn-brand  btn-upper btn-bold  kt-inbox__compose" data-toggle="modal" data-target="#kt_inbox_compose">Reply</button>

																	</div>
																</div>


														</div>
													<? } ?>

													</div>
												</div>
											</div>

										
									</div>

									<!--End::Inbox-->

									<!--Begin:: Inbox Compose-->
									<div class="modal modal-sticky-bottom-right modal-sticky-lg" id="kt_inbox_compose" role="dialog" data-backdrop="false">
										<div class="modal-dialog" role="document">
											<div class="modal-content kt-inbox">
												<form method="post">
													<div class="kt-inbox__form" id="kt_inbox_compose_form">
														<div class="kt-inbox__head">
															<div class="kt-inbox__title">Compose</div>
															<div class="kt-inbox__actions">
																<!--<button type="button" class="kt-inbox__icon kt-inbox__icon--md kt-inbox__icon--light">
																	<i class="flaticon2-arrow-1"></i>
																</button>
																<button type="button" class="kt-inbox__icon kt-inbox__icon--md kt-inbox__icon--light" data-dismiss="modal">
																	<i class="flaticon2-cross"></i>
																</button>-->
															</div>
														</div>
														<div class="kt-inbox__body">
															<div class="kt-inbox__to">
																<div class="kt-inbox__wrapper">
																	<div class="kt-inbox__field kt-inbox__field--to">
																		<div class="kt-inbox__label">
																			To:
																		</div>
																		<div class="kt-inbox__input">
																			<input class="form-control" type="email" name="to_email" placeholder="">
																		</div>
																		<!-- <div class="kt-inbox__tools">
																			<span class="kt-inbox__tool kt-inbox__tool--cc">Cc</span>
																			<span class="kt-inbox__tool kt-inbox__tool--bcc">Bcc</span>
																		</div> -->
																	</div>
																	
																</div>
															</div>
															<div class="kt-inbox__subject">
																<input class="form-control" name="subject" placeholder="Subject">
															</div>
															<div class="kt-inbox__subject">
																<textarea class="form-control" id="" cols="30" rows="10" name="message"></textarea>
															</div>
														</div>
														<div class="kt-inbox__foot">
															<div class="kt-inbox__primary">
																<div class="btn-group">
																	<button type="submit" class="btn btn-brand btn-bold" name="submit">
																		Send
																	</button>
																	
																</div>
															
															</div>
														
														</div>
													</div>

												</form>
											</div>
										</div>
									</div>

									<!--End:: Inbox Compose-->
								</div>

								<!-- end:: Content -->
							</div>

						</div>
						<!-- end:: Content -->
					</div>
				</div>

				<!-- begin:: Footer -->


				<!-- end:: Footer -->
			</div>
		</div>
	</div>

	<!-- end:: Page -->

	<!-- begin::Scrolltop -->
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
	</div>


	<!-- begin::Global Config(global config for global JS sciprts) -->
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



	<? require("./includes/views/footerjs.php") ?>

</body>

<!-- end::Body -->

</html>