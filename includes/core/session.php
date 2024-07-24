<?php

function setlog(){

    global $g_projectTitle, $con, $session_userId, $g_projectSlug, $g_filename, $g_currentUrl;


    $timeAdded = time();
    $ip = get_client_ip();
    $id = generateRandomString();
    $get_data = json_encode($_GET);
    $post_data = json_encode($_POST);
    $sql = "INSERT INTO `" . $g_projectSlug . "_log` set id='$id' , ip='$ip', title='$title', page='$g_filename', url='$g_currentUrl',
    timeAdded='$timeAdded', userId='$session_userId', get_method='$get_data', post_method='$post_data'";
    if (!mysqli_query($con, $sql)) {
        echo mysqli_error($con);
    }
    return true;
}


// $logged, $session_role, $session_id, $session_userId, $session_password ,$session_name, $session_email, $session_phone, $session_data = "";
function setLoginUserSessionVariables(){
    global $con, $g_projectSlug, $logged, $session_role, $session_id, $session_userId, $session_profile_pic, $session_password ,$session_name, $session_email, $g_modules_global, $session_phone, $session_data;
    if (isset($_SESSION['email'])&&isset($_SESSION['password'])){
        $session_userId = $_SESSION['id'];
        $session_password = $_SESSION['password'];
        $session_email =  $_SESSION['email'];
        $session_profile_pic = $_SESSION['profile_pic'];
        $query = "SELECT *  FROM ".$g_projectSlug."_users WHERE (email='$session_email' AND password='$session_password') or id='$session_userId'";
        // echo $query;
        // exit();
        $result = $con->query($query);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $logged=1;
                $session_role = $row['role'];
                $session_id = $row['id'];
                $session_userId = $row['id'];
                $session_profile_pic = $row['profile_pic'];
                $session_password = $row['password'];
                $session_name = $row['name'];
                $session_email = $row['email'];
                $session_phone = $row['phone'];
                $session_data = $row;
            }
        }else{
            $logged=0;
        }
    }else{
            $logged=0;
    }
    
    if(isset($_SESSION['usernumber'])){
        $usernumber = $_SESSION['usernumber'];
        $sq     = "SELECT * from ".$g_projectSlug."_users where usernumber = '$usernumber'  ";
            $result = $con->query($sq);
            $num    = mysqli_num_rows($result);
            if ($num == 1) {
            	$logged = 1;
        	    	while ($row = $result->fetch_assoc()) {
        	    		$_SESSION['id'] = $row['id'];
        	    		$session_name = $row['name'];
        	            $session_email = $row['email'];;
        	            $session_userId = $row['id'];
                        $session_profile_pic = $row['profile_pic'];
        	            $session_role = $row['role'];
        	            $session_phone = $row['phone'];
                        $session_address = $row['address'];
                        $session_about = $row['about'];
                        $session_data = $row;
        	    }
            }
    }
   
    if($g_modules_global['enableUserDataLogging']){
        setlog();
    }

}

// var_dump($_SESSION);
function mb_htmlentities($string, $hex = true, $encoding = 'UTF-8') {
    global $con;
    return mysqli_real_escape_string($con, $string);
}

function escape($string, $hex = true, $encoding = 'UTF-8') {
    global $con;
    return mysqli_real_escape_string($con, $string);
}

function setFlash($key, $value, $type){
    $_SESSION['flash_msg'][$key] = ['type' => $type, 'msg' => $value];
}

function getFlash($key){
    // return $_SESSION['flash_msg'][$key]['msg'] ?? false;
}

function getFlashType($key){
// 	return $_SESSION['flash_msg'][$key]['type'] ?? false;
}

function removeFlash($key){
    unset($_SESSION['flash_msg'][$key]);
}

//primary functions

