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
                            <h2>Ayok Belajar Bersama !</h2>
                            <div class="text-diskripsi">
                                <p>Yuk bergabung dan belajar bersama Hallo Tutor dimanapun dan Kapanpun!</p>
                            </div>
                            <form method="POST" action="<?= base_url('tutor/auth/registration'); ?>">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Mimin...">
                                    <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="notlpn">No Handphone</label>
                                    <input type="number" class="form-control" id="notlpn" placeholder="0812345678" name="notlpn">
                                    <?= form_error('notlpn', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="example@email.com">
                                    <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="min 8 karakter">
                                    <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block btn-login">Daftar</button>
                                <div class="text-center mt-4">
                                    <h6>
                                        Sudah punya akun?
                                        <a href="<?= base_url('tutor/auth') ?>">Masuk</a>
                                    </h6>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Tampilan Mobile -->
                <div class="mobile-tampil-form">
                    <h2>Ayok Belajar Bersama !</h2>
                    <div class="text-diskripsi">
                        <p>Yuk bergabung dan belajar bersama Hallo Tutor dimanapun dan Kapanpun!</p>
                    </div>
                    <form method="POST" action="<?= base_url('tutor/auth/registration'); ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Mimin...">
                            <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="notlpn">No Handphone</label>
                            <input type="number" class="form-control" id="notlpn" placeholder="0812345678" name="notlpn">
                            <?= form_error('notlpn', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="example@email.com">
                            <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="min 8 karakter">
                            <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block btn-login">Daftar</button>
                        <div class="text-center mt-4">
                            <h6>
                                Sudah punya akun?
                                <a href="<?= base_url('tutor/auth') ?>">Masuk</a>
                            </h6>
                        </div>
                    </form>
                </div>
                <!-- Tampilan Mobile -->

            </div>
        </div>
    </div>