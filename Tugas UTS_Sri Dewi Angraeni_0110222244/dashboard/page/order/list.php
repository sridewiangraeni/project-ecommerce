<?php
$query = $pdo->prepare("SELECT `order`.* , customer.name AS customer_name, product.name as product FROM `order` INNER JOIN customer ON `order`.customer_id = customer.id INNER JOIN product ON `order`.product_id = product.id");
$query->execute();
$order = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="">
            <i class="fas fa-table me-1"></i>
            Data Order
        </div>
        <a href="index.php?page=order/add" class="btn btn-primary btn-md">Add Order</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order Number</th>
                    <th>Date</th>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Total Price</th>
                    <th>Customer</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order as $o) : ?>
                    <tr>
                        <td><?= $o["id"]; ?></td>
                        <td><?= $o["order_number"]; ?></td>
                        <td><?= $o["date"]; ?></td>
                        <td><?= $o["product"]; ?></td>
                        <td><?= $o["qty"]; ?></td>
                        <td>Rp. <?= number_format($o["total_price"]); ?></td>
                        <td><?= $o["customer_name"]; ?></td>
                        <td>
                            <a href="index.php?page=order/edit&id=<?= $o['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="index.php?page=order/delete&id=<?= $o['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>