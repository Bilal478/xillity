<?require("./global.php");

header('Content-Type: application/json; charset=utf-8');

$module = $_GET['module'];
$action = $_GET['action'];
$clientId = $_GET['clientId'];

// $_POST = json_decode($_POST, true);
// var_dump($_POST['update']);
// var_dump($_SERVER);

// echo "<hr>";
// exit();
// var_dump($_GET);
$hasError = false;
//prepare where
if(is_array($_POST['where'])){
    $whereQuery = " WHERE ";
    foreach($_POST['where'] as $iWhere => $valueWhere){
        $whereQuery.=" $iWhere = '$valueWhere' AND ";
    }
    $whereQuery = substr($whereQuery, 0, -4)." ";;
}
//prepare update
if(is_array($_POST['update'])){
    $updateQuery = " SET ";
    foreach($_POST['update'] as $iWhere => $valueWhere){
        $updateQuery.=" $iWhere = '$valueWhere', ";
    }
    $updateQuery = substr($updateQuery, 0, -2)." ";;
}
//prepare update
if(is_array($_POST['insert'])){
    $insertQuery = " SET ";
    foreach($_POST['insert'] as $iWhere => $valueWhere){
        $insertQuery.=" $iWhere = '$valueWhere', ";
    }
    $insertQuery = substr($insertQuery, 0, -2)." ";;
}
// echo $whereQuery;

if(in_array($action, ["get", "update", "create", "delete"])){
    if($action=="get"){
        $query = "select * from $g_projectSlug"."_"."$module $whereQuery";
        $data = getALL($con, $query);
        if($con->error==""){

        }else{
            $errorMessage =  $con->error;
            $hasError = true;
        }
        
    }else{
        if($action=="create"){
            $query = "insert into $g_projectSlug"."_"."$module";
        }else if($action=="update"){
            $query = "update $g_projectSlug"."_"."$module ";
        }else if($action=="delete"){
            $query = "delete from $g_projectSlug"."_"."$module ";
        }
        
        $query.= $insertQuery;
        $query.= $updateQuery;
        $query.= $whereQuery;
        
        // echo $query;
        $result=$con->query($query);
        if(!$result)
        {
            $errorMessage =  $con->error;
            $hasError = true;
        }
        $data = "Action was successful.";
    }
}else{
    $hasError = true;
    $errorMessage = "Invalid action <$action>: Only [get, update, create, delete] can be used";
}


if(!$hasError){
    $response = [
        "data"=> $data,
        "status"=>1
    ];
}else if($hasError){
    $response = [
        "err"=> $errorMessage,
        "status"=>0
    ];
}

echo json_encode($response, true);
// echo "<hr>";