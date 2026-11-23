<?php
if(!defined('_BIN')){
    die('Truy cập ko hợp lệ!');
}

function layout($layoutName, $data = []){
    if(file_exists(_PATH_URL_TEMPLATES . '/layouts/' . $layoutName . '.php')){
        require_once _PATH_URL_TEMPLATES . '/layouts/' . $layoutName . '.php';
    }
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function sendEmail($emailTo ,$subject, $content){
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'binzg2311@gmail.com';                     //SMTP username
    $mail->Password   = 'onby iccf vlfm ejjn';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('binzg2311@gmail.com', 'Bin Course');
    $mail->addAddress($emailTo);     //Add a recipient

    //Content
    $mail->CharSet = 'UTF-8'; //hỗ trợ mail tieenngs việt
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content;

    $mail->SMTPOptions = array(
    'ssl' => [
        'verify_peer' => true,
        'verify_depth' => 3,
        'allow_self_signed' => true,
    ],
);

   return  $mail->send();

} catch (Exception $e) {
    echo "Gửi thất bại. Mailer Error: {$mail->ErrorInfo}";
}
}

//  Kiểm tra phương thức post
function isPost(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        return true;
    }
    return false;
}

//  Kiểm tra phương thức get
function isGet(){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        return true;
    }
    return false;
}


//  Lọc dữ liệu
function filterData($method = ''){
    $filterArr = [];
    if(empty($method)){
        if(isGet()){
            if(!empty($_GET)){
                foreach($_GET as $key => $value){
                    $key = strip_tags($key); // loại bỏ các thẻ như html, php, js,..
                    if(is_array($value)){
                        $filterArr[$key] = filter_var($_GET[$key], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    }else{
                        $filterArr[$key] = filter_var($_GET[$key], FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }
        }
        if(isPost()){
            if(!empty($_POST)){
                foreach($_POST as $key => $value){
                    $key = strip_tags($key); // loại bỏ các thẻ như html, php, js,..
                    if(is_array($value)){
                        $filterArr[$key] = filter_input(INPUT_POST,$key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    }else{
                        $filterArr[$key] = filter_input(INPUT_POST,$key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }  
        }
    }else{
        if($method == 'get'){
            if(!empty($_GET)){
                foreach($_GET as $key => $value){
                    $key = strip_tags($key); // loại bỏ các thẻ như html, php, js,..
                    if(is_array($value)){
                        $filterArr[$key] = filter_var($_GET[$key], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    }else{
                        $filterArr[$key] = filter_var($_GET[$key], FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }
        }else if($method == 'post'){
            if(!empty($_POST)){
                foreach($_POST as $key => $value){
                    $key = strip_tags($key); // loại bỏ các thẻ như html, php, js,..
                    if(is_array($value)){
                        $filterArr[$key] = filter_input(INPUT_POST,$key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    }else{
                        $filterArr[$key] = filter_input(INPUT_POST,$key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }
        }
    }
    return $filterArr;
}

?>