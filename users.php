 <?include_once("global.php");
if(isset($_GET['logout'])){
    $_SESSION['email'] = "";
    $_SESSION['password'] = "";
    header("Location: ./?");
}


if(isset($_POST['login_code'])){
    $code= $_POST['login_code'];
}

//send_verification_email //forget password
if(isset($_POST['send_verification_email'])){
    $email = mb_htmlentities(($_POST['email']));
    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    $userId = 1;
    $rand = generateRandomString(20);
    $time = time();
    // echo "data"."-".$rand."-".$time."-".$email."-";
    
    //remove previous links
    
    $stmt = $con->prepare("update ".$g_projectSlug."_password_resets set resetlinktimestamp=0 where email=?");
    $stmt->bind_param("s", $email);
    if($stmt->execute())
    {}
    
    
    $stmt = $con->prepare("insert into ".$g_projectSlug."_password_resets set passwordResetId=?, resetlinktimestamp=?, email=?, userId=?");
    $stmt->bind_param("ssss", $rand, $time, $email, $userId);
    if($stmt->execute())
    {
        // echo "entry inserted to ".$g_projectSlug."_password_resets";
        
        
        $query = ("select * from ".$g_projectSlug."_users where email='$email'");
        $result = $con->query($query);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) 
            {
                
                $id = $row['id'];
                $passwordLink = $g_website."/password_reset.php?id=$rand";
                $password_org = "<a href='$passwordLink'>$passwordLink</a>";
                // sendEmailNotification_sendgrid("Reset Password", "Reset your password here.", $email, [$passwordLink, "Reset Password"]);
                sendEmailNotification_mailjet("Reset Password", "Reset your password here: $password_org", $email);
                // echo "email sent 1";
                header("Location: ?success=1111");
                            ?>
            <!--<script>window.location="?success=1"</script>-->
            <?
            }
        }
        
    
        
    }else{
        // echo "error: ".$g_projectSlug."_password_resets not inserted";
        echo $stmt->error;
    }
    
    
    
    
                
}



if(isset($_POST['password_reset'])){
    $id = mb_htmlentities(($_GET['id']));
    $password = mb_htmlentities(($_POST['password']));
    $password0 = mb_htmlentities( md5(md5(sha1( $_POST['password'])).'Anomoz')); 
    if($_POST['password']==$_POST['password1']){
        $password = mb_htmlentities( md5(md5(sha1( $_POST['password'])).'Anomoz')); 
        
        $stmt = getAll($con, "select r.resetlinktimestamp, u.id, u.password, u.email from ".$g_projectSlug."_password_resets r inner join ".$g_projectSlug."_users u on r.email=u.email where r.passwordResetId='$id'");
        foreach ($stmt as $row ) {
            $resetlinktimestamp = $row['resetlinktimestamp'];
            $password_old = $row['password'];
            $email = $row['email'];
            $id = $row['id'];
        
        }
       
    
        if( true){
            $stmt = $con->prepare("update ".$g_projectSlug."_users set password=? where id=?");
            $stmt->bind_param("ss", $password, $id);
            if(!$stmt->execute())
            {
                die('bind_param() failed: ' . htmlspecialchars($stmt->error));
                echo "err";
                exit();
            }else{
                sendEmailNotification_mailjet("Password changed", "Your account password has been changed successfully.", $email);
                
                header("location: ./?success=1");
                ?>
                <script>window.location="settings.php?err=true"</script>
                <?
            }
        }               
    }
    else{
        header("location: ./?success=0");
        ?>
        <script>window.location="./settings.php?err=false"</script>
        <?
    }
}

