<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.html">Dashboard</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../index.php">Home Page</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Database</div>
                        <a class="nav-link" href="index.php?page=product/list">
                            <div class="sb-nav-link-icon"><i class="fas fa-wrench"></i></div>
                            Product
                        </a>
                        <a class="nav-link" href="index.php?page=product_type/list">
                            <div class="sb-nav-link-icon"><i class="fas fa-solid fa-layer-group"></i></div>
                            Product Type
                        </a>
                        <a class="nav-link" href="index.php?page=customer/list">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                            Customer
                        </a>
                        <a class="nav-link" href="index.php?page=order/list">
                            <div class="sb-nav-link-icon"><i class="fas fa-cart-shopping"></i></div>
                            Order
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="my-4 fw-bolder">Dashboard Learning Tools</h1>