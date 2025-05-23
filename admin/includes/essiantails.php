<?php

define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'].'/hotel-booking/assets/images/');
define('ABOUT_FOLDER', 'about/');

function adminlogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)){
       echo"<script>window.location.href='index.php';</script>"; 
    } 
}

function redirect($url){
    echo"<script>window.location.href='$url';</script>";
}


function alert($type, $msg){
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    echo <<<alert
        <div class="container mt-4">
        <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
        <span class="me-3">$msg</span>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        </div>
        alert;
}

function uploadImage($image, $folder){
$valid_mine = ['image/jpeg','image/png','image/webp'];
$img_mine = $image['type'];

if(!in_array($img_mine,$valid_mine)){
    return 'inv_img'; // invalid Image
}else if(($image['size']/(1024*1024))>2){
    return 'inv_size '; // invalid Size greater than 2mb
}else{
    $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
    $rname = 'IMG_'.random_int(11111, 99999).".$ext";
    $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
    if(move_uploaded_file($image['tmp_name'],$img_path)){
        return $rname;
    }else{
        return 'upd_failed';
    }
}
}

?>