<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Data Detail Restock Suplier</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/suplier" class="btn btn-danger btn-sm">Kembali</a>
            <a href="<?= base_url(); ?>administrator/detailsuplier/<?= $this->uri->segment(3) ?>/add" class="btn btn-primary btn-sm">Tambah Data</a>
            <form action="<?= base_url(); ?>administrator/detailsuplier/<?= $this->uri->segment(3) ?>/search" method="get" class="form-inline float-right">
                <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q" autocomplete="off" value="<?= $search; ?>">
                <button class="btn btn-sm btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('failed'); ?>
            <?php if ($getDetailRestock->num_rows() > 0) { ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Produk</th>
                                <th>Qty</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot></tfoot>
                        <tbody class="data-content">
                            <?php $no = $this->uri->segment(4) + 1; ?>
                            <?php foreach ($getDetailRestock->result_array() as $data) : ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $data['nama_produk'] ?></td>
                                    <td><?= $data['qty']; ?></td>
                                    <td><?= $data['harga']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>administrator/detailsuplier/<?= $data['id']; ?>/edit" class="btn btn-sm btn-info"><i class="fa fa-pen"></i></a>
                                        <a href="<?= base_url(); ?>administrator/delete_detailsuplier/<?= $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus Data?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php $no++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?= $this->pagination->create_links(); ?>
                </div>
            <?php } else { ?>
                <div class="alert alert-warning" role="alert">
                    Opss, produk masih kosong, yuk tambah produk sekarang.
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->