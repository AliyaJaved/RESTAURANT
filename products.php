<?php 
session_start(); 
include('config/config.php'); 
include('config/checklogin.php'); 
check_login(); 

//Delete Product
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $adn = "DELETE FROM rpos_products WHERE prod_id = ?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();
    
    if ($stmt) {
        $success = "Deleted" && header("refresh:1; url=products.php");
    } else {
        $err = "Try Again Later";
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
        ?>
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
            <!-- Table -->
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <a href="add_product.php" class="btn btn-outline-success">
                                <i class="fas fa-utensils"></i>
                                Add New Product
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Product Code</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ret = "SELECT * FROM rpos_products";
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute();
                                    $res = $stmt->get_result();
                                    while ($prod = $res->fetch_object()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $prod->prod_code; ?></td>
                                            <td>
                                                <?php
                                                if ($prod->prod_img) {
                                                    echo "<img src='images/$prod->prod_img' height='60' width='60' class='img-thumbnail'>";
                                                } else {
                                                    echo "<img src='images/default.jpg' height='60' width='60' class='img-thumbnail'>";
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $prod->prod_name; ?></td>
                                            <td><?php echo $prod->prod_category; ?></td>
                                            <td>₹ <?php echo $prod->prod_price; ?></td>
                                            <td>
                                                <a href="javascript:void(0);" onclick="confirmDelete('<?php echo $prod->prod_id; ?>')">
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                        Delete
                                                    </button>
                                                </a>

                                                <a href="update_product.php?update=<?php echo $prod->prod_id; ?>">
                                                    <button class="btn btn-sm btn-primary">
                                                        <i class="fas fa-edit"></i>
                                                        Update
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php
            require_once('partials/_footer.php');
            ?>
        </div>
    </div>

    <!-- Argon Scripts -->
    <?php
    require_once('partials/_scripts.php');
    ?>

    <!-- Delete Confirmation Script -->
    <script>
        function confirmDelete(productId) {
            if (confirm("Are you sure you want to delete this product?")) {
                window.location.href = 'products.php?delete=' + productId;
            }
        }
    </script>
</body>

</html>