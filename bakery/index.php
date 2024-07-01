<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bakery Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css.css">

</head>

<body style="height: 2000px">
    <!-- Header -->
    <nav class="navbar navbar-expand navbar-dark bg-primary sticky-top">
        <div class="container-lg">
            <a class="navbar-brand" href="."><i class="bi bi-shop"></i> BAKERY</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Username
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header -->
    <div class="container-lg">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='home')?'active link-light' : 'link-dark' ; ?>" 
                                        aria-current="page" href="index.php?x=home"><i class="bi bi-house-heart"></i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='menu')?'active link-light' : 'link-dark' ; ?>" 
                                        href="index.php?x=menu"><i class="bi bi-menu-button-fill"></i> Menu</a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='order')?'active link-light' : 'link-dark' ; ?>" 
                                        href="index.php?x=order"><i class="bi bi-basket"></i> Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='customer')?'active link-light' : 'link-dark' ; ?>" 
                                        href="index.php?x=customer"><i class="bi bi-person"></i> Customer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='delivery')?'active link-light' : 'link-dark' ; ?>" 
                                        href="index.php?x=delivery"><i class="bi bi-truck"></i> Delivery</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- End Sidebar -->

            <!-- Content -->
            <?php 
            if(isset($_GET['x']) && $_GET['x']=='home'){
                include "home.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='menu'){
                include "menu.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='order'){
                include "order.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='customer'){
                include "customer.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='delivery'){
                include "delivery.php";
            }
            ?>
            <!-- End Content -->
        </div>

        <div class="fixed-bottom text-center mb-2">
            Copyright 2024 NilBakery
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>