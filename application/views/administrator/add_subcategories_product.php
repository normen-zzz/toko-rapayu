<?php echo $this->session->flashdata('upload'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h4 mb-2 text-gray-800 mb-4"><?= $getSubCategories['slug']; ?></h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <p class="lead mb-0 pb-0">Kategori Pendukung</p>
                </div>
                <div class="card-body">
                    <?php if ($img->num_rows() > 0) { ?>
                        <div class="row">
                            <?php echo $this->session->flashdata('failed'); ?>
                            <?php if ($getCategories->num_rows() > 0) { ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Icon</th>
                                                <th>Nama</th>
                                                <th>Slug</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot></tfoot>
                                        <tbody class="data-content">
                                            <?php $no = 1 ?>
                                            <?php foreach ($getCategories->result_array() as $data) : ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><img style="width: 50px" src="<?= base_url(); ?>assets/images/icon/<?= $data['icon']; ?>"><small><a href="<?= base_url(); ?>administrator/categories/add-subcategories/<?= $data['id']; ?>" target="_blank" class="btn-block mt-2">Kategori Pendukung</a></small></td>
                                                    <td><?= $data['name']; ?></td>
                                                    <td><?= $data['slug']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url(); ?>administrator/category/<?= $data['id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-pen"></i></a>
                                                        <a href="<?= base_url(); ?>administrator/deleteCategory/<?= $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus kategori? Semua produk dengan kategori ini akan ikut terhapus')" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                                <?php $no++ ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } else { ?>
                                <div class="alert alert-warning" role="alert">
                                    Opss, kategori masih kosong, yuk tambah kategori sekarang.
                                </div>
                            <?php } ?>
                        </div>
                    <?php } else { ?>
                        <div class="alert alert-warning">Belum ada Kategori pendukung untuk produk <?= $product['title']; ?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <p class="lead mb-0 pb-0">Tambah Kategori Pendukung</p>
                </div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('failed'); ?>
                    <form action="<?= base_url(); ?>administrator/product/add-img/<?= $product['productId']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" name="img" id="img" class="form-control" required>
                        </div>
                        <input type="hidden" name="help" value="1">
                        <button class="btn btn-sm btn-info" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>