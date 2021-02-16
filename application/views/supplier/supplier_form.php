<section class="content-header">
    <h1>Pemasok
        <small>Pemasok Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Pemasok</li>
    </ol>
</section>

<section class="content">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= ucfirst($page) ?> Pemasok</h3>
            <div class="pull-right">
                <a href="<?= site_url('supplier') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Kembali
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= site_url('supplier/process') ?>" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Pemasok *</label>
                            <input type="hidden" name="id" value="<?= $row->supplier_id ?>">
                            <input type="text" name="supplier_name" value="<?= $row->name ?>" class="form-control" id="nama" placeholder="Isi Nama Pemasok" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nomor Telephone *</label>
                            <input type="number" name="phone" value="<?= $row->phone ?>" class="form-control" id="nama" placeholder="Isi Nomor Telephone" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat *</label>
                            <textarea name="addr" class="form-control" id="nama" placeholder="Isi Alamat anda" required><?= $row->address ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nama">Deskripsi *</label>
                            <textarea name="desc" class="form-control" id="nama" placeholder="Isi Keterangan anda"><?= $row->description ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
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