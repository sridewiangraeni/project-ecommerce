<?php
$query = $pdo->prepare('SELECT * FROM product');
$query->execute();
$product = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="">
            <i class="fas fa-table me-1"></i>
            Data Product
        </div>
        <a href="index.php?page=product/add" class="btn btn-primary btn-md">Add Product</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>Name</th>
                    <th>Purchase Price</th>
                    <th>Sell Price</th>
                    <th>Stock</th>
                    <th>Min Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product as $p) : ?>
                    <tr>
                        <td><?= $p["sku"]; ?></td>
                        <td><?= $p["name"]; ?></td>
                        <td>Rp. <?= number_format($p["purchase_price"], 0, ',', '.'); ?></td>
                        <td>Rp. <?= number_format($p["sell_price"], 0, ',', '.'); ?></td>
                        <td><?= $p["stock"]; ?></td>
                        <td><?= $p["min_stock"]; ?></td>
                        <td>
                            <a href="index.php?page=product/edit&id=<?= $p['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="index.php?page=product/delete&id=<?= $p['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>