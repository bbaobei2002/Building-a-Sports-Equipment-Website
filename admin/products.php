<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
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
  <title>
    Sản phẩm
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

<body class="g-sidenav-show   bg-gray-100">
  <!-- Nguyên đoạn này -->
  <!-- <div class="position-absolute w-100 min-height-400 top-0" style="background-image: url('https://media-cdn-v2.laodong.vn/storage/newsportal/2022/9/21/1095693/Screen-Shot-2022-09-.jpg?w=660'); background-position-y: 100%;">
    <span class="mask bg-primary opacity-5"></span>
  </div> -->
  <?php
    $active = 'sp'; 
    require 'aside.php';
  ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Trang</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Sản phẩm</li>
          </ol>
          <h6 class="font-weight-bolder text-dark mb-0">Sản phẩm</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <!-- <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here..."> -->
            </div>
          </div>
          <!-- <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center mb-4 me-4">
              <div class="icon icon-shape text-center rounded-circle">
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
            </li> 
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
          </ul> -->
          <?php require 'nav.php'; ?>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
    <div class="row">
    <?php
      require 'connect.php';
    ?>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="row px-2">
              <form action="#" method="get">
                <div class="px-3 col-12 pb-2 d-flex align-items-center">
                  <div class="col-1 mt-2 font-weight-bold d-flex align-items-center">
                    Lọc danh sách: 
                  </div>
                  <div class="px-2 mt-n3 col-2 font-weight-bold">
                    <br>
                    <select class="form-control form-control-md" name="source" id="source">
                      <option value="" selected disabled hidden>- Nhà sản xuất -</option>
                      <?php
                        $sql = "SELECT * FROM nha_san_xuat";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          $result = $conn->query($sql);
                          $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                          foreach ($result_all as $row) {
                            echo "<option value=" .$row["NSX_MA"]. ">".$row["NSX_TEN"]. "</option>";
                          }                          
                        } else {
                          echo "<option value=''>Không có dữ liệu</option>";
                        }
                      ?>
                    </select>
                  </div>
                  <div class="px-2 mt-2 col-1 font-weight-bold">
                    <button type="submit" class="btn btn-primary text-white font-weight-bold text-md ms-0 mt-3">
                      Lọc
                    </button>
                  </div>
                  <div class="px-2 mt-n3 col-2"></div>
                  <div class="px-2 mt-n3 col-1 font-weight-bold"></div>
                  <div class="col-5 mt-2 d-flex align-items-center justify-content-end">
                    <div class="input-group w-75 me-3">
                      <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                      <input type="text" name="timkiem" class="form-control" placeholder="Nhập tên sản phẩm cần tìm..">
                    </div>
                    <button type="submit" class="btn btn-primary text-white font-weight-bold text-md ms-0 mt-3">
                      Tìm
                    </button>
                  </div>
                </div>
              </form>
              
            </div>
          </div>
        </div>
        <a href="products_add_form.php" class="btn btn-link text-warning mt-n3">+ Thêm sản phẩm</a>
      </div>
        <!-- Nguyên đống này la mot danh muc -->
        <?php
          $sql = "SELECT * FROM LOAI_SP";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $result = $conn->query($sql);
            $result_all = $result -> fetch_all(MYSQLI_ASSOC);
            foreach ($result_all as $rowlsp) {
              $lspid = $rowlsp["LSP_MA"];
              $sql = "SELECT * FROM san_pham where LSP_MA = {$lspid}";
                if(isset($_GET["timkiem"])){
                  $search = $_GET["timkiem"];
                  if ($search != null) {
                    $sql = "SELECT * FROM san_pham where LSP_MA = {$lspid} and SP_TEN LIKE '%".$search."%'";
                  }
                }
        ?>
              <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-header pb-2">
                      <?php
                        echo  "<h6>".$rowlsp["LSP_TEN"]."</h6>";
                      ?>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                      <div class="table-responsive p-0">
                        <!-- table 5 cot -->
                        <table class="table align-items-center mb-0">
                          <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-1">Mã</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sản phẩm</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số lượng</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá</th>
                              
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">RAM</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ROOM</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pin</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Màu sắc</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">IMEI</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">TGBH</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Màn hình</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cam trước</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cam sau</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">HĐH</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CPU</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sim</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tính năng</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ngày nhập</th>
                              <th class="text-secondary opacity-7"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- 1 hang -->
                            <?php
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                                $result = $conn->query($sql);
                                $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                foreach ($result_all as $row) {

                                  $pdid = $row["SP_MA"];
                                  $soluong = $row["SP_SOLUONGTON"];
                                  $lsp = $rowlsp["LSP_TEN"];
                                  $mlsp = $rowlsp["LSP_MA"];
                                  
                                  $query = "select ct.PN_STT as stt_pn, npp.NPP_MASO as mnppsp, npp.NPP_TEN as tennpp, pn.PN_NGAYNHAP as ngaynhap
                                                from chitiet_pn ct
                                                join phieu_nhap pn on ct.PN_STT=pn.PN_STT
                                                join nha_phan_phoi npp on ct.NPP_MASO=npp.NPP_MASO
                                                join san_pham sp on ct.SP_MA=sp.SP_MA
                                                where sp.SP_MA = {$pdid};";
                                                              
                                  $rs = $conn->query($query);
                                  $row1 = mysqli_fetch_assoc($rs);
                                  $stt_pn = $row1["stt_pn"];
                                  $ngaynhap = $row1["ngaynhap"];
                                  $tennpp = $row1["tennpp"];
                                  $manpp = $row1["mnppsp"];
                                  
                                  
                                  $sql_nsx = "select n.NSX_MA as mnsxsp, n.NSX_TEN as nsxsp, s.SP_MA as masp
                                                from nha_san_xuat n
                                                join san_pham s on n.NSX_MA = s.NSX_MA
                                                where s.SP_MA = {$pdid};";

                                  $rs_nsx = $conn->query($sql_nsx);
                                  $row2 = mysqli_fetch_assoc($rs_nsx);
                                  $mnsxsp = $row2["mnsxsp"];
                                  $nsxsp = $row2["nsxsp"];
                                  

                                  ?>
                                  <tr class="height-100">
                                     <!-- ma sp -->
                                     <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_MA"]; ?></p>
                                    </td>
                                  
                                    <td class="w-30" >
                                      <div class="d-flex px-2 py-1">
                                          <!-- hinh anh san pham -->
                                        <div>
                                          <?php
                                            if($row["SP_HINHANH"]==null){
                                              $file = "default.jpg";
                                            } else {
                                              $file = $row["SP_HINHANH"];
                                            } 
                                            $avatar_url = "../assets/img/product_img/" . $file;
                                            echo "<img src='{$avatar_url}' class='avatar avatar-xl me-3' alt='user1'>";
                                          ?> 
                                          
                                        </div>
                                        <!-- ten san pham -->
                                        <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-md"><?php echo $row["SP_TEN"]; ?></h6>
                                          <p class='text-xs text-secondary mb-0'><?php echo "Nhà phân phối: " . $tennpp; ?></p>
                                        </div>
                                      </div>
                                    </td>
                                    <!-- soluong sp -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_SOLUONGTON"]; ?></p>
                                    </td>
                                    <!-- gia sp -->
                                    <td>
                                      <p class="text-s font-weight-bold mb-0"><?php echo number_format($row["SP_GIA"], 0) ; ?> VNĐ</p>
                                    </td>
                                    
                                    <!-- ram -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_RAM"]; ?></p>
                                    </td>       
                                    <!-- room -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_ROOM"]; ?></p>
                                    </td>
                                    <!-- pin -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_PIN"]; ?></p>
                                    </td>
                                    <!-- màu sắc -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_MAUSAC"]; ?></p>
                                    </td>
                                    <!-- imei -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_IMEI"]; ?></p>
                                    </td>
                                    <!-- tgbh -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_TGBH"]; ?></p>
                                    </td>
                                    <!-- màn hình -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_MANHINH"]; ?></p>
                                    </td>
                                    <!-- cam trước -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_CAMTRUOC"]; ?></p>
                                    </td>
                                    <!-- cam sau -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_CAMSAU"]; ?></p>
                                    </td>
                                    <!-- hệ điều hành -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_HDH"]; ?></p>
                                    </td>
                                    <!-- cpu -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_CPU"]; ?></p>
                                    </td>
                                    <!-- sim -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_SIM"]; ?></p>
                                    </td>
                                    <!-- tính năng -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_TINHNANG"]; ?></p>
                                    </td>

                                    <!-- <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $tennpp; echo $stt_pn;?></p>
                                    </td> -->
                                    
                                    <!-- ngay them -->
                                    <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0"><?php echo date('d/m/Y', strtotime($ngaynhap)); ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                      <div class="mt-3 d-flex col-sm-12">
                                        <div class="me-n1 align-middle col-4">
                                          <!-- <form method="get" action=""> -->
                                            <!-- <input type="hidden" name="pdid_add" value="<?php echo $row["SP_MA"]; ?>"> -->
                                            <button data-id="<?php echo $row["SP_MA"]; ?>" data-name="<?php echo $row["SP_TEN"]; ?>" data-img="<?php echo $avatar_url; ?>" class="addmore-button btn btn-link text-success text-secondary font-weight-bold text-sm">
                                              Nhập thêm
                                              <!-- onclick="showOverlay()" -->
                                            </button>
                                          <!-- </form> -->
                                        </div>
                                        <div class="me-n0 align-middle col-4">
                                          <form method="post" action="edit_product.php">
                                              <input type="hidden" name="pdid" value="<?php echo $row["SP_MA"]; ?>">
                                              <input type="hidden" name="nsxsp" value="<?php echo $nsxsp; ?>">
                                              <input type="hidden" name="mnsxsp" value="<?php echo $mnsxsp; ?>">
                                              <input type="hidden" name="lsp" value="<?php echo $lsp; ?>">
                                              <input type="hidden" name="mlsp" value="<?php echo $mlsp; ?>">

                                              <input type="hidden" name="stt_pn" value="<?php echo $stt_pn; ?>">

                                              <input type="hidden" name="manpp" value="<?php echo $manpp; ?>">
                                              <input type="hidden" name="tennpp" value="<?php echo $tennpp; ?>">

                                              <input type="hidden" name="imeisp" value="<?php echo $row["SP_IMEI"]; ?>">
                                              <input type="hidden" name="tensp" value="<?php echo $row["SP_TEN"]; ?>">
                                              <input type="hidden" name="colorsp" value="<?php echo $row["SP_MAUSAC"]; ?>">
                                              <input type="hidden" name="tnsp" value="<?php echo $row["SP_TINHNANG"]; ?>">
                                              <input type="hidden" name="tgbhsp" value="<?php echo $row["SP_TGBH"]; ?>">
                                              <input type="hidden" name="anhsp" value="<?php echo $row["SP_HINHANH"]; ?>">
                                              <input type="hidden" name="slsp" value="<?php echo $row["SP_SOLUONGTON"]; ?>">
                                              <input type="hidden" name="mhsp" value="<?php echo $row["SP_MANHINH"]; ?>">
                                              <input type="hidden" name="hdhsp" value="<?php echo $row["SP_HDH"]; ?>">
                                              <input type="hidden" name="ctsp" value="<?php echo $row["SP_CAMTRUOC"]; ?>">
                                              <input type="hidden" name="cssp" value="<?php echo $row["SP_CAMSAU"]; ?>">
                                              <input type="hidden" name="cpusp" value="<?php echo $row["SP_CPU"]; ?>">
                                              <input type="hidden" name="ramsp" value="<?php echo $row["SP_RAM"]; ?>">
                                              <input type="hidden" name="roomsp" value="<?php echo $row["SP_ROOM"]; ?>">
                                              <input type="hidden" name="simsp" value="<?php echo $row["SP_SIM"]; ?>">
                                              <input type="hidden" name="pinsp" value="<?php echo $row["SP_PIN"]; ?>">
                                              <input type="hidden" name="giasp" value="<?php echo $row["SP_GIA"]; ?>">

                                              <button onclick="this.form.submit()" class="btn btn-link text-primary font-weight-bold text-sm">
                                                Sửa
                                              </button>
                                            </form>
                                        </div>
                                        <div class=" align-middle col-1">
                                          <form method="post" action="del_product.php">
                                              <input type="hidden" name="pdid" value="<?php echo $row["SP_MA"]; ?>">
                                              <button onclick="this.form.submit()" class="addmore-button btn btn-link text-warning text-secondary font-weight-bold text-sm">
                                                Xóa
                                              </button>
                                            </form>
                                        </div>

                                      </div>
                                    </td>
                                  </tr>
                                  <?php
                                } 
                              }
                            ?>
                            
                            <!-- het 1 hang -->
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }                          
          } else {
            echo "<option value=''>Không có dữ liệu</option>";
          }
        ?>

      </div>
      
      <div class="overlay" id="overlay">
        <div class="my-box">
          <h5 class="ms-3 mt-3 text-primary">Nhập thêm sản phẩm</h5>
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-6 d-flex justify-content-center align-items-center">
                  <div class="row">
                    <div class="col-12">
                      <div class="product-image">
                        
                      </div>  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="ms-2 product-name">
    
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <form action="update_quantity.php" method="post">
                    <div class="mb-3 mt-4 px-3">
                      Số lượng nhập thêm
                      <input type="hidden" name="temp_id" id="temp_id">
                      <input min="1" max="10000" step="1" type="number" name="quantity" class="form-control form-control-lg mt-3" placeholder="Nhập số lượng sản phẩm nhập thêm">
                      <div class="row">
                        <div class="col-12 d-flex justify-content-center align-items-center" >
                            <button type="submit" class="btn btn-primary text-white font-weight-bold text-md ms-0 mt-4">
                              Cập nhật
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        
  <!--   Core JS Files   -->
  <style>
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 99999;
      background: rgba(0, 0, 0, 0.5);
      display: none;
    }

    .my-box {
      width: 40%;
      height: 30%;
      background-color: #fff;
      border-radius: 10px;
      position: absolute;
      padding: 15px;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

  </style>
  <script>

    const productButtons = document.querySelectorAll('.addmore-button');

    productButtons.forEach(button => {
      button.addEventListener('click', showProductDetails);
    });

    function showProductDetails(event) {
      // Lấy ID của sản phẩm được click
      const productId = event.target.getAttribute('data-id');
      const product_img = event.target.getAttribute('data-img');
      const product_name = event.target.getAttribute('data-name');
      
      
      document.getElementById("temp_id").value = productId;

      // Hiển thị overlay
      const overlay = document.querySelector('.overlay');
      overlay.style.display = 'block';

      // Hiển thị thông tin chi tiết của sản phẩm
      const productName = document.querySelector('.product-name');
      productName.innerHTML = '<h6>' + product_name + '</h6>';
      const productImg = document.querySelector('.product-image');
      productImg.innerHTML = '<img src="' + product_img + '" class="avatar avatar-xxl" alt="product">';
      
    }


    //Tắt overlay
    const overlay = document.getElementById("overlay");
    overlay.addEventListener("click", function(event) {
      if (event.target === overlay) {
        overlay.style.display = "none";
      }
    });

  </script>
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
  <?php 
    $conn->close();
  ?>
</body>

</html>