function generateRandomString($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateId($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function editDelete($table, $row, $id, $id_value, $whichBtns="ed"){
    global $session_role;
    global $g_main_admin_id;
    if($session_role=="admin" && $g_main_admin_id=="admin"){
        if (strpos($whichBtns, 'e') !== !true) {
        ?>
        <a class="btn btn-sm btn-warning" href="./g_edit.php?t=<?echo $table?>&r=<?echo $row?>&i=<?echo $id?>&iv=<?echo $id_value?>&c=<?echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" style="color:white;background:orange;">Edit</a>
        <?}
            if (strpos($whichBtns, 'd') !== !true) {
        ?>
        <a class="btn btn-sm btn-danger" href="./g_delete.php?t=<?echo $table?>&r=<?echo $row?>&i=<?echo $id?>&iv=<?echo $id_value?>&c=<?echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" style="color:white;background:red;">Delete</a>
        <?
        }
    }
}

function storeFile($file){
	$randomName = generateRandomString();
	$target_dir = "./uploads/";
	$fileName_db = "file_".$randomName.basename($file["name"]);
	$target_file = $target_dir . "file_".$randomName.basename($file["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
	if($file["tmp_name"]!="") {
		$uploadOk = 1;
        // Check if file already exists
		if (file_exists($target_file)) {
            //echo "Sorry, file already exists.";
			$filename=basename( $file["name"]);
			$uploadOk = 1;
		}
            // Check file size
		if ($file["size"] > 5000000000000) {
			$uploadOk = 0;
			return "";
		}
        
        // Allow certain file formats
        $allowrdFormats = ["php"];
        if(in_array($imageFileType, $allowrdFormats) ) {
          echo "Sorry, this format is not allowed. Format received: $imageFileType";
          $uploadOk = 0;
        }
        
        

        // Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			return "";
        // if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($file["tmp_name"], $target_file)) {
                //echo "The file ". basename( $file["name"]). " has been uploaded.";
				$filename=basename( $file["name"]);
				$uploadOk = 1;
				return $fileName_db;
			} else {
				return "";
			}
		}
	}
	return "";
}

function uploadMultipleFile($file,$k,$target_dir = "./uploads/"){
    $randomName = generateRandomString();
    $fileName_db = "file_".$randomName.basename($file["name"][$k]);
    $target_file = $target_dir . $fileName_db;

    //The temp file path is obtained
    $tmpFilePath = $file['tmp_name'][$k];
   //A file path needs to be present
    if ($tmpFilePath != ""){
      //File is uploaded to temp dir
      if(move_uploaded_file($tmpFilePath, $target_file)) {
        return $fileName_db;
      }
      return "default.png";
    }
}


function convertArrayToIndexArray($arr){
    $temparr = [];
    foreach($arr as $row){
        $temparr[$row] = $row;
    }
    return $temparr;
}

function secondsToTime($inputSeconds) {
    $secondsInAMinute = 60;
    $secondsInAnHour = 60 * $secondsInAMinute;
    $secondsInADay = 24 * $secondsInAnHour;

    // Extract days
    $days = floor($inputSeconds / $secondsInADay);

    // Extract hours
    $hourSeconds = $inputSeconds % $secondsInADay;
    $hours = floor($hourSeconds / $secondsInAnHour);

    // Extract minutes
    $minuteSeconds = $hourSeconds % $secondsInAnHour;
    $minutes = floor($minuteSeconds / $secondsInAMinute);

    // Extract the remaining seconds
    $remainingSeconds = $minuteSeconds % $secondsInAMinute;
    $seconds = ceil($remainingSeconds);

    // Format and return
    $timeParts = [];
    $sections = [
        'day' => (int)$days,
        'hour' => (int)$hours,
        'minute' => (int)$minutes,
    ];

    foreach ($sections as $name => $value){
        if ($value > 0){
            $timeParts[] = $value. ' '.$name.($value == 1 ? '' : 's');
        }
    }

    return implode(', ', $timeParts);
}


function renderFormFieldsFromCrudJson($arrayFields_crud){
    ?>
    <? foreach ($arrayFields_crud as $col => $info) { ?>
		<div class="form-group">
			<? if (strpos($info[1], "hidden") === false) { ?>
				<label><? echo ucfirst(str_replace("_", " ", $col)) ?></label>
				<? if ($info[4] != "") { ?>
					<small><? echo $info[4] ?></small>
				<? } ?>
			<? } ?>
			<? if ($info[0] == "input" && in_array($info[3], ["text", "email", "password", "number", "file", "date", "time", "color", "datetime", "checkbox", "radio"])) { ?>
				<? if (in_array($info[3], ["checkbox", "radio"])) { ?>
					<? foreach ($info[2] as $i => $option) { ?>
						<div class="form-check">
							<input name="<? echo $col ?><? if ((strpos($info[1], 'multiple') !== false)) {
															echo '[]';
														} ?>" class="form-check-input" type="<? echo $info[3] ?>" value="<? echo $i ?>" id="<? echo $col ?>" <? echo $info[1] ?>>
							<label class="form-check-label" for="<? echo $col ?>">
								<? echo ucfirst(str_replace("_", " ", $option)) ?>
							</label>
						</div>
					<? } ?>
				<? } else { ?>
					<input type="<? echo $info[3] ?>" name="<? echo $col ?><? if ((strpos($info[1], 'multiple') !== false)) {
																				echo '[]';
																			} ?>" class="form-control" <? echo $info[1] ?>>
				<? } ?>
			<? } else if ($info[0] == "select") { ?>
				<select name="<? echo $col ?><? if ((strpos($info[1], 'multiple') !== false)) {
													echo '[]';
												} ?>" class="form-control" <? echo $info[1] ?>>
					<? foreach ($info[2] as $i => $option) { ?>
						<option value="<? echo $i ?>"><? echo $option ?></option>
					<? } ?>
				</select>
			<? } else if ($info[0] == "input" && in_array($info[3], ["image"])) { ?>
				<input type="file" name="<? echo $col ?><? if ((strpos($info[1], 'multiple') !== false)) {
															echo '[]';
														} ?>" class="form-control" <? echo $info[1] ?>>
			<? } else if ($info[0] == "textarea") { ?>
				<textarea type="text" name="<? echo $col ?>" class="form-control" <? echo $info[1] ?>></textarea>
			<? } else { ?>
				<code><? echo $col ?> Couldn't render</code>
			<? } ?>
		</div>
	<? } ?>
    <?
}

