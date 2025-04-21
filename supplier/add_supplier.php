<?php

session_start();

if (!isset($_SESSION["ssLoginPOS"])) {
    header("location: ../auth/login.php");
    exit();
}

require "../config/config.php";
require "../config/function.php";
require "../module/mode-supplier.php";

$title = "Tambah Supplier - POSAPP";
require "../template/header.php";
require "../template/navbar.php";
require "../template/sidebar.php";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $supplierName = $_POST['supplier_name'];
    $supplierPhone = $_POST['supplier_phone'];
    $supplierAddress = $_POST['supplier_address'];

    // Simple validation
    if (empty($supplierName) || empty($supplierPhone) || empty($supplierAddress)) {
        $error_message = "All fields are required!";
    } else {
        // Insert data into the database
        $query = "INSERT INTO suppliers (name, phone, address) VALUES (:name, :phone, :address)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':name', $supplierName);
        $stmt->bindParam(':phone', $supplierPhone);
        $stmt->bindParam(':address', $supplierAddress);

        if ($stmt->execute()) {
            $success_message = "Supplier added successfully!";
        } else {
            $error_message = "Failed to add supplier. Please try again.";
        }
    }
}
?>

<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Supplier</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= $main_url ?>dashboard.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= $main_url ?>user/data_supplier.php">Supplier</a></li>
                    <li class="breadcrumb-item active">Add Supplier</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main Content -->
<div class="content">
    <div class="container-fluid">
        <?php if (isset($success_message)): ?>
            <div class="alert alert-success">
                <?= $success_message; ?>
            </div>
        <?php elseif (isset($error_message)): ?>
            <div class="alert alert-danger">
                <?= $error_message; ?>
            </div>
        <?php endif; ?>

        <!-- Form to Add Supplier -->
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="supplier_name">Supplier Name</label>
                <input type="text" class="form-control" id="supplier_name" name="supplier_name" required>
            </div>
            <div class="form-group">
                <label for="supplier_phone">Phone</label>
                <input type="text" class="form-control" id="supplier_phone" name="supplier_phone" required>
            </div>
            <div class="form-group">
                <label for="supplier_address">Address</label>
                <textarea class="form-control" id="supplier_address" name="supplier_address" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Supplier</button>
        </form>
    </div>
</div>
<!-- /.content -->

<?php

require "../template/footer.php";

?>
