<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=dblearningtools', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id = $_GET['id'];
$query = $pdo->prepare('DELETE FROM product_type WHERE id=?');
$query->execute([$id]);
if ($query == TRUE) {
    echo "<script>alert('Product Type Deleted');document.location.href='index.php?page=product_type/list'</script>";
} else {
    echo "<script>alert('Product Type Failed to Deleted');document.location.href='index.php?page=product_type/list'</script>";
}
