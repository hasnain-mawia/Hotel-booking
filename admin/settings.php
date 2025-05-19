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
                <div class="card border-0 shadow-sm">
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

                <div class="card mt-4 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.value)" class="form-check-input shadow-none" type="checkbox" role="switch" id="shutdown-toggle">
                                </form>
                            </div>
                        </div>
                        <p class="card-text">No Customers will be allowed to booking when shutdown mode is on</p>
                    </div>
                </div>
                <div class="card mt-4 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contacts Details</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-settings"><i class="bi bi-pencil-square"></i> Edit</button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h5 class="card-subtitle mb-1 fw-bold">Address</h5>
                                    <p class="card-text" id="address">No Customers will be allowed to booking when shutdown mode is on</p>
                                </div>
                                <div class="mb-4">
                                    <h5 class="card-subtitle mb-1 fw-bold">Google Map</h5>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h5 class="card-subtitle mb-1 fw-bold">Phone Numbers</h5>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill fs-5"></i>
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill fs-5"></i>
                                        <span id="pn2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h5 class="card-subtitle mb-1 fw-bold">Email</h5>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h5 class="card-subtitle mb-1 fw-bold">Social Links</h5>
                                    <p class="card-text">
                                        <i class="bi bi-facebook fs-5 me-1"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-instagram fs-5 me-1"></i>
                                        <span id="ins"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-twitter fs-5 me-1"></i>
                                        <span id="tw"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h5 class="card-subtitle mb-1 fw-bold">i frame</h5>
                                    <iframe id="iframe" class="border w-100" src="" frameborder="0" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="general-settings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="general-s-form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">General Settings</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Site Title</label>
                            <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3 p-0">
                            <label for="exampleFormControlTextarea1" class="form-label fw-bold">About Us</label>
                            <textarea name="site_about" class="form-control shadow-none" id="site_about_inp" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn custom-bg text-white shadow-none">Save</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
    <!-- Edit Modal -->

    <!-- Contacts Modal -->
    <div class="modal fade" id="contacts-settings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="contact-s-form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contacts Settings</h5>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Address</label>
                                        <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Google Map</label>
                                        <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Phone Number</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text shadow-none" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                            </div>
                                            <input type="text" name="pn1" id="pn1_inp" class="form-control shadow-none">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                            </div>
                                            <input type="text" name="pn2" id="pn2_inp" class="form-control shadow-none">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Email</label>
                                        <input type="email" name="email" id="email_inp" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="mb-3">
                                        <label class="form-label fw-bold">Phone Number</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text shadow-none" id="basic-addon1"><i class="bi bi-facebook fs-5 me-1"></i></span>
                                            </div>
                                            <input type="text" name="fb" id="fb_inp" class="form-control shadow-none">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-instagram fs-5 me-1"></i></span>
                                            </div>
                                            <input type="text" name="ins" id="ins_inp" class="form-control shadow-none">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-twitter fs-5 me-1"></i></span>
                                            </div>
                                            <input type="text" name="tw" id="tw_inp" class="form-control shadow-none">
                                        </div>
                                        <div class="mb-3">
                                        <label class="form-label fw-bold">Iframe</label>
                                        <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn custom-bg text-white shadow-none">Save</button>
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

        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');



        let general_s_form = document.getElementById('general-s-form');
        general_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            upd_general(site_title_inp.value, site_about_inp.value)
        })
        
        let contact_s_form = document.getElementById('contact-s-form');


        function get_general() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');

            let site_shutdown = document.getElementById('shutdown-toggle');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                general_data = JSON.parse(this.responseText);
                // console.log(general_data);
                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;

                if (general_data.shutdown == 0) {
                    site_shutdown.checked = false;
                    site_shutdown.value = 0;
                } else {
                    site_shutdown.checked = true;
                    site_shutdown.value = 1;
                }

            }
            xhr.send('get_general');
        }

        function upd_general(site_title_val, site_about_val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                var myModalEl = document.getElementById('general-settings');
                var modal = bootstrap.Modal.getInstance(myModalEl); // Returns a Bootstrap modal instance
                modal.hide();

                if (this.responseText == 1) {
                    alertPop('success', 'Changes Updated Successfully');
                    get_general();
                } else {
                    alertPop('error', 'No Changes Found');
                }
            }
            xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');
        }

        function upd_shutdown(val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                if (this.responseText == 1 && general_data.shutdown == 0) {
                    alertPop('success', 'Site Has Been Shutdown!');
                } else {
                    alertPop('success', 'Site Has Been Live!');
                }
                get_general();
            }
            xhr.send('upd_shutdown=' + val);
        }

        function get_contacts() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');

            let site_shutdown = document.getElementById('shutdown-toggle');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                general_data = JSON.parse(this.responseText);
                // console.log(general_data);
                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;

                if (general_data.shutdown == 0) {
                    site_shutdown.checked = false;
                    site_shutdown.value = 0;
                } else {
                    site_shutdown.checked = true;
                    site_shutdown.value = 1;
                }

            }
            xhr.send('get_general');
        }

        function get_contacts() {
            let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'ins', 'tw'];
            let iframe = document.getElementById('iframe');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                contacts_data = JSON.parse(this.responseText);
                contacts_data = Object.values(contacts_data);

                for (i = 0; i < contacts_p_id.length; i++) {
                    document.getElementById(contacts_p_id[i]).innerText = contacts_data[i + 1];
                }
                iframe.src = contacts_data[9];
                contacts_inp(contacts_data);
            }
            xhr.send('get_contacts');
        }

        function contacts_inp(data){
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'ins_inp', 'tw_inp', 'iframe_inp'];
            for(i=0; i<contacts_inp_id.length;i++){
                document.getElementById(contacts_inp_id[i]).value = data[i+1];
            }
        }
        
        contact_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            upd_contacts();
        })

        function upd_contacts(){
            let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'ins', 'tw', 'iframe'];
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'ins_inp', 'tw_inp', 'iframe_inp'];

            let data_str = "";
            for(i=0; i<index.length; i++){
                data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value +'&';
            }
            data_str += "upd_contacts";

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            
            xhr.onload = function() {
            var myModalEl = document.getElementById('contacts-settings');
            var modal = bootstrap.Modal.getInstance(myModalEl); // Returns a Bootstrap modal instance
            modal.hide();    
            
            console.log(this.responseText);

             if (this.responseText == 1) {
                    alertPop('success', 'Changes Updated Successfully');
                    get_contacts();
                } else {
                    alertPop('error', 'No Changes Found');
                }      
            }
             xhr.send(data_str);
        }

        window.onload = function() {
            get_general();
            get_contacts();
        }
    </script>
</body>

</html>