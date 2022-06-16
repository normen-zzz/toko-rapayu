<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h4 mb-2 text-gray-800 mb-4"><?= $title; ?></h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <p class="lead mb-0 pb-0">Kategori Pendukung</p>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="dataTables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Slug</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($getSubCategories->result_array() as $data) { ?>
                                <tr>
                                    <td scope="row"><?= $data['id'] ?></td>
                                    <td><?= $data['name'] ?></td>
                                    <td><?= $data['slug'] ?></td>
                                    <td>Ubah</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot></tfoot>
                    </table>
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
                    <?php echo $this->session->flashdata('upload'); ?>
                    <form action="<?= base_url(); ?>administrator/categories/add-subcategories/<?= $this->uri->segment(4) ?>" method="post">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <input type="hidden" name="help" value="1">
                        <button class="btn btn-sm btn-info" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>