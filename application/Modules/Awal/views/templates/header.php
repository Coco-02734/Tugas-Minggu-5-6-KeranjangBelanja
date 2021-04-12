<!DOCTYPE html>
<html lang="ID">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="WarMoed">
    <meta name="author" content="p-themes">
    <meta name="apple-mobile-web-app-title" content="WarMoed">
    <meta name="application-name" content="WarMoed">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="<?= base_url('assets/') ?>images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="#">IDN</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">Indonesia</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="tel:#"><i class="icon-phone"></i>Call: +62 083203022</a></li>
                                    <?php
                                    if ($user) {
                                    ?>
                                        <li><a href="<?= base_url('awal/auth/logout') ?>"><i class="icon-user"></i><?= $user['nama']; ?></a></li>
                                    <?php
                                    } else {
                                    ?>
                                        <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Menu Mobile</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="<?= base_url('awal') ?>" class="logo">
                            <h2>WarMoed</h2>
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="index.html" class="sf-with-ul">Home</a>
                                </li>
                                <li>
                                    <a href="category.html" class="sf-with-ul">Makanan</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Aneka Nasi</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-list.html">Nasi Liwet</a></li>
                                                                <li><a href="category-2cols.html">Nasi Ayam</a></li>
                                                                <li><a href="category.html">Nasi Goreng</a></li>

                                                            </ul>

                                                            <div class="menu-title">Minuman</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-boxed.html"><span>M oed Choco<span class="tip tip-hot">Hot</span></span></a></li>
                                                                <li><a href="category-fullwidth.html">Moed Green Tea</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="product.html" class="sf-with-ul">Paling Dicari</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <div class="menu-title">Product Details</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="product.html">Default</a></li>
                                                        <li><a href="product-centered.html">Centered</a></li>
                                                        <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                                        <li><a href="product-gallery.html">Gallery</a></li>
                                                        <li><a href="product-sticky.html">Sticky Info</a></li>
                                                        <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                                        <li><a href="product-fullwidth.html">Full Width</a></li>
                                                        <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                                    </ul>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html">
                                                        <img src="<?= base_url('assets/') ?>images/menu/banner-2.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Lainnya</a>

                                    <ul>
                                        <li>
                                            <a href="about.html" class="sf-with-ul">Tentang</a>
                                        </li>
                                        <li>
                                            <a href="contact.html" class="sf-with-ul">Kontak</a>
                                        </li>
                                        <li><a href="faq.html">FAQs</a></li>

                                    </ul>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Cari</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Contoh : Nasi" required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                        <!-- keranjang -->
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <?php if ($user) { ?>
                                    <span class="cart-count"><?= $jumlah['jumlah']; ?></span>
                                <?php } else { ?>
                                    <span class="cart-count">0</span>
                                <?php } ?>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <?php if ($user) { ?>
                                        <?php foreach ($chart as $c) : ?>
                                            <div class="product">
                                                <div class="product-cart-details">
                                                    <h4 class="product-title">
                                                        <a href="product.html"><?= $c['nama_menu']; ?></a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty"><?= $c['jumlah']; ?></span>
                                                        x <?= $c['harga']; ?>
                                                    </span>
                                                </div><!-- End .product-cart-details -->

                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="<?= base_url('assets/') ?>menu/<?= $c['gambar_menu']; ?>" alt="product">
                                                    </a>
                                                </figure>
                                                <a href="<?= base_url('awal/hapus_item/') . $c['id']; ?>" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                            </div><!-- End .product -->
                                        <?php endforeach; ?>


                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">Rp <?= $total['total_harga']; ?></span>
                                </div><!-- End .dropdown-cart-total -->
                            <?php } else { ?>



                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>

                                <span class="cart-total-price">Rp 0</span>
                            </div><!-- End .dropdown-cart-total -->
                        <?php } ?>

                        <div class="dropdown-cart-action">
                            <a href="<?= base_url('awal/keranjang') ?>" class="btn btn-primary">Lihat Keranjang</a>
                            <a href="checkout.html" class="btn btn-outline-primary-2"><span>Bayar</span><i class="icon-long-arrow-right"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </header>