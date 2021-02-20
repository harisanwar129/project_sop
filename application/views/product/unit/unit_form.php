<section class="content-header">
    <h1>Satuan
        <small>Satuan Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Satuan</li>
    </ol>
</section>

<section class="content">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= ucfirst($page) ?> Satuan</h3>
            <div class="pull-right">
                <a href="<?= site_url('unit') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Kembali
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= site_url('unit/process') ?>" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Satuan *</label>
                            <input type="hidden" name="id" value="<?= $row->unit_id ?>">
                            <input type="text" name="unit_name" value="<?= $row->name ?>" class="form-control" id="nama" placeholder="Isi Nama Satuan" required>
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