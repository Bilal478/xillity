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

    header("Location: ?m=Email send  successfully!");
}
if (isset($_GET['change-star'])) {
    $user_id = $_GET['change-star'];
    $star = $_GET['star'];

    if ($star == 1) {
        $star_query = "UPDATE `jeoXillityCrm_emails` SET `star` = '0' WHERE `id` = '$user_id'";
    } else {
        $star_query = "UPDATE `jeoXillityCrm_emails` SET `star` = '1' WHERE `id` = '$user_id'";
    }
    $run_star =  mysqli_query($con, $star_query);
    if ($run_star) {
        if (isset($_GET['category']) && $_GET['category'] == 'starred') {
            // header("Location:email.php?category=starred");
        } else {
            // header("Location:email.php");
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

    <!-- right sidebar end -->

    <!-- main sidebar start -->
    <? include("./includes/views/leftmenu2.php"); ?>
    <!-- main sidebar end -->



    <!-- main content start -->
    <div class="main-content">

        <div class="email-panel d-flex rounded">

            <div class="panel rounded-0 border-end">

                <div class="panel-body email-menu">

                    <div class="scrollable">

                        <div class="btn-box  gap-1 mb-20">

                            <!-- <a href="./email_servers.php" class="btn btn-primary w-100 mb-3">Email Servers</a> -->

                            <button class="btn btn-primary w-100 compose-mail-btn"><i class="fa-light fa-pen-to-square"></i> Compose</button>

                            <button class="btn btn-icon btn-primary close-mail-menu-btn d-lg-none"><i class="fa-light fa-bars"></i></button>

                        </div>

                        <div class="emial-menu-list">
                            <div class="scrollable">
                                <ul class="nav" role="tablist">
                                    <? $currentCategory = $_GET['category'] ?>
                                    <!-- Inbox -->
                                    <li>
                                        <button <?php if ($currentCategory == '') { ?> class="active" <?php } ?> class="btn-flush" type="button" onclick="window.location.href='email.php'" style="height: 96px;">
                                            <span class="badge bg-danger">
                                                <?php
                                                $email_count = mysqli_num_rows(mysqli_query($con, "select * from " . $g_projectSlug . "_emails where category is null "));
                                                if ($email_count > 9) {
                                                    echo '9+';
                                                } else {
                                                    echo $email_count;
                                                }
                                                ?>
                                            </span>
                                            <span class="part-icon"><i class="fa-light fa-inbox"></i></span>
                                            <span class="part-txt">Inbox</span>
                                        </button>
                                    </li>
                                    <!-- Started -->
                                    <li>
                                        <button <?php if ($currentCategory == 'starred') { ?> class=" active" <? } ?> class="btn-flush " type="button" onclick="window.location.href='email.php?category=starred'" style="height: 96px;">

                                            <span class="part-icon"><i class="fa-light fa-star"></i></span>
                                            <span class="part-txt">Starred</span>

                                        </button>
                                    </li>
                                    <!-- Trash -->
                                    <li>
                                        <button <?php if ($currentCategory == 'trash') { ?> class=" active" <? } ?> class="btn-flush " type="button" onclick="window.location.href='email.php?category=trash'" style="height: 96px;">

                                            <span class="part-icon"><i class="fa-light fa-trash-can"></i></span>
                                            <span class="part-txt">Trash</span>

                                        </button>
                                    </li>
                                    <!-- Sent -->
                                    <li>
                                        <button <?php if ($currentCategory == 'sent') { ?> class=" active" <? } ?> class="btn-flush " type="button" onclick="window.location.href='email.php?category=sent'" style="height: 96px;">

                                            <span class="part-icon"><i class="fa-light fa-paper-plane-top"></i></span>
                                            <span class="part-txt">Sent</span>

                                        </button>
                                    </li>
                                    <!-- Draft -->

                                    <!-- All Emails -->
                                    <li>
                                        <button <?php if ($currentCategory == 'allmail') { ?> class=" active" <? } ?> class="btn-flush " type="button" onclick="window.location.href='email.php?category=allmail'" style="height: 96px;">
                                            <span class="part-icon"><i class="fa-light fa-envelopes"></i></span>
                                            <span class="part-txt">All Email</span>

                                        </button>
                                    </li>
                                    <!-- Spam -->

                                    <!-- Important -->

                                </ul>
                            </div>
                        </div>
                        <!-- <button class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#addLabelModal"><i class="fa-light fa-plus"></i> Add New Label</button> -->
                        <div class="new-label-list"></div>
                    </div>
                </div>
            </div>

            <div class="panel rounded-0">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="nav-inbox" role="tabpanel" aria-labelledby="nav-inbox-tab" tabindex="0">
                        <div class="panel-header">
                            <div class="d-flex align-items-center gap-1">
                                <button class="btn btn-sm btn-icon btn-primary mail-menu-btn d-lg-none"><i class="fa-light fa-bars"></i></button>
                                <h5>Inbox</h5>
                            </div>
                            <div class="btn-box d-flex gap-2">
                                <div class="tableSearch"></div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="product-table-quantity d-flex flex-wrap align-items-center gap-2 mb-20">
                                <!-- <ul class="mb-0">
                                    <li class="text-white">All (23)</li>
                                   
                                    <li>Trash (05)</li>
                                </ul> -->
                                <!-- <ul class="top-action mb-0 d-none">
                                    <li>|</li>
                                    <li><button class="btn-flush" data-bs-toggle="tooltip" data-bs-title="Move to archive"><i class="fa-light fa-box-archive"></i></button></li>
                                    <li><button class="btn-flush" data-bs-toggle="tooltip" data-bs-title="Report to spam"><i class="fa-light fa-circle-exclamation"></i></button></li>
                                    <li><button class="btn-flush" data-bs-toggle="tooltip" data-bs-title="Mark as read"><i class="fa-light fa-envelope"></i></button></li>
                                    <li><button class="btn-flush" data-bs-toggle="tooltip" data-bs-title="Move to trash"><i class="fa-light fa-trash-can"></i></button></li>
                                </ul> -->
                            </div>
                            <div class="table-filter-option">
                                <div class="row g-3">
                                    <div class="col-xxl-6 col-md-12">
                                        <!-- <div class="row g-3">
                                            <div class="col">
                                                <div class="btn-box inbox-tab d-flex gap-2 nav" role="tablist">
                                                    <button class="btn btn-sm btn-outline-primary active" id="nav-primary-tab" data-bs-toggle="tab" data-bs-target="#nav-primary" type="button" role="tab" aria-controls="nav-primary" aria-selected="true">Primary</button>
                                                    <button class="btn btn-sm btn-outline-primary" id="nav-promotion-tab" data-bs-toggle="tab" data-bs-target="#nav-promotion" type="button" role="tab" aria-controls="nav-promotion" aria-selected="false">Promotion <span class="badge bg-danger">9+</span></button>
                                                    <button class="btn btn-sm btn-outline-primary" id="nav-social-tab" data-bs-toggle="tab" data-bs-target="#nav-social" type="button" role="tab" aria-controls="nav-social" aria-selected="false">Social</button>
                                                    <button class="btn btn-sm btn-outline-primary" id="nav-updates-tab" data-bs-toggle="tab" data-bs-target="#nav-updates" type="button" role="tab" aria-controls="nav-updates" aria-selected="false">Updates</button>
                                                </div>
                                            </div>
                                        </div> -->

                                    </div>

                                    <div class="col-xxl-4 col-9 col-xs-12">
                                        <!-- <div class="row g-3">
                                            <div class="col">
                                                <form>
                                                    <select class="form-control form-control-sm" data-placeholder="Bulk action">
                                                        <option value="">Bulk action</option>
                                                        <option value="0">Move to archive</option>
                                                        <option value="1">Report to spam</option>
                                                        <option value="2">Mark as read</option>
                                                        <option value="3">Move to trash</option>
                                                    </select>
                                                </form>
                                            </div>
                                            <div class="col">
                                                <select class="form-control form-control-sm">
                                                    <option value="0">All</option>
                                                    <option value="1">None</option>
                                                    <option value="2">Read</option>
                                                    <option value="3">Unread</option>
                                                    <option value="4">Starred</option>
                                                    <option value="5">Unstarred</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-sm btn-primary"><i class="fa-light fa-filter"></i> Filter</button>
                                            </div>
                                        </div>  -->
                                    </div>
                                    <div class="col-xxl-2 col-3 col-xs-12 d-flex justify-content-end">
                                        <div class="productTableLength"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content email-tab-content" id="nav-tabContent">

                                <!-- Primary -->
                                <div class="tab-pane fade show active" id="nav-primary" role="tabpanel" aria-labelledby="nav-primary-tab" tabindex="0">
                                    <div class="table-wrapper">

                                        <div class="mail-list">
                                            <table class="table table-dashed table-hover digi-dataTable email-table">
                                                <thead>
                                                    <tr>
                                                        <th class="no-sort">
                                                            <div class="form-check">
                                                                <input class="form-check-input markAllMail" type="checkbox">
                                                            </div>
                                                        </th>
                                                        <th class="no-sort"><i class="fa-light fa-star"></i></th>
                                                        <th>Sender</th>
                                                        <th>Subject</th>
                                                        <th>Date</th>
                                                        <!-- <th class="no-sort"><i class="fa-light fa-paperclip"></i></th> -->
                                                        <!-- <th class="no-sort">Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <? if (!(isset($_GET['mail_id']))) { ?>
                                                        <?
                                                        if ($_GET['category'] == 'sent') {
                                                            $query = "select * from " . $g_projectSlug . "_emails where category='sent'";
                                                            // echo $query;
                                                        } elseif (!isset($_GET['category'])) {
                                                            $query = "select * from " . $g_projectSlug . "_emails where category is null";
                                                            // echo $query;
                                                        } else if ($_GET['category'] == 'starred') {
                                                            $query = "select * from " . $g_projectSlug . "_emails where star='1'";
                                                        } else {
                                                            $serverId = $_GET['serverId'];
                                                            /* $query="select * from ".$g_projectSlug."_emails where category!='sent'"; */
                                                            $query = "select * from " . $g_projectSlug . "_emails where server_id like '%$serverId%' ";
                                                            //echo $query;
                                                        }


                                                        foreach (getAll($con, $query) as $row) {
                                                        ?>
                                                            <a href="?<? generateUrlParams(["mail_id" => $row['id']]) ?>">
                                                                <tr onclick="window.location='?<?php generateUrlParams(['mail_id' => $row['id']]) ?>'">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="?change-star=<?php echo $row['id']; ?>&star=<?php echo $row['star']; ?>" class="btn-star" style="color: <?php echo ($row['star'] == 1) ? '#F0C434' : 'inherit'; ?>">
                                                                            <i class="<?php echo ($row['star'] == 1) ? 'fa-solid' : 'fa-light'; ?> fa-star"></i>
                                                                        </a>
                                                                    </td>

                                                                    <td><span class="table-txt"><a href="?<? generateUrlParams(["mail_id" => $row['id']]) ?>" class="kt-inbox__author" style="word-break: break-all;"><? echo ($row['from_email']) ?></a></span></td>
                                                                    <td><span class="table-txt"><? echo $row['subject'] ?></span></td>
                                                                    <td><span class="table-txt"><strong><? if (preg_match("/[a-zA-Z]/", $row['date'])) {
                                                                                                            echo $row['date'];
                                                                                                        } else {
                                                                                                            echo date('D, d M Y H:i:s', ($row['date']));
                                                                                                        } ?></strong></span></td>


                                                                    <!-- <td><i class="fa-light fa-paperclip"></i></td> -->
                                                                    <!-- <td>
                                                            <div class="btn-box ms-0">
                                                                <button class="btn-flush"><i class="fa-light fa-box-archive"></i></button>
                                                                <button class="btn-flush"><i class="fa-light fa-circle-exclamation"></i></button>
                                                                <button class="btn-flush"><i class="fa-light fa-envelope"></i></button>
                                                                <button class="btn-flush"><i class="fa-light fa-trash-can"></i></button>
                                                            </div>
                                                        </td> -->
                                                                </tr>
                                                            </a>
                                                    <? }
                                                    } ?>
                                                </tbody>

                                            </table>
                                        </div>
                                        <? if ($_GET['mail_id']) {
                                            $id = $_GET['mail_id'];
                                            foreach (getAll($con, "select *from " . $g_projectSlug . "_emails where id='$id'") as $row)    ?>
                                            <div class="mail-details ">
                                                <div class="mail-body-top d-flex justify-content-between align-items-center mb-10">
                                                    <div class="left d-flex align-items-center gap-2">
                                                        <a href="email.php?category=<? echo $_GET['category'] ?>" class="btn btn-sm btn-icon btn-outline-danger "><i class="fa-light fa-xmark"></i></a>
                                                        <span class="badge bg-secondary p-1 rounded">Inbox</span>
                                                    </div>
                                                    <div class="right d-flex align-items-center gap-3">
                                                        <button class="btn-flush"><i class="fa-light fa-print"></i></button>
                                                        <button class="btn-flush expandReply"><i class="fa-light fa-expand"></i></button>
                                                    </div>
                                                </div>
                                                <div class="mail-conversation">
                                                    <div class="scrollable">
                                                        <div class="single-mail">
                                                            <div class="mail-top">
                                                                <div class="mail-profile">
                                                                    <div class="avatar">
                                                                        <img src="assets/images/avatar-2.png" alt="Image">
                                                                    </div>

                                                                    <div class="part-txt">

                                                                        <span class="name"><? echo $row['from_email'] ?></span>

                                                                        <!-- <span class="mail">amelianda@example.com</span> -->

                                                                    </div>

                                                                </div>

                                                                <div class="mail-action">

                                                                    <span class="date"><? echo date('m/d/Y H:i:s', $row['date']) ?></span>

                                                                    <button class="btn-star"><i class="fa-solid fa-star"></i></button>

                                                                </div>

                                                            </div>

                                                            <div class="mail-body">

                                                                <? echo ucfirst($row['message']) ?>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mail-reply-option">
                                                    <!-- <div class="mail-reply d-none">
                                                    <form>
                                                        <input type="email" class="form-control form-control-sm mb-15" placeholder="To" value="amelianda@example.com">
                                                        <div class="editor"></div>
                                                        <div class="btn-box d-flex justify-content-end">
                                                            <button class="btn btn-sm btn-primary">Send <i class="fa-light fa-paper-plane-top"></i></button>
                                                        </div>
                                                    </form>
                                                </div> -->

                                                    <div class="btn-box gap-2 justify-content-end">
                                                        <button class="btn btn-sm btn-primary compose-mail-btn">Reply</button>
                                                        <!-- <button class="btn btn-sm btn-primary">Forward</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        <? } ?>
                                    </div>
                                </div>
                                <!-- Promotion -->

                            </div>
                            <div class="table-bottom-control"></div>
                        </div>
                    </div>

                    <!-- Started -->
                    <div class="tab-pane fade" id="nav-starred" role="tabpanel" aria-labelledby="nav-starred-tab" tabindex="0">
                        <div class="panel-header">
                            <div class="d-flex align-items-center gap-1">
                                <button class="btn btn-sm btn-icon btn-primary mail-menu-btn d-lg-none"><i class="fa-light fa-bars"></i></button>
                                <h5>Starred</h5>
                            </div>
                            <div class="btn-box d-flex gap-2">
                                <div class="tableSearch"></div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="product-table-quantity d-flex flex-wrap align-items-center gap-2 mb-20">
                                <ul class="mb-0">
                                    <li class="text-white">All (23)</li>
                                    <li>Unread (19)</li>
                                    <li>Draft (05)</li>
                                    <li>Trush (05)</li>
                                </ul>
                                <ul class="top-action mb-0 d-none">
                                    <li>|</li>
                                    <li><button class="btn-flush" data-bs-toggle="tooltip" data-bs-title="Move to archive"><i class="fa-light fa-box-archive"></i></button></li>
                                    <li><button class="btn-flush" data-bs-toggle="tooltip" data-bs-title="Report to spam"><i class="fa-light fa-circle-exclamation"></i></button></li>
                                    <li><button class="btn-flush" data-bs-toggle="tooltip" data-bs-title="Mark as read"><i class="fa-light fa-envelope"></i></button></li>
                                    <li><button class="btn-flush" data-bs-toggle="tooltip" data-bs-title="Move to trash"><i class="fa-light fa-trash-can"></i></button></li>
                                </ul>
                            </div>

                            <div class="table-filter-option">
                                <div class="row justify-content-between g-3">
                                    <div class="col-xl-10 col-9 col-xs-12">
                                        <div class="row g-3">
                                            <div class="col">
                                                <form>
                                                    <select class="form-control form-control-sm" data-placeholder="Bulk action">
                                                        <option value="">Bulk action</option>
                                                        <option value="0">Move to archive</option>
                                                        <option value="1">Report to spam</option>
                                                        <option value="2">Mark as read</option>
                                                        <option value="3">Move to trash</option>
                                                    </select>
                                                </form>
                                            </div>
                                            <div class="col">
                                                <select class="form-control form-control-sm">
                                                    <option value="0">All</option>
                                                    <option value="1">None</option>
                                                    <option value="2">Read</option>
                                                    <option value="3">Unread</option>
                                                    <option value="4">Starred</option>
                                                    <option value="5">Unstarred</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-sm btn-primary"><i class="fa-light fa-filter"></i> Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                                        <div class="productTableLength"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-wrapper">
                                <div class="mail-list">
                                    <table class="table table-dashed table-hover digi-dataTable email-table">
                                        <thead>
                                            <tr>
                                                <th class="no-sort">
                                                    <div class="form-check">
                                                        <input class="form-check-input markAllMail" type="checkbox">
                                                    </div>
                                                </th>
                                                <th class="no-sort"><i class="fa-light fa-star"></i></th>
                                                <th>Sender</th>
                                                <th>Subject</th>
                                                <th class="no-sort"><i class="fa-light fa-paperclip"></i></th>
                                                <th class="no-sort">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="unread">
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td><button class="btn-star starred"><i class="fa-solid fa-star"></i></button></td>
                                                <td><span class="table-txt">Shaikh Abu Dardah</span></td>
                                                <td><span class="table-txt">Recommended for home: 20 Kinds Scented Candles Flower - Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto facere autem quae repellendus perferendis exercitationem, corrupti aspernatur? Iste possimus architecto voluptas, cupiditate facilis, placeat quod corrupti molestias minima mollitia voluptatum.</span></td>
                                                <td><i class="fa-light fa-paperclip"></i></td>
                                                <td>
                                                    <div class="btn-box ms-0">
                                                        <button class="btn-flush"><i class="fa-light fa-box-archive"></i></button>
                                                        <button class="btn-flush"><i class="fa-light fa-circle-exclamation"></i></button>
                                                        <button class="btn-flush"><i class="fa-light fa-envelope"></i></button>
                                                        <button class="btn-flush"><i class="fa-light fa-trash-can"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="mail-details d-none" data-mail-tab="nav-starred">
                                    <div class="mail-body-top d-flex justify-content-between align-items-center mb-10">
                                        <div class="left d-flex align-items-center gap-2">
                                            <button class="btn btn-sm btn-icon btn-outline-danger close-mail"><i class="fa-light fa-xmark"></i></button>
                                            <span class="badge bg-secondary p-1 rounded">Inbox</span>
                                        </div>

                                        <div class="right d-flex align-items-center gap-3">
                                            <button class="btn-flush"><i class="fa-light fa-print"></i></button>
                                            <button class="btn-flush expandReply"><i class="fa-light fa-expand"></i></button>
                                        </div>
                                    </div>

                                    <div class="mail-conversation">
                                        <div class="scrollable">
                                            <div class="single-mail">
                                                <div class="mail-top">
                                                    <div class="mail-profile">
                                                        <div class="avatar">
                                                            <img src="assets/images/avatar-2.png" alt="Image">
                                                        </div>
                                                        <div class="part-txt">
                                                            <span class="name">Amelie Harris</span>
                                                            <span class="mail">amelianda@example.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-action">
                                                        <span class="date">Jan 25<span class="d-sm-inline-block d-none">, 2023, 8:24 PM</span></span>
                                                        <button class="btn-star"><i class="fa-solid fa-star"></i></button>
                                                    </div>
                                                </div>
                                                <div class="mail-body">
                                                    <p>Dear Sanoar Vai,</p>
                                                    <p>As discussed with you over phone. It would be very helpful for me to handle audits if I can enter holidays separately. Please get back to me for further explanation.</p>
                                                    <p>Regards,</p>
                                                    <p>Farhad Reza</p>
                                                    <p>Assistant Manager I HR & Compliance</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mail-reply-option">
                                        <div class="mail-reply d-none">
                                            <form>
                                                <input type="email" class="form-control form-control-sm mb-15" placeholder="To" value="amelianda@example.com">
                                                <div class="editor"></div>
                                                <div class="btn-box d-flex justify-content-end">
                                                    <button class="btn btn-sm btn-primary">Send <i class="fa-light fa-paper-plane-top"></i></button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="btn-box gap-2 justify-content-end">
                                            <button class="btn btn-sm btn-primary reply-mail-btn">Reply</button>
                                            <button class="btn btn-sm btn-primary">Forward</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-bottom-control"></div>
                        </div>
                    </div>

                    <!-- Trash -->

                </div>
            </div>
        </div>



        <!-- footer start -->

        <? include("./includes/views/footer.php"); ?>

        <!-- footer end -->

    </div>

    <!-- main content end -->



    <!-- compose mail modal start -->
    <div class="compose-mail">
        <div class="panel border">
            <div class="panel-header">
                <h5>New Message</h5>
                <div class="btn-box">
                    <button class="btn btn-sm btn-icon btn-outline-primary" id="minimizeComposeMail"><i class="fa-light fa-minus"></i></button>
                    <button class="btn btn-sm btn-icon btn-outline-primary d-xl-inline-block d-none" id="expandComposeMail"><i class="fa-light fa-arrow-up-right-and-arrow-down-left-from-center"></i></button>
                    <button class="btn btn-sm btn-icon btn-outline-primary" id="closeComposeMail"><i class="fa-light fa-xmark"></i></button>
                </div>
            </div>

            <div class="panel-body">
                <form method="post">
                    <div class="d-flex gap-2 mb-15">
                        <input type="email" class="form-control  form-control-sm" name="to_email" placeholder="To">

                        <!-- <a role="button" class="btn btn-sm btn-outline-primary add-cc">cc</a>
                        <a role="button" class="btn btn-sm btn-outline-primary add-bcc">bcc</a> -->
                    </div>
                    <input type="text" class="form-control form-control-sm mb-15 d-none input-cc" placeholder="Cc">
                    <input type="text" class="form-control form-control-sm mb-15 d-none input-bcc" placeholder="Bcc">
                    <input type="text" class="form-control form-control-sm mb-15" name="subject" placeholder="Subject">
                    <textarea class="form-control " cols="30" rows="10" name="message" placeholder="Message"></textarea>
                    <div class="d-flex justify-content-end gap-2">
                        <button type="reset" class="btn btn-sm btn-outline-danger" id="discardMail">Discard</button>
                        <input type="submit" value="send" name="submit" class="btn btn-sm btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- compose mail modal end -->



    <!-- mail details modal start -->
    <div class="mail-details-expanded"></div>
    <!-- mail details modal end -->

    <!-- add new label modal start -->
    <div class="modal fade" id="addLabelModal" tabindex="-1" aria-labelledby="addLabelModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addLabelModalLabel">Add new label</h1>
                    <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal" aria-label="Close"><i class="fa-light fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <label for="newLabelName" class="form-label">Enter new label name</label>
                    <input type="text" class="form-control mb-20" id="newLabelName" required>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="nestLabelCheck">
                        <label class="form-check-label" for="nestLabelCheck">
                            Nest label under:
                        </label>
                    </div>
                    <div class="select-box d-none mt-3">
                        <select class="form-control select-parent-label">
                            <option value="0">Label 1</option>
                            <option value="1">Label 2</option>
                            <option value="2">Label 3</option>
                            <option value="3">Label 4</option>
                        </select>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                    <button type="reset" class="btn btn-primary" data-bs-dismiss="modal" id="createLabel">Create</button>

                </div>

            </div>

        </div>

    </div>

    <!-- add new label modal end -->



    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>

    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>

    <script src="assets/vendor/js/ckeditor.js"></script>

    <script src="assets/vendor/js/jquery.dataTables.min.js"></script>

    <script src="assets/vendor/js/select2.min.js"></script>

    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script src="assets/js/email.js"></script>

    <script src="assets/js/select2-init.js"></script>

</body>

</html>