<?php
require('includes/essiantails.php');
session_start();
session_destroy();
redirect('index');
?>