<?php
$query = $pdo->prepare("SELECT customer.*,card.name as card_name FROM customer INNER JOIN card ON customer.card_id = card.id");
$query->execute();
$customer = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="">
            <i class="fas fa-table me-1"></i>
            Data Customer
        </div>
        <a href="index.php?page=customer/add" class="btn btn-primary btn-md">Add Customer</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Card</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customer as $cust) : ?>
                    <tr>
                        <td><?= $cust["name"]; ?></td>
                        <td><?= $cust["gender"]; ?></td>
                        <td><?= $cust["phone"]; ?></td>
                        <td><?= $cust["email"]; ?></td>
                        <td><?= $cust["address"]; ?></td>
                        <td><?= $cust["card_name"]; ?></td>
                        <td>
                            <a href="index.php?page=customer/edit&id=<?= $cust['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="index.php?page=customer/delete&id=<?= $cust['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>