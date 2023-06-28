<?php include_once 'templates/header.php' ?>
<?php include_once 'templates/navbar.php' ?>
<?php $pdo = new PDO('mysql:host=localhost;dbname=db_srid22244ti', 'sri222244ti', '20260110222244');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); ?>
<?php
if (isset($_GET['page'])) {

    if (!empty($_GET['page'])) {
        include_once $_GET['page'] . '.php';
    }
} else {
    include_once 'home.php';
}
?>
<?php include_once 'templates/footer.php' ?>