<?php
$query = $pdo->prepare("SELECT * FROM product_type");
$query->execute();
$product_type = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="">
            <i class="fas fa-table me-1"></i>
            Data Product Type
        </div>
        <a href="index.php?page=product_type/add" class="btn btn-primary btn-md">Add Product Type</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product_type as $p) : ?>
                    <tr>
                        <td><?= $p["id"]; ?></td>
                        <td><?= $p["name"]; ?></td>
                        <td>
                            <a href="index.php?page=product_type/edit&id=<?= $p['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="index.php?page=product_type/delete&id=<?= $p['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>