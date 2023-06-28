<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=dblearningtools', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id = $_GET['id'];
$query = $pdo->prepare('DELETE FROM product WHERE id=?');
$query->execute([$id]);
if ($query == TRUE) {
    echo "<script>alert('Product Deleted');document.location.href='index.php?page=product/list'</script>";
} else {
    echo "<script>alert('Product Failed to Deleted');document.location.href='index.php?page=product/list'</script>";
}