// var_dump($_POST);
if(isset($_POST['login'])){
    ;
    $email = mb_htmlentities(($_POST['email']));
    $password = mb_htmlentities( md5(md5(sha1( $_POST['password'])).'Anomoz')); 
    $query= "select * from ".$g_projectSlug."_users where email='$email' and password='$password'"; 
    $result = $con->query($query);
    
    if($result->num_rows>0){
    while($row = $result->fetch_assoc()) 
    { 
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        
        // echo "g_enable2fa: $g_enable2fa ";exit();
        if ($g_enable2fa) {
            $code = rand(1000, 9999);
            $sql = "update ".$g_projectSlug."_users set loginAuth='$code' where email='$email' ";
            if (!mysqli_query($con, $sql)) {
                echo "can not 1";
            }
        }

        if (!isset($_GET['redir'])) {
            $_GET['redir'] = "./home.php?";
        }


      if ($g_enable2fa) {
        $email_body = "$code is your login code.";
        sendEmailNotification_mailjet("Login code", $email_body, $email);
      }

      if (!$g_enable2fa) {
        $_SESSION['loginAuthCorrect'] = true;
        header("Location: " . ($_GET['redir'] . "$err"));
      }

      $_SESSION['loginAuth'] = $code;
      header("Location: ?code=1&redir=" . urlencode($_GET['redir'] . "$err"));
    }
    }
    else{
        ?>
        <script>window.location = "./login.php?err=failed";</script>
        <?
    }
}

if(isset($_GET['user_account'])){
    $name = mb_htmlentities(($_GET['user_account']));
    $query= "select * from ".$g_projectSlug."_users where id='$name'"; 
    $result = $con->query($query);
    while($row = $result->fetch_assoc()) 
    { 
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        ?><script>window.location = "?";</script><?
    }
}


if(isset($_POST['create_user'])){
    $name = mb_htmlentities(($_POST['name']));
    $name = preg_replace('/[^a-zA-ZÀ-ÿ \-]/', '', $name);
    
    $email = mb_htmlentities(($_POST['email']));
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    $phone = mb_htmlentities(($_POST['phone']));
    $phone = preg_replace('/[^(0-9.+ \-)]/', '', $phone);
    
    $company = mb_htmlentities(($_POST['company']));
    $country = mb_htmlentities(($_POST['country']));
    $cnic = mb_htmlentities(($_POST['cnic']));
    $actionId = mb_htmlentities(($_POST['actionId']));
    

    $businessName = mb_htmlentities(($_POST['businessName']));
    $mobilePhone = mb_htmlentities(($_POST['mobilePhone']));
    $address = mb_htmlentities(($_POST['address']));
    $city = mb_htmlentities(($_POST['city']));
    $state = mb_htmlentities(($_POST['state']));
    $zip = mb_htmlentities(($_POST['zip']));
    $website = mb_htmlentities(($_POST['website']));
    $company = mb_htmlentities(($_POST['company']));
    $homePhone = mb_htmlentities(($_POST['homePhone']));
    
    
    $id = generateRandomString();
    $rand = generateRandomString(20);
    
    
    $actionId = mb_htmlentities($_POST['actionId']);
    $manager_name = mb_htmlentities($_POST['manager_name']);
    //saving employe id from name
    $sql = "SELECT id FROM smsCampaigner_users WHERE name = '$manager_name'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $manager_id = $row['id'];
    //end we got id instead of name
    $password = mb_htmlentities( md5(md5(sha1( $_POST['password'])).'Anomoz')); 
    
    if($actionId==""){
        
        $role = 'user';
        $lang = "EN";
        $time = time();
        
        
        
        
        if($actionId==""){
            $query = "insert into ".$g_projectSlug."_users set id='$id', name='$name', email='$email',manager_id='$manager_id', phone='$phone', password='$password',
            businessName='$businessName', mobilePhone='$mobilePhone',country_name='$country',cnic_no='$cnic', homePhone='$homePhone', address='$address', city='$city', state='$state', zip='$zip', 
            website='$website', company='$company', role='$role';
            
            ";
            // echo $query;
            $stmt = $con->prepare($query);
            if(!$stmt->execute())
            {
                die('bind_param() failed: ' . htmlspecialchars($stmt->error));
                echo "err";
            }else{
                
               $_SESSION['email'] = $email;
               $_SESSION['password'] = $password;
               header("Location: ./home.php");
                
            }
        }else{
            
            
        }
    }else{
        //update
        
            
    }
    
}




if(isset($_GET['allowAccess'])){
    $id = $_GET['allowAccess'];
    $sql="update ".$g_projectSlug."_users set isAllowed='yes' where id='$id'";
    if(!mysqli_query($con,$sql)){echo "err";}
}


