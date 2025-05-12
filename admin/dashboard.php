<?php
require('./includes/essiantails.php');
adminlogin();
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
<div class="container-fluid bg-dark text-light p-3 d-flex align-item-center justify-content-between">
    <h3>Admin Panel</h3>
    <a href="logout.php" class="btn btn-light btn-sm col-lg-pt-2 pt-2 rounded-pill">LOGOUT</a>

</div>    
    


 <?php require('../common/links.php'); ?>
</body>
</html>