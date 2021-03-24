<div class="container-xl mobile">
    <div class="auth_login">
        <div class="row">
            <div class="col-lg-5">
                <div class="img-logo">
                    <div class="text-logo">
                        <img src="<?= base_url('assets/img/') ?>logo.png" class="img-fluid img-logo-mobile" alt="">
                        <h2 class="text-center mobile-text">Belajar Mudah Dimana Saja </h2>
                        <div class="text-diskripsi text-center">
                            <p>Yuk coba berbagai fitur dari Hallo Mentor!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mobile-form">
                <div class="form-login">
                    <div class="card card-login" style="width: 45rem;">
                        <div class="card-body">
                            <h2>Selamat Datang!</h2>
                            <div class="text-diskripsi">
                                <p>Silahkan login dengan akun MabaKampus masing-masing yah!</p>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <form method="POST" action="<?= base_url('tutor/auth'); ?>">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <a href="<?= base_url('tutor/auth/forgot-password') ?>" class="text-diskripsi">Lupa Password</a>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block btn-login">Login</button>
                                <div class="text-center mt-4">
                                    <h6>
                                        Belum punya akun?
                                        <a href="<?= base_url('tutor/auth/registration') ?>">Daftar disini</a>
                                    </h6>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Tampilan Mobile -->
                <div class="mobile-tampil-form mb">
                    <h2>Selamat Datang!</h2>
                    <div class="text-diskripsi">
                        <p>Silahkan login dengan akun MabaKampus masing-masing yah!</p>
                    </div>
                    <form method="POST" action="<?= base_url('tutor/auth'); ?>">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <a href="<?= base_url('tutor/auth/forgot-password') ?>" class="text-diskripsi">Lupa Password</a>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block btn-login">Login</button>
                        <div class="text-center mt-4">
                            <h6>
                                Belum punya akun?
                                <a href="<?= base_url('tutor/auth/registration') ?>">Daftar disini</a>
                            </h6>
                        </div>
                    </form>
                </div>
                <!-- Tampilan Mobile -->

            </div>
        </div>
    </div>