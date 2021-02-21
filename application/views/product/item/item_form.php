<section class="content-header">
    <h1>Item
        <small>Item Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Item</li>
    </ol>
</section>

<section class="content">
    <?php $this->view('messages') ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= ucfirst($page) ?> Item</h3>
            <div class="pull-right">
                <a href="<?= site_url('item') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Kembali
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php echo form_open_multipart('item/process') ?>

                    <div class="form-group">
                        <label for="nama">Barcode *</label>
                        <input type="hidden" name="id" value="<?= $row->item_id ?>">
                        <input type="text" name="barcode" value="<?= $row->barcode ?>" class="form-control" id="nama" placeholder="Barcode" required>
                    </div>
                    <div class="form-group">
                        <label for="product_name">Nama Barang *</label>
                        <input type="text" name="product_name" value="<?= $row->name ?>" class="form-control" id="product_name" placeholder="product_name" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Kategori *</label>
                        <select name="category" class="form-control" id="category" required>
                            <option value="">--Pilih--</option>
                            <?php foreach ($category->result() as $key => $data) { ?>
                                <option value="<?= $data->category_id ?>" <?= $data->category_id == $row->category_id ? "selected" : null ?>>
                                    <?= $data->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Satuan *</label>
                        <?php echo  form_dropdown('unit', $unit, $selectedunit, ['class' => 'form-control', 'required' => 'required']) ?>
                    </div>
                    <div class="form-group">
                        <label for="price">Harga *</label>
                        <input type="number" name="price" value="<?= $row->price ?>" class="form-control" id="price" placeholder="price" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar </label>
                        <?php if ($page == 'edit') {
                            if ($row->image != null) { ?>
                                <div style="margin-bottom:5px">
                                    <img src="<?= base_url('uploads/product/' . $row->image) ?>" style="width:80%">
                                </div>
                        <?php
                            }
                        } ?>
                        <input type="file" name="image" class="form-control" id="image">
                        <small>(Tidak Harus Di isi <?= $page == 'edit' ? 'diganti' : 'ada' ?>)</small>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"></i> Simpan
                        </button>
                        <button type="reset" class="btn btn-primary">Ulangi</button>
                    </div>

                    <?php echo form_close() ?>
                </div>
            </div>

        </div>
    </div>
</section>