if(isset($_GET['delete-record'])){
    $id = $_GET['delete-record'];
    if($id!="admin"){
        $sql="delete from ".$g_projectSlug."_users where id='$id'";
        if(!mysqli_query($con,$sql)){echo "err";}
    }
}



if(isset($_POST['save_settings'])){
    $name = mb_htmlentities(($_POST['name']));
    $email = mb_htmlentities(($_POST['email']));
    $country_name = mb_htmlentities(($_POST['country']));
    $cnic = mb_htmlentities(($_POST['cnic']));

    $phone = mb_htmlentities(($_POST['phone']));
    $location=mb_htmlentities(($_POST['location']));
    $post=mb_htmlentities(($_POST['post']));
    $file_name=htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
    $profile_pic=mb_htmlentities($file_name);
    $description=mb_htmlentities(($_POST['description']));
    
    if(isset($_FILES["fileToUpload"])){
        $profile_pic = storeFile($_FILES['fileToUpload']); 
        $sql="update ".$g_projectSlug."_users set profile_pic='$profile_pic' where id='$session_userId'";
        //echo $sql;
        if(!mysqli_query($con,$sql))
        {
            echo "err";
            
        }
    }
    
    
   
    $sql="update ".$g_projectSlug."_users set name='$name', email='$email',country_name='$country_name', cnic_no='$cnic' , phone='$phone' , location='$location', post='$post' where id='$session_userId'";
        if(!mysqli_query($con,$sql))
    {
        echo ('err');
        
    }else{
        ?>
        <script>window.location="?success=12"</script>
        <?
    }
    
}


if(isset($_POST['password0'])){

    $password0 = mb_htmlentities( md5(md5(sha1( $_POST['password0'])).'Anomoz'));
    $password = mb_htmlentities( md5(md5(sha1( $_POST['password'])).'Anomoz'));
    if($password0==$session_password){
        $sql="update ".$g_projectSlug."_users set password='$password' where id='$session_userId'";
        //echo $sql;
        if(!mysqli_query($con,$sql))
        {
            echo "err";
            
        }else{
            $_SESSION['password'] = $password;
            ?>
            <script>window.location="?success=1"</script>
            <?
        }
    }
    
}


if (isset($_POST['save_banner'])) {
    $btitle = $_POST['bannertitle'];
	$filename = $_FILES["bannerimage"]["name"];
    $filesize = $_FILES["bannerimage"]["size"];
    $tmpname = $_FILES["bannerimage"]["tmp_name"];
    $ftype = $_FILES["bannerimage"]["type"];

    /*$file_name=htmlspecialchars( basename( $_FILES["bannerimage"]["name"]));
    $profile_pic=mb_htmlentities($file_name);*/

    $newname = $session_userId.$filename;
    
    $image = "./uploads/".$newname;
	move_uploaded_file($tmpname,$image);
    /*$profile_pic = storeFile($_FILES['bannerimage']);*/

        $sql="update smsCampaigner_users set bannertitle='$btitle', bannerimage='$image' where id='$session_userId'";
        mysqli_query($con,$sql);
    
}



if (isset($_POST['save_backimg'])) {
	$filename = $_FILES["background_image"]["name"];
    $filesize = $_FILES["background_image"]["size"];
    $tmp_name = $_FILES["background_image"]["tmp_name"]; 
    $ftype = $_FILES["background_image"]["type"];

   
    $new_name = $session_userId.$filename;
    
    $background_image = "./uploads/".$new_name;
	move_uploaded_file($tmp_name,$background_image);
    /*$profile_pic = storeFile($_FILES['bannerimage']);*/

        $sql="update smsCampaigner_users set background_image='$background_image' where id='$session_userId'";
        mysqli_query($con,$sql);
    
}


// $file_name=htmlspecialchars( basename( $_FILES["save_backimg"]["name"]));
//     $background_image=mb_htmlentities($background_image);
    
//     if(isset($_FILES["save_backimg"])){
//         $background_image = storeFile($_FILES['background_image']); 
//         $sql="update ".$g_projectSlug."_users set background_image='$background_image' where id='$session_userId'";
//         //echo $sql;
//         if(!mysqli_query($con,$sql))
//         {
//             echo "err";
            
//         }
//     }


?>