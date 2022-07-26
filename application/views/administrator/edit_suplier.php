<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Edit suplier</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/suplier" class="btn btn-danger"><i class="fa fa-times-circle"></i> Batal</a>
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('failed'); ?>
            <form action="<?= base_url(); ?>administrator/suplier/<?= $this->uri->segment(3) ?>/edit" method="post">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">No Faktur</label>
                            <input type="text" class="form-control" id="noFaktur" name="noFaktur" autocomplete="off" required value="<?= $suplier['no_faktur'] ?>" readonly />
                            <?= form_error('noFaktur', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Nama Suplier</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Suplier" autocomplete="off" required value=<?php echo $suplier['nama_supplier'] ?> />
                            <small id="priceHelp" class="form-text text-muted">Isikan Nama Suplier</small>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Unggah Suplier</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->