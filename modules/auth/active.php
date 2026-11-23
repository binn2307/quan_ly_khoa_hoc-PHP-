<?php
if(!defined('_BIN')){
    die('Truy cập ko hợp lệ!');
}
$data = [
  'title' => 'Active tài khoản'
];
layout('header-auth',$data);
?>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="<?php echo _HOST_URL_TEMPLATES; ?>/assets/image/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-4 me-3">Kích hoạt tài khoản thành công </p>
          </div>
          <p class="small fw-bold mt-2 pt-1 mb-0"><a href=" <?php echo _HOST_URL; ?>?module=auth&action=login"
                class="link-danger" style="font-size: 20px;
                                            color: blue !important;">Đăng nhập ngay</a></p>
      </div>
    </div>
  </div>
</section>

<?php
    layout('footer');
?>