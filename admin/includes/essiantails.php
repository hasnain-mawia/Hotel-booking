<?php

function adminlogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin'])) && ($_SESSION['adminLogin'] == true)){
       header("location:index.php"); 
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

?>