function renderModalJqueryFromCrudJson($arrayFields_crud){
    ?>
    if (mydata != null) {
		$("#modelTitle").html("Update");
		<? foreach ($arrayFields_crud as $col => $info) {
			if ((strpos($info[1], "hidden") == false) && !in_array($info[3], ["file", "image"])) { ?>
				<? if (!in_array($info[3], ["checkbox", "radio"])) { ?>
					$("<? echo $info[0] ?>[name='<? echo $col ?><? if ((strpos($info[1], 'multiple') !== false)) {
						echo '[]';
					} ?>']").val(mydata['<? echo $col ?>'])
				<? } else { ?>
					if (mydata['<? echo $col ?>'] != "") {
						isChecked = true;
					} else {
						isChecked = false;
					}
					$("<? echo $info[0] ?>[name='<? echo $col ?><? if ((strpos($info[1], 'multiple') !== false)) {
    					echo '[]';
    				} ?>']").prop('checked', isChecked);
				<? } ?>
		<? }
		} ?>
		$("input[name='actionId']").val(mydata['id'])
	} else {
		$("#modelTitle").html("Insert");
		$("input[name='actionId']").val("")
		<? foreach ($arrayFields_crud as $col => $info) {
			if ((strpos($info[1], "hidden") == false) && !in_array($info[3], ["file", "image"])) { ?>
				<? if (!in_array($info[3], ["checkbox", "radio"])) { ?>
					$("<? echo $info[0] ?>[name='<? echo $col ?><? if ((strpos($info[1], 'multiple') !== false)) {
						echo '[]';
					} ?>']").val("")
				<? } ?>
		<? }
		} ?>

		$("input[name='actionId']").val("")

	}
    <?
}




//if enabled twilio
// require_once __DIR__ . '/vendor/Twilio/autoload.php';
// use Twilio\Rest\Client;
function sendansms($phonenumber,$message){

    $smsErrMsg = null;
    try{
      // Your Account SID and Auth Token from twilio.com/console
        $sid = 'AC3266101362ec113da0700e395def752a';
        $token = 'b170048db896220e0f8817e7d40fd7ec';
        $client = new Client($sid, $token);
        
        // Use the client to do fun stuff like send text messages!
        $client->messages->create(
            // the number you'd like to send the message to
            $phonenumber,
            array(
                // A Twilio phone number you purchased at twilio.com/console
                'from' => '+18563910805', 
                // the body of the text message you'd like to send
                'body' => $message
            )
        );
        return "SMS Sent Successfully.";
    }catch(Exception $e){
        $smsErrMsg = $e->getMessage();
    }
    return $smsErrMsg;
    
}

function testEmailServer(){
    sendEmailNotification_simple("Testing email sent.", "This is a test email sent.", "snahmed1998@gmail.com");
    echo "Email sent";
}

function testSMSServer(){
    echo sendansms("923362286024", "This is a test sms sent.");
}

function printArray($array){
    echo "<pre><code>";
    var_dump($array);
    echo "</code></pre>";
}

function sendRequest($url, $type="GET", $postFields = [], $headers = ['Content-Type:application/x-www-form-urlencoded']){
    
    
    if(strtolower($type)=="get"){
        $type_bool = 0;
    }else{
        $type_bool = 1;
    }
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, $type_bool);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    if(strtolower($type)=="post"){
        // echo "sending data";
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($postFields));
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $server_output = curl_exec($ch);
    
    curl_close ($ch);
    return $server_output;
}

