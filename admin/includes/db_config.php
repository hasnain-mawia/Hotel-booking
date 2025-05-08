<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$db = "hotel-booking";

$con = mysqli_connect($hostname, $username, $password, $db);
// if(!$conn){
//     die("Database Error Occurs");
// }else{
//     die("Database Connected successfully");
// }
function filteration($data){
    foreach($data as $key => $value){
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

function select($sql, $values, $datatypes){
$con = $GLOBALS['con'];
if($stmt = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($stmt, $datatypes,$values);    
}else{
    die('Query cannot be exicuted');
}    

} 



?>