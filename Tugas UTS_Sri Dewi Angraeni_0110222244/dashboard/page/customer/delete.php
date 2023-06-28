<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=dblearningtools', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id = $_GET['id'];
$query = $pdo->prepare('DELETE FROM customer WHERE id=?');
$query->execute([$id]);
if ($query == TRUE) {
    echo "<script>alert('Customer Deleted');document.location.href='index.php?page=customer/list'</script>";
} else {
    echo "<script>alert('Customer Failed to Deleted');document.location.href='index.php?page=customer/list'</script>";
}