function generateRandomUsername(){
    $result = json_decode(sendRequest("https://randomuser.me/api/", "get", [], ['Content-Type:application/json']), true);
    return $result['results'][0]['login']['username'];
}

function checkPermission($module_name, $action_needed,$session_userId){
    global $con;

    $query = "SELECT $action_needed from ".$g_projectSlug."_module WHERE userId = '$session_userId' AND module_name = '$module_name' ";
    $result = $con->query($query);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) 
        {
           // print_r($row);
            if ($row[$action_needed] == 'Y') {
                return true;
            }
            if($row[$action_needed] == 'N'){

                return false;
            }
            if($row[$action_needed] == ''){

                return true;
            }
            
        }
    }
   
}

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$timeAdded = time();
$time = time();

function dump($data)
{
    ini_set("highlight.comment", "#008000");
    ini_set("highlight.default", "#ffffff");
    ini_set("highlight.html", "#808080");
    ini_set("highlight.keyword", "#ffcc00; font-weight: bold");
    ini_set("highlight.string", "#00ff00");
    echo"
            <style>
                code{
                    background: #252627 !important;
                    position: relative;
                    z-index: 99999999;
                    display: block;
                    padding: 10px;
                }
            </style>
        ";
    highlight_string("<?php\n " . var_export($data, true) . "?>");
    echo '<script>document.getElementsByTagName("code")[0].getElementsByTagName("span")[1].remove() ;document.getElementsByTagName("code")[0].getElementsByTagName("span")[document.getElementsByTagName("code")[0].getElementsByTagName("span").length - 1].remove() ; </script>';
}

function dd($data){
    dump($data);
    die();
}

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
     return json_decode(json_encode(json_decode(file_get_contents("http://ipwho.is/".$ip))), true)[$purpose];
     
    ;
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

function isActiveMenuItem($array, $fileName) {
    foreach ($array as $item) {
        if ($item[0] == $fileName) {
            return 'kt-menu__item--here';
        }
    }
    return '';
}


function validatePrevilage(){
    return true;
}

function generateUrlParams($newvalues = []){
    $newUrl = "";
    $get_tmp = [];
    foreach($_GET as $param => $value){
        $get_tmp[$param]  = $value;
    }
    foreach($newvalues as $param => $value){
        $get_tmp[$param]  = $value;
    }
    foreach($get_tmp as $param => $value){
        $newUrl.= ($param."=".$value."&");
    }
    echo $newUrl;
}

function generateUrlParams_return($newvalues = []){
    $newUrl = "";
    $get_tmp = [];
    foreach($_GET as $param => $value){
        $get_tmp[$param]  = $value;
    }
    foreach($newvalues as $param => $value){
        $get_tmp[$param]  = $value;
    }
    foreach($get_tmp as $param => $value){
        $newUrl.= ($param."=".$value."&");
    }
    return $newUrl;
}

function checkEmployeeAccessPermission($module){
    global $g_allowedPermissions;
    if($g_allowedPermissions[$module]=="enable"){
        return true;
    }return false;
}

// var_dump(checkEmployeeAccessPermission("invoice"));

function askChatGPT($prompt) {
	if ($prompt != "") {  
		 $apiKey = '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'; // Replace with your actual API key
		$url = 'https://api.openai.com/v1/chat/completions';

		$data = array(
			'model' => 'gpt-3.5',
			'messages' => array(
				array('role' => 'system', 'content' => 'You are a customer support agent.'),
				array('role' => 'user', 'content' => $prompt)
			)
		);

		$headers = array(
			'Content-Type: application/json',
			'Authorization: Bearer ' . $apiKey
		);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = curl_exec($ch);
		curl_close($ch);

		$responseData = json_decode($response, true);
		$chatResponse = $responseData['choices'][0]['message']['content'];

		$response = array(
			'prompt' => $prompt,
			'status' => 'success',
			'response' => $chatResponse
		); 
		
	} else {
		
		$response = array(
			'prompt' => '',
			'status' => 'error',
			'response' => 'prompt can not be empty'
		);			
	}
	
	return json_encode($response);
}

function setNotification($data){
    global $g_projectTitle, $g_projectSlug, $con;
    $id = $data['id'];
    $toUser = $data['toUser'];
    $title = $data['title'];
    $desc = $data['desc'];
    $redirectUrl = $data['redirectUrl'];
    $email = $data['email'];

    $sql="INSERT INTO `".$g_projectSlug."_notifications`(`notification_id`, `to_user_id`, `title`, `description`, `redirect_url`) VALUES ('".$id."','$toUser','$title','$desc','$redirectUrl')";
    if(!mysqli_query($con,$sql)){
        echo mysqli_error($con);
        return !true;
    }
    
    if(!true){
        if($redirectUrl!=""){
            $viewLink = "<a href=\"$redirectUrl\" style=\"text-align: center;
                margin: 1px auto;
                justify-content: center;
                display: block;
                background: #0a2b6e;
                padding: 10px;
                border-radius: 10px;
                width: 150px;
                color: white;\" >View </a>";
    
        }
        $email_content.="
        <div
            
            style=\"text-align: center;
            margin: 1px auto;
            justify-content: center;
            display: block;
            background: #f0f3fe;
            padding: 10px;
            border-radius: 10px;
            color: black;
    
    
            \">
    
        
        <h2 style='text-align: center;padding-bottom: 5px;font-size: 30px !important;font-weight: 800;'>$g_projectTitle</h2>
        
        <h4 style='text-align: center;padding-bottom: 5px;font-size: 20px;'>$title</h4>
        <p style='text-align: center;font-size: 18px;'>$desc</p>
        
        $viewLink
    
    </div>
    ";
        $email_template = $email_template_top.$email_content.$email_template_bottom;
        // sendEmailNotification($title,$email_template,$email, $redirectUrl); // for santino
    
    }
    
    if(checkGlobalPermission('enableShowNotifications')){
        sendEmailNotification_mailjet($title, $desc, $email);
        // , [$redirectUrl, "View Now!"]
    }
    return true;
}




function sendEmailNotification_mailjet($subject, $message, $email, $containsAttachment=0, $attachments = array(), $ccInfo = [], $bccInfo = []){
    global $g_projectTitle;
    $ch = curl_init();
    
    $from = "dev.email.sender2@anomoz.com";
    $vars = [
        'Messages'=>[
            [
                'From'=>[
                        'Email' => $from,
                        'Name' => $g_projectTitle
                    ],
                'To'=>[
                    [
                        'Email' => $email,
                        'Name' => 'Receiver',
                    ]
                ],
                'Subject' => $subject,
                'TextPart' => $message,
                'HTMLPart' => $message,
                'CustomID' => 'AppGettingStartedTest',
            ]
        ]
    ];
        
    if(count($ccInfo)>1){
         $vars['Messages'][0]['Cc'][0] =  [
        'Name' => $ccInfo['name'],
        'Email' =>  $ccInfo['email'],
      ];
    }
    
    if(count($bccInfo)>1){
         $vars['Messages'][0]['Bcc'][0] =  [
        'Name' => $bccInfo['name'],
        'Email' =>  $bccInfo['email'],
      ];
    }

    $vars = json_encode($vars, true);

    
    curl_setopt($ch, CURLOPT_URL,"https://api.mailjet.com/v3.1/send");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$vars);  //Post Fields
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $headers = [
        'X-Apple-Tz: 0',
        'X-Apple-Store-Front: 143444,12',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
        'Accept-Encoding: gzip, deflate',
        'Accept-Language: en-US,en;q=0.5',
        'Cache-Control: no-cache',
        'Content-Type: application/json; charset=utf-8',
        'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/28.0',
        'X-MicrosoftAjax: Delta=true',
    ];
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_USERPWD, "0a297227ed9bd3e7fe0cc8a2b455c1d6:1c21b15c834ce5a934c928b3a0d2cf03");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    
    $server_output = curl_exec ($ch);
    
    curl_close ($ch);
    if($server_output!=""){
        // var_dump($server_output);
    }else{
        // echo "email sent to $email";
    }

}

function sendEmailNotification($subject, $message, $email){
    sendEmailNotification_mailjet($subject, $message, $email);                                     
}// 

function sendTemplateEmail($subject,$message,$email){
    global $g_website, $g_primaryColor;
	$url = $g_website.'/includes/views/email_template.php?subject='.urlencode($subject).'&message='.urlencode($message);
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$html = curl_exec($ch);
	
	if ($html !== false) {
// 		dd($html);
		sendEmailNotification_mailjet($subject, $html, $email);
		$return = 'Email Sent';
	} else {
		$return = 'Error fetching the content: ' . curl_error($ch);
	}
	curl_close($ch);
	return $return;	
}
 



?>