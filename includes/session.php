<?php
if(!defined('_BIN')){
    die('Truy cập ko hợp lệ!');
}

//set session
function setSession(string $key, string $value){
    if(!empty(session_id())){
        $_SESSION[$key] = $value;
        return true;   
    }
    return false;
}

//lấy dữ liệu session
function getSession($key = ''){
    if(empty($key)){
        return $_SESSION;
    }else{
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }
        
    }
    return false;
}

//Xóa session
function removeSession($key = ''){
    if(empty($key)){
        //xóa toàn bộ session
        session_destroy();
        return true;
    }else{
        if(isset($_SESSION[$key])){
            unset($_SESSION[$key]);
            return true;
        }
    }
    return false;
}
?>