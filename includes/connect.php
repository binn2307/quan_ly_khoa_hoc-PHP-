<?php
if(!defined('_BIN')){
    die('Truy cập ko hợp lệ!');
}

try{
    if(class_exists('PDO')){
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        $dsn = _DRIVER . ':host='._HOST.';dbname='._DB; 
        $conn = new PDO($dsn,_USER,_PASS,$options);
    }
}catch(Exception $e){
        echo 'Lỗi kết nối: '. $e->getMessage();
        die();
}

?>