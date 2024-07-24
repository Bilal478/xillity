<?require("./global.php");
$toUser = $_GET['toUser'];
// $all_users_to = getAll($con, "SELECT * FROM jeoXillityCrm_users WHERE id!='$session_id'");
$all_users_to = getAll($con, "SELECT DISTINCT u.id, u.name, u.email, u.password, u.role, u.status, u.profile_pic, u.login_status
FROM jeoXillityCrm_users u
WHERE u.id != '$session_id'
  AND u.id NOT IN (
    SELECT DISTINCT fromUser FROM jeoXillityCrm_messages WHERE toUser = '$session_id'
    UNION
    SELECT DISTINCT toUser FROM jeoXillityCrm_messages WHERE fromUser = '$session_id'
  )");
$all_users = getAll($con, "SELECT DISTINCT u.id, u.name, u.email, u.password, u.role, u.status, u.profile_pic, u.login_status
FROM jeoXillityCrm_users u
WHERE u.id != '$session_id'
  AND u.id IN (
    SELECT DISTINCT fromUser FROM jeoXillityCrm_messages WHERE toUser = '$session_id'
    UNION
    SELECT DISTINCT toUser FROM jeoXillityCrm_messages WHERE fromUser = '$session_id'
  )");

if(isset($_POST['start_chat']))
{
    $chat = $_POST['chat'];
    header("Location:?toUser=".$chat);
}



?>
<?php
if (isset($_GET['delete-chat'])) {
    $toUser = $_GET['toUser'];

    // Update query 1
    $updateQuery1 = "DELETE FROM `jeoXillityCrm_messages`  WHERE fromUser='$session_id' AND toUser='$toUser'";
    $run1 = mysqli_query($con, $updateQuery1);
    $updateQuery2 = "DELETE FROM `jeoXillityCrm_messages`  WHERE fromUser='$toUser' AND toUser='$session_id'";
        $run2 = mysqli_query($con, $updateQuery2);
    // Check if update 1 was successful
    if ($run1||$run2) {
        // Redirect or perform additional actions if needed
        header("Location: chat.php");
   
        } else {
            // Delete query if both updates were unsuccessful
            $deleteQuery = "DELETE FROM `jeoXillityCrm_messages` WHERE fromUser='$session_id' AND toUser='$session_id'";
            $run3 = mysqli_query($con, $deleteQuery);

            // Check if delete was successful
            if ($run3) {
                // Redirect or perform additional actions if needed
                header("Location: chat.php");
            }
        }
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

    <!-- preloader end --><!-- header start -->
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

        <div class="chatting-panel">

            <div class="d-flex">

                <div class="panel border-end rounded-0">

                    <div class="panel-body border-bottom">

                        <div class="active-members owl-carousel">

                            <?foreach($all_users as $user){
                                $img = "./uploads/".$user['profile_pic']?>
                            <!-- <div class="single-member">

                                <button class="btn-flush avatar" onclick="window.location.href='?toUser=<?php echo $user['id'];?>'">

                                    <img src="<?if(file_exists($img) && $user['profile_pic'] !=""){echo $img;}else{echo "assets/images/avatar-3.png";}?>" alt="User">

                                    <span class="active-status active sidebaruserstatus1<?echo $user['id']?>" id=""></span>

                                </button>

                            </div> -->
                            <?}?>



                        </div>

                    </div>

                    <div class="panel-body message-list">

                        <div class="scrollable">

                        <?foreach($all_users as $user){
                            $img = "./uploads/".$user['profile_pic'];
                            ?>

                            <div class="single-message unread" id="user<?echo $user['id']?>" onclick="window.location.href='?toUser=<?php echo $user['id'];?>'">

                                <div class="avatar">

                                    <img src="<?if(file_exists($img) && $user['profile_pic'] !=""){echo $img;}else{echo "assets/images/avatar-3.png";}?>" alt="User">

                                    <span class="active-status active sidebaruserstatus2<?echo $user['id']?>" id=""></span>

                                </div>

                                <div class="part-txt">

                                    <div class="top">

                                        <span class="user-name"><?echo $user['name']?></span>

                                        <!-- <span class="msg-time last_message_time<?echo $user['id']?>">13 min.</span> -->

                                    </div>

                                    <div class="msg-short">

                                        <span class="last_message<?echo $user['id']?>">xyz</span>

                                    </div>

                                </div>
                                
                            </div>
                            
                            <?}?>


                        </div>

                    </div>

                </div>

                <div class="panel rounded-0 position-relative">

                    <div class="chatting-area">

                        <div class="panel-body">

                            <div class="chat-top-bar">

                                <div class="user">

                                    <button class="back-to-all-chat btn-flush fs-14 d-md-none"><i class="fa-light fa-arrow-left"></i></button>

                                    <div class="avatar">

                                        <!-- <img src="assets/images/avatar-2.png" alt="User"> -->
                                        <img src="./uploads/<?echo $g_allUsersInfo[$toUser]['profile_pic']?>" alt="<?echo $g_allUsersInfo[$toUser]['name']?>">

                                    </div>

                                    <div class="part-txt">

                                        <span class="user-name"><?echo $g_allUsersInfo[$toUser]['name']?></span>

                                        <span id="activestatus"><span class="active-status active">Active Now</span></span>

                                    </div>

                                </div>
                                             <div class="chatting-panel-top-btns">

                                    <button class="btn btn-icon btn-outline-primary d-xxl-none" data-bs-toggle="modal" data-bs-target="#voiceCallModal"><i class="fa-light fa-phone"></i></button>

                                    <button class="btn btn-icon btn-outline-primary d-xxl-none" data-bs-toggle="modal" data-bs-target="#videoCallModal"><i class="fa-light fa-video"></i></button>

                                    <div class="digi-dropdown dropdown">

                                        <button class="btn btn-sm btn-icon btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-ellipsis"></i></button>

                                        <ul class="digi-dropdown-menu dropdown-menu dropdown-menu-sm dropdown-menu-end">

                                            <li class="p-0"><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-box-archive"></i></span> Archive</a></li>

                                            <li class="p-0"><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-microphone-slash"></i></span> Mute</a></li>

                                            <li class="p-0"><a href="#" class="dropdown-item" data-toggle="modal" data-target="#create_record_modal"><span class="dropdown-icon"><i class="fa-light fa-comment"></i></span> Start New Chat</a></li>

                                            <li class="p-0"><a href="chat.php?toUser=<?php echo $toUser; ?>&delete-chat" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span>Delete</a></li>

                                            <li class="p-0"><a href="#" class="dropdown-item d-xxl-none show-chatting-info"><span class="dropdown-icon"><i class="fa-light fa-ellipsis-vertical"></i></span> More</a></li>

                                        </ul>

                                    </div>

                                </div>

                                <div class="search-in-chat">

                                    <input type="search" class="form-control" placeholder="Search message...">

                                </div>

                            </div>

                        </div>

                        <div class="panel-body msg-area">

                            <div class="scrollable" id="">

                            <div class="" id="messages_content">
<!-- 
                                 <div class="single-message outgoing">

                                    <div class="msg-box">

                                        <div class="msg-box-inner">

                                            <div class="msg-option">

                                                <span class="msg-time">1 day.</span>

                                                <button class="btn-flush"><i class="fa-light fa-ellipsis-vertical"></i></button>

                                            </div>

                                            <span class="sent-status seen" title="seen">

                                                <i class="fa-solid fa-circle-check"></i>

                                            </span>

                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis dolorum rerum odit esse sunt quisquam pariatur nesciunt nihil amet!</p>

                                        </div>

                                        <div class="msg-box-inner">

                                            <div class="msg-option">

                                                <span class="msg-time">1 day.</span>

                                                <button class="btn-flush"><i class="fa-light fa-ellipsis-vertical"></i></button>

                                            </div>

                                            <span class="sent-status seen" title="seen">

                                                <i class="fa-solid fa-circle-check"></i>

                                            </span>

                                            <p>Omnis distinctio eaque voluptatibus. Reiciendis natus harum ea ipsam, et facere?</p>

                                        </div>

                                    </div>

                                    <div class="avatar">

                                        <img src="assets/images/admin.png" alt="Image">

                                    </div>

                                </div>

                                <div class="single-message">

                                    <div class="avatar">

                                        <img src="assets/images/avatar-2.png" alt="Image">

                                    </div>

                                    <div class="msg-box">

                                        <div class="msg-box-inner">

                                            <div class="msg-option">

                                                <span class="msg-time">1 day.</span>

                                                <button class="btn-flush"><i class="fa-light fa-ellipsis-vertical"></i></button>

                                            </div>

                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis dolorum rerum odit esse sunt quisquam pariatur nesciunt nihil amet!</p>

                                        </div>

                                        <div class="msg-box-inner">

                                            <div class="msg-option">

                                                <span class="msg-time">1 day.</span>

                                                <button class="btn-flush"><i class="fa-light fa-ellipsis-vertical"></i></button>

                                            </div>

                                            <p>Omnis distinctio eaque voluptatibus. Reiciendis natus harum ea ipsam, et facere?</p>

                                        </div>

                                    </div>

                                </div> -->

                                
                            </div>

                            <?if($toUser == ""){?><div class="day-divider">
                                
                                <span>PLEASE SELECT A USER</span>
                                <a href="#" class="btn btn-success btn-elevate btn-icon-sm" data-toggle="modal" data-target="#create_record_modal">
            <i class="la la-plus"></i>
            Start Conversation
        </a>
                            
                            </div><?}?>



                            </div>

                        </div>

                        <div class="panel-body msg-type-area">
                        <?if($toUser != ""){?>
                        <form method="POST" enctype="multipart/form-data" id="chatForm">

                        <label class="btn btn-icon btn-outline-primary" for="chatAttachment"><i class="fa-light fa-link"></i></label>
                        <input type="file" class="chat-attachment" id="chatAttachment" name="attachment">
                        <input type="text" autocomplete="off" class="form-control chat-input" id="chattoUser" name="toUser" value="<?echo $_GET['toUser']?>" hidden>

                        <input autocomplete="off" type="text" class="form-control chat-input" autofocus="" id="chat-input" name="message" placeholder="Type your message...">

                        <button type="button" class="btn btn-icon btn-outline-primary" id="sendMessage"><i class="fa-light fa-paper-plane"></i></button>

                        </form>
                        <?}?>

                        <script>
                            $(document).ready(function () {
                                // Handle form submission
                                $("#sendMessage").on("click", function () {
                                    // Create FormData object to handle file and text data
                                    var formData = new FormData($("#chatForm")[0]);
                                    console.log(formData);
                                
                                    // Make AJAX request
                                    $.ajax({
                                        url: "chat_insert.php", // Replace with your server-side script
                                        type: "POST",
                                        data: formData,
                                        processData: false,
                                        contentType: false,
                                        success: function (response) {
                                            // Handle success
                                            console.log(response);
                                            $("#chatAttachment").val("");
                                            $("#chat-input").val("");
                                            // You can update the UI or do other actions as needed
                                        },
                                        error: function (xhr, status, error) {
                                            // Handle error
                                            console.log("Error:", error);
                                        }
                                    });
                                });
                            });
                        </script>

<script>

var prev_date;

function fetch() {
   // Get the ID you want to send to the API
   var idToSend = '<?php echo $toUser; ?>';

   $.ajax({
      url: 'chat_get.php',
      method: 'GET',
      data: {
        toUser: idToSend,
      }, // Send the ID to the API as a parameter
      dataType: 'json',
      success: function(data) {
         // Clear the current list

         <?if($toUser != ""){?>

         $('#messages_content').empty();
         
         if (data["allmessages"].length > 0) {
            data["allmessages"].forEach(function(messageVal, index) {
                var time = messageVal.timeAdded;
                var jsDate = new Date(time * 1000); // Multiply by 1000 to convert seconds to milliseconds
                var dateString = jsDate.toLocaleString(); // Get only the date part
                    
                // Check if dateString is not empty and different from the previous date
                if (dateString && prev_date !== dateString) {
                    var timediv = '<div class="day-divider"><span>' + dateString + '</span></div>';
                    $('#messages_content').append(timediv);
                }

                var messageLines = splitMessageIntoLines(messageVal.message, 80);
                var status = "";
                var read = "";
                var float = "left";
                if(messageVal.fromUser != idToSend){status="outgoing"; if(messageVal.status == "read"){read ='<span class="sent-status seen" title="seen"><i class="fa-solid fa-circle-check"></i></span>';} float = "right";}
                    
                var messagediv = '<div class="single-message '+status+'" style=""><div class="avatar"><img src="assets/images/avatar-2.png" alt="Image"></div><div class="msg-box"><div class="msg-box-inner"><div class="msg-option"><span class="msg-time">'+messageVal.messagestime+'.</span><!--<button class="btn-flush"><i class="fa-light fa-ellipsis-vertical"></i></button>--></div>'+read+'<p>' + messageLines.map(line => '<p>' + line + '</p>').join('') + '</p></div></div></div><br>';
                $('#messages_content').append(messagediv);
                
                
                if (index === data["allmessages"].length - 1) {
                    prev_date = "";
                } else {
                    prev_date = dateString;
                }
            });


         } else {
            console.log("No Record available");
         }

         <?}?>

         $('#activestatus').empty();
         if (data["allUsermessages"].length > 0) {
            data["allUsermessages"].forEach(function(messageVal, index) {

                if(idToSend == messageVal.userId){var status = "active-status inactive"; var val = "Offline"; if(messageVal.login_status == "Active"){var status = "active-status active"; var val = "Active";} $("#activestatus").append('<span class="'+status+'">'+val+'</span>');}

                $(".last_message_time"+messageVal.userId).text(messageVal.lastmessagetime);
                
                $(".last_message"+messageVal.userId).text(messageVal.lastmessage);
                $("#user"+messageVal.userId).addClass("unread");
                if(messageVal.unread < 1){$("#user"+messageVal.userId).removeClass("unread");}
                $(".sidebaruserstatus1"+messageVal.userId).removeClass("active-status active");
                $(".sidebaruserstatus2"+messageVal.userId).removeClass("active-status active");
                if(messageVal.login_status == "Active"){$(".sidebaruserstatus1"+messageVal.userId).addClass("active-status active"); $(".sidebaruserstatus2"+messageVal.userId).addClass("active-status active");}

                


            });
        }else {
            console.log("No Record available");
         }


      },
      error: function(xhr, status, error) {
         console.error('Error fetching bids:', error);
      }
   });
}
// Fetch bids initially and then every 2 seconds
fetch(); // Fetch once when the page loads
setInterval(fetch, 1500);


function splitMessageIntoLines(message, maxCharacters) {
    var lines = [];
    while (message.length > maxCharacters) {
        var line = message.substring(0, maxCharacters);
        lines.push(line);
        message = message.substring(maxCharacters);
    }
    lines.push(message); // Add the remaining part or the entire message if it's shorter than maxCharacters
    return lines;
}


</script>

                        </div>

                    </div>

                </div>

                <?php 
                if(isset($_GET['toUser'])&&isset($_GET['toUser'])!='')
                {?>

                
                <div class="panel border-start rounded-0 closed">

                    <div class="panel-body border-bottom">

                        <div class="user-short">

                            <button class="back-to-chat-btn btn-flush fs-14 d-xxl-none"><i class="fa-light fa-arrow-left"></i></button>

                            <div class="avatar avatar-lg">

                                <img src="./uploads/<?echo $g_allUsersInfo[$toUser]['profile_pic']?>" alt="<?echo $g_allUsersInfo[$toUser]['name']?>">

                            </div>

                            <div class="part-txt">

                                <span class="user-name"><?echo $g_allUsersInfo[$toUser]['name']?></span>

                                <span class="user-mail"><?echo $g_allUsersInfo[$toUser]['email']?></span>

                            </div>

                            <!-- <div class="user-option">

                                <button class="btn btn-icon btn-outline-primary" data-bs-toggle="modal" data-bs-target="#voiceCallModal"><i class="fa-light fa-phone"></i></button>

                                <button class="btn btn-icon btn-outline-primary" data-bs-toggle="modal" data-bs-target="#videoCallModal"><i class="fa-light fa-video"></i></button>

                                <button class="btn btn-icon btn-outline-primary" id="searchMsg"><i class="fa-light fa-magnifying-glass"></i></button>

                            </div> -->

                        </div>

                    </div>

                    <div class="panel-body">

                        <div class="scrollable">

                            <!-- <div class="chatting-option mb-20">

                                <ul>

                                    <li><a href="#"><span><i class="fa-light fa-photo-film"></i></span>Media</a></li>

                                    <li><a href="#"><span><i class="fa-light fa-file-lines"></i></span>Files</a></li>

                                    <li><a href="#"><span><i class="fa-light fa-link"></i></span>Links</a></li>

                                </ul>

                            </div> -->
<!-- 
                            <div class="chatting-option">

                                <ul>

                                    <li><a href="#"><span><i class="fa-light fa-bell-slash"></i></span>Mute notification</a></li>

                                    <li><a href="#"><span><i class="fa-light fa-message-slash"></i></span>Ignore message</a></li>

                                    <li><a href="#"><span><i class="fa-light fa-circle-minus"></i></span>Block user</a></li>

                                </ul>

                            </div> -->

                        </div>

                    </div>

                </div>
            <?php }?>
            </div>

        </div>



        <!-- footer start -->

        <?include("./includes/views/footer.php"); ?>
        <!-- footer end -->

    </div>

    <!-- main content end -->

    

    <!-- Voice Call Modal Start -->

    <div class="modal fade" id="voiceCallModal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">

        <div class="modal-dialog call-modal modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-body">

                    <div class="voice-call">

                        <div class="user">

                            <div class="avatar avatar-lg">

                                <img src="assets/images/avatar-2.png" alt="User">

                            </div>

                            <span class="user-name">Amelie Harris</span>

                            <span class="call-status">Calling...</span>

                        </div>

                        <div class="call-option">

                            <button class="btn btn-sm rounded-circle btn-icon btn-outline-primary"><i class="fa-light fa-microphone-slash"></i></button>

                            <button class="btn btn-sm rounded-circle btn-icon btn-outline-primary"><i class="fa-light fa-volume"></i></button>

                            <button class="btn btn-sm rounded-circle btn-icon btn-outline-primary"><i class="fa-light fa-user-plus"></i></button>

                            <button class="btn btn-sm rounded-circle btn-icon btn-danger" data-bs-dismiss="modal"><i class="fa-light fa-phone-hangup"></i></button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Voice Call Modal End -->

    

    <!-- Video Call Modal Start -->

    <div class="modal fade" id="videoCallModal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">

        <div class="modal-dialog call-modal modal-dialog-centered modal-lg">

            <div class="modal-content">

                <div class="modal-body">

                    <div class="video-call">

                        <div class="user">

                            <div class="user-preview">

                                <img src="assets/images/avatar-big.jpg" alt="User">

                            </div>

                            <div class="part-txt">

                                <span class="user-name">Amelie Harris</span>

                                <span class="call-status">Calling...</span>

                            </div>

                        </div>

                        <div class="bottom">

                            <div class="call-option">

                                <button class="btn btn-sm rounded-circle btn-icon btn-outline-primary"><i class="fa-light fa-microphone-slash"></i></button>

                                <button class="btn btn-sm rounded-circle btn-icon btn-outline-primary"><i class="fa-light fa-video-slash"></i></button>

                                <button class="btn btn-sm rounded-circle btn-icon btn-outline-primary"><i class="fa-light fa-user-plus"></i></button>

                                <button class="btn btn-sm rounded-circle btn-icon btn-danger" data-bs-dismiss="modal"><i class="fa-light fa-phone-hangup"></i></button>

                            </div>

                            <div class="admin-preview">

                                <img src="assets/images/admin.png" alt="Admin">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- video Call Modal End -->

    <?include("./includes/views/footerjs.php"); ?>


</body>

<div class="modal fade" id="create_record_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelTitle">Start Conversation</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form class="kt-form" action="" method="Post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row g-3">
                                
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="control-label form-label">Choose Contact</label>
                                        <select class="form-control" name="chat" id="event-category" required>
                                            <option value="" selected disabled>Choose Contact</option>
                                            
                                                    <?foreach($all_users_to as $user){
                                                        ?>
                                            <option value="<?php echo $user['id']; ?>"><?php echo $user['name']; ?></option>
                                            <?php  }?>
                                        </select>
                                        <!-- <div class="invalid-feedback">Please select a valid event category</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <input type="submit" name="start_chat" value="Start" class="btn btn-primary">
                                    </div>



                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</html>