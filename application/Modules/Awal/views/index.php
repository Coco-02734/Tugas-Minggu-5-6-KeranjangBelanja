    <main class="main">
        <div class="mb-6"></div><!-- End .mb-6 -->

        <div class="container">
            <div class="row mt-3">
                <div class="col pb-5">
                    <?= $this->session->flashdata('message'); ?>
                    <h2 class="text-center">All Menu</h2>
                </div>
            </div>
            <div class="row mt-3">
                <?php
                foreach ($menu as $m) :
                ?>
                    <!-- card mulai -->
                    <div class="col-md-4 pb-5">
                        <div class="card">
                            <img src="<?= base_url('assets/') ?>menu/<?php echo $m['gambar_menu'] ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $m['nama_menu'] ?></h5>
                                <span class="card-text">Jml Stok :
                                    <span class="badge badge-pill badge-warning"><?php echo $m['stok'] ?></span> </span>
                                <p class="card-text">Rp <?php echo $m['harga'] ?></p>
                                <?php if ($user) { ?>
                                    <a href="<?= base_url('awal/tambah/') . $m['id_menu']; ?>" class="btn btn-primary">Beli</a>
                                <?php } else { ?>
                                    <a href="#" class="btn btn-primary">Beli</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- card selesai -->
                <?php
                endforeach;
                ?>
            </div>

        </div>


        <div class="container">
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                        <span class="icon-box-icon">
                            <i class="icon-rocket"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                            <p>Free shipping for orders over $50</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                        <span class="icon-box-icon">
                            <i class="icon-rotate-left"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                            <p>Free 100% money back guarantee</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                        <span class="icon-box-icon">
                            <i class="icon-life-ring"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                            <p>Alway online feedback 24/7</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->
            </div><!-- End .row -->

            <div class="mb-2"></div><!-- End .mb-2 -->
        </div><!-- End .container -->

        <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(<?= base_url('assets/') ?>images/backgrounds/cta/bg-6.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9 col-xl-8">
                        <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                            <div class="col">
                                <h3 class="cta-title text-white">Sign Up & Get 10% Off</h3><!-- End .cta-title -->
                                <p class="cta-desc text-white">WarMoed warung yang modern</p><!-- End .cta-desc -->
                            </div><!-- End .col -->

                            <div class="col-auto">
                                <a href="login.html" class="btn btn-outline-white"><span>SIGN UP</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .col-auto -->
                        </div><!-- End .row no-gutters -->
                    </div><!-- End .col-md-10 col-lg-9 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cta -->
    </main><!-- End .main -->