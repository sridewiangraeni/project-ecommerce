<?php include_once 'templates/header.php' ?>
<?php include_once 'templates/navbar.php' ?>
<?php
if (isset($_GET['page'])) {

    if (!empty($_GET['page'])) {
        include_once 'page/' . $_GET['page'] . '.php';
    }
} else {
    include_once 'page/product/list.php';
}
?>
<?php include_once 'templates/footer.php' ?>
