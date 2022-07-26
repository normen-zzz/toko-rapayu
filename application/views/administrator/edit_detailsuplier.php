<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Edit detail restock suplier</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/suplier" class="btn btn-danger"><i class="fa fa-times-circle"></i> Batal</a>
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('failed'); ?>
            <form action="<?= base_url(); ?>administrator/detailsuplier/<?= $this->uri->segment(3) ?>/add" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">No Faktur</label>
                            <input type="text" class="form-control" id="noFaktur" name="noFaktur" autocomplete="off" required value="<?= $detailSuplier['no_faktur'] ?>" readonly />
                            <?= form_error('noFaktur', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="title">Nama Produk</label>
                            <input type="text" class="form-control" id="namaproduk" name="namaproduk" autocomplete="off" required value="<?= $detailSuplier['nama_produk'] ?>" />
                            <?= form_error('noFaktur', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Qty">Qty</label>
                            <input type="number" class="form-control" id="qty" name="qty" autocomplete="off" required value=<?= $detailSuplier['qty'] ?> />
                            <small id="priceHelp" class="form-text text-muted">Isikan Banyak produk</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="harga">Harga Total</label>
                            <input type="number" class="form-control" id="harga" name="harga" autocomplete="off" required value=<?= $detailSuplier['harga'] ?> />
                            <small id="priceHelp" class="form-text text-muted">Isikan Harga produk</small>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Unggah Data</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->