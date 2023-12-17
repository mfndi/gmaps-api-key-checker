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
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="assets/images/logos/gmak.png" width="250" alt="">
                </a>
                <form method="post" action="results.php">
                  <div class="mb-3">
                    <input type="text" class="form-control" name="key">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                  </div>
                  <button type="submit" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">Check</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Attention!</p>
                    <a class="text-primary fw-bold ms-2" href="./about.php">Open</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>