<?php 
/**
 * Author : Efendi
 * Email : mefendi3010@gmail.com
 */

?>
<!doctype html>
<html lang="en">

<?php require_once __DIR__ .'/layouts/head.php'; ?>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php require_once __DIR__ .'/layouts/sidebar.php'; ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php require_once __DIR__ .'/layouts/header.php'; ?>
      <!--  Header End -->
      <div class="container-fluid">
      <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Attention!</h5>
            <p class="mb-0">Hallo.
                Webapp ini diperuntukan untuk bug hunter,  Webapp ini dibuat untuk mempermudah Bug Hunter / Pentester memastikan API KEY yang ditemukan benar benar valid.
                Developer tidak bertanggung jawab atas semua aktivitas ilegal, tanggung jawab sepenuhnya berada di pengguna yang memakai webapp ini. 
            </p>
            <br>
            <p class="mb-0">你好。
这个 Web 应用程序专为漏洞猎人设计，旨在帮助漏洞猎人/渗透测试者更轻松地确保找到的 API 密钥确实有效。
开发人员对所有非法活动不负责，全部责任完全由使用此 Web 应用程序的用户承担。
            </p>
            <br>
            <p class="mb-0">Hello.
This web application is designed for bug hunters and is created to facilitate Bug Hunters/Pentesters in ensuring that the discovered API keys are indeed valid.
The developer is not responsible for any illegal activities; full responsibility lies with the user using this web application.
            </p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Repository</h5>
            <p class="mb-0">
                <a href="https://github.com/mfndi/gmaps-api-key-checker" class="btn btn-light m-1" target="_blank">Github - Gmaps api key checker</a>
                <a href="https://github.com/adminmart" class="btn btn-light m-1" target="_blank">Github - Template Spike bootstrap</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>
</body>

</html>