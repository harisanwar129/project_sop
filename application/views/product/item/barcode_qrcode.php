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
            <h3 class="box-title">Barcode Generator</h3>
            <div class="pull-right">
                <a href="<?= site_url('item') ?>" class="btn btn-warning btn-flat btn-sm">
                    <i class="fa fa-undo"></i> Kembali
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?php
            $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
            echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '">';
            ?>
            <br>
            <?= $row->barcode ?>
        </div>
    </div>
</section>