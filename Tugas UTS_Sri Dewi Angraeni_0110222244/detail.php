<?php include_once 'templates/header.php' ?>
<?php include_once 'templates/navbar.php' ?>

<?php
$query = $pdo->prepare('SELECT product.*, product_type.name as product_type FROM product JOIN product_type ON product.product_type_id = product_type.id WHERE product.id = :id');
$query->execute([
    'id' => $_GET['id']
]);
$data = $query->fetch(PDO::FETCH_ASSOC);
?>

<div class="container my-5">
    <h1 class="text-center font-weight-bolder mb-3">Detail Product</h1>
    <div class="card border-0 shadow mb-5">
        <div class="card-body p-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://dummyimage.com/600x400/ffffff/001111.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                    <h1 class="font-weight-bolder"><?= $data['name'] ?></h1>
                    <h2>Rp. <?= number_format($data['sell_price'], 0, ',', '.') ?></h2>
                    <p class="mb-0">Stock : <?= $data['stock'] ?></p>
                    <p>Category : <?= $data['product_type'] ?></p>
                    <!-- back button -->
                    <a href="index.php?page=home" class="btn btn-secondary">Back Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'templates/footer.php' ?>