<?php
require('./includes/essiantails.php');
adminlogin();
session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Dashboard</title>
    <?php require('../common/links.php'); ?>
</head>

<body class="bg-light">

    <?php require('./includes/header.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden" id="main-content">
                <h4 class="mb-4">SETTINGS</h4>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-settings"><i class="bi bi-pencil-square"></i> Edit</button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="general-settings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">General Settings</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Site Title</label>
                            <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none">
                        </div>
                        <div class="mb-3 p-0">
                            <label for="exampleFormControlTextarea1" class="form-label">About Us</label>
                            <textarea name="site_about" class="form-control shadow-none" id="site_about_inp" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                        <button onclick="upd_general(site_title.value, site_about.value)" type="button" class="btn custom-bg text-white shadow-none">Save</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
    <!-- Edit Modal -->

    <?php require('../common/links.php'); ?>
    <?php require('../assets/js/scripts.php'); ?>
<script>
    let general_data;

    function get_general(){
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');
       
        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function(){
            general_data = JSON.parse(this.responseText);
            // console.log(general_data);
            site_title.innerText = general_data.site_title;
            site_about.innerText = general_data.site_about;

            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;
        }
        xhr.send('get_general');
    }
    window.onload = function(){
        get_general();
    }
    function upd_general(site_title_val, site_about_val){
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function(){
            var myModalEl = document.getElementById('general-settings');
            var modal = bootstrap.Modal.getInstance(myModalEl); // Returns a Bootstrap modal instance
            modal.hide();

            if(this.responseText == 1){
                alertPop('success','Changes Updated Successfully');
                get_general();
            }else{
                alertPop('error','No Changes Found');
            }
        }
        xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
    }

</script>


</body>
</html>