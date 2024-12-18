
<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
?>

 
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>
    Thay đổi mật khẩu
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>
<?php
    $active='tttk';
    require 'aside.php';
  ?>
<div class="w3-container w3-padding-large" style="margin-top: -20px; margin-left: 20px;"> <!-- căn lề -->
<body class="g-sidenav-show " style="background-color: #CD5C5C;">
  <!-- <div class="position-absolute w-100 min-height-400 top-0" style="background-image: url('https://media-cdn-v2.laodong.vn/storage/newsportal/2022/9/21/1095693/Screen-Shot-2022-09-.jpg?w=660'); background-position-y: 100%;">
    <span class="mask bg-primary opacity-5"></span> -->
  </div>
 
  <div class="main-content position-relative max-height-vh-100 h-100" style="margin-top: -10px;">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">

      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5" style="display: flex; flex-wrap: nowrap;">
          <li class="breadcrumb-item text-sm">
                <a class="opacity-5 text-white" href="dashboard.php">Trang</a>
            </li>
            <li class="breadcrumb-item text-sm"><a href="profile.php" class="text-white">Thông tin tài khoản</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Đổi mật khẩu</h6>
    </nav>
</div>
        <!-- Đoạn này -->
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <!-- <li class="nav-item d-flex align-items-center mb-4 me-4">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <img src="../assets/img/staff_img/<?php echo $_SESSION["avt"]; ?>" class="rounded-circle avatar avatar-xl" alt='user'>
              </div>
            </li>
            <li class="nav-item d-flex align-items-center mt-sm-1 ms-3">
             <nav class=" mt-sm-1" aria-label="breadcrumb">   
                <h7 class="text-white text mb-0">Xin chào,</h7>
                <h6 class="font-weight-bolder text-white mt-n1"><?php echo $_SESSION["name"]; ?></h6>      
                <a href="log_out.php" class="btn btn-outline-light text-white font-weight-bold px-2 mt-n1 py-1">
                  <span class="d-sm-inline d-none me-sm-1">Đăng xuất</span>
                  <i class="fas fa-sign-out-alt "></i>
                </a>
              </nav>
            </li>  -->

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
    <!-- End Navbar -->
    <!-- <div style="margin-top: 0; !important" class="card shadow-lg mx-4 card-profile-bottom"></div> -->
    <div style="margin-top: 10px; !important" class="card shadow-lg mx-4 card-profile-bottom"></div>
    <div class="container-fluid py-4" >
      <div class="row">
        <div class="col-md-8">
          <div class="card" style="margin-top: 5px; margin-left: 280px;">
          <!-- <div class="card" style="margin-top: 5px; margin-left: 20px;"> -->
              <?php

                $nvid = $_SESSION["nvid"];
                $tkvaitro = $_SESSION["cv"];
                $tkavt = $_SESSION["avt"];
                $nvhoten = $_SESSION["name"];
                if($tkvaitro == '2'){
                    $tkvt = 'Nhân viên bán hàng';
                  } else if ($tkvaitro == '3'){
                    $tkvt = 'Nhân viên kế toán';
                  } else{
                    $tkvt = 'Quản lý';
                  } 

              ?>
          
            <form action="update_change_password.php" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <p class="text-uppercase text-sm mt-2">Thay đổi mật khẩu</p>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Mật khẩu cũ</label>
                      <input class="form-control" required type="password" name="oldpw">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Mật khẩu mới</label>
                      <input class="form-control" required type="password" name="newpw">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nhập lại mật khẩu mới</label>
                      <input class="form-control" required type="password" name="renewpw">
                    </div>
                  </div>
                  <div class="col-md-12">                                                            
                      <div class="col-12 text-center">
                        <button type="submit" class="btn btn-lg btn-outline-danger text-danger btn-lg w-100 mt-4 mb-0">Xác nhận thay đổi</button>
                      </div>
                    </div>
                </div>
                
              </div>
            </form>

            

          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile" style="margin-top: 5px; margin-left: -10px;">
          <!-- <div class="card card-profile" style="margin-top: 5px;"> -->
            <!-- <img src="../assets/img/bgr-profile.jpg" alt="Image placeholder" class="card-img-top"> -->
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="../assets/img/staff_img/<?php echo $tkavt; ?>" class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 px-6 pt-0 pt-lg-2 pb-4 pb-lg-3">
              <div class="d-flex justify-content-center">
                <a href="javascript:;" style="background-color: #CD5C5C;" class="btn btn-sm text-white mb-0 d-none d-lg-block">Thay đổi ảnh đại diện</a>
              </div>
              <div class="d-flex justify-content-center mt-2">
                <a href="log_out.php" class="btn btn-sm btn-dark mb-0 d-none d-lg-block">Đăng xuất</a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                 <!--  <div class="d-flex justify-content-center">
                  <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">29</span>
                      <span class="text-sm opacity-8">Sản phẩm</span>
                    </div>
                    <div class="d-grid text-center mx-4">
                      <span class="text-lg font-weight-bolder">20</span>
                      <span class="text-sm opacity-8">Đơn hàng</span>
                    </div>
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">100</span>
                      <span class="text-sm opacity-8">Bình luận</span>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="text-center mt-3">
                <h5 class="text-bold">
                  <?php echo $nvhoten; ?><span class="font-weight-light"></span>
                </h5>
                <div class="h6 mt-3 ">
                  <i class="ni business_briefcase-24 mr-2 "></i><?php echo $tkvt; ?>
                </div>
                <div class="mt-n2">
                  <i class="ni education_hat mr-2"></i>Cửa hàng dụng cụ thể thao じゃな、sportsman
                </div><br>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div> -->
        <!-- End Toggle Button -->
      
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>