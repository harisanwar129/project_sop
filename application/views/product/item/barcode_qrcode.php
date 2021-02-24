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
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Barcode Generator <i class="fa fa-barcode"></i></h3>
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
            echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '"style="width:200px">';
            ?>
            <br>
            <?= $row->barcode ?>
            <br> <br>
            <a href="<?= site_url('item/barcode_print/' . $row->item_id) ?>" target="_blank" class="btn btn-warning btn-sm">
                <i class="fa fa-print"></i> Cetak
            </a>
        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Qr-code Generator</h3> <i class="fa fa-qrcode"></i>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?php
            $qrCode = new Endroid\QrCode\QrCode('12345');
            $qrCode->writeFile('uploads/qr-code/item-' . $row->barcode . '.png');
            ?>
            <img src="<?= base_url('uploads/qr-code/item-' . $row->barcode . '.png') ?>" style="width:200px">
            <br>
            <?= $row->barcode ?>
        </div>
    </div>
</section>