<?php include_once('../admin/includes/db_config.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Admin Panel</title>
    <?php include_once('../common/links.php'); ?>
</head>
<body class="bg-light">
    <div class="login-form text-center shadow overflow-hidden rounded">
        <form method="POST" action="">
            <h4 class="h-font fw-bold mb-3 bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                <input type="text" class="form-control shadow-none" name="admin_name" placeholder="Admin Name">
                </div>
                <div class="mb-3">
                <input type="password" class="form-control shadow-none" name="admin_password" placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn custom-bg shadow-none w-100 text-white">Login</button>
            </div>
        </form>
    </div>

<?php 
if(isset($_POST['login'])){
    // echo "Button Clicked";
    $username = $_POST['admin_name'];
    $password = $_POST['admin_password'];
    echo $username ." ". $password;
};


?>

</body>
</html>