<?php
if(!defined('_BIN')){
    die('Truy cập ko hợp lệ!');
}

//Truy vấn nhiều dòng data
function getAll(string $sql){
    global $conn; //giúp hàm truy cập biến đc tạo trong connect.php
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//đếm số dòng trả về
function getRow(string $sql){
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->rowCount();
}


//truy vấn 1 dòng dữ liệu
function getOne(string $sql){
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

//insert dữ liệu
function insert(string $table, array $data){
    global $conn;

    /** ví dụ: $data =[     * 
     *    'name' => 'Technology'
     *    'slug' =>  'Technology'
     * ]
     */

    $keys = array_keys($data); // tạo array $keys chứa các  key của $data
    $cot = implode(',',$keys); // gộp mảng thành chuỗi 
    $place = ':' . implode(',:',$keys); // :value1,:value2,:value3,....

    $sql = "INSERT INTO $table ($cot) VALUES($place)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

//update dữ liệu 
function update(string $table, array $data, $condition = ''){
    global $conn;

    $update = '';
    foreach($data as $key => $value){
        $update .= $key . '=:' . $key . ',';
    }

    $update = trim($update, ',');
    if(!empty($condition)){
        $sql = "UPDATE $table SET $update WHERE $condition";
    }else{
        $sql = "UPDATE $table SET $update";
    }

    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
//xóa dữ liệu
function delete(string $table, $condition = ''){
    global $conn;
    if(!empty($condition)){
        $sql = "DELETE FROM $table WHERE $condition";
    }else{
        $sql = "DELETE FROM $table";
    }

    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

//hàm lấy ID dữ liệu mới insert
function lastID(){
    global $conn;
    return $conn->lastInsertId();
}
?>