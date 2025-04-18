<?php
session_start();
include('config/config.php');
include('config/checklogin.php');
include('config/code-generator.php');

check_login();


if (isset($_POST['addProduct'])) {
    // Prevent Posting Blank Values
    if (empty($_POST["prod_category"]) || empty($_POST["prod_code"]) || empty($_POST["prod_name"]) || empty($_POST['prod_desc']) || empty($_POST['prod_price'])) {
        $err = "Blank Values Not Accepted";
    } else {
        // Get form data
        $prod_category = $_POST['prod_category'];
        $prod_code  = $_POST['prod_code'];
        $prod_name = $_POST['prod_name'];
        $prod_desc = $_POST['prod_desc'];
        $prod_price = $_POST['prod_price'];

        // Handle file upload
        if(isset($_FILES['prod_img']) && $_FILES['prod_img']['error'] == 0) {
            $prod_img = $_FILES['prod_img']['name'];
            move_uploaded_file($_FILES["prod_img"]["tmp_name"], "images/" . $_FILES["prod_img"]["name"]);
        } else {
            $prod_img = ''; // Set default or handle error
        }

        // Insert Captured information to a database table
        $postQuery = "INSERT INTO rpos_products (prod_id, prod_category, prod_code, prod_name, prod_img, prod_desc, prod_price) VALUES(?,?,?,?,?,?,?)";
        $postStmt = $mysqli->prepare($postQuery);

        if ($postStmt) {
            // Bind parameters
            $rc = $postStmt->bind_param('sssssss', $prod_id, $prod_category, $prod_code, $prod_name, $prod_img, $prod_desc, $prod_price);
            $postStmt->execute();

            if ($postStmt->affected_rows > 0) {
                // Set success message in session
                $_SESSION['success'] = "Product Added Successfully";
                // Redirect to products.php
                header("Location: products.php");
                exit();
            } else {
                $err = "Please Try Again Or Try Later";
            }
        } else {
            $err = "Error preparing statement: " . $mysqli->error;
        }
    }
}

require_once('partials/_head.php');
?>

<body>
    <!-- Sidenav -->
    <?php require_once('partials/_sidebar.php'); ?>
    
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <?php require_once('partials/_topnav.php'); ?>
        
        <!-- Header -->
        <div style="background-image: url(assets/img/theme/restro00.jpg); background-size: cover;" class="header pb-8 pt-5 pt-md-8">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container-fluid">
                <div class="header-body">
                </div>
            </div>
        </div>
        
        <!-- Page content -->
        <div class="container-fluid mt--8">
            <!-- Display Error Message -->
            <?php if (isset($err)) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><?php echo $err; ?></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <h3>Please Fill All Fields</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label>Product Category</label>
                                        <input type="text" name="prod_category" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Product Name</label>
                                        <input type="text" name="prod_name" class="form-control" required>
                                        <input type="hidden" name="prod_id" value="<?php echo $prod_id; ?>" class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label>Product Code</label>
                                        <input type="text" name="prod_code" value="<?php echo isset($alpha) ? $alpha . $beta : ''; ?>" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Product Price (₹)</label>
                                        <input type="text" name="prod_price" class="form-control" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label>Product Image</label>
                                        <input type="file" name="prod_img" class="btn btn-outline-success form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Product Description</label>
                                        <textarea name="prod_desc" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <input type="submit" name="addProduct" value="Add Product" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php require_once('partials/_footer.php'); ?>
        </div>
    </div>
    <!-- Argon Scripts -->
    <?php require_once('partials/_scripts.php'); ?>
</body>
</html>