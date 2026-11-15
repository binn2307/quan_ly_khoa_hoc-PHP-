<?php

//Đặt timezone VN
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start(); //tạo mới phiên làm việc hoặc tiếp tục phiên làm việc đã tồn tại
ob_start(); //tránh lỗi khi sử dụng hàm header, cookie

require_once 'config.php';
require_once './includes/connect.php';
require_once './includes/database.php';
require_once './includes/session.php';

//setSession('phuc','khoa hoc php');
//removeSession();
$a = getSession();
echo '<pre>';
print_r($a);
echo '</pre>';


$module = _MODULE;
$action = _ACTION;

if(!empty($_GET['module'])){
    $module = $_GET['module'];
}

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}

$path = 'modules/' . $module . '/' . $action . '.php';

//kiểm tra đường path có dữ liệu và tồn tại ko
if(!empty($path)){
    //kiểm tra tồn tại
    if(file_exists($path)){
        require_once $path;
    }else{
        require_once './modules/errors/404.php';
    }
}else{
    require_once './modules/errors/500.php';
}
?>