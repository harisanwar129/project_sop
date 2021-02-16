<section class="content-header">
    <h1>Users
        <small>Pengguna</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Users</li>
    </ol>
</section>

<section class="content">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Ubah Pengguna</h3>
            <div class="pull-right">
                <a href="<?= site_url('user') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Kembali
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="" method="post">
                        <div class="form-group  <?= form_error('fullname') ? 'has-error' : null ?>">
                            <label for="nama">Nama *</label>
                            <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                            <input type="text" name="fullname" value="<?= $this->input->post('fullname') ?? $row->name ?>" class="form-control" id="nama" placeholder="Isi Nama">
                            <?= form_error('fullname') ?>
                        </div>
                        <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
                            <label for="nama_pengguna">Nama Pengguna *</label>
                            <input type="text" name="username" value="<?= $this->input->post('username') ?? $row->username ?>" class="form-control" id="nama_pengguna" placeholder="Isi Nama Pengguna">
                            <?= form_error('username') ?>
                        </div>
                        <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
                            <label for="sandi">Kata Sandi Pengguna</label> <small>(Biarkan Kosong Jika tidak diganti)</small>
                            <input type="password" name="password" value="<?= $this->input->post('password') ?>" class="form-control" id="sandi" placeholder="Isi Kata Sandi">
                            <?= form_error('password') ?>
                        </div>
                        <div class="form-group <?= form_error('passconf') ? 'has-error' : null ?>">
                            <label for="konfirmasi_sandi">Konfirmasi Kata Sandi </label>
                            <input type="password" name="passconf" value="<?= $this->input->post('passconf') ?>" class="form-control" id="konfirmasi_sandi" placeholder="Isi Konfirmasi Kata Sandi">
                            <?= form_error('passconf') ?>
                        </div>
                        <div class="form-group <?= form_error('address') ? 'has-error' : null ?>">
                            <label for="alamat">Alamat *</label>
                            <textarea name="address" class="form-control" id="alamat" placeholder="Isi Alamat"><?= $this->input->post('address') ?? $row->address ?></textarea>
                            <?= form_error('address') ?>
                        </div>
                        <div class="form-group <?= form_error('level') ? 'has-error' : null ?>">
                            <label for="level">Level*</label>
                            <select name="level" id="level" class="form-control">
                                <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                                <option value="1">Admin</option>
                                <option value="2" <?= $level == 2 ? 'selected' : null ?>>Kasir</option>
                            </select>
                            <?= form_error('level') ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Simpan
                            </button>
                            <button type="reset" class="btn btn-primary">Ulangi</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>