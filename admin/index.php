<?php include_once('../admin/includes/db_config.php')?>
<?php include_once('../admin/includes/essiantails.php')?>

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
    $frm_data = filteration($_POST);
    $sql = "SELECT * FROM `admin_cred` WHERE `admin_name` = ? AND `admin_pass` = ? ";
    $values = [$frm_data['admin_name'], $frm_data['admin_password']];
    $res = select($sql,$values,'ss');
    // print_r($res);
    if($res-> num_rows == 1){
        $row = mysqli_fetch_assoc($res);
        session_start();
        $_SESSION['adminLogin'] = true;
        $_SESSION['adminId'] = $row['sr_no'];
        alert('success', 'Login Successfully ');
        redirect('dashboard');

    }else{
        alert('errors', 'Login Failed - Invalid Crediantials');
    }
}; 
?>

<?php include_once('../assets/js/scripts.js'); ?>
</body>
</html>