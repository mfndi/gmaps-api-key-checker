<?php
require_once __DIR__ . "/controller/ApiController.php";
$API = new API;

if(!isset($_POST['key'])){
  header("Location: index.php");
  exit;
}

$key = $_POST['key'];
$results = $API->core($key);


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
          <div class="alert alert-info fw-semibold mb-4" role="alert">
          <?php echo "API KEY : " . $key ?>
            </div>
            <!-- <h5 class="card-title fw-semibold mb-4"></h5> -->
            <!-- <p class="mb-0">This is a sample page </p> -->
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Endpoint</th>
                    <th scope="col">Pricing</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach($results as $key => $data ) : ?>
                    <tr>
                    <th scope="row"><?php echo $key + 1; ?></th>
                    <td><?php echo $data['name']; ?></td>
                    <td>
                      <a href="<?php echo $data['endpoint']; ?>" class="btn btn-outline-success m-1" target="_blank">Open</a>
                    </td>
                    <td><?php echo $data['pricing']; ?></td>
                    <td>
                      <?php if($data['status'] == "Valid") : ?>
                    <button type="button" class="btn btn-success m-1">Valid</button>
                      <?php else : ?>
                        <button type="button" class="btn btn-danger m-1">Not Valid</button>
                        <?php endif; ?>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
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