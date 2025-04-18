<?php
session_start();
include('config/config.php');
include('config/checklogin.php');
include('config/code-generator.php');

check_login();

//Update Product Details
if (isset($_POST['updateProduct'])) {
  //Prevent Posting Blank Values
  if (empty($_POST['product_code']) || empty($_POST['product_name']) || empty($_POST['price']) || empty($_POST['image'])) {
    $err = "Blank Values Not Accepted";
  } else {
    $product_code = $_POST['product_code'];
    $product_name = $_POST['product_name'];
    $prod_price = $_POST['prod_price'];
    $prod_img = $_POST['prod_img'];  // Assuming image is a URL or filename
    $update = $_GET['update'];

    //Update database with the new values
    $postQuery = "UPDATE rpos_products SET product_code =?, product_name =?, price =?, image =? WHERE product_id =?";
    $postStmt = $mysqli->prepare($postQuery);
    //bind paramaters
    $rc = $postStmt->bind_param('ssssi', $product_code, $product_name, $price, $image, $update);
    $postStmt->execute();
    //declare a variable which will be passed to alert function
    if ($postStmt) {
      $success = "Product Updated" && header("refresh:1; url=products.php");
    } else {
      $err = "Please Try Again Or Try Later";
    }
  }
}

require_once('partials/_head.php');
?>

<body>
  <!-- Sidenav -->
  <?php
  require_once('partials/_sidebar.php');
  ?>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <?php
    require_once('partials/_topnav.php');

    $ret = "SELECT * FROM rpos_products WHERE product_id = '$update'";
   
    $stmt->execute();
    $res = $stmt->get_result();
    while ($prod = $res->fetch_object()) {
    ?>
      <div style="background-image: url(assets/img/theme/restro00.jpg); background-size: cover;">
        <div class="container">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3>Please Fill All Fields</h3>
            </div>
            <div class="card-body">
              <form method="POST">
                <div class="form-row">
                  <div class="col-md-6">
                    <label>Product Code</label>
                    <input type="text" name="product_code" value="<?php echo $prod->product_code; ?>" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label>Product Name</label>
                    <input type="text" name="product_name" value="<?php echo $prod->product_name; ?>" class="form-control">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-6">
                    <label>Price</label>
                    <input type="text" name="price" value="<?php echo $prod->price; ?>" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label>Image URL</label>
                    <input type="text" name="image" value="<?php echo $prod->image; ?>" class="form-control">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-6">
                    <input type="submit" name="updateProduct" value="Update Product" class="btn btn-success">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
    <?php
    require_once('partials/_footer.php');
    }
    ?>
  </div>
  <!-- Argon Scripts -->
  <?php
  require_once('partials/_scripts.php');
  ?>
</body>

</html>
