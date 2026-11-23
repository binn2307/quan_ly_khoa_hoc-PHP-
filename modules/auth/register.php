<?php
if(!defined('_BIN')){
    die('Truy cập ko hợp lệ!');
}
$data = [
  'title' => 'Đăng ký tài khoản'
];
layout('header-auth',$data);

$filter_data = filterData();
echo '<pre>';
print_r($filter_data);
echo '</pre>';
die();
?>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="<?php echo _HOST_URL_TEMPLATES; ?>/assets/image/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="POST" action="" enctype="multipart/form-data">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-4 me-3">Đăng ký tài khoản</p>
          </div>
          <!-- NAME, EMAIL, PHONE, PASS, REPASS -->
           <!-- NAME -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="fullname" class="form-control form-control-lg"
              placeholder="Họ tên " />          
          </div>
          <!-- EMAIL -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" name="email"  class="form-control form-control-lg"
              placeholder="Địa chỉ email" />          
          </div>
          <!-- PHONE -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="phone" class="form-control form-control-lg"
              placeholder="Số điện thoại" />          
          </div>
          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Nhập mật khẩu" />
          </div>
          <!-- REPASSWORD -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" name="confirm_password" class="form-control form-control-lg"
              placeholder="Nhập lại mật khẩu" />          
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng ký</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Bạn đã có tài khoản? <a href=" <?php echo _HOST_URL; ?>?module=auth&action=login"
                class="link-danger">Đăng nhập</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>

<?php
    layout('footer');
?>