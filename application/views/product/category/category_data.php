<section class="content-header">
    <h1>Kategori
        <small>Kategori Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Kategori</li>
    </ol>
</section>

<section class="content">
    <?php $this->view('messages') ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Data Kategori</h3>
            <div class="pull-right">
                <a href="<?= site_url('category/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Tambahkan
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="tabel1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Kategori</th>
                        <th class="text-center" width="160">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td style="width: 5%;"><?= $no++ ?>.</td>
                            <td><?= $data->name ?></td>
                            <td class="text-center" width="160">

                                <a href="<?= site_url('category/edit/' . $data->category_id) ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-trash"></i> Ubah
                                </a>
                                <a href="<?= site_url('category/del/' . $data->category_id) ?>" onclick="return confirm('Yakin hapus Data ?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Hapus
                                </a>

                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>