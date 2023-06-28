<?php
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $data = [
        'name' => $name,
        'gender' => $gender,
        'phone' => $phone,
        'email' => $email,
        'address' => $address,
        'card_id' => 1
    ];

    $insert = $pdo->query("INSERT INTO customer (name,gender,phone,email,address,card_id) 
                                VALUES 
                        ('" . $data['name'] . "', '" . $data['gender'] . "', '" . $data['phone'] . "', '" . $data['email'] . "', '" . $data['address'] . "', '" . $data['card_id'] . "')");

    if ($insert == TRUE) {
        echo "<script>alert('Customer Added');document.location.href='index.php?page=customer/list'</script>";
    } else {
        echo "<script>alert('Customer Failed to Added');document.location.href='index.php?page=customer/list'</script>";
    }
}

?>

<div class="row-cols-md-2">
    <div class="container mb-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center">Add Customer</h2>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" id="gender" class="form-select" required>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="list.php" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="add">Add Customer</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>