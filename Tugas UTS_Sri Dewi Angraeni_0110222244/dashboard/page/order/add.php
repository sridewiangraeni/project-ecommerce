<?php
$queryp = $pdo->prepare("SELECT * FROM product");
$queryc = $pdo->prepare("SELECT * FROM customer");
$queryp->execute();
$queryc->execute();
$customer = $queryc->fetchAll(PDO::FETCH_ASSOC);
$product = $queryp->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST["checkout"])) {
    $order_number = $_POST["order_number"];
    $qty = $_POST["qty"];
    $customer_id = $_POST["customer_id"];
    $product_id = $_POST["product_id"];

    $query = $pdo->prepare("SELECT sell_price FROM product WHERE id = $product_id");
    $query->execute();
    $product_price = $query->fetch(PDO::FETCH_ASSOC);

    $total_price = $qty * $product_price["sell_price"];

    $data = [
        'order_number' => $order_number,
        'date' => date("Y-m-d"),
        'qty' => $qty,
        'total_price' => $total_price,
        'customer_id' => $customer_id,
        'product_id' => $product_id
    ];

    $insert = $pdo->query("INSERT INTO `order` (order_number, date, qty, total_price, customer_id, product_id) 
                                VALUES 
                        ('" . $data['order_number'] . "', '" . $data['date'] . "', '" . $data['qty'] . "', '" . $data['total_price'] . "', '" . $data['customer_id'] . "', '" . $data['product_id'] . "')");

    if ($insert) {
        echo "<script>alert('Order has been added!');window.location.href='index.php?page=order/list';</script>";
    } else {
        echo "<script>alert('Failed to add order!');window.location.href='index.php?page=order/add';</script>";
    }
}

?>

<div class="row-cols-md-2">
    <div class="container mb-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center">Add Order</h2>
                <form method="post" class="checkout-form">
                    <div class="row gy-4">

                        <div class="col-md-12">
                            <label for="order_number" class="form-label">Order Number</label>
                            <input type="text" class="form-control" name="order_number" id="order_number" placeholder="Order Number">
                        </div>

                        <div class="col-md-12">
                            <label for="customer" class="form-label">Customer</label>
                            <select class="form-select" name="customer_id" id="customer" required>
                                <option value="">Select Customer</option>
                                <?php foreach ($customer as $c) : ?>
                                    <option value="<?= $c['id']; ?>"><?= $c['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="product" class="form-label">Product</label>
                            <select class="form-select" name="product_id" id="product" required>
                                <option value="">Select Product</option>
                                <?php foreach ($product as $p) : ?>
                                    <option value="<?= $p['id']; ?>"><?= $p['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-md-12 ">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="qty" id="quantity" placeholder="Quantity" min="0" required>
                        </div>

                        <div class="modal-footer my-4">
                            <a href="index.php?page=order/list" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-dark ms-2" name="checkout">Add Order</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>