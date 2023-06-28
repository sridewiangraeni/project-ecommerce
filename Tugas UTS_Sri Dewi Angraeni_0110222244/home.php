<?php
$product = $pdo->prepare('SELECT * FROM product');
$product->execute();
$products = $product->fetchAll(PDO::FETCH_ASSOC);
?>

<style>
    .svg-container {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: -1;
    }
</style>
<div class="svg-container">
    <svg viewbox="0 0 800 400" class="svg">
        <path id="curve" fill="#1c2938" d="M 800 300 Q 400 350 0 300 L 0 0 L 800 0 L 800 300 Z">
        </path>
    </svg>
</div>
<div class="container col-xxl-8 px-4 pb-5 mb-5" style="min-height: 70vh;">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="https://getbootstrap.com/docs/5.0/examples/heroes/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 font-weight-bold text-white">Learning Tools Online Store - Web</h1>
            <p class="text-white">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid d-flex gap-2 justify-content-md-start">
                <a href="#product" class="btn btn-primary btn-lg px-4 me-md-2 me-2 text-white">View Products</a>
            </div>
        </div>
    </div>
</div>

<main>
    <div class="container py-5" id="product">
        <header class="text-center mb-5">
            <h1 class="display-4 font-weight-bolder">Learning Tools Product</h1>
            <p class="font-italic text-muted mb-0">An awesome Learning Tools Product Collection with variant connections</p>
        </header>
        <h2 class="font-weight-bold mb-2">From the Shop</h2>
        <div class="row pb-5 mb-4">
            <?php foreach ($products as $p) : ?>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="card rounded shadow-sm border-0">
                        <div class="card-body p-4"><img src="https://dummyimage.com/600x400/ffffff/001111.png" alt="" class="img-fluid d-block mx-auto mb-3">
                            <h5> <a href="#" class="text-dark"><?= $p["name"]; ?></a></h5>
                            <p class="small text-muted font-italic">Rp. <?= $p["sell_price"]; ?></p>
                            <ul class="list-inline small">
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                            </ul>
                            <a href="index.php?page=detail&id=<?= $p["id"]; ?>" class="btn btn-link  px-0">View detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>