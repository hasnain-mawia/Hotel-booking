<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$db = "hotel-booking";

$con = mysqli_connect($hostname, $username, $password, $db);

function filteration($data){
    foreach($data as $key => $value){
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

function select($sql,$values,$datatypes){
    $con = $GLOBALS['con'];
if($stmt = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($stmt,$datatypes,...$values);
    if(mysqli_stmt_execute($stmt)){
        $res = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        return $res;   
    }
    else{
        mysqli_stmt_close($stmt);
        die('Query cannot be exicuted');
    }
}else{
    die('Query cannot be Prepraed - Select');
}    
}
function update($sql,$values,$datatypes){
    $con = $GLOBALS['con'];
if($stmt = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($stmt,$datatypes,...$values);
    if(mysqli_stmt_execute($stmt)){
        $res = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        return $res;   
    }
    else{
        mysqli_stmt_close($stmt);
        die('Query cannot be exicuted - Updated');
    }
}else{
    die('Query cannot be Prepraed - Update');
}    
}

function insert($sql,$values,$datatypes){
    $con = $GLOBALS['con'];
if($stmt = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($stmt,$datatypes,...$values);
    if(mysqli_stmt_execute($stmt)){
        $res = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        return $res;   
    }
    else{
        mysqli_stmt_close($stmt);
        die('Query cannot be exicuted - Insert');
    }
}else{
    die('Query cannot be Prepraed - Insert');
}    
}


?>