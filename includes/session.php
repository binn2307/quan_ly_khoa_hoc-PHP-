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

//Tạo session flash
function setSessionFlash(string $key,string $value){
    $key .= 'Flash';
    $result = setSession($key, $value);
    return  $result;
}

//Lấy session flash
function getSessionFlash(string $key){
    $key .= 'Flash';
    $result = getSession($key);
    removeSession($key);
    return  $result;
}
?>