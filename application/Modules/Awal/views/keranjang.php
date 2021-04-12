<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Keranjang Belanja<span>WarMoed</span></h1>
        </div>
    </div>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('awal') ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <table class="table table-cart table-mobile">
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($chart as $s) : ?>
                                    <tr>
                                        <td class="product-col">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="#">
                                                        <img src="<?= base_url('assets/menu/') . $s['gambar_menu']; ?>" alt="Product image">
                                                    </a>
                                                </figure>

                                                <h3 class="product-title">
                                                    <a href="#">Rp <?= $s['nama_menu']; ?></a>
                                                </h3>
                                            </div>
                                        </td>
                                        <td class="price-col"><?= $s['harga']; ?></td>
                                        <td class="quantity-col">
                                            <div class="cart-product-quantity">
                                                <input type="number" class="form-control" value="<?= $s['jumlah']; ?>" min="1" max="10" step="1" data-decimals="0" required>
                                            </div>
                                        </td>
                                        <td class="total-col">Rp <?= $s['total_harga']; ?></td>
                                        <td class="remove-col">
                                            <a href="<?= base_url('awal/hapus_item/') . $s['id']; ?>" class="btn-remove"><i class="icon-close"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <div class="cart-bottom">
                            <div class="cart-discount">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control" required placeholder="coupon code">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <aside class="col-lg-3">
                        <div class="summary summary-cart">
                            <h3 class="summary-title">Total Keranjang</h3>

                            <table class="table table-summary">
                                <tbody>
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>Rp <?= $total['total_harga']; ?></td>
                                    </tr>
                                    <tr class="summary-shipping">
                                        <td>Pengiriman :</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                                                <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                                            </div>
                                        </td>
                                        <td>Rp 0.00</td>
                                    </tr>

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
                                                <label class="custom-control-label" for="standart-shipping">Go-Send:</label>
                                            </div>
                                        </td>
                                        <td>Rp 20.000</td>
                                    </tr>

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
                                                <label class="custom-control-label" for="express-shipping">Grab Send:</label>
                                            </div>
                                        </td>
                                        <td>Rp 20.000</td>
                                    </tr>

                                    <tr class="summary-shipping-estimate">
                                        <td>Estimasi sampai<br> <a href="dashboard.html">Ubah alamat</a></td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>Rp <?= $total['total_harga']; ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href="checkout.html" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                        </div>

                        <a href="<?= base_url('awal') ?>" class="btn btn-outline-dark-2 btn-block mb-3"><span>TAMBAH MENU</span><i class="icon-refresh"></i></a